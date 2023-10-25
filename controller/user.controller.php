!
<?php 
require_once(__DIR__ ."/../model/User.model.php");
require_once(__DIR__ ."conexiones.php");
class UserController extends Conexion {
    public function crear(User $user) {
       $mysqlA = $this->conectar();
       $nombre = $mysqlA -> real_escape_string($user->nombre);

       $sql = "INSERT INTO gender (nombre) VALUES ('$nombre')";
       $mysqlA->close();
       return $sql;
    }
}
?>