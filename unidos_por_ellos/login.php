<?php
session_start();
$errors = $_SESSION['errores_login'] ?? [];
$form_values = $_SESSION['form_values_login'] ?? [];
$success_message = $_SESSION['exito_registro'] ?? $_SESSION['exito_login'] ?? '';

unset($_SESSION['errores_login']);
unset($_SESSION['form_values_login']);
unset($_SESSION['exito_registro']);
unset($_SESSION['exito_login']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Unidos por Ellos - Iniciar Sesión</title>
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
    <div class="form-container">
        <h2 class="text-center mb-3">Iniciar Sesión</h2>
        <p class="text-center mb-3" style="color: #666;">Ingresa para acceder a tu perfil y interactuar en el sitio.</p>

        <!-- Mensajes de Éxito -->
        <?php if (!empty($success_message)): ?>
            <div class="alert alert-success">
                <?php echo htmlspecialchars($success_message); ?>
            </div>
        <?php endif; ?>

        <!-- Errores del Backend -->
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul style="margin-left: 15px;">
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="procesar_login.php" method="POST">
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Ej. tu@correo.com" value="<?php echo htmlspecialchars($form_values['email'] ?? ''); ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Mínimo 8 caracteres" minlength="8" required>
            </div>

            <!-- Checkbox de Validación Humana -->
            <label class="form-checkbox">
                <input type="checkbox" name="robot" required>
                <span>No soy un robot</span>
            </label>

            <button type="submit" class="btn-submit">Ingresar</button>
        </form>

        <p class="text-center mt-3" style="font-size: 0.9rem;">
            ¿Olvidaste tu contraseña? <a href="recuperar.php" class="link-accion">Recupérala aquí</a>
        </p>
        <p class="text-center mt-3" style="font-size: 0.9rem;">
            ¿No tienes cuenta? <a href="registro.php" class="link-accion">Regístrate aquí</a>
        </p>
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
