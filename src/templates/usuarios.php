<div class="container-sm">
	<div class="card">
		<div class="card-header">
			<button type='button' class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal"><span class="bi bi-plus" ></span> Nuevo Usuario</button>
		</div>			
		<div class="card-body">
			<?php
			include("../src/modal/registro_usuarios.php");
			include("../src/modal/editar_usuarios.php");
			include("../src/modal/cambiar_password.php");
			?>
			<form class="form-horizontal" role="form" id="datos_cotizacion">
    			<div class="form-group row">
				<h4><i class='bi bi-search'></i> Buscar Usuarios</h4>
					<label for="q" class="col-md-2 control-label">Nombres:</label>
					<div class="col-md-5">
						<input type="text" class="form-control" id="q" placeholder="Nombre"onkeyup='load(1);'>
					</div>
						<div class="col-md-3">
							<button type="button" class="btn btn-default" onclick='load(1);'>
								<span class="bi bi-search" ></span> Buscar</button>
							<span id="loader"></span>
						</div>
					</div>
			</form>
			<div id="resultados"></div><!-- Carga los datos ajax -->
			<div class='outer_div'></div><!-- Carga los datos ajax -->
        </div>
	</div>
</div>
	<hr>