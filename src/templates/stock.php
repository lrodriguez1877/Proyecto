<div class="container">
	<div class="card">
        <div class="card-header">
			<div class="row">
				<div class="col-md-4">
					<button type='button' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoProducto"><span class="bi bi-plus" ></span> Nuevo Producto</button>
				</div>
				<div class="col-md-8">
					<h4><i class='bi bi-search'></i> Consultar inventario</h4>
                </div>
			</div>
        </div>
        <div class="card-body">

		    <?php
                include("../src/modal/registro_productos.php");
			    //include("../src/modal/editar_productos.php");
				//include("../src/modal/modal_test.php")
		    ?>
			
			<form class="form-horizontal" role="form" id="datos">
                <div class="row">
					<div class='col-md-4'>
						<label>Filtrar por código o nombre</label>
						<input type="text" class="form-control" id="q" placeholder="Código o nombre del producto" onkeyup='load(1);'>
					</div>
					
					<div class='col-md-4'>
						<label>Filtrar por categoría</label>
						<select class='form-control' name='id_categoria' id='id_categoria' onchange="load(1);">
						<option value="">Selecciona una categoría</option>
						<?php 
						    $query_categoria=mysqli_query($con,"select * from categorias order by nombre_categoria");
						    while($rw=mysqli_fetch_array($query_categoria))	{
						        ?>
						        <option value="<?php echo $rw['id_categoria'];?>"><?php echo $rw['nombre_categoria'];?></option>			
						        <?php
						    }
						?>
						</select>
					</div>
					<div class='col-md-12 text-center'>
						<span id="loader"></span>
					</div>
				</div>
				<hr>
				<div class='row-fluid'>
					<div id="resultados"></div><!-- Carga los datos ajax -->
				</div>	
				<div class='row'>
					<div class='outer_div'></div><!-- Carga los datos ajax -->
				</div>
			</form>
        </div>
    </div>
</div>

