<?php
    //verificar que exista la version minima de php
    //probablemente tomado de una version antigua de https://github.com/panique/huge
    //seria mejor utilizar un framework moderno y robusto que siga las normas de seguridad
    if (version_compare(PHP_VERSION, '5.3.7', '<')) {
        exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
    } else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
        // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
        // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
        require_once("../libraries/password_compatibility_library.php");
    }

    //cargar la configuracion de la base de datos
    require_once("../config/db.php");

    //cargar la clase login
    require_once("../src/classes/Login.php");

    // crear un objeto de inicio de sesión. cuando se crea este objeto, hará todas las cosas de inicio / cierre de sesión automáticamente
    // por lo que esta única línea maneja todo el proceso de inicio de sesión. en consecuencia, puede simplemente ...
    $login = new Login();

    // ... pregunte si hemos iniciado sesión aquí:
    if ($login->isUserLoggedIn() == true) {
        // el usuario ha iniciado sesión. Puede hacer lo que quiera aquí.
        // para fines de demostración, simplemente mostramos la vista "ha iniciado sesión".
    header("location: stock.php");

    } else {
        // el usuario no ha iniciado sesión. Puede hacer lo que quiera aquí.
        // para fines de demostración, simplemente mostramos la vista "no ha iniciado sesión".
        include("../src/templates/head.php");
        include("../src/views/login.php");
        include("../src/templates/footer.php");
        //include("../src/views/test.php");
    }

?>