<?php
	ob_start(); // hace un buffer del contenido para poder hacer multiples redirecciones con header en produccion
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	/* Connect To Database*/
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	
	$active_categoria="active";
	$title="Categorías | Simple Invoice";
    include("../src/templates/head.php");
	    include("../src/templates/navbar.php");
	?>
	
    <div class="container">
	<div class="panel panel-success">
		<div class="panel-heading">
		    <div class="btn-group pull-right">
				<button type='button' class="btn btn-success" data-bs-toggle="modal" data-bs-target="#nuevoCliente"><span class="bi bi-plus" ></span> Nueva Categoría</button>
			</div>
			<h4><i class='bi bi-search'></i> Buscar Categorías</h4>
		</div>
		<div class="panel-body">
		
			
			
			<?php
				include("../src/modal/registro_categorias.php");
				include("../src/modal/editar_categorias.php");
			?>
			<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Nombre</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre de la categoría" onkeyup='load(1);'>
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
<?php  include("../src/templates/footer.php");

?>
<script type="text/javascript" src="js/categorias.js"></script>
