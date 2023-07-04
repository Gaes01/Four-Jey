<?php

 $mysqli = new mysqli( "localhost", "root", "", "conjuntoresidencial" );
 $mysqli ->set_charset("utf8"); 
 
 if ($mysqli->connect_error) {
    die("Error de conexión" . $mysqli->connect_error);
}


?>