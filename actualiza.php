<?php

require "conexion.php";


$id = $mysqli->real_escape_string($_POST['id']);
$nombres = $mysqli->real_escape_string($_POST['nombres']);
$apellidos = $mysqli->real_escape_string($_POST['apellidos']);
$torre_apto = $mysqli->real_escape_string($_POST['torre_apto']);
$correo = $mysqli->real_escape_string($_POST['correo']);
$tipo_vehiculo = $mysqli->real_escape_string($_POST['tipo_vehiculo']);
$placa = $mysqli->real_escape_string($_POST['placa']);

$sql=$mysqli->query = "UPDATE  parqueadero 
SET nombres='$nombres', apellidos='$apellidos',torre_apto='$torre_apto',correo='$correo', tipo_vehiculo='$tipo_vehiculo', placa='$placa' WHERE id=$id";

if ($sql==1) {
}
 

header('Location: R_Sorteo_Parqueadero.php');
