<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Mostrar los datos en la pantalla
    echo "<h2>Datos recibidos:</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellido:</strong> $apellido</p>";
    echo "<p><strong>Mensaje:</strong></p>";
    echo "<p>$mensaje</p>";
}
?>