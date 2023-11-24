<?php
require_once(__DIR__ ."/../controller/mascota.controller.php");
require_once(__DIR__ . "/../controller/conexiones.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST["BtnActualizar"])) {
    $id = $_POST["id"];
    $name =  isset($_POST["name"]) ? $_POST["name"] : "";
    $time = isset($_POST["time"]) ? $_POST["time"] : "";
    $user = isset($_POST["user"]) ? $_POST["user"] : "";
    $tipePet = isset($_POST["tipePet"]) ? $_POST["tipePet"] : "";
    $tipeRaza = isset($_POST["tipeRaza"]) ? $_POST["tipeRaza"] : "";

    $MascotaController = new MascotaController();
    $mascotas = new mascotas();
    $mascotas->id = $id;
    $mascotas->nombre = $name;
    $mascotas->FechaNacimiento = $time;
    $mascotas->User_id = $user;

    $result = $MascotaController->update($mascota);

    if ($result) {
        header("Location: MostrarMascotas.php");
    } else {
        echo "Error al actualizar la mascota";
    }
}
?>