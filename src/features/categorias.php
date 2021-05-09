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
	include("../src/templates/categorias.php");
	include("../src/templates/footer.php");

?>
<script type="text/javascript" src="js/categorias.js"></script>
