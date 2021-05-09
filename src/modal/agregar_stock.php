<form class="form-horizontal"  method="post" name="add_stock">
<!-- Modal -->
<div id="add-stock" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Agregar Stock</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <div class="form-floating mb-3">
              <input type="number" min="1" name="quantity" class="form-control" id="quantity" value="" placeholder="Cantidad" required="">
             <label for="quantity">Cantidad</label>
          </div>
          <div class="form-floating mb-3">
              <input type="text" name="reference" class="form-control" id="reference" value="" placeholder="Referencia">
              <label for="reference">Referencia</label>
          </div>
          
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
		<button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>

  </div>
</div> 
 </form>