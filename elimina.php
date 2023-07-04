<?php


require "conexion.php";


$id = $mysqli->real_escape_string($_POST['id']);

$sql=$mysqli->query(" DELETE FROM parqueadero WHERE  id=$id ");

    if ($sql==1){
        echo '<div class="alert  alert-success"> PQR Eliminada correctamente </div>';
    }else {
        echo '<div class="alert  alert-danger"> Error al eliminar </div>';


    }


header('Location: R_Sortep_Parqueadero.php');