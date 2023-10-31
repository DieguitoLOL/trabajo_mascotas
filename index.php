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
    ?>
<h2>Registro de Usuario</h2>
    <form  method="POST">    
        
            <?php
                require_once __DIR__ ."/process/procesar_registro.php";
            ?>   

        <label for="UserName">Nombre de Usuario</label>
        <input type="text" id="UserName" name="UserName" required value="<?php if(isset($_POST["UserName"])){echo $_POST["UserName"];}else{ echo "";}?>"><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required value="<?php if(isset($_POST["email"])){echo $_POST["email"];}else{ echo "";}?> "><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>

        <input name="btRegister" type="submit" value="Registrarse">
    </form>
</body>
</html>