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
    <body>
        <div class="sidebar">
            <div class="sidebar-header">
                <h2><?php echo $_SESSION['usuario']; ?><h2>
            </div>
        <nav class="menu">
            <a class="nav-link" href="#">
                <img src="../assets/inicio.png" alt="Inicio" class="icon"> Inicio
            </a>
            <a class="nav-link" href="#">
                <img src="../assets/cuentas.png" alt="Cuentas" class="icon"> Cuentas
            </a>
            <a class="nav-link" href="#">
                <img src="../assets/notificaciones.png" alt="Notificaciones" class="icon"> Notificaciones
            </a>
            <a class="nav-link" href="#">
                <img src="../assets/clientes.png" alt="Clientes" class="icon"> Clientes
            </a>
            <a class="nav-link" href="#">
                <img src="../assets/ganancias.png" alt="Ganancias" class="icon"> Ganancias
            </a>
        </nav>
            <div class="sidebar-bottom">
                <a class="nav-link" href="#">
                    <img src="../assets/menu.png" alt="Menu" class="icon"> Más
                </a>
            </div>
        </div>
    </body>
</html>