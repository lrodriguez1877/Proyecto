<?php
		if (isset($con))
		{
	?>

<!-- Modal El complemento modal es un cuadro de diálogo / ventana emergente que se muestra en la parte superior de la página actual-->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		  <h5 class="modal-title" id="myModalLabel">Editar Usuario</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
			<div id="resultados_ajax2"></div>
			<div class="form-floating mb-3">
				  <input type="text" class="form-control" id="nombre2" name="nombre2" placeholder="Nombres" required>
				  <label for="nombre2">Nombres</label>
				  <input type="hidden" id="mod_id" name="mod_id">
			  </div>
			  <div class="form-floating mb-3">
				  <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Apellidos" required>
				  <label for="apellido2">Apellidos</label>
			  </div>
			  <div class="form-floating mb-3">
				  <input type="text" class="form-control" id="nombre_usuarios2" name="nombre_usuarios2" placeholder="Usuario" pattern="[a-zA-Z0-9]{2,64}" title="Nombre de usuario ( sólo letras y números, 2-64 caracteres)"required>
				  <label for="nombre_usuarios2">Usuario</label>
			  </div>
			  <div class="form-floating mb-3">
				  <input type="email" class="form-control" id="correo2" name="correo2" placeholder="Correo electrónico" required>
				  <label for="correo2">Email</label>
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
	<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	<?php
		}
	?>