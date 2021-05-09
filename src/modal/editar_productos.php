	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		  <h5 class="modal-title" id="myModalLabel">Editar Producto</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_producto" name="editar_producto">
			<div id="resultados_ajax2"></div>
			  <div class="form-floating mb-3">
				  <input type="text" class="form-control" id="mod_codigo" name="mod_codigo" placeholder="Código del producto" required>
				  <label for="mod_codigo">Código</label>
					<input type="hidden" name="mod_id" id="mod_id">
			  </div>
			   <div class="form-floating mb-3">
				  <textarea class="form-control" id="mod_nombre" name="mod_nombre" placeholder="Nombre del producto" required></textarea>
				  <label for="mod_nombre">Nombre</label>
			  </div>
			  
			  <div class="form-floating mb-3">
					<select class='form-control' name='mod_categoria' id='mod_categoria' required>
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
					<label for="mod_categoria">Categoría</label>
			  </div>
			  
			  <div class="form-floating mb-3">
				  <input type="text" class="form-control" id="mod_precio" name="mod_precio" placeholder="Precio de venta del producto" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				  <label for="mod_precio">Precio</label>
			  </div>
			 
			 <div class="form-floating mb-3">
				  <input type="number" min="0" class="form-control" id="mod_stock" name="mod_stock" placeholder="Inventario inicial" required  maxlength="8" readonly>
				  <label for="mod_stock" class="col-sm-3 control-label">Stock</label>
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
	<?php
		}
	?>