<?php
session_start();

// Permitir vaciar la bandeja de entrada para facilitar las pruebas académicas
if (isset($_GET['limpiar']) && $_GET['limpiar'] == 1) {
    unset($_SESSION['mensajes']);
    header("Location: buzon.php");
    exit();
}

$mensajes = $_SESSION['mensajes'] ?? [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Unidos por Ellos - Buzón de Mensajes</title>
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
    <section class="section-block green-border">
        <h2 class="section-title">Buzón de Mensajes Recibidos</h2>
        <p class="text-center mb-3" style="color: #666;">
            Aquí se listan los mensajes enviados temporalmente desde el formulario de contacto usando variables de sesión.
        </p>

        <?php if (empty($mensajes)): ?>
            <div style="text-align: center; padding: 40px 20px; background-color: var(--amarillo-pastel); border: 2px solid var(--amarillo-pastel-borde); border-radius: var(--radio-borde); margin-top: 30px;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="60" height="60" fill="#f57c00" style="margin-bottom: 15px;">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
                <h3>El buzón está vacío</h3>
                <p style="margin-top: 10px; margin-bottom: 20px;">No se ha enviado ningún mensaje todavía. ¡Escríbenos para probar el buzón!</p>
                <a href="contacto.php" class="hero-btn" style="padding: 8px 20px; font-size: 0.95rem;">Ir a Contacto</a>
            </div>
        <?php else: ?>
            <div style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                <span>Total de mensajes: <strong><?php echo count($mensajes); ?></strong></span>
                <a href="buzon.php?limpiar=1" class="hero-btn" style="background-color: #e57373; box-shadow: 0 4px 10px rgba(229,115,115,0.3); padding: 8px 18px; font-size: 0.9rem;">
                    Vaciar Buzón
                </a>
            </div>

            <div style="margin-top: 20px;">
                <?php foreach (array_reverse($mensajes) as $msg): ?>
                    <div class="message-card">
                        <div class="message-card-header">
                            <span>De: <?php echo htmlspecialchars($msg['nombre']); ?> (<?php echo htmlspecialchars($msg['email']); ?>)</span>
                            <span style="color: #666; font-size: 0.85rem;"><?php echo htmlspecialchars($msg['fecha']); ?></span>
                        </div>
                        <h4 style="margin-bottom: 10px; color: var(--color-texto-oscuro);">Asunto: <?php echo htmlspecialchars($msg['asunto']); ?></h4>
                        <div class="message-body"><?php echo htmlspecialchars($msg['mensaje']); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
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
