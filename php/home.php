<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-sacale=1.0">
        <title>Control Streaming</title>
        <link rel="stylesheet" href="../styles/styles.css"> 
    </head>
    <body>
        <header>
            <a href="logout.php">Cerrar sesión</a>
            <h1>Sistema de cuentas de Streaming</h1>
            <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?> 🎉</h2>
        </header>
    </body>
</html>