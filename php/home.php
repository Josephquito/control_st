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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Control Streaming</title>
        <link rel="stylesheet" href="/styles/styles.css"> 
    </head>
    <body class="home-body">
        <?php include('sidebar.php'); ?>
        <main class="contenido">
        <h1>Clientes</h1>
        </main>
        <script src="../scripts/scripts.js"></script>
    </body>
</html>