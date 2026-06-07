<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Unidos por Ellos - Inicio</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<header>
    <div class="header-container">
        <div class="site-logo">
            <!-- Icono SVG amigable de patita y corazón -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <circle cx="4.5" cy="9.5" r="2" />
                <circle cx="9" cy="5.5" r="2" />
                <circle cx="15" cy="5.5" r="2" />
                <circle cx="19.5" cy="9.5" r="2" />
                <path d="M12 10.5c-1.8 0-3.5 1.5-3.5 3.5s2.5 5 3.5 6c1-1 3.5-4 3.5-6s-1.7-3.5-3.5-3.5z"/>
            </svg>
            <span class="site-title">Fundación Unidos por Ellos</span>
        </div>
        
        <!-- Buscador Visual Estético -->
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
    <!-- Mensaje de bienvenida con sesión iniciada -->
    <?php if (isset($_SESSION['usuario_sesion'])): ?>
        <div class="alert alert-success">
            ¡Qué alegría tenerte aquí de nuevo, <strong><?php echo htmlspecialchars($_SESSION['usuario_sesion']); ?></strong>! Gracias por apoyar a nuestra comunidad.
            <a href="procesar_login.php?logout=1" style="text-decoration: underline; margin-left: 10px; font-weight: 700; color: #2e7d32;">Cerrar Sesión</a>
        </div>
    <?php endif; ?>

    <!-- Banner Principal -->
    <section class="hero-banner">
        <h2>Uniendo manos y patitas para cambiar vidas</h2>
        <p>En "Unidos por Ellos" creemos firmemente que la felicidad se comparte. Por eso, dedicamos nuestro amor y esfuerzo a rescatar animales desamparados y brindar segundas oportunidades a personas en situación de calle. ¡Sé parte de este gran cambio!</p>
        <a href="contacto.php" class="hero-btn">Quiero Colaborar</a>
    </section>

    <!-- Información General -->
    <section class="section-block green-border">
        <h2 class="section-title">¿Quiénes Somos?</h2>
        <p class="text-center" style="max-width: 800px; margin: 0 auto;">Somos una organización sin fines de lucro enfocada en llevar esperanza y alegría. Trabajamos codo con codo con la comunidad para rescatar animales de la calle, darles refugio y buscarles un hogar definitivo, mientras apoyamos a personas vulnerables con alimentos, ropa y herramientas para reintegrarse socialmente.</p>
    </section>

    <!-- Tarjetas de Ayuda a Animales -->
    <section class="section-block pink-border">
        <h2 class="section-title">Nuestra Ayuda a Animales</h2>
        <div class="cards-grid">
            <div class="card verde">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                </div>
                <h3>Rescate y Refugio</h3>
                <p>Sacamos a perritos y gatitos de situaciones de peligro, dándoles un techo cálido y seguro.</p>
            </div>
            <div class="card rosa">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
                </div>
                <h3>Atención Médica</h3>
                <p>Vacunamos, esterilizamos y curamos a todos los peluditos rescatados para que estén sanos y fuertes.</p>
            </div>
            <div class="card azul">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                </div>
                <h3>Adopción Responsable</h3>
                <p>Buscamos familias amorosas dispuestas a darles un hogar y cuidarlos como parte de su vida.</p>
            </div>
        </div>
    </section>

    <!-- Tarjetas de Ayuda a Personas -->
    <section class="section-block blue-border">
        <h2 class="section-title">Nuestra Ayuda a Personas</h2>
        <div class="cards-grid">
            <div class="card amarillo">
                <div class="card-icon">
                    <!-- Icono de comida/cuchara y tenedor -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11 9H9V2H7v7H5V2H3v7c0 2.12 1.66 3.84 3.75 3.97V22h2.5v-9.03C11.34 12.84 13 11.12 13 9V2h-2v7zm8-3h-3v14h-2V2c0 2.21 1.79 4 4 4z"/></svg>
                </div>
                <h3>Alimentación y Aseo</h3>
                <p>Ofrecemos comidas calientes diarias y acceso a duchas para mantener la dignidad de las personas.</p>
            </div>
            <div class="card azul">
                <div class="card-icon">
                    <!-- Icono de ropa / camiseta -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm9 7h-6v13h-2v-6h-2v6H9V9H3V7h18v2z"/></svg>
                </div>
                <h3>Entrega de Ropa y Abrigo</h3>
                <p>Colectamos y distribuimos mantas, abrigos y ropa limpia para protegerlos del frío.</p>
            </div>
            <div class="card verde">
                <div class="card-icon">
                    <!-- Icono de herramientas / trabajo -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.3C.5 6.7.9 9.8 2.9 11.8c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.4-2.4c.4-.4.4-1.1 0-1.4z"/></svg>
                </div>
                <h3>Capacitación e Inserción</h3>
                <p>Ofrecemos talleres sencillos y apoyo psicológico para facilitar su reinserción en el mundo laboral.</p>
            </div>
        </div>
    </section>

    <!-- Sección de Nosotros (Ancla) -->
    <section id="nosotros" class="section-block yellow-border">
        <h2 class="section-title">Sobre Nosotros</h2>
        <div class="nosotros-cols">
            <div class="nosotros-card">
                <h3>Nuestra Historia</h3>
                <p>Nacimos en el año 2020 de la mano de un pequeño grupo de vecinos conmovidos por la situación de vulnerabilidad en nuestras calles. Lo que comenzó como salidas nocturnas para repartir mantas y comida se convirtió en una fundación constituida que hoy en día integra a decenas de voluntarios comprometidos.</p>
            </div>
            <div class="nosotros-card mision">
                <h3>Misión</h3>
                <p>Transformar la vida de animales sin hogar y personas en situación de calle mediante acciones directas de asistencia, rescate, concientización e inclusión social, sembrando semillas de esperanza en el corazón de nuestra comunidad.</p>
            </div>
            <div class="nosotros-card vision">
                <h3>Visión</h3>
                <p>Ser un referente nacional de solidaridad, empatía e integración comunitaria, logrando un entorno donde ningún ser vivo sufra de abandono, frío o hambre en las calles.</p>
            </div>
        </div>
    </section>

    <!-- Sección de Programas (Ancla) -->
    <section id="programas" class="section-block green-border">
        <h2 class="section-title">Nuestros Programas</h2>
        <p style="margin-bottom: 25px; text-align: center;">Impulsamos dos grandes programas permanentes que canalizan toda nuestra ayuda de forma organizada:</p>
        <div class="cards-grid">
            <div class="card verde" style="grid-column: span 1;">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                </div>
                <h3>Programa Huellas Felices</h3>
                <p style="font-size: 0.95rem;">Rescate, rehabilitación clínica, esterilización masiva y campañas de adopción de perritos y gatitos abandonados en áreas urbanas.</p>
            </div>
            <div class="card rosa" style="grid-column: span 1;">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                </div>
                <h3>Programa Manos Amigas</h3>
                <p style="font-size: 0.95rem;">Rutas de acompañamiento, comedores comunitarios móviles, brigadas de salud básica y talleres ocupacionales para personas en exclusión social.</p>
            </div>
        </div>
    </section>

    <!-- Sección de Eventos (Solo Visual) -->
    <section class="section-block pink-border">
        <h2 class="section-title">Próximos Eventos</h2>
        <div class="cards-grid">
            <div class="card amarillo">
                <span style="font-size: 0.85rem; font-weight: bold; text-transform: uppercase; color: #f57c00;">Sábado 13 de Junio</span>
                <h3>Gran Jornada de Adopción</h3>
                <p>Ven al Parque Central a conocer a los perritos rescatados que buscan un hogar. ¡Habrá música y sorpresas!</p>
            </div>
            <div class="card azul">
                <span style="font-size: 0.85rem; font-weight: bold; text-transform: uppercase; color: #1976d2;">Viernes 19 de Junio</span>
                <h3>Colecta Anual de Alimentos</h3>
                <p>Estaremos en los supermercados de la ciudad recibiendo croquetas y alimentos no perecederos para nuestros comedores.</p>
            </div>
            <div class="card verde">
                <span style="font-size: 0.85rem; font-weight: bold; text-transform: uppercase; color: #388e3c;">Domingo 28 de Junio</span>
                <h3>Taller de Ropa de Abrigo</h3>
                <p>Acompáñanos a tejer y confeccionar mantas y abrigos que repartiremos en la próxima brigada nocturna.</p>
            </div>
        </div>
    </section>

    <!-- Sección de Testimonios (Solo Visual) -->
    <section class="section-block blue-border">
        <h2 class="section-title">Historias de Esperanza</h2>
        <div class="cards-grid">
            <div class="card rosa">
                <p style="font-style: italic;">"Gracias a la fundación encontré a mi perrito Toby. Llegó asustado, pero hoy es el alma de la casa. Adoptar cambió mi vida y la suya."</p>
                <h4 style="margin-top: 10px;">— Lucía M., Adoptante</h4>
            </div>
            <div class="card amarillo">
                <p style="font-style: italic;">"El taller de panadería me dio la motivación que había perdido tras años en la calle. Hoy tengo un empleo y un cuarto propio."</p>
                <h4 style="margin-top: 10px;">— Carlos R., Beneficiario</h4>
            </div>
            <div class="card verde">
                <p style="font-style: italic;">"Ser voluntario aquí te abre los ojos. Ver la colita feliz de un perro al comer o la sonrisa de agradecimiento de una persona vale todo el esfuerzo."</p>
                <h4 style="margin-top: 10px;">— Andrea P., Voluntaria</h4>
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
