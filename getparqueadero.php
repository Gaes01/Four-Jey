<?php


require 'conexion.php';

$id = $mysqli->real_escape_string($_POST['id']);

$sql = "SELECT id, nombres, apellidos, torre_apto, correo, tipo_vehiculo, placa FROM parqueadero WHERE id=$id LIMIT 1";
$resultado = $mysqli->query($sql);
$rows = $resultado->num_rows;

$parqueadero = [];

if ($rows > 0) {
    $parqueadero = $resultado->fetch_array();
}

echo json_encode($parqueadero, JSON_UNESCAPED_UNICODE);

?>