<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Unidos por Ellos - Página no encontrada</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<header>
    <div class="header-container">
        <div class="site-logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <circle cx="4.5" cy="9.5" r="2" />
                <circle cx="9" cy="5.5" r="2" />
                <circle cx="15" cy="5.5" r="2" />
                <circle cx="19.5" cy="9.5" r="2" />
                <path d="M12 10.5c-1.8 0-3.5 1.5-3.5 3.5s2.5 5 3.5 6c1-1 3.5-4 3.5-6s-1.7-3.5-3.5-3.5z"/>
            </svg>
            <span class="site-title">Fundación Unidos por Ellos</span>
        </div>
        
        <div class="search-box-container">
            <form action="#" method="GET" class="search-box" onsubmit="event.preventDefault();">
                <input type="text" placeholder="Buscar en el sitio...">
                <button type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                        <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                    </svg>
                </button>
            </form>
        </div>

        <nav>
            <ul class="nav-menu">
                <li class="nav-item"><a href="index.php">Inicio</a></li>
                <li class="nav-item"><a href="index.php#nosotros">Nosotros</a></li>
                <li class="nav-item"><a href="index.php#programas">Programas</a></li>
                <li class="nav-item"><a href="contacto.php">Contacto</a></li>
                <li class="nav-item"><a href="registro.php">Registrarse</a></li>
                <li class="nav-item"><a href="login.php">Iniciar Sesión</a></li>
                <li class="nav-item"><a href="buzon.php">Buzón</a></li>
                <li class="nav-item"><a href="ayuda.php">Ayuda</a></li>
                <li class="nav-item"><a href="recuperar.php">Recuperar</a></li>
                <li class="nav-item"><a href="sitemap.php">Mapa del Sitio</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div class="section-block pink-border text-center">
        <div class="error-404">
            <!-- Ilustración SVG amigable de perrito asombrado -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#ff8a80" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22a10 10 0 1 0 0-20 10 10 0 0 0 0 20z"/>
                <!-- Ojos -->
                <circle cx="8.5" cy="10.5" r="1" fill="#ff8a80"/>
                <circle cx="15.5" cy="10.5" r="1" fill="#ff8a80"/>
                <!-- Nariz -->
                <polygon points="12,13 10,11 14,11" fill="#ff8a80"/>
                <!-- Orejas caídas -->
                <path d="M4.5 9c-.5-2-2-1-2.5.5s0 4 2 4.5"/>
                <path d="M19.5 9c.5-2 2-1 2.5.5s0 4-2 4.5"/>
                <!-- Lengua afuera graciosa -->
                <path d="M11.5 15.5c0 1 1 1 1 0v-1h-1v1z" fill="#ff8a80"/>
                <path d="M10.5 14.5c.5.5 2.5.5 3 0" stroke-width="1"/>
            </svg>

            <h2>Error 404</h2>
            <p style="color: #666; max-width: 600px; margin: 15px auto 30px;">
                ¡Oh no! Parece que esta página se ha perdido en el parque o nunca estuvo aquí. Te sugerimos regresar a la página principal.
            </p>
            <a href="index.php" class="hero-btn">Regresar al Inicio</a>
        </div>
    </div>
</main>

<footer>
    <div class="footer-content">
        <p>&copy; 2026 Fundación Unidos por Ellos. ¡Ayudando con amor y alegría!</p>
        <div class="footer-links">
            <a href="index.php">Inicio</a>
            <a href="contacto.php">Contacto</a>
            <a href="ayuda.php">Preguntas Frecuentes</a>
            <a href="sitemap.php">Mapa del Sitio</a>
        </div>
    </div>
</footer>

</body>
</html>
