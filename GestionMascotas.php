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
                <?php
                  require_once(__DIR__ ."/controller/user.controller.php");
                  $result = (new UserController) -> reade();
                ?>
                <div class="registros">
                  <label for="TipoMascota">Nombre de usuario:</label><br>
                  <select name="SelectorUsuario" id="mascota">
                    <option value=""></option>
                      <?php 
                        foreach ($result as $row) {
                      ?>
                      <option value="<?= $row['id'] ?>" > 
                        <?= $row['username'] ?> 
                      </option>
                      <?php 
                        }
                      ?>
                  </select>
                </div>
                <?php
                  require_once(__DIR__ ."/controller/TipoMascota.controller.php");
                  $result = (new TipoMascotaController) -> reade();
                ?>
                <div class="registros">
                  <label for="TipoMascota">Tipo de mascota:</label><br>
                  <select name="SelectorMascota" id="mascota">
                    <?php 
                      foreach ($result as $row) {
                    ?>
                    <option value="<?= $row['id']?>">
                      <?= $row['nombre'] ?>
                    </option>
                    <?php 
                      }
                    ?>
                  </select>
                </div>
                <?php
                  require_once(__DIR__ ."/controller/raza.controller.php");
                  $result = (new TipoRazaController) -> reade();
                ?>
                <div class="registros">
                  <label for="TipoRaza">Tipo de raza:</label><br>
                  <select name="SelectorRaza" id="mascota">
                    <?php 
                      foreach ($result as $row) {
                    ?>
                    <option value="<?= $row['id']?>">
                      <?= $row['nombre'] ?>
                    </option>
                    <?php 
                      }
                    ?>
                  </select>
                </div>            
                <div class="contenido_registro-botones">
                <input class="tamaño-boton menos-tamaño" name="btnRegistrar" type="submit" value="Registre su mascota">
                </div>
            </form>
        </div>
    </section>
    </div>
</main>