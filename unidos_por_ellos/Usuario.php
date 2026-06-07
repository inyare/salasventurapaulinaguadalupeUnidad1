<?php
class Usuario {
    private $nombre;
    private $email;
    private $password;
    private $robot;

    public function __construct($nombre = '', $email = '', $password = '', $robot = false) {
        $this->nombre = trim($nombre);
        $this->email = trim($email);
        $this->password = $password;
        $this->robot = $robot;
    }

    public function validarRegistro() {
        $errores = [];

        if (empty($this->nombre) || empty($this->email) || empty($this->password)) {
            $errores[] = "Todos los campos son obligatorios.";
        }

        if (!empty($this->email) && !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errores[] = "El formato del correo electrónico es inválido.";
        }

        if (!empty($this->password) && strlen($this->password) < 8) {
            $errores[] = "La contraseña debe tener al menos 8 caracteres.";
        }

        if (!$this->robot) {
            $errores[] = "Debes confirmar que no eres un robot.";
        }

        return $errores;
    }

    public function validarLogin() {
        $errores = [];

        if (empty($this->email) || empty($this->password)) {
            $errores[] = "El correo electrónico y la contraseña son requeridos.";
        }

        if (!empty($this->email) && !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errores[] = "El formato del correo electrónico es inválido.";
        }

        if (!empty($this->password) && strlen($this->password) < 8) {
            $errores[] = "La contraseña debe tener al menos 8 caracteres.";
        }

        if (!$this->robot) {
            $errores[] = "Debes confirmar que no eres un robot.";
        }

        return $errores;
    }
}
?>
