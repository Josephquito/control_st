<?php
session_start();
include('conexion.php');

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../login.html");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$plataforma_id = $_POST['plataforma_id'] ?? null;
$password = $_POST['password'] ?? '';

// Verificar contraseña del usuario
$sql = "SELECT clave FROM usuarios WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$stmt->bind_result($clave_guardada);
$stmt->fetch();
$stmt->close();

if (!password_verify($password, $clave_guardada)) {
    // Contraseña incorrecta
    header("Location: cuentas.php?plataforma_id=$plataforma_id&error=clave");
    exit();
}

// Verificar si la plataforma es del usuario
$sql = "SELECT id FROM plataformas WHERE id = ? AND usuario_id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ii", $plataforma_id, $usuario_id);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $delete = $conexion->prepare("DELETE FROM plataformas WHERE id = ?");
    $delete->bind_param("i", $plataforma_id);
    $delete->execute();
    $delete->close();
}

$stmt->close();
$conexion->close();

header("Location: cuentas.php");
exit();
?>
