	<?php
		if (isset($con))
		{
	?>
	<!-- Modal El complemento modal es un cuadro de diálogo / ventana emergente que se muestra en la parte superior de la página actual:-->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		  <h5 class="modal-title" id="myModalLabel">Editar Categoria</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_categoria" name="editar_categoria">
			<div id="resultados_ajax2"></div>
			  <div class="form-floating mb-3">
				  <input type="text" class="form-control" id="mod_nombre" name="mod_nombre"  required>
				  <label for="mod_nombre">Nombre</label>
					<input type="hidden" name="mod_id" id="mod_id">
			  </div>
			   
			  
			 
			  <div class="form-floating mb-3">
				  <textarea class="form-control" id="mod_descripcion" name="mod_descripcion" ></textarea>
				  <label for="mod_descripcion">Descripción</label>
			  </div>
			  
			 
			 
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>