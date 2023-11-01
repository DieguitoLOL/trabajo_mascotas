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
    // $checkQuery2 = "SELECT email FROM User WHERE email == $email";
    $result = $conn -> query($checkQuery);
    // $result2 = $conn -> query($checkQuery2);
    if ($result -> num_rows > 0 /*or $result2 -> num_rows > 0*/) {
        // if($result -> num_rows > 0){
        //     echo"usuario en uso";
        // }
        // if($result2 -> num_rows > 0){
        //     echo"email en uso";
        // }
        echo"usuario en uso";
    }
    else {
        (new UserController) ->create($userModel);
        $conn->close();
    }
}
?>


