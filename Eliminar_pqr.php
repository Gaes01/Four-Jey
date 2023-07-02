<?php
if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$mysqli->query(" delete from gestionpqr where  id=$id ");

    if ($sql==1){
        echo '<div class="alert  alert-success"> PQR Eliminada correctamente </div>';
    }else {
        echo '<div class="alert  alert-danger"> Error al eliminar </div>';


    }




}

?>