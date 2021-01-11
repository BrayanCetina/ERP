var TableCli = null;
$(document).ready(function() {
  if (TableCli == null) {
    TableCli = $("#tablaOfertas").DataTable({
      rowId: "id",
      ajax: {
        url: '/ofertasVistaTable',
        type: 'GET'
      },
      columns: [
        {data : 'id_descuento'},
        {data : 'nombre_descuento'},
        {data : 'porcentaje'},
        {data : 'estado'},
        {data : 'fecha_creacion'},
      ],
      language: {
       "url": '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'
     },
      order: [[ 0, "asc" ]]
    })
  }else{
    refreshTableCli();
  }
});
function refreshTableCli(){
  TableCli.ajax.reload( null, false );
}

$("#GuardarOferta").click(function(){
   var form = $("#formOferta").serialize();
  $.ajax({
      url         : '/ofertasVistaAgregar',
      type        : 'GET',
      data        : form,
      beforeSend  : function(){

      },
      success     : function(d){
        refreshTableCli();
        $("#formdiasmodalNuevaoferta").modal("hide");
        $('#formdiasmodalNuevaoferta').trigger('reset');
      },
      error      : function(d){

      }
    });
});

function vermodalOfertas(){
  $("#formdiasmodalNuevaoferta").modal("show");
}
