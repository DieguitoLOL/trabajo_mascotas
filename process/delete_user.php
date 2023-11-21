<?php 
require_once(__DIR__ ."/../controller/conexiones.php" );
require_once(__DIR__ ."/../controller/user.controller.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST["BtnEliminar"])) {

    $id = $_POST['id'];

    $userController = new UserController();
    $user = new User();
    $user->id = $id;

    $result = $userController->delete($user);

    if ($result) {
        header("Location: PaginaPrincipal.php");
    } else {
        echo "Error al eliminar al usuario";
    }
}
