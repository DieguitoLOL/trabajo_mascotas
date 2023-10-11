<?php 
$mysqli = new mysqli("SERVER","USER","PASS","DATABASE","PORT");
if ($mysql->connect_errno) {
    echo "Fallo la conexion a la base de datos:(". $mysql->connect_errno .") " . $mysql->connect_error;
}
echo $mysqli->host_info . "\n";
?>