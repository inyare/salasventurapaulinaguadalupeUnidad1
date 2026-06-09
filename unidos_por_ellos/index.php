<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fundación Unidos por Ellos: rescatamos animales y apoyamos a personas en situación de calle. Únete a nuestra comunidad solidaria.">
    <title>Fundación Unidos por Ellos - Inicio</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<header>
    <div class="header-container">
        <div class="site-logo">
            <a href="index.php">
                <img src="assets/logo-unidos-por-ellos.png" alt="Logo Fundación Unidos por Ellos" class="site-logo-img">
            </a>
        </div>

        <!-- Buscador Visual -->
        <div class="search-box-container">
            <form action="#" method="GET" class="search-box" onsubmit="event.preventDefault();">
                <input type="text" placeholder="Buscar en el sitio..." aria-label="Buscar">
                <button type="button" aria-label="Buscar">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                        <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                    </svg>
                </button>
            </form>
        </div>

        <!-- Botón Hamburguesa (solo móvil) -->
        <button class="hamburger-btn" id="hamburger-btn" aria-label="Abrir menú" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav id="main-nav">
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

<div class="ticker-wrap">
    <div class="ticker">
        <span class="ticker-item">UNIDOS POR ELLOS ✦ UNIENDO MANOS Y PATITAS ✦ RESCATE Y REFUGIO ✦ SEGUNDAS OPORTUNIDADES ✦ ALIMENTACIÓN Y EMPATÍA ✦</span>
        <span class="ticker-item">UNIDOS POR ELLOS ✦ UNIENDO MANOS Y PATITAS ✦ RESCATE Y REFUGIO ✦ SEGUNDAS OPORTUNIDADES ✦ ALIMENTACIÓN Y EMPATÍA ✦</span>
    </div>
</div>

<main>
    <!-- Mensaje de bienvenida con sesión iniciada -->
    <?php if (isset($_SESSION['usuario_sesion'])): ?>
        <div class="alert alert-success">
            ¡Qué alegría tenerte aquí de nuevo, <strong><?php echo htmlspecialchars($_SESSION['usuario_sesion']); ?></strong>! Gracias por apoyar a nuestra comunidad.
            <a href="procesar_login.php?logout=1" style="text-decoration: underline; margin-left: 10px; font-weight: 700; color: #155724;">Cerrar Sesión</a>
        </div>
    <?php endif; ?>

    <!-- Banner Principal (Hero) -->
    <section class="hero-banner">
        <div class="hero-content">
            <h1>Uniendo manos y patitas para cambiar vidas</h1>
            <p>En "Unidos por Ellos" creemos firmemente que la felicidad se comparte. Por eso, dedicamos nuestro amor y esfuerzo a rescatar animales desamparados y brindar segundas oportunidades a personas en situación de calle. ¡Sé parte de este gran cambio!</p>
            <div class="hero-btns">
                <a href="contacto.php" class="hero-btn">Quiero Colaborar</a>
                <a href="index.php#nosotros" class="hero-btn-sec">Conocer más</a>
            </div>
        </div>
        <div class="hero-image-area">
            <img src="assets/imagen-principal.jpg" alt="Fundación Unidos por Ellos - Rescatando vidas" class="hero-img">
        </div>
    </section>

    <!-- Estadísticas / Impacto -->
    <section class="stats-section">
        <div class="stat-item">
            <span class="stat-num">+500</span>
            <span class="stat-label">Animales Rescatados</span>
        </div>
        <div class="stat-item">
            <span class="stat-num">+1,200</span>
            <span class="stat-label">Personas Apoyadas</span>
        </div>
        <div class="stat-item">
            <span class="stat-num">+80</span>
            <span class="stat-label">Voluntarios Activos</span>
        </div>
        <div class="stat-item">
            <span class="stat-num">5+</span>
            <span class="stat-label">Años de Impacto</span>
        </div>
    </section>

    <!-- Información General (¿Quiénes Somos?) -->
    <section class="section-block" id="quienes-somos">
        <h2 class="section-title">¿Quiénes Somos?</h2>
        <div class="split-grid">
            <div class="split-info-card">
                <h3>Cómo Convertimos Amor en Acción ✦</h3>
                <p>Somos una organización sin fines de lucro enfocada en llevar esperanza y alegría. Trabajamos codo con codo con la comunidad para rescatar animales de la calle, darles refugio y buscarles un hogar definitivo, mientras apoyamos a personas vulnerables con alimentos, ropa y herramientas para reintegrarse socialmente.</p>
                <a href="index.php#nosotros" class="hero-btn" style="margin-top: 20px; display: inline-block;">Nuestra Historia</a>
            </div>
            <div class="split-images-grid">
                <img src="assets/voluntariado-1.jpg" alt="Nuestra comunidad trabajando" class="split-img">
                <img src="assets/perro-rescatado.jpg" alt="Perrito rescatado" class="split-img">
                <img src="assets/voluntariado-2.jpg" alt="Voluntarios en acción" class="split-img">
            </div>
        </div>
    </section>

    <!-- Tarjetas de Ayuda a Animales -->
    <section class="section-block">
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
    <section class="section-block">
        <h2 class="section-title">Nuestra Ayuda a Personas</h2>
        <div class="cards-grid">
            <div class="card amarillo">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11 9H9V2H7v7H5V2H3v7c0 2.12 1.66 3.84 3.75 3.97V22h2.5v-9.03C11.34 12.84 13 11.12 13 9V2h-2v7zm8-3h-3v14h-2V2c0 2.21 1.79 4 4 4z"/></svg>
                </div>
                <h3>Alimentación y Aseo</h3>
                <p>Ofrecemos comidas calientes diarias y acceso a duchas para mantener la dignidad de las personas.</p>
            </div>
            <div class="card azul">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm9 7h-6v13h-2v-6h-2v6H9V9H3V7h18v2z"/></svg>
                </div>
                <h3>Entrega de Ropa y Abrigo</h3>
                <p>Colectamos y distribuimos mantas, abrigos y ropa limpia para protegerlos del frío.</p>
            </div>
            <div class="card verde">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.3C.5 6.7.9 9.8 2.9 11.8c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.4-2.4c.4-.4.4-1.1 0-1.4z"/></svg>
                </div>
                <h3>Capacitación e Inserción</h3>
                <p>Ofrecemos talleres sencillos y apoyo psicológico para facilitar su reinserción en el mundo laboral.</p>
            </div>
        </div>
    </section>

    <!-- Sección de Nosotros -->
    <section id="nosotros" class="section-block">
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

    <!-- Sección de Programas -->
    <section id="programas" class="section-block">
        <h2 class="section-title">Nuestros Programas</h2>
        <p style="margin-bottom: 35px; text-align: center; font-size: 1.1rem; font-weight: 500;">Impulsamos dos grandes programas permanentes que canalizan toda nuestra ayuda de forma organizada:</p>
        <div class="cards-grid programas-grid">
            <div class="card verde programas-card">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                </div>
                <h3>Programa Huellas Felices</h3>
                <p>Rescate, rehabilitación clínica, esterilización masiva y campañas de adopción de perritos y gatitos abandonados en áreas urbanas.</p>
                <img src="assets/programa-huellas-felices.jpg" alt="Programa Huellas Felices" class="programa-img">
            </div>
            <div class="card rosa programas-card">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                </div>
                <h3>Programa Manos Amigas</h3>
                <p>Rutas de acompañamiento, comedores comunitarios móviles, brigadas de salud básica y talleres ocupacionales para personas en exclusión social.</p>
                <img src="assets/programa-manos-amigas.jpg" alt="Programa Manos Amigas" class="programa-img">
            </div>
        </div>
    </section>

    <!-- Sección de Eventos -->
    <section class="section-block">
        <h2 class="section-title">Próximos Eventos</h2>
        <div class="cards-grid">
            <div class="card amarillo">
                <span class="badge-fecha">Sábado 13 de Junio</span>
                <h3>Gran Jornada de Adopción</h3>
                <p>Ven al Parque Central a conocer a los perritos rescatados que buscan un hogar. ¡Habrá música y sorpresas!</p>
                <a href="contacto.php" class="card-link">Más información →</a>
            </div>
            <div class="card azul">
                <span class="badge-fecha">Viernes 19 de Junio</span>
                <h3>Colecta Anual de Alimentos</h3>
                <p>Estaremos en los supermercados de la ciudad recibiendo croquetas y alimentos no perecederos para nuestros comedores.</p>
                <a href="contacto.php" class="card-link">Más información →</a>
            </div>
            <div class="card verde">
                <span class="badge-fecha">Domingo 28 de Junio</span>
                <h3>Taller de Ropa de Abrigo</h3>
                <p>Acompáñanos a tejer y confeccionar mantas y abrigos que repartiremos en la próxima brigada nocturna.</p>
                <a href="contacto.php" class="card-link">Más información →</a>
            </div>
        </div>
    </section>

    <!-- Sección de Testimonios -->
    <section class="section-block">
        <h2 class="section-title">Historias de Esperanza</h2>
        <div class="cards-grid">
            <div class="card rosa testimonio-card">
                <span class="testimonio-icono">💬</span>
                <p class="testimonio-texto">"Gracias a la fundación encontré a mi perrito Toby. Llegó asustado, pero hoy es el alma de la casa. Adoptar cambió mi vida y la suya."</p>
                <h4 class="testimonio-autor">— Lucía M., Adoptante</h4>
            </div>
            <div class="card amarillo testimonio-card">
                <span class="testimonio-icono">💬</span>
                <p class="testimonio-texto">"El taller de panadería me dio la motivación que había perdido tras años en la calle. Hoy tengo un empleo y un cuarto propio."</p>
                <h4 class="testimonio-autor">— Carlos R., Beneficiario</h4>
            </div>
            <div class="card verde testimonio-card">
                <span class="testimonio-icono">💬</span>
                <p class="testimonio-texto">"Ser voluntario aquí te abre los ojos. Ver la colita feliz de un perro al comer o la sonrisa de agradecimiento de una persona vale todo el esfuerzo."</p>
                <h4 class="testimonio-autor">— Andrea P., Voluntaria</h4>
            </div>
        </div>
    </section>

    <!-- Sección CTA (Llamada a la Acción) -->
    <section class="cta-section">
        <div class="cta-icon">🐾</div>
        <h2>¿Listo para marcar la diferencia?</h2>
        <p>Tu apoyo puede cambiar el destino de un animal sin hogar o dar una nueva oportunidad a una persona en situación de calle. Cada pequeña ayuda cuenta.</p>
        <div class="cta-btns">
            <a href="contacto.php" class="cta-btn">¡Quiero Colaborar!</a>
            <a href="registro.php" class="cta-btn-outline">Registrarme</a>
        </div>
    </section>
</main>

<footer>
    <div class="footer-content">
        <div class="footer-logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                <circle cx="4.5" cy="9.5" r="2" />
                <circle cx="9" cy="5.5" r="2" />
                <circle cx="15" cy="5.5" r="2" />
                <circle cx="19.5" cy="9.5" r="2" />
                <path d="M12 10.5c-1.8 0-3.5 1.5-3.5 3.5s2.5 5 3.5 6c1-1 3.5-4 3.5-6s-1.7-3.5-3.5-3.5z"/>
            </svg>
            <span>Unidos por Ellos</span>
        </div>
        <p class="footer-copy">&copy; 2026 Fundación Unidos por Ellos. ¡Ayudando con amor y alegría!</p>
        <div class="footer-links">
            <a href="index.php">Inicio</a>
            <a href="contacto.php">Contacto</a>
            <a href="ayuda.php">Preguntas Frecuentes</a>
            <a href="sitemap.php">Mapa del Sitio</a>
            <a href="registro.php">Registrarse</a>
            <a href="login.php">Iniciar Sesión</a>
        </div>
        <p class="footer-tagline">Rescatando vidas, una patita a la vez 🐾</p>
    </div>
</footer>

<script>
    // Menú Hamburguesa
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mainNav = document.getElementById('main-nav');

    hamburgerBtn.addEventListener('click', function () {
        const isOpen = mainNav.classList.toggle('nav-open');
        hamburgerBtn.classList.toggle('is-active');
        hamburgerBtn.setAttribute('aria-expanded', isOpen);
    });

    // Cerrar menú al hacer clic en un enlace (en móvil)
    document.querySelectorAll('.nav-menu a').forEach(link => {
        link.addEventListener('click', () => {
            mainNav.classList.remove('nav-open');
            hamburgerBtn.classList.remove('is-active');
            hamburgerBtn.setAttribute('aria-expanded', false);
        });
    });
</script>

</body>
</html>
