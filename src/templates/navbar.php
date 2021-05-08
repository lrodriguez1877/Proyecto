<?php
	if (isset($title))
	{
  	?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">StockApps</a>
        <a class="nav-link active" href="../src/features/producto.php"><i class="bi bi-people"></i> Usuarios</a>
        <a class="nav-link active" href="../src/features/categorias.php"><i class='bi bi-tags'></i> Categorías</a>
        <a class="nav-link active" href="../src/features/usuarios.php"><i  class='bi bi-person-square'></i> Usuarios</a>
        <a class="nav-link active" href="login.php?logout">Salir</a>
      </div>
    </nav>
    <?php
		}
?>