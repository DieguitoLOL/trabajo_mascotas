<?php
class Conexion {
    public static function conectar() {
        $mysqlA = new mysqli($_ENV["SERVER"],$_ENV["USER"],$_ENV["PASS"], $_ENV["DATABASE"], $_ENV["PORT"]);
        return $mysqlA;
    }
}