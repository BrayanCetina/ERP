<div class="modal fade" id="formdiasmodalNuevaoferta" role="document" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1>ERP</h1>
        <h2>
          <small id="titulo" class="text-muted">Nueva Oferta</small>
        </h2>
      </div>
      <div class="divider"></div>
      <div class="modal-body">
        <form id="formOferta">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Porcentaje:</label>
            <input type="text" class="form-control" placeholder="Porcentaje" require name="Porcentaje">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Estado:</label>
            <select name="Estado">
              <option value="Activo">Activo</option>
              <option value="No activo" selected>No activo</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="divider"></div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="GuardarOferta">Guardar</button>
      </div>
    </div>
  </div>
</div>