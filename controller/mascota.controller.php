<?php 
require_once(__DIR__ ."/conexiones.php");
require_once(__DIR__ ."/../model/Mascotas.model.php");
class MascotaController extends Conexion{

    public function create(mascotas $mascota){
        $conection = $this->conectar();
        $mascota -> nombre = $_POST['NamePet'];
        $mascota -> FechaNacimiento = $_POST['Datetime'];
        $mascota -> User_id = $_POST['Username2'];
        $mascota -> TipoMascota_id =$_POST['SelectorMascota'];
        $mascota -> Raza_id = $_POST['TipoRaza'];
        $sql = "INSERT INTO mascotas (nombre, FechaNacimiento, User_id, TipoMascota_id, Raza_id) VALUES ('{$mascota->nombre}','{$mascota->FechaNacimiento}', '{$mascota->User_id}', '{$mascota->TipoMascota_id}', '{$mascota->Raza_id}')";

        $result = $conection->query($sql);
        return $result;
        
    }
    public function update(mascotas $mascota) {
        $connection = $this->conectar();
       
    }
    public function reade(){
        $conection = $this->conectar();
       
    }
    public function delete (mascotas $mascota) {
        $connection = $this->conectar();
        
    }
}

?>