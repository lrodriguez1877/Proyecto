<?php

/**
 * Inicio de sesión de clase
 * maneja el proceso de inicio de sesión y cierre de sesión del usuario
 */
class Login
{
    /**
     * @var object La conexión a la base de datos
     */
    private $db_connection = null;
    /**
     * @var array Colección de mensajes de error
     */
    public $errors = array();
    /**
     * @var array Recopilación de mensajes de éxito
     */
    public $messages = array();

    /**
     * la función "__construct ()" se inicia automáticamente cada vez que se crea un objeto de esta clase,
     * ya sabes, cuando haces "$ login = new Login ();"
     */
    public function __construct()
    {
        // Sesión de creación / lectura, absolutamente necesario
        session_start();

        // compruebe las posibles acciones de inicio de sesión:
        // si el usuario intentó cerrar la sesión (sucede cuando el usuario hace clic en el botón de cierre de sesión)
        if (isset($_GET["logout"])) {
            $this->doLogout();
        }
        // iniciar sesión a través de los datos de la publicación (si el usuario acaba de enviar un formulario de inicio de sesión)
        elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();
        }
    }

    /**
     * iniciar sesión con datos de la publicación
     */
    private function dologinWithPostData()
    {
        // comprobar el contenido del formulario de inicio de sesión
        if (empty($_POST['nombre_usuario'])) {
            $this->errors[] = "Username field was empty.";
        } elseif (empty($_POST['password'])) {
            $this->errors[] = "Password field was empty.";
        } elseif (!empty($_POST['nombre_usuario']) && !empty($_POST['password'])) {

            // crear una conexión de base de datos, usando las constantes de config / db.php (que cargamos en index.php)
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // cambie el juego de caracteres a utf8 y verifíquelo
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // si no hay errores de conexión (= conexión a la base de datos en funcionamiento)
            if (!$this->db_connection->connect_errno) {

                // escape the POST stuff
                $nombre_usuarios = $this->db_connection->real_escape_string($_POST['nombre_usuario']);

                // consulta de la base de datos, obteniendo toda la información del usuario seleccionado (permite iniciar sesión a través de la dirección de correo electrónico en el
                // campo de nombre de usuario)
                $sql = "SELECT id_usuario, nombre_usuarios, nombre, correo, user_password_hash
                        FROM usuarios
                        WHERE nombre_usuarios = '" . $nombre_usuarios . "' OR correo = '" . $nombre_usuarios . "';";
                $result_of_login_check = $this->db_connection->query($sql);

                // Si este usuario existe
                if ($result_of_login_check->num_rows == 1) {

                    // obtener una fila de resultados (como un objeto)
                    $result_row = $result_of_login_check->fetch_object();

                    
                    if (password_verify($_POST['password'], $result_row->user_password_hash)) {

                        // escriba los datos del usuario en PHP SESSION (un archivo en su servidor)
                        $_SESSION['id_usuario'] = $result_row->id_usuario;
						$_SESSION['nombre'] = $result_row->nombre;
						$_SESSION['nombre_usuarios'] = $result_row->nombre_usuarios;
                        $_SESSION['correo'] = $result_row->correo;
                        $_SESSION['user_login_status'] = 1;

                    } else {
                        $this->errors[] = "Usuario y/o contraseña no coinciden.";
                    }
                } else {
                    $this->errors[] = "Usuario y/o contraseña no coinciden.";
                }
            } else {
                $this->errors[] = "Problema de conexión de base de datos.";
            }
        }
    }

    /**
     * realizar el cierre de sesión
     */
    public function doLogout()
    {
        // eliminar la sesión del usuario
        $_SESSION = array();
        session_destroy();
        // devolver un pequeño mensaje de respuesta
        $this->messages[] = "Has sido desconectado.";

    }

    /**
     * simplemente devuelve el estado actual del inicio de sesión del usuario
     * @return boolean estado de inicio de sesión del usuario
     */
    public function isUserLoggedIn()
    {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
        // retorno predeterminado
        return false;
    }
}
