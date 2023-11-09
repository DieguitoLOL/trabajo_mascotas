<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterineria LifePet</title>
    <?php 
        require_once __DIR__ . "/vendor/autoload.php";
        require_once __DIR__ ."/controller/conexiones.php";
        use Dotenv\Dotenv; 
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    ?>
</head>
<body>
    <h1>Resgistro de vacunas</h1>
    <form action="Post">
        <?php    
            require_once __DIR__ ."/process/procesar_vacunas.php";
        ?> 
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>