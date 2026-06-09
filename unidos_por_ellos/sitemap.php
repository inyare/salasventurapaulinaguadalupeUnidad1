<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Unidos por Ellos - Mapa del Sitio</title>
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
    <section class="section-block yellow-border">
        <h2 class="section-title">Mapa del Sitio (Sitemap)</h2>

        <div class="sitemap-container">
            <!-- Categoría 1: Secciones Principales -->
            <div class="sitemap-category primary">
                <h3>Secciones Principales</h3>
                <ul class="sitemap-list">
                    <li>
                        <a href="index.php">Inicio</a>
                        <p style="font-size: 0.85rem; margin-top: 4px; color: #4a4a4a;">Página principal con banner de bienvenida y resumen de la fundación.</p>
                    </li>
                    <li>
                        <a href="index.php#nosotros">Nosotros</a>
                        <p style="font-size: 0.85rem; margin-top: 4px; color: #4a4a4a;">Información sobre nuestra historia, misión y visión institucional.</p>
                    </li>
                    <li>
                        <a href="index.php#programas">Programas</a>
                        <p style="font-size: 0.85rem; margin-top: 4px; color: #4a4a4a;">Nuestros dos programas: "Huellas Felices" y "Manos Amigas".</p>
                    </li>
                    <li>
                        <a href="contacto.php">Contacto</a>
                        <p style="font-size: 0.85rem; margin-top: 4px; color: #4a4a4a;">Formulario para enviarnos comentarios o dudas.</p>
                    </li>
                </ul>
            </div>

            <!-- Categoría 2: Secciones Secundarias -->
            <div class="sitemap-category secondary">
                <h3>Secciones Secundarias</h3>
                <ul class="sitemap-list">
                    <li>
                        <a href="registro.php">Registro</a>
                        <p style="font-size: 0.85rem; margin-top: 4px; color: #4a4a4a;">Formulario de creación de cuenta con validaciones.</p>
                    </li>
                    <li>
                        <a href="login.php">Inicio de Sesión</a>
                        <p style="font-size: 0.85rem; margin-top: 4px; color: #4a4a4a;">Acceso al portal con credenciales de usuario.</p>
                    </li>
                    <li>
                        <a href="recuperar.php">Recuperar Contraseña</a>
                        <p style="font-size: 0.85rem; margin-top: 4px; color: #4a4a4a;">Formulario de recuperación (simulación de restablecimiento).</p>
                    </li>
                    <li>
                        <a href="ayuda.php">Ayuda (FAQ)</a>
                        <p style="font-size: 0.85rem; margin-top: 4px; color: #4a4a4a;">Preguntas y respuestas frecuentes interactivas.</p>
                    </li>
                </ul>
            </div>

            <!-- Categoría 3: Elementos Adicionales -->
            <div class="sitemap-category additional">
                <h3>Elementos Adicionales</h3>
                <ul class="sitemap-list">
                    <li>
                        <a href="buzon.php">Buzón de Mensajes</a>
                        <p style="font-size: 0.85rem; margin-top: 4px; color: #4a4a4a;">Bandeja temporal que muestra los mensajes de contacto en sesión.</p>
                    </li>
                    <li>
                        <a href="index.php">Buscador Visual</a>
                        <p style="font-size: 0.85rem; margin-top: 4px; color: #4a4a4a;">Barra de búsqueda estética no funcional en la cabecera.</p>
                    </li>
                    <li>
                        <a href="sitemap.php">Mapa del Sitio</a>
                        <p style="font-size: 0.85rem; margin-top: 4px; color: #4a4a4a;">Esquema gráfico estructurado del sitio (esta página).</p>
                    </li>
                    <li>
                        <a href="error404.php">Página 404</a>
                        <p style="font-size: 0.85rem; margin-top: 4px; color: #4a4a4a;">Página de error amigable personalizada ante rutas caídas.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
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
