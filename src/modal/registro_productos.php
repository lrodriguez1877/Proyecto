	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->

	<div class="modal" id="nuevoProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		  <h5 class="modal-title">Agregar nuevo Producto</h5>
        	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
			<div id="resultados_ajax_productos"></div>
			  <div class="form-floating mb-3">
				  <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código del producto" required>
				  <label for="codigo">Código</label>
			  </div>
			  
			  <div class="form-floating mb-3">
					<textarea class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required maxlength="255" ></textarea>
					<label for="nombre">Nombre</label>
			  </div>
			  
			  <div class="form-floating mb-3">
					<select class='form-control' name='categoria' id='categoria' required>
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
					<label for="categoria">Categoría</label>		  
			  </div>
			  
			<div class="form-floating mb-3">
				  <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio de venta del producto" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				  <label for="precio">Precio</label>
			</div>
			
			<div class="form-floating mb-3">
				  <input type="number" min="0" class="form-control" id="stock" name="stock" placeholder="Inventario inicial" required  maxlength="8">
				  <label for="stock">Stock</label>
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

	<!--
	<div class="modal fade" id="nuevoProducto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nuevoProductoLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
-->
	<?php
		}
	?>