<?php
class Conexion {
    public static function conectar() {
        $mysqlA = new mysqli($_ENV["SERVER"],$_ENV["USER"],$_ENV["PASS"], $_ENV["DATABASE"], $_ENV["PORT"]);
        if ($mysqlA->connect_errno) {
        echo "Fallo la conexion a la base de datos:(". $mysqlA->connect_errno .") " . $mysqlA->connect_error;
        }
        echo $mysqlA->host_info . "\n";
        
        
        return $mysqlA;
    }
}

?>