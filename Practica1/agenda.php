<?php

$contactos = [];

// Si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $contacto = [
        "nombre" => $_POST["nombre"],
        "telefono" => $_POST["telefono"],
        "email" => $_POST["email"]
    ];

    // Añadimos el nuevo contacto al array
    $contactos[] = $contacto;
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>Contactos</h1>

<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="telefono" placeholder="Teléfono">
    <input type="email" name="email" placeholder="Email">

    <button type="submit">Añadir contacto</button>
</form>

<br>

<table>
    <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Email</th>
    </tr>

    <?php


    foreach ($contactos as $contacto) {
        echo "<tr>";
            echo "<td > $contacto[nombre]  </td >";
            echo "<td >  $contacto[telefono]  </td >";
            echo "<td > $contacto[email] </td >";
        echo "</tr>";
    }?>

</table>

</body>
</html>