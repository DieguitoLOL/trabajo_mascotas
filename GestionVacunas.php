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
    <div class="contenido_principal contenido-Espacio">
    <section class="seccion_ingreso">
        <div class="contenido_logo">
            <div><img class="logo" src="img/icono_mascota.png" alt="Logo veterinaria"></div>
            <h6 class="texto_logo">LifePet</h6>
        </div>
        <div class="contenido_registro contenido_registro-espacio">
            <h1>Registre su mascota</h1>
            <form class="tamaño-formulario" method="POST">    
                <?php    
                    require_once __DIR__ ."/process/procesar_vacuna.php";
                ?>  
                <div class="registros">
                  <label for="NamePet">Nombre de la vacuna:</label><br>
                  <input type="text" id="NameVacuna" name="NameVacuna" required value="">
                </div>
                </div>            
                <div class="contenido_registro-botones">
                <input class="tamaño-boton menos-tamaño" name="btnRegistrarvacuna" type="submit" value="Registre su vacuna">
                </div>
            </form>
        </div>
    </section>
    </div>
</main>