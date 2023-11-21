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
                    require_once __DIR__ ."/process/procesar_mascota.php";
                ?>  

                <div class="registros">
                  <label for="NamePet">Nombre de la mascota:</label><br>
                  <input type="text" id="NamePet" name="NamePet" required value="">
                </div>
                <div class="registros">
                  <label for="Datetime">Fecha de nacimiento:</label><br>
                  <input type="date" id="Datetime" name="Datetime" required value="">
                </div>   
                <div class="registros">
                  <label for="Username">Nombre de usuario:</label><br>
                  <input type="text" id="Username" name="Username2" required value="">
                </div>
                <div class="registros">
                  <label for="TipoMascota">Tipo de mascota:</label><br>
                  <select name="SelectorMascota" id="mascota">
                    <option value=""></option>
                    <option value="1">Perro</option>
                    <option value="2">Gato</option>
                    <option value="3">Raton</option>
                    <option value="4">Pez</option>
                    <option value="5">Hamster</option>
                  </select>
                </div>  
                <div class="registros">
                  <label for="TipoRaza">Tipo de raza:</label><br>
                  <input type="text" id="TipoRaza" name="TipoRaza" required value="">
                </div>            
                <div class="contenido_registro-botones">
                <input class="tamaño-boton menos-tamaño" name="btnRegistrar" type="submit" value="Registre su mascota">
                </div>
            </form>
        </div>
    </section>
    </div>
</main>