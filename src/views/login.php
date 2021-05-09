<link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="assets/img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form method="post" accept-charset="utf-8" action="login.php" name="loginform" autocomplete="off" role="form" class="form-signin">
            <?php
                //busca errores en el login
                include("../src/login_errors.php");
            ?>
            
                <span id="reauth-email" class="reauth-email"></span>
                <input class="form-control" placeholder="Usuario" name="nombre_usuario" type="text" value="" autofocus="" required>
                <input class="form-control" placeholder="Contraseña" name="password" type="password" value="" autocomplete="off" required>
                <button type="submit" class="btn btn-lg btn-success btn-block btn-signin" name="login" id="submit">Iniciar Sesión</button>
            </form>
        </div>
    </div>