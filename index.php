<?php
    require_once __DIR__ . "/vendor/autoload.php";
    require_once __DIR__ ."/controller/conexiones.php";
    use Dotenv\Dotenv; 
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterineria LifePet</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<main>
    <div class="contenido_principal">
    <section class="seccion_ingreso">
        <div class="contenido_logo">
            <div><img class="logo" src="img/icono_mascota.png" alt="Logo veterinaria"></div>
            <h6 class="texto_logo">LifePet</h6>
        </div>
        <div class="contenido_registro contenido_registro-espacio">
            <h1>Inicie Sesión</h1>
            <form class="tamaño-formulario" method="POST">    
                <?php    
                    require_once __DIR__ ."/process/procesar_login.php";
                ?>  

                <div class="registros">
                  <label for="UserName">Nombre de Usuario:</label><br>
                  <input type="text" id="UserName" name="UserName" required value="">
                </div>
                <div class="registros">
                  <label for="contrasena">Contraseña:</label><br>
                  <input type="password" id="contrasena" name="contrasena" required>
                </div class="registros"> 
                <div class="contenido_registro-botones">
                <input class="tamaño-boton menos-tamaño" name="btIngreso" type="submit" value="Ingrese">
                <a class="tamaño-boton menos-tamaño" href="SingUp.php">Registrese</a>
                </div>
            </form>
        </div>
    </section>
    <section class="seccion_contenido">
        <div class="seccion_contenido-img"><img class="imagen_contenido" src="img/ImagenPerro.png" alt="Imagen Perrito"></div>
        <div class="seccion_contenido-text"></div>
        <div class="seccion-contenido_textalineado">
            <h4>LifePet</h4>
            <p>En LifePet, hacemos que las sonrisas de tus mascotas sean nuestra especialidad. Tu confianza, su felicidad.</p>
        </div>
    </section>
    </div>
</main>
</body>
</html>
