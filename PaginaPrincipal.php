<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterineria LifePet</title>
</head>
<body>
    <!-- <?php
        require_once(__DIR__ ."/controller/user.controller.php");
        session_start();
        $result = (new UserController) -> reade();
        echo "Usuario:: ".$_SESSION["usuario"]."</br>";
    ?>
    <p> Tu rol </p>
    <?php if ($_SESSION["rol"] == "1")  {?>
        <h1>USER</h1>
    <?php } else if ($_SESSION["rol"] == "2") {?>
        <h1>Admim</h1>
    <?php }?>
        <div class="header"></div>
    <?php // sacar nombre de la columna
    //   foreach ($result as $row) {
    //     $longArray = sizeof($row)-1;
    //     for ($i=1; $i <$longArray ; $i++) { 
    //        echo array_keys($row[$i]); //<--
    //     } uu

    //     // foreach ($row as $content) { 
    //     //     echo ($content).'</br>';
    //     // }
    //     break;
    //   }
    ?>
    <?php
      foreach ($result as $row) {
    ?>
       <div style="display:flex; gap: 4vh; text-align:center;">
         <p><?php echo $row['nombre']?></p>
         <p><?php echo $row['username']?></p>
         <p><?php echo $row['Role_id']?></p>
         <p><?php echo $row['email']?></p>
       </div>
    <?php
        }
    ?>  -->
   

<h1>hola a todos</h1>
 <a href="GestionVacunas.php">Gestionar vacunas</a>
</body>
</html>