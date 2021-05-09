<?php
	file_put_contents("../../log.txt","buscar_usuario activado"."\n",FILE_APPEND);
	require_once ("../../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../../config/conexion.php");//Contiene funcion que conecta a la base de datos
	file_put_contents("../../log.txt","coneccion hecha"."\n",FILE_APPEND);
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	file_put_contents("../../log.txt",$action." linea 8"."\n",FILE_APPEND);
	if (isset($_GET['id'])){
		$id_usuario=intval($_GET['id']);
		$query=mysqli_query($con, "select * from usuarios   where id_usuario='".$id_usuario."'");
		file_put_contents("../../log.txt",$quer." linea 12"."\n",FILE_APPEND);
		$rw_user=mysqli_fetch_array($query);
		$count=$rw_user['id_usuario'];
		if ($id_usuario!=1){
			if ($delete1=mysqli_query($con,"DELETE FROM usuarios   WHERE id_usuario='".$id_usuario."'")){
				?>
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Aviso!</strong> Datos eliminados exitosamente.
				</div>
				<?php 
			}else {
				?>
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Error!</strong> Lo siento algo ha salido mal intenta nuevamente.
				</div>
				<?php
			}
		} else {
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> No se puede borrar el usuario administrador. 
			</div>
			<?php
		}
		
		
		
	}
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		 $aColumns = array('nombre', 'apellido');//Columnas de busqueda
		 $sTable = "usuarios";
		 $sWhere = "";
		if ( $_GET['q'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		$sWhere.=" order by id_usuario desc";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 10; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = '../../public/usuarios.php';
		//main query to fetch the data
		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			
			?>
			<div class="table-responsive">
			  <table class="table">
				<tr  class="success">
					<th>ID</th>
					<th>Nombres</th>
					<th>Usuario</th>
					<th>Email</th>
					<th>Agregado</th>
					<th><span class="pull-right">Acciones</span></th>
					
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
						$id_usuario=$row['id_usuario'];
						$fullname=$row['nombre']." ".$row["apellido"];
						$nombre_usuarios=$row['nombre_usuarios'];
						$correo=$row['correo'];
						$fecha= date('d/m/Y', strtotime($row['fecha']));
						
					?>
					
					<input type="hidden" value="<?php echo $row['nombre'];?>" id="nombres<?php echo $id_usuario;?>">
					<input type="hidden" value="<?php echo $row['apellido'];?>" id="apellidos<?php echo $id_usuario;?>">
					<input type="hidden" value="<?php echo $nombre_usuarios;?>" id="usuario<?php echo $id_usuario;?>">
					<input type="hidden" value="<?php echo $correo;?>" id="email<?php echo $id_usuario;?>">
				
					<tr>
						<td><?php echo $id_usuario; ?></td>
						<td><?php echo $fullname; ?></td>
						<td ><?php echo $nombre_usuarios; ?></td>
						<td ><?php echo $correo; ?></td>
						<td><?php echo $fecha;?></td>
						
					<td ><span class="pull-right">
					<a href="#" class='btn btn-default' title='Editar usuario' onclick="obtener_datos('<?php echo $id_usuario;?>');" data-bs-toggle="modal" data-bs-target="#myModal2"><i class="bi bi-person-badge-fill"></i></a> 
					<a href="#" class='btn btn-default' title='Cambiar contraseña' onclick="get_id_usuario('<?php echo $id_usuario;?>');" data-bs-toggle="modal" data-bs-target="#myModal3"><i class="bi bi-file-lock-fill"></i></a>
					<a href="#" class='btn btn-default' title='Borrar usuario' onclick="eliminar('<? echo $id_usuario; ?>')"><i class="bi bi-trash"></i> </a></span></td>
						
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan=9><span class="pull-right">
					<?php
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
?>