<?php
session_start();
require_once(__DIR__."/../controller/conexiones.php");
require_once(__DIR__."/../model/Mascotas.model.php");
require_once(__DIR__."/../controller/mascota.controller.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["btnRegistrar"])) {
    $conn = Conexion::conectar();
    $mascotaModel = new mascotas();

    $namePet = $conn -> real_escape_string($_POST['NamePet']);
    $timePet = $conn -> $_POST['Datetime'];
    $nombre = $conn -> real_escape_string($_POST["nombre"]);
    $tipo_mascota = $conn -> $_POST['SelectorMascota'];
    $raza = $conn -> real_escape_string($_POST['TipoRaza']);

    $checkQuery = "SELECT * FROM mascotas WHERE nombre = '$namePet' and FechaNacimiento = '$timePet' and User_id = '$nombre' and TipoMascota_id = '$tipo_mascota' and Raza_id = '$raza'";
    $result = $conn -> query($checkQuery);

    if ($result -> num_rows > 0) {
        echo"<script>alert('Este registro ya existe, vuelva a la pantalla de vacunas');</script>";
    }
    else {
        (new MascotaController) ->create($mascotaModel);
        $conn->close();
        header("location: index.php");
    }
}