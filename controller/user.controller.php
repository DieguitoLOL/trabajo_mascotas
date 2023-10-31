<?php 
require_once(__DIR__ ."/conexiones.php");
require_once(__DIR__ ."/../model/User.model.php");
class UserController extends Conexion{
    public function create(user $user){
        $conection = $this->conectar();
        $user -> username = $_POST['UserName'];
        $user -> email = $_POST['email'];
        $user -> password = $_POST['contrasena'];
        $sql = "INSERT INTO user (username, email, password, Role_id) VALUES ('{$user->username}', '{$user->email}', '{$user->password}','1')";

        $result = $conection->query($sql);
        // return $result;
    }
    public function update(){

    }

    public function reade(){

    }
    public function delete(){

    }
}