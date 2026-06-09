<?php
session_start();

$errores = [];
$mensaje_exito = '';
$nombre = '';
$email = '';
$asunto = '';
$mensaje_contenido = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $asunto = $_POST['asunto'] ?? '';
    $mensaje_contenido = $_POST['mensaje'] ?? '';
    $robot = isset($_POST['robot']) && $_POST['robot'] === 'on';

    // Validación Backend
    if (empty(trim($nombre)) || empty(trim($email)) || empty(trim($asunto)) || empty(trim($mensaje_contenido))) {
        $errores[] = "Todos los campos del formulario son obligatorios.";
    }

    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico ingresado no es válido.";
    }

    if (!$robot) {
        $errores[] = "Debes verificar que no eres un robot.";
    }

    if (empty($errores)) {
        // Inicializar bandeja si no existe
        if (!isset($_SESSION['mensajes'])) {
            $_SESSION['mensajes'] = [];
        }

        // Agregar mensaje a la sesión
        $_SESSION['mensajes'][] = [
            'nombre' => $nombre,
            'email' => $email,
            'asunto' => $asunto,
            'mensaje' => $mensaje_contenido,
            'fecha' => date('d/m/Y H:i')
        ];

        $mensaje_exito = "¡Mensaje enviado con éxito! Puedes visualizarlo en la sección de Buzón.";
        
        // Limpiar campos
        $nombre = '';
        $email = '';
        $asunto = '';
        $mensaje_contenido = '';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Unidos por Ellos - Contacto</title>
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
        <h2 class="text-center mb-3">Formulario de Contacto</h2>
        <p class="text-center mb-3" style="color: #666;">¿Tienes preguntas, sugerencias o quieres ser voluntario? ¡Escríbenos!</p>

        <!-- Mensaje de Éxito -->
        <?php if (!empty($mensaje_exito)): ?>
            <div class="alert alert-success">
                <?php echo htmlspecialchars($mensaje_exito); ?>
            </div>
        <?php endif; ?>

        <!-- Errores de validación backend -->
        <?php if (!empty($errores)): ?>
            <div class="alert alert-danger">
                <ul style="margin-left: 15px;">
                    <?php foreach ($errores as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="contacto.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre Completo</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ej. Ana Gómez" value="<?php echo htmlspecialchars($nombre); ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Ej. ana@correo.com" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>

            <div class="form-group">
                <label for="asunto">Asunto</label>
                <input type="text" id="asunto" name="asunto" class="form-control" placeholder="Ej. Consulta sobre adopciones" value="<?php echo htmlspecialchars($asunto); ?>" required>
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" class="form-control" rows="5" placeholder="Escribe aquí tu mensaje..." style="resize: vertical;" required><?php echo htmlspecialchars($mensaje_contenido); ?></textarea>
            </div>

            <!-- Checkbox de Validación Humana -->
            <label class="form-checkbox">
                <input type="checkbox" name="robot" required>
                <span>No soy un robot</span>
            </label>

            <button type="submit" class="btn-submit">Enviar Mensaje</button>
        </form>
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
