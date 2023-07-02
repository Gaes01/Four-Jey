<?php
if (!empty($_POST["btnregistrar"])){
   if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["torre_apto"]) and !empty($_POST["correo"]) and !empty($_POST["telefono"])and !empty($_POST["comentario"])){

        $id=$_POST["id"];
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $torre_apto=$_POST["torre_apto"];
        $correo=$_POST["correo"];
        $telefono=$_POST["telefono"];
        $comentario=$_POST["comentario"];
        $sql=$mysqli->query( "update gestionpqr set nombres='$nombres', apellidos='$apellidos',torre_apto='$torre_apto',correo='$correo', telefono='$telefono', comentario='$comentario' where id=$id");
        
        if ($sql==1) {
           header ( "location: pqr.php" );
        } else {
            echo "<div class='alert  alert-danger'> PQR Registrado Error al registrar PQR </div>";
        }
        
        
    
    
        }else {
            echo "Algunos de los campos estan vacios";
        }
        
    }


?>