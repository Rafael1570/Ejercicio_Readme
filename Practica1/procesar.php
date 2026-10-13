<?php

    session_start();

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $edad = $_POST["edad"];



    if (empty(trim($nombre))) {
        echo "El nombre no puede estar vacío.";
    }


    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "El correo no tiene un formato válido.";
    }


    if (!is_numeric($edad) || $edad < 18) {
        echo "Debes tener 18 años o más.";
    }


    if (empty($errores)) {
        echo "<h1>¡Bienvenido!</h1>";
        echo "<p>Hola, " . htmlspecialchars($nombre) . ".</p>";
        echo "<p>Tu correo es: " . htmlspecialchars($correo) . "</p>";
        echo "<p>Tienes " . htmlspecialchars($edad) . " años.</p>";
    } else {
        echo "<h1>Se han encontrado errores:</h1>";
    }
?>