<?php
		if (isset($con))
		{
	?>
	<!-- Modal El complemento modal es un cuadro de diálogo / ventana emergente que se muestra en la parte superior de la página actual:-->
	<div class="modal fade" id="nuevoCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		  <h5 class="modal-title">Agregar Nueva Categoria</h5>
        	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_categoria" name="guardar_categoria">
			<div id="resultados_ajax"></div>
			  <div class="form-floating mb-3">
				  <input type="text" class="form-control" id="nombre" name="nombre" required>
				  <label for="nombre">Nombre</label>
			  </div>
			 
				  
			  <div class="form-floating mb-3">
					<textarea class="form-control" id="descripcion" name="descripcion"   maxlength="255" ></textarea>
					<label for="descripcion">Descripción</label>
			  </div>
			  
	 
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>