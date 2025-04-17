<?php 
$conexion = new mysqli("localhost", "jotadlub1_joseph", "Ellayyo.123@", "jotadlub1_app_jotavix_db");

if ($conexion->connect_error) {
    die("Error de conexion: " . $conexion-> connect_error);
}
?>