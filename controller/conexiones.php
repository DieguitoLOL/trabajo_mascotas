<?php
    require_once __DIR__ . "/../vendor/autoload.php";
    // require_once __DIR__ ."/controller/conexiones.php";
    use Dotenv\Dotenv; 
    $dotenv = Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();
?>
<?php
class Conexion {
    public static function conectar() {
        $mysqlA = new mysqli($_ENV["SERVER"],$_ENV["USER"],$_ENV["PASS"], $_ENV["DATABASE"], $_ENV["PORT"]);
        return $mysqlA;
    }
}