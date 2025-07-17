<?php

$server   = "localhost";
$username = "root";
$password = "root";
$database = "inventario3";


$mysqli = new mysqli($server, $username, $password, $database);
echo "<script>console.log('Conexion Exitosa' );</script>";

if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
}
?>
