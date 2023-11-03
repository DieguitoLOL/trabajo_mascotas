<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterineria LifePet</title>
</head>
<body>
<h1>hola a todos</h1>
    <?php
        require_once __DIR__ . "/vendor/autoload.php";
        require_once __DIR__ ."/controller/conexiones.php";
        use Dotenv\Dotenv; 
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    ?>
</body>
</html>