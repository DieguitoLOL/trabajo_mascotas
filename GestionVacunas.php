<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/EstiloVacuna.css">
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
        <div class="search-bar"> 
            <input type="text" placeholder="Buscar…"> 
            <button><img src="search.png" alt="Buscar"></button> 
        </div> 
        <div class="user-icon"></div> 
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
                    <th>Fecha de registro</th> 
                    <th>Email</th> <th>Teléfono</th> 
                    <th>Opciones</th> 
                </tr> 
                <tr> 
                    <td>Juan Pérez</td> 
                    <td>
                        <button>Editar</button>
                        <button>Eliminar</button>
                    </td> 
                </tr> 
                <tr> 
                    <td>Maria García</td>
                    <td>
                        <button>Editar</button>
                        <button>Eliminar</button>
                    </td> 
                </tr> 
                <tr> 
                    <td>Luis Rodríguez</td>
                    <td>
                        <button>Editar</button>
                        <button>Eliminar</button>
                    </td> 
                </tr> 
            </table> 
        </div> 
    </div> 
</body> 
</html>