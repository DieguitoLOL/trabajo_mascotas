<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/EstiloMascotas.css">
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
    <?php
        require_once(__DIR__ ."/controller/mascota.controller.php");
        session_start();
        $result = (new MascotaController) -> reade();
    ?>
    <header class="header"> 
        <a href="GestionMascotas.php"><button>Agregar mascotas</button></a>
    </header> 
    <div class="body"> 
        <div class="sidebar"> 
            <div class="sidebar-item"></div> 
            <div class="sidebar-item"></div> 
            <div class="sidebar-item"></div>
            <div class="sidebar-item"></div> 
        </div> <div class="main">     
            <table class="table"> 
                <tr> 
                    <th>Nombre</th> 
                    <th>Fecha de nacimiento</th>
                    <th>Nombre del usuario o dueño</th>
                    <th>Tipo de mascota</th>
                    <th>Raza</th>
                    <th>Vacuna</th>
                    <th>Editar</th>
                </tr> 
                <?php
                    foreach ($result as $row) {
                ?> 
                <tr> 
                <?php
                         require_once(__DIR__ ."/process/update_mascota.php");

                ?> 
                    <th><input type="text" name="name" value="<?= $row['Nombre_mascota'] ?>"></th>
                    <th><input type="text" name="time" value="<?= $row['FechaNacimiento'] ?>"></th>
                    <th><input type="text" name="user" value="<?= $row['Nombre_USER'] ?>"></th>
                    <th><input type="text" name="tipePet" value="<?= $row['Tipo_mascota'] ?>"></th>
                    <th><input type="text" name="tipeRaza" value="<?= $row['Nombre_raza'] ?>"></th>
                    <th></th>
                    <th>
                        <a href="GestionVacunas.php"><button>Agregar <br/> vacuna</button></a>
                        <input class="tamaño-boton" name="BtnEliminar" type="submit" value="eliminar">
                        <input class="tamaño-boton" name="BtnActualizar" type="submit" value="actualizar">
                    </th>
                </tr> 
                <?php
                    }
                ?> 
            </table> 
        </div> 
    </div> 
</body> 
</html>