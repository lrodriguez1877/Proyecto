<form class="form-horizontal"  method="post">
<!-- Modal -->
<div id="remove-stock" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Eliminar Stock</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <div class="form-floating mb-3">
              <input type="number" min="1" name="quantity_remove" class="form-control" id="quantity_remove" value="" placeholder="Cantidad" required="">
            <label for="quantity">Cantidad</label>
          </div>
          <div class="form-floating mb-3">
              <input type="text" name="reference_remove" class="form-control" id="reference_remove" value="" placeholder="Referencia">
            <label for="reference">Referencia</label>
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
		<button type="submit" class="btn btn-primary">Guardar datos</button>
      </div>
    </div>

  </div>
</div>
</form>