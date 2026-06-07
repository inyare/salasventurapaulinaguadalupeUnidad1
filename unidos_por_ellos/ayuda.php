<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Unidos por Ellos - Ayuda / FAQ</title>
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
    <section class="section-block blue-border">
        <h2 class="section-title">Preguntas Frecuentes (FAQ)</h2>
        <p class="text-center mb-3" style="color: #666; max-width: 700px; margin: 0 auto 30px;">
            ¿Tienes dudas sobre cómo colaboramos en la fundación? Aquí tienes respuestas rápidas a las consultas más comunes.
        </p>

        <div style="max-width: 800px; margin: 0 auto;">
            <!-- Pregunta 1 -->
            <details class="faq-item">
                <summary>¿Cómo puedo adoptar una mascota?</summary>
                <div class="faq-content">
                    <p>El proceso es muy sencillo pero responsable: 
                    1. Revisa nuestras campañas de adopción en la página de inicio o redes sociales.
                    2. Completa nuestro formulario de contacto solicitando una entrevista de adopción.
                    3. Agendamos una visita para que conozcas al animalito.
                    4. Firmamos un acuerdo de adopción responsable con seguimiento periódico.</p>
                </div>
            </details>

            <!-- Pregunta 2 -->
            <details class="faq-item">
                <summary>¿Cómo puedo colaborar si no cuento con recursos económicos?</summary>
                <div class="faq-content">
                    <p>¡Tu tiempo y cariño valen muchísimo! Puedes unirte como voluntario para pasear a los perros del refugio, colaborar en el reparto nocturno de comidas, ayudar a difundir nuestras publicaciones en redes sociales o donar ropa y mantas usadas en buen estado.</p>
                </div>
            </details>

            <!-- Pregunta 3 -->
            <details class="faq-item">
                <summary>¿Dónde puedo entregar donaciones físicas?</summary>
                <div class="faq-content">
                    <p>Recibimos alimentos no perecederos, alimento para mascotas (croquetas), mantas, abrigos y artículos de higiene en nuestro centro comunitario de lunes a viernes de 9:00 a 17:00. Ponte en contacto con nosotros a través del formulario si requieres que vayamos a recoger una donación grande.</p>
                </div>
            </details>

            <!-- Pregunta 4 -->
            <details class="faq-item">
                <summary>¿Cómo apoyan a las personas en situación de calle?</summary>
                <div class="faq-content">
                    <p>Contamos con rutas nocturnas de acompañamiento donde entregamos alimentos calientes y abrigo. Además, en nuestro centro ofrecemos acceso a duchas, ropa limpia, atención psicológica básica y talleres ocupacionales para ayudarles a desarrollar habilidades y reincorporarse laboralmente.</p>
                </div>
            </details>

            <!-- Pregunta 5 -->
            <details class="faq-item">
                <summary>¿Puedo realizar mi servicio social en la fundación?</summary>
                <div class="faq-content">
                    <p>¡Por supuesto! Tenemos convenios con varias preparatorias y universidades. Puedes apoyar en áreas administrativas, cuidado animal, logística de eventos o apoyo educativo para los beneficiarios. Escríbenos en el formulario de contacto para darte más detalles.</p>
                </div>
            </details>
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
