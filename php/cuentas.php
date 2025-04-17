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
        <!-- Sidebar de plataformas -->
        <aside class="sidebar-plataformas"
            <ul class="plataforma-lista">
              <li class="plataforma activa">Canva</li>
              <li class="plataforma">Crunchyroll</li>
              <li class="plataforma">Disney</li>  
              <li class="plataforma">Flujo Tv</li>  
              <li class="plataforma">IPTV</li>  
              <li class="plataforma">Max</li>  
              <li class="plataforma">Netflix</li>  
              <li class="plataforma">Prime Video</li>  
              <li class="plataforma">Spotify</li>  
              <li class="plataforma">Youtube</li>    
            </ul>
            <div class="boton-plataforma">
                <button>+ Plataforma</button>
            </div>    
        </aside>
        <main class="contenido">
        <h1>Cuentas</h1>
        </main>
        <script src="../scripts/scripts.js"></script>
    </body>
</html>