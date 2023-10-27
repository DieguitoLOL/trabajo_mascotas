<?php 
    require_once(__DIR__ ."/../controller/conexiones.php");   
    if(isset($_POST["btRegister"])){
        if(empty($_POST["nombre"]) or  empty($_POST["email"])or empty($_POST["contrasena"])){

            echo "<div style='background-color: red;' class='stylos'>campos vacios</div>". "</br>";
        }else{
            echo "<div style='background-color: green;' class='stylos'>campos llenos</div>". "</br>";
            $conexion = (new Conexion) ->conectar();
            $nombre = $conexion->real_escape_string($_POST["nombre"]);
            $sql ="select * from user where username = '$nombre'";
            $consulta = $conexion->query($sql);
            if($conexion->query($sql)){
                echo "<div style='background-color: blue;' class='stylos'>Usuario en uso</div>". "</br>";
            }
        }
      
    }
?>