<?php
session_start();
include('conexion.php');

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../login.html");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$nombre = trim($_POST['nombre']);

if (empty($nombre)) {
    die("El nombre de la plataforma no puede estar vacío.");
}

$sql_check = "SELECT id FROM plataformas WHERE nombre = ? AND usuario_id = ?";
$stmt_check = $conexion->prepare($sql_check);
$stmt_check->bind_param("si", $nombre, $usuario_id);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows > 0) {
    header("Location: cuentas.php?mensaje=existe");
    exit();
}
$stmt_check->close();

$sql = "INSERT INTO plataformas (nombre, usuario_id) VALUES (?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("si", $nombre, $usuario_id);

if ($stmt->execute()) {
    $nueva_id = $stmt->insert_id;
    header("Location: cuentas.php?plataforma_id=$nueva_id");
    exit();
} else {
    echo "Error al guardar la plataforma: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>