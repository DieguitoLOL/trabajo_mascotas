<?php 
require_once(__DIR__ ."/conexiones.php");
require_once(__DIR__ ."/../model/Raza.model.php");

class TipoRazaController extends Conexion{
    public function reade(){
        $conection = $this->conectar();
        $sql ="SELECT * from Raza";
        $result = $conection->query($sql);
        return $result;
    }
}