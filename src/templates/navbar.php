<?php
	if (isset($title))
	{
  	?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">StockApps</a>
        <a class="nav-link active" href="../public/productos.php"><i class="bi bi-bag"></i> Productos</a>
        <a class="nav-link active" href="../public/categorias.php"><i class='bi bi-tags'></i> Categorías</a>
        <a class="nav-link active" href="../public/usuarios.php"><i  class='bi bi-person-square'></i> Usuarios</a>
        <a class="nav-link active" href="login.php?logout">Salir</a>
      </div>
    </nav>
    <?php
		}
?>