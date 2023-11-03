<?php
session_start();
require_once(__DIR__."/../controller/conexiones.php");
require_once(__DIR__."/../model/User.model.php");
require_once(__DIR__."/../controller/user.controller.php");


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["btRegister"])) {

    $conn = Conexion::conectar();
    $userModel = new user();
    $username = $conn -> real_escape_string($_POST["UserName"]);
    $email = $conn -> real_escape_string($_POST["email"]);
    $checkQuery = "SELECT * FROM User WHERE nombre= '$nombre' or username = '$username' or email = '$email'";
    $result = $conn -> query($checkQuery);
    if ($result -> num_rows > 0) {
        echo"<script>alert('Este usuario ya existe, vuelva a la pantalla de ingreso');</script>";
    }
    else {
        echo"<script>alert('Usuario creado con exito');</script>";
        (new UserController) ->create($userModel);
        $conn->close();
        header("location: index.php");
    }
}
?>


