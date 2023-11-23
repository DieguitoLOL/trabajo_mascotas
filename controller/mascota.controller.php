<?php 
require_once(__DIR__ ."/conexiones.php");
require_once(__DIR__ ."/../model/Mascotas.model.php");
class MascotaController extends Conexion{
    public function create(mascotas $mascotas){
        $conection = $this->conectar();
        $mascotas -> nombre = $_POST['NamePet'];
        $mascotas -> FechaNacimiento = $_POST['Datetime'];
        $mascotas -> User_id = $_POST['SelectorUsuario'];
        $mascotas -> TipoMascota_id =$_POST['SelectorMascota'];
        $mascotas -> Raza_id = $_POST['SelectorRaza'];
        $sql = "INSERT INTO mascotas (nombre, FechaNacimiento, User_id, TipoMascota_id, Raza_id) VALUES ('{$mascotas->nombre}','{$mascotas->FechaNacimiento}', '{$mascotas->User_id}', '{$mascotas->TipoMascota_id}', '{$mascotas->Raza_id}')";

        $result = $conection->query($sql);
        return $result;
        
    }
    public function update(mascotas $mascota) {
        $conection = $this->conectar();
        
    }
    public function reade(){
        $conection = $this->conectar();
        $sql ="SELECT * from Mascota";
        $result = $conection->query($sql);
        return $result;
    }
    public function delete (mascotas $mascota) {
        $connection = $this->conectar();
        
    }
}

?>