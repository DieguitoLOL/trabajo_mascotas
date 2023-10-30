<?php 
session_start();
if (!isset($_SESSION["message_error"]) and $_SESSION["message_duplicate"] and !empty($_POST["btRegister"])) {
    if (empty($_POST["UserName"]) or empty($_POST["email"]) or empty($_POST["contrasena"])) {
        $_SESSION["mesage_error"] = "Faltan campos";
    }else{
        $UserControler = new UserController();
        echo "";
    }
}