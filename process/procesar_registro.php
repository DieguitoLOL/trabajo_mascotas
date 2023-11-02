<?php
session_start();
require_once(__DIR__."/../controller/conexiones.php");
require_once(__DIR__."/../model/User.model.php");
require_once(__DIR__."/../controller/user.controller.php");


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["btRegister"])) {

    $conn = Conexion::conectar();
    $userModel = new user();
    $nombre = $conn -> real_escape_string($_POST["Name"]);
    $username = $conn -> real_escape_string($_POST["UserName"]);
    $email = $conn -> real_escape_string($_POST["email"]);
    $checkQuery = "SELECT * FROM User WHERE nombre= '$nombre' or username = '$username' or email = '$email'";
    $result = $conn -> query($checkQuery);
    if ($result -> num_rows > 0) {
        echo"usuario en uso";
    }
    else {
        (new UserController) ->create($userModel);
        $conn->close();
    }
}
?>


