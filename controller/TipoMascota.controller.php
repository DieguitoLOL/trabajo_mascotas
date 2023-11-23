<?php 
require_once(__DIR__ ."/conexiones.php");
require_once(__DIR__ ."/../model/TipoMascota.model.php");

class TipoMascotaController extends Conexion{
    public function reade(){
        $conection = $this->conectar();
        $sql ="SELECT * from TipoMascota";
        $result = $conection->query($sql);
        return $result;
    }
}