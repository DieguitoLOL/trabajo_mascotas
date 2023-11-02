<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Veterineria LifePet</title>
</head>
<body>
<?php
        require_once __DIR__ . "/vendor/autoload.php";
        use Dotenv\Dotenv; 
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
?>
<main>
    <section class="seccion_ingreso">
        <div class="contenido_logo">
            <div><img class="logo" src="img/Logo.png" alt="Logo veterinaria"></div>
            <h6 class="texto_logo">LifePet</h6>
        </div>
        <div class="contenido_registro">
            <h1>Registro de Usuario</h1>
            <form  method="POST">    
                <?php    
                    require_once __DIR__ ."/process/procesar_registro.php";
                ?>  
                <div class="registros">
                  <label for="Name">Nombre completo</label><br>
                  <input type="text" id="Name" name="Name" required value="">
                </div>

                <div class="registros">
                  <label for="UserName">Nombre de Usuario</label><br>
                  <input type="text" id="UserName" name="UserName" required value="">
                </div>

                <div class="registros">
                  <label for="email">Correo Electrónico:</label><br>
                  <input type="email" id="email" name="email" required value="">
                </div>

                <div class="registros">
                  <label for="contrasena">Contraseña:</label><br>
                  <input type="password" id="contrasena" name="contrasena" required>
                </div class="registros"> 
                <input name="btRegister" type="submit" value="Registrarse">
            </form>
        </div>
    </section>
    <section class="seccion_contenido">
        <div class="seccion_contenido-img"><img class="imagen_contenido" src="img/ImagenGato.jpeg" alt="Imagen gatito"></div>
        <div class="seccion_contenido-text"></div>
        <div class="seccion-contenido_textalineado">
            <h4>LifePet</h4>
            <p>En LifePet, hacemos que las sonrisas de tus mascotas sean nuestra especialidad. Tu confianza, su felicidad.</p>
        </div>
    </section>
</main>
</body>
</html>

