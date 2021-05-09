<div class="container">
	<div class="card">
		<div class="card-header">
            <div class="row">
				<div class="col-md-4">
                    <button type='button' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoCliente"><span class="bi bi-plus" ></span> Nueva Categoría</button>
				</div>
				<div class="col-md-8">
                    <h4><i class='bi bi-search'></i> Buscar Categorías</h4>
				</div>
		    </div>
		</div>
		<div class="card-body">
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