var tabladia=null;
$(document).ready(function(){
  if(tabladia==null){
    tabladia = $("#tableproductos").DataTable({ 
      rowId: 'id_producto',
      ajax: {
        url: '/mrptableproductos',
        type: 'GET'
      },  
      columns: [   
        {data : 'id_producto'},
        {data : 'producto'},
        {data : 'descripcion'},
        {data : 'cantidad'},
        {data : 'precio_creacion'},
        {data : 'precio_venta'},
        {data : 'etapa'}, 
        {data : 'fecha_inicio'},
        {
          data       : null,
          orderable  : false,
          searchable : false,
          render: function(d){
              btns="<button class='btn btn-sm btn-danger d-inline' ' onclick='deletep("+
              d.id_producto+");'>Eliminar</button>";
              return btns;
          }
        
        }
      ]
    })
  }else{
    refreshTablaDia();
}
	
});

function refreshTableDia(){
  tabladia.ajax.reload( null, false );
  }
function deletep(id_producto){
   var resp = confirm("¿Estas Seguro que quieres ELIMINAR este producto?");
  if(resp == true){
    $.ajax({
      data: {
        "_token": $("meta[name='csrf-token']").attr("content")
    },
      url  : 'productodelete/'+id_producto,
      type : 'DELETE',
      success : function(r){
        alert('PRODUCTO ELIMINADO');
        refreshTableDia();
      },
      error: function(x, textStatus, errorThrown){ 
        if (x.status == 401) {
          alert("<p>"+x.responseJSON.message+"</p>");
        }else{
          alert(errorThrown);
        }        
      }
    });
  }

}
function modalpedido(){
  $("#formdiasmodal").modal('show');
}
function comprobarproducto(){
  var producto=$('#nomproduct').val();
  alert(mat);
 // var nue='id='+id+'&fec='+fec;
  e.preventDefault();
  $.ajax({
    url  : '/comprobarproduct',
    type : 'POST',
    data : producto,
    success : function(r){
      document.getElementById('formdiasadd').reset();
      toastr.success('Actualizado');
      $("#formdiasmodal").modal('hide');
      refreshTablaDia();
    },
    error: function(x, textStatus, errorThrown){ 
      enabledisabledform(false);     
      if (x.status == 401) {
        toastr.error("<p>"+x.responseJSON.message+"</p>");
      }else{
        toastr.error(errorThrown);
      }        
    }
  });


}
function comprobarmateriap(){


}

