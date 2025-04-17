<?php
session_start();
include('conexion.php');

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../login.html");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$plataforma_id = $_POST['plataforma_id'] ?? null;

if ($plataforma_id) {
    $check = $conexion->prepare("SELECT id FROM plataformas WHERE id = ? AND usuario_id = ?");
    $check->bind_param("ii", $plataforma_id, $usuario_id);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $delete = $conexion->prepare("DELETE FROM plataformas WHERE id = ?");
        $delete->bind_param("i", $plataforma_id);
        $delete->execute();
        $delete->close();
    }

    $check->close();
}

header("Location: cuentas.php");
exit();
?>
