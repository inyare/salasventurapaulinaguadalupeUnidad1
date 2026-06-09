<?php
session_start();
require_once 'Usuario.php';
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $robot = isset($_POST['robot']) && $_POST['robot'] === 'on';

    // Guardar valores ingresados para no perderlos si hay error
    $_SESSION['form_values_registro'] = [
        'nombre' => $nombre,
        'email' => $email
    ];

    // Instanciar usuario para validar
    $usuario = new Usuario($nombre, $email, $password, $robot);
    $errores = $usuario->validarRegistro();

    // Validar coincidencia de contraseña
    if ($password !== $confirm_password) {
        $errores[] = "Las contraseñas ingresadas no coinciden.";
    }

    if (count($errores) > 0) {
        $_SESSION['errores_registro'] = $errores;
        header("Location: registro.php");
        exit();
    }

// Verificar si el correo ya existe
$sql = "SELECT id FROM usuarios WHERE email = ?";
$stmt = $conexion->prepare($sql);
$stmt->execute([$email]);

if ($stmt->rowCount() > 0) {
    $_SESSION['errores_registro'] = ["Ya existe una cuenta con ese correo."];
    header("Location: registro.php");
    exit();
}

// Guardar usuario en la base de datos
$sql = "INSERT INTO usuarios (nombre, email, password)
        VALUES (?, ?, ?)";

$stmt = $conexion->prepare($sql);

$stmt->execute([
    $nombre,
    $email,
    password_hash($password, PASSWORD_DEFAULT)
]);

    // Limpiar formulario y errores
    unset($_SESSION['form_values_registro']);
    unset($_SESSION['errores_registro']);

    $_SESSION['exito_registro'] = "¡Registro exitoso! Ahora puedes iniciar sesión.";
    header("Location: login.php");
    exit();
} else {
    header("Location: registro.php");
    exit();
}
?>
