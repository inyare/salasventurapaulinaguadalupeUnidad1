<?php
session_start();

$errores = [];
$mensaje_exito = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $robot = isset($_POST['robot']) && $_POST['robot'] === 'on';

    // Validación Backend
    if (empty(trim($email)) || empty($password) || empty($confirm_password)) {
        $errores[] = "Todos los campos son obligatorios.";
    }

    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del correo electrónico es inválido.";
    }

    if (!empty($password) && strlen($password) < 8) {
        $errores[] = "La nueva contraseña debe tener al menos 8 caracteres.";
    }

    if ($password !== $confirm_password) {
        $errores[] = "Las contraseñas no coinciden.";
    }

    if (!$robot) {
        $errores[] = "Debes confirmar que no eres un robot.";
    }

    if (empty($errores)) {
        // Simular éxito de recuperación
        $mensaje_exito = "¡Contraseña restablecida con éxito! Se ha enviado un enlace de confirmación a tu correo (simulación). Ya puedes iniciar sesión con tu nueva contraseña.";
        $email = '';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Unidos por Ellos - Recuperar Contraseña</title>
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
        <h2 class="text-center mb-3">Recuperar Contraseña</h2>
        <p class="text-center mb-3" style="color: #666;">Ingresa tu correo registrado para restablecer tu contraseña.</p>

        <!-- Mensaje de Éxito -->
        <?php if (!empty($mensaje_exito)): ?>
            <div class="alert alert-success">
                <?php echo htmlspecialchars($mensaje_exito); ?>
            </div>
        <?php endif; ?>

        <!-- Errores Backend -->
        <?php if (!empty($errores)): ?>
            <div class="alert alert-danger">
                <ul style="margin-left: 15px;">
                    <?php foreach ($errores as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="recuperar.php" method="POST">
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Ej. tu@correo.com" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Nueva Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Mínimo 8 caracteres" minlength="8" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirmar Nueva Contraseña</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Repite la nueva contraseña" minlength="8" required>
            </div>

            <!-- Checkbox de Validación Humana -->
            <label class="form-checkbox">
                <input type="checkbox" name="robot" required>
                <span>No soy un robot</span>
            </label>

            <button type="submit" class="btn-submit">Restablecer Contraseña</button>
        </form>

        <p class="text-center mt-3" style="font-size: 0.9rem;">
            ¿Recordaste tu contraseña? <a href="login.php" class="link-accion">Inicia sesión aquí</a>
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
