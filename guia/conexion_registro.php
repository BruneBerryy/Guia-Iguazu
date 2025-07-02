<?php
// Configuración de conexión
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "inicio";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Validar si se enviaron los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellido = $conn->real_escape_string($_POST['apellido']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefono = $conn->real_escape_string($_POST['telefono']);
    $fnacimiento = $conn->real_escape_string($_POST['fnacimiento']);
    $comentarios = $conn->real_escape_string($_POST['comentarios']);

    // Insertar datos en la base de datos
    $sql = "INSERT INTO registro (nombre, apellido, email, telefono, fecha_nacimiento, comentarios)
            VALUES ('$nombre', '$apellido', '$email', '$telefono', '$fnacimiento', '$comentarios')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro guardado con éxito.<br><br>";
        echo "<h3>Datos recibidos:</h3>";
        echo "<strong>Nombre:</strong> $nombre<br>";
        echo "<strong>Apellido:</strong> $apellido<br>";
        echo "<strong>Email:</strong> $email<br>";
        echo "<strong>Teléfono:</strong> $telefono<br>";
        echo "<strong>Fecha de nacimiento:</strong> $fnacimiento<br>";
        echo "<strong>Comentarios:</strong> $comentarios<br>";
    } else {
        echo "Error: " . $conn->error;
    }
}


// Cerrar la conexión
$conn->close();
?>