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
                    <th>Tipo de mascota</th>
                    <th>Raza</th>
                    <th>Fecha de nacimiento</th>
                    <th>Cantidad de vacunas</th>
                    <th>Tipo de vacuna</th>
                </tr> 
                <tr> 
                    
                </tr> 
                <tr> 
                    
                </tr> 
                <tr> 
                    
                </tr> 
            </table> 
        </div> 
    </div> 
</body> 
</html>