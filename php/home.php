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
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h2><?php echo $_SESSION['usuario']; ?></h2>
            </div>
        <nav class="menu">
            <a class="nav-link" href="#">
                <div class="icon-container">
                    <img src="../assets/inicio.png" alt="Inicio" class="icon"> 
                    <span class="tooltip-text">Inicio</spann>
                </div>
            </a>
            <a class="nav-link" href="#" data-colapsar="true">
                <img src="../assets/cuentas.png" alt="Cuentas" class="icon"> 
                <span class="tooltip-text">Cuentas</span>
            </a>
            <a class="nav-link" href="#">
                <img src="../assets/notificaciones.png" alt="Notificaciones" class="icon"> 
                <span class="tooltip-text">Notificaciones</span>
            </a>
            <a class="nav-link" href="#" data-colapsar="true">
                <img src="../assets/clientes.png" alt="Clientes" class="icon"> 
                <span class="tooltip-text">Clientes</span>
            </a>
            <a class="nav-link" href="#">
                <img src="../assets/ganancias.png" alt="Ganancias" class="icon"> 
                <span class="tooltip-text">Ganancias</span>
            </a>
        </nav>
            <div class="sidebar-bottom">
                <a class="nav-link" href="#">
                    <img src="../assets/menu.png" alt="Menu" class="icon"> 
                    <span class="tooltip-text">Más</span>
                </a>
            </div>
        </div>
        <script src="../scripts/scripts.js"></script>
    </body>
</html>