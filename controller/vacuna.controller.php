<?php 
require_once(__DIR__ ."/conexiones.php");
require_once(__DIR__ ."/../model/Vacuna.model.php");
class VacunaController extends Conexion{
    public function create(vacuna $vacuna){
        $conection = $this->conectar();
        $vacuna -> nombre = $_POST['NameVacuna'];
        $sql = "INSERT INTO Vacuna (nombre) VALUES ('{$vacuna->nombre}')";
        $result = $conection->query($sql);
        return $result;
    }
    public function reade(){
        $conection = $this->conectar();
        $sql ="SELECT * from Vacuna";
        $result = $conection->query($sql);
        return $result;
    }
    
}
