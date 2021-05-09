<?php
	if (isset($title))
	{
  	?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">StockApps</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="../public/stock.php"><i class="bi bi-bag"></i> Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../public/categorias.php"><i class='bi bi-tags'></i> Categorías</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../public/usuarios.php"><i  class='bi bi-person-square'></i> Usuarios</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="login.php?logout">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php
		}
?>