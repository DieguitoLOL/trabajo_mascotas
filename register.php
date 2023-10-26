<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>hola a todos</h1>
    <?php
        require_once __DIR__ . "/vendor/autoload.php";
        use Dotenv\Dotenv; 
        
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        echo $_ENV["USER"];
    ?>
<h2>Registro de Usuario</h2>
    <form action="procesar_registro.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email"><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena"><br>

        <input type="submit" value="Registrarse">
    </form>
</body>
</html>