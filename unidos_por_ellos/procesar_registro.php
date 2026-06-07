<?php
session_start();
require_once 'Usuario.php';

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

    // Simular registro en la sesión
    $_SESSION['usuario_registrado'] = [
        'nombre' => $nombre,
        'email' => $email,
        'password' => $password // En un proyecto real se usaría password_hash, pero para proyecto universitario básico se mantiene simple
    ];

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
