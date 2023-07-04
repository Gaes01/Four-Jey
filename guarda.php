<?php

require "conexion.php";


$nombres = $_POST['nombres'];
$apellidos = $mysqli->real_escape_string($_POST['apellidos']);
$torre_apto = $mysqli->real_escape_string($_POST['torre_apto']);
$correo = $mysqli->real_escape_string($_POST['correo']);
$tipo_vehiculo = $mysqli->real_escape_string($_POST['tipo_vehiculo']);
$placa = $mysqli->real_escape_string($_POST['placa']);

$sql = "INSERT INTO  parqueadero (nombres, apellidos, torre_apto, correo,
tipo_vehiculo','placa')
VALUES ('$nombres', '$apellidos', '$torre_apto','$correo','$tipo_vehiculo','$placa'";

$sql=$mysqli->query( "insert into  parqueadero (nombres,apellidos,torre_apto,correo,tipo_vehiculo,placa)values('$nombres','$apellidos','$torre_apto','$correo','$tipo_vehiculo','$placa')");
if ($sql==1) {
   echo '<div class="alert  alert-success"> Vehiculo Registrado </div>';
} else {
   
    echo '<div class="alert  alert-danger"> Error al registrar Vehiculo </div>';

}



header('Location: R_Sorteo_Parqueadero.php');
