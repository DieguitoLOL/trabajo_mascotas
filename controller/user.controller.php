<?php 
require_once(__DIR__ ."/../model/User.model.php");
require_once(__DIR__ ."conexiones.php");
class UserController extends Conexion {
    public function crear(User $user) {
       $mysqlA = $this->conectar();
       $nombre = $mysqlA -> real_escape_string($user->nombre);
       $username = $mysqlA -> real_escape_string($user->username);
       $email = $mysqlA -> real_escape_string($user->email);
       $password = $mysqlA -> real_escape_string($user->password);
       $foto = $mysqlA -> real_escape_string($user->foto);

       $sql = "INSERT INTO User (nombre) VALUES ('$nombre')"; 
       $sql = "INSERT INTO User (username) VALUES ('$username')"; 
       $sql = "INSERT INTO User (email) VALUES ('$email')"; 
       $sql = "INSERT INTO User (password) VALUES ('$password')"; 
       $sql = "INSERT INTO User (foto) VALUES ('$foto')"; 

       return $this->conectar($sql);
       $mysqlA->close();
    }
}
?>