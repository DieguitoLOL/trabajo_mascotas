<?php
require_once(__DIR__ ."/../controller/user.controller.php");
require_once(__DIR__ . "/../controller/conexiones.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST["BtnActualizar"])) {
    $id = $_POST["id"];
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";


    $userController = new UserController();
    $user = new User();
    $user->id = $id;
    $user->username = $username;
    $user->email = $email;

    $result = $userController->update($user);

    if ($result) {
        header("Location: PaginaPrincipal.php");
    } else {
        echo "Error al actualizar al usuario";
    }
}
?>