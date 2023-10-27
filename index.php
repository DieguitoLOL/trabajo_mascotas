<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Veterineria</title>
</head>
<body>
<h1>hola a todos</h1>
    <?php
        require_once __DIR__ . "/vendor/autoload.php";
        require_once __DIR__ ."/controller/conexiones.php";
        use Dotenv\Dotenv; 
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        // echo $_ENV["USER"];
        // Conexion::conectar();
        $conexion = (new Conexion) ->conectar();
        if (!($conexion->connect_errno)) {
            echo "no fallo";
            header("location:LogUp.php");
            $conexion ->close();
        }else{
            echo $conexion;
        }
    ?>
</body>
</html>