	<?php
		if (isset($con))
		{
	?>
	<!-- Modal El complemento modal es un cuadro de diálogo / ventana emergente que se muestra en la parte superior de la página actual:-->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		  <h5 class="modal-title">Agregar nuevo usuario</h5>
        	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_usuario" name="guardar_usuario">
			<div id="resultados_ajax"></div>
				<div class="form-floating mb-3">
				  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" required>
 				 <label for="nombre">Nombres</label>
				</div>
			  <div class="form-floating mb-3">
				  <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" required>
				  <label for="apellido">Apellidos</label>
				</div>
			  <div class="form-floating mb-3">
				  <input type="text" class="form-control" id="nombre_usuarios" name="nombre_usuarios" placeholder="Usuario" pattern="[a-zA-Z0-9]{2,64}" title="Nombre de usuario ( sólo letras y números, 2-64 caracteres)"required>
				  <label for="nombre_usuarios">Usuario</label>
				</div>
			  <div class="form-floating mb-3">
				  <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" required>
				  <label for="correo">Email</label>
				</div>
			  <div class="form-floating mb-3">				
				  <input type="password" class="form-control" id="user_password_new" name="user_password_new" placeholder="Contraseña" pattern=".{6,}" title="Contraseña ( min . 6 caracteres)" required>
				  <label for="user_password_new">Contraseña</label>
				</div>
			  <div class="form-floating mb-3">
				  <input type="password" class="form-control" id="user_password_repeat" name="user_password_repeat" placeholder="Repite contraseña" pattern=".{6,}" required>
				  <label for="user_password_repeat">Repite contraseña</label>
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