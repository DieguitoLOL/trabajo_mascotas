<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterineria LifePet</title>
</head>
<body>
<h1>hola a todos</h1>
    <?php
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
       <form method="POST" id="editarForm">
        <?php 
            require_once(__DIR__ . "/process/update_user.php");
            require_once(__DIR__ ."/process/delete_user.php")
        ?>
        <th><?= $row['id'] ?><input type="hidden" name="id" value="<?= $row['id'] ?>"></th>
        <th><input type="text" name="name" value="<?= $row['nombre'] ?>"></th>
        <th><input type="text" name="username" value="<?= $row['username'] ?>"></th>
        <th><input type="text" readonly name="role" value="<?= $row['Role_id'] ?>"></th>
        <th><input type="text" name="email" value="<?= $row['email'] ?>"></th>
        <?php 
        
        ?>
            <th></th>

         <!-- <p><?php echo $row['nombre']?></p>
         <p><?php echo $row['username']?></p>
         <p><?php echo $row['Role_id']?></p>
         <p><?php echo $row['email']?></p> -->
         <input class="tamaño-boton" name="BtnEliminar" type="submit" value="eliminar">
         <input class="tamaño-boton" name="BtnActualizar" type="submit" value="actualizar">
       </form>

    <?php
        }
    ?> 
   

 <a href="MostrarMascotas.php">Listado de Mascotas</a>
</body>
</html>