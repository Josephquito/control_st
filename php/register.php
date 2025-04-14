<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conexion = new mysqli("localhost", "jotadlub1_joseph", "Ellayyo.123@", "jotadlub1_app_jotavix_db");

if ($conexion->connect_error) {
    die("Error de conexion: " . $conexion->connect_error);
}

$nombre = $_POST['name'];
$email = $_POST['email'];
$clave = password_hash($_POST['password'], PASSWORD_DEFAULT);
$telefono = $_POST['telefono'];

$sql = "INSERT INTO usuarios (nombre, correo, clave, telefono) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssss", $nombre, $email, $clave, $telefono);

if ($stmt->execute()) {
    header("Location: ../login.html");
    exit();
} else {
    echo "Error" . $stmt->error;
}

$stmt->close();
$conexion->close();

?>