<?php 
session_start();
include('conexion.php');

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../login.html");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];

$sql = "SELECT id, nombre FROM plataformas WHERE usuario_id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$resultado = $stmt->get_result();

$plataformas = [];

while ($fila = $resultado->fetch_assoc()) {
    $plataformas[] = $fila;
}

$plataforma_id = $_GET['plataforma_id'] ?? ($plataformas[0]['id'] ?? null);
$plataforma_actual = '';

foreach ($plataformas as $p) {
    if ($p['id'] == $plataforma_id) {
        $plataforma_actual = $p['nombre'];
        break;
    }
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
        <!-- Sidebar de plataformas -->
        <aside class="sidebar-plataformas">
            <ul class="plataforma-lista">
                <?php foreach ($plataformas as $p): ?>
                    <li class="plataforma <?= $p['id'] == $plataforma_id ? 'activa' : '' ?>">
                        <a href="?plataforma_id=<?= $p['id'] ?>"><?= $p['nombre'] ?></a>
                    </li>
                <?php endforeach; ?>    
            </ul>
            <div class="boton-plataforma">
                <button>+ Plataforma</button>
            </div>    
        </aside>
        
        <div id="modal-plataforma" class="modal">
            <div class="modal-contenido"> 
                <span class="cerrar-modal" id="cerrar-modal">&times;</span>
                <h2>Agregar nueva plataforma</h2>
                <form action="agregar_plataforma.php" method="POST">
                    <input type="text" name="nombre" placeholder="Nombre de la plataforma" required>
                    <button type="submit">Guardar</button>
                </form>
            </div>
        </div>
        <div id="modal-eliminar" class="modal">
            <div class="modal-contenido">
                <span class="cerrar-modal" onclick="cerrarModalEliminar()">&times;</span>
                <h2>Confirma tu contraseña</h2>
                <form action="eliminar_plataforma.php" method="POST">
                    <input type="hidden" name="plataforma_id" value="<?= $plataforma_id ?>">
                    <input type="password" name="password" placeholder="Tu contraseña" required>
                    <button type="submit" class="btn-eliminar">Confirmar y eliminar</button>
                </form>
            </div>
        </div>        
        
        <main class="contenido">
        <h1><?= $plataforma_actual ?></h1>
        <?php if ($plataforma_id): ?>            
             <button class="btn-eliminar" onclick="abrirModalEliminar()">🗑️ Eliminar plataforma</button>
        <?php endif; ?>
        </main>
        <script src="../scripts/scripts.js"></script>
    </body>
</html>