<?php
session_start();
require_once(__DIR__."/../controller/conexiones.php");
require_once(__DIR__."/../model/User.model.php");
require_once(__DIR__."/../controller/user.controller.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["btIngreso"])) {

    $conn = Conexion::conectar();
    $userModel = new user();
    $username = $conn -> real_escape_string($_POST["UserName"]);
    $contraseña = $conn -> real_escape_string($_POST["contrasena"]);
    $checkQuery = "SELECT * FROM User WHERE username = '$username' or password = '$contraseña'";
    $result = $conn -> query($checkQuery);
    
    if ($result -> num_rows > 0) {
        $user= $result->fetch_object();
        $password = $user->contraseña;
        if (password_verify($contraseña, $password)){
            header("location: PaginaPrincipal.php");
        }else{
            echo "<script>alert('Contraseña incorrecta')</script>";
        }
    }else{
        echo"<script>alert('Este usuario no existe');</script>";
    }
}
?>