<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.html");
    exit();
}

$plataformas = [
    ["id" => 1, "nombre" => "Canva"],
    ["id" => 2, "nombre" => "Crunchyroll"],
    ["id" => 3, "nombre" => "Disney"],
    ["id" => 4, "nombre" => "Flujo TV"],
    ["id" => 5, "nombre" => "IPTV"],
];

$plataforma_id = $_GET['plataforma_id']?? $plataformas[0]['id'];
$plataforma_actual = '';

foreach ($plataformas as $p){
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

        <main class="contenido">
        <h1><?= $plataforma_actual ?></h1>
        </main>
        <script src="../scripts/scripts.js"></script>
    </body>
</html>