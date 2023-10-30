<?php 
require_once(__DIR__ ."/conexiones.php");
require_once(__DIR__ ."/../model/User.model.php");
class UserController extends Conexion{
    public function create(user $user){
        $conection = $this->conectar();
        $sql = "INSERT INTO user (username, email, password, Role_id) VALUES ('{$user->username}', '{$user->email}', '{$user->password}','{$user->Role_id}')";

        $result = $conection->query($sql);
        return $result;
    }
    public function update(){

    }

    public function reade(){

    }
    public function delete(){

    }
}