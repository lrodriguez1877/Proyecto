<?php
	// mostrar posibles errores / comentarios (del objeto de inicio de sesión)
	if (isset($login)) {
		if ($login->errors) {
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			    <strong>Error!</strong> 
			
			<?php 
			foreach ($login->errors as $error) {
				echo $error;
			}
			?>
			</div>
			<?php
		}
		if ($login->messages) {
			?>
			<div class="alert alert-success alert-dismissible" role="alert">
			    <strong>Aviso!</strong>
			<?php
			foreach ($login->messages as $message) {
				echo $message;
			}
			?>
			</div> 
			<?php 
		}
	}
?>