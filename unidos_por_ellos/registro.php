<?php
session_start();
$errors = $_SESSION['errores_registro'] ?? [];
$form_values = $_SESSION['form_values_registro'] ?? [];
unset($_SESSION['errores_registro']);
unset($_SESSION['form_values_registro']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Unidos por Ellos - Registrarse</title>
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
    <div class="form-container">
        <h2 class="text-center mb-3">Crear una Cuenta</h2>
        <p class="text-center mb-3" style="color: #666;">Únete a nuestra comunidad y ayúdanos a cambiar vidas.</p>

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

        <form action="procesar_registro.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre Completo</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ej. Juan Pérez" value="<?php echo htmlspecialchars($form_values['nombre'] ?? ''); ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Ej. juan@correo.com" value="<?php echo htmlspecialchars($form_values['email'] ?? ''); ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Mínimo 8 caracteres" minlength="8" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirmar Contraseña</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Repite tu contraseña" minlength="8" required>
            </div>

            <!-- Checkbox de Validación Humana -->
            <label class="form-checkbox">
                <input type="checkbox" name="robot" required>
                <span>No soy un robot</span>
            </label>

            <button type="submit" class="btn-submit">Registrarse</button>
        </form>

        <p class="text-center mt-3" style="font-size: 0.9rem;">
            ¿Ya tienes una cuenta? <a href="login.php" class="link-accion">Inicia sesión aquí</a>
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
