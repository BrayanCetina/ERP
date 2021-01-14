<div class="modal fade" id="formdiasmodal" role="document" >
   <div class="modal-dialog modal-ms">
    <div class="modal-content">
      <input type="hidden" name="_token" value="{{ csrf_token() }}"><!--proteccion PORQUE SE HARAN CAMBIOS EN BD-->
      <div class="modal-header"> 
        <h1>NUEVA METRIA PRIMA</h1>      
      </div> 
      <div class="modal-body">
   
    <br>
    <div class="form-group">
        <div class="form-group">
                <label for="Nombreproducto">Nombre Materia Prima</label>
                <div class="row">
                    <div class="col-md-8">
                        <input class="form-control" type="text">
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">BUSCAR</a>
                    </div>
                </div>
                <br>
                <label for="exampleFormControlTextarea1">Descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> 
                <br>
                <label for="Cantidad">Cantidad Existencia</label>
                <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <?php   for($i=1;$i<=2000;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                        </select>
                </div>                                
                <br>
                <div class="form-group">
                    <div class="form-group">
                        <label for="NombreMateriales">Precio</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <input class="form-control" type="number">
                    </div>
                    
                </div>
                                
             
            
        </div>
    </div>
    
   

      </div>   
      <div class="modal-footer">
        <button class="btn btn-primary"  name = "botong" id="btnsavedias">Guardar</button>
        <button type="button" class="btn btn-danger"  data-dismiss="modal">Salir</button>
      </div>        
    </div>
  </div>
</div>
