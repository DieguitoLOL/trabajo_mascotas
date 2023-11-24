<?php
session_start();
require_once(__DIR__."/../controller/conexiones.php");
require_once(__DIR__."/../model/Vacuna.model.php");
require_once(__DIR__."/../controller/vacuna.controller.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["btnRegistrarvacuna"])) {
    $conn = Conexion::conectar();
    $vacunaModel = new vacuna();
    $nameVacuna = $conn -> real_escape_string($_POST['NameVacuna']);
    $checkQuery = "SELECT * FROM Vacuna WHERE nombre = '$nameVacuna'";
    $result = $conn -> query($checkQuery);

    if ($result) {
        (new VacunaController) ->create($vacunaModel);
        $conn->close();
        header("location: MostrarMascotas.php");
    }
}