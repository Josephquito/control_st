<div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h2><?php echo $_SESSION['usuario']; ?></h2>
            </div>
        <nav class="menu">
            <a class="nav-link" href="home.php">
                <img src="../assets/inicio.png" alt="Inicio" class="icon"> 
                <span class="text-label">Inicio</span>
                <span class="tooltip-text">Inicio</spann>
            </a>
            <a class="nav-link" href="cuentas.php" data-colapsar="true">
                <img src="../assets/cuentas.png" alt="Cuentas" class="icon"> 
                <span class="text-label">Cuentas</span>
                <span class="tooltip-text">Cuentas</span>
            </a>
            <a class="nav-link" href="notificaciones.php">
                <img src="../assets/notificaciones.png" alt="Notificaciones" class="icon"> 
                <span class="text-label">Notificaciones</span>
                <span class="tooltip-text">Notificaciones</span>
            </a>
            <a class="nav-link" href="clientes.php" data-colapsar="true">
                <img src="../assets/clientes.png" alt="Clientes" class="icon"> 
                <span class="text-label">Clientes</span>
                <span class="tooltip-text">Clientes</span>
            </a>
            <a class="nav-link" href="ganancias.php">
                <img src="../assets/ganancias.png" alt="Ganancias" class="icon"> 
                <span class="text-label">Ganancias</span>
                <span class="tooltip-text">Ganancias</span>
            </a>
        </nav>
            <div class="nav-link dropdown-toggle" id="btn-mas">
                <img src="../assets/menu.png" alt="Menu" class="icon"> 
                <span class="text-label">Más</span>
                <span class="tooltip-text">Más</span>

                <div class="dropdown-menu" id="menu-mas">
                    <a href="perfil.php" class="dropdown-item">Mi Perfil</a>
                    <a href="../php/logout.php" class="dropdown-item">Cerrar sesión</a>
                </div>
            </div>
        </div>