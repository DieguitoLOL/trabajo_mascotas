<?php 
require_once(__DIR__ ."/conexiones.php");
require_once(__DIR__ ."/../model/User.model.php");
class UserController extends Conexion{
    public function create(user $user){
        $conection = $this->conectar();
        $user -> nombre = $_POST['Name'];
        $user -> username = $_POST['UserName'];
        $user -> email = $_POST['email'];
        $user -> password = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (nombre, username, email, password, Role_id) VALUES ('{$user->nombre}','{$user->username}', '{$user->email}', '{$user->password}', '1')";

        $result = $conection->query($sql);
        return $result;
    }
    public function update(user $user, $id){
        $conection = $this->conectar();
        $user -> nombre = $_POST['Name'];
        $user -> username = $_POST['UserName'];
        $user -> email = $_POST['email'];
        $user -> password = $_POST['contrasena'];
        $sql = "UPDATE user SET nombre='{$user->nombre}', username='{$user->username}', email='{$user->email}', password='{$user->password}' where id=$id";

        $result = $conection->query($sql);
        return $result;
    }

    public function reade(){
        $conection = $this->conectar();
        $sql ="SELECT * from User";
        $result = $conection->query($sql);
        return $result;
    }
    public function delete(){

    }
}