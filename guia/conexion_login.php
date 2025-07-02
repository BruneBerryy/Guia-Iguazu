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
    // Recoger los datos del formulario
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']); // Supongamos que esta es la contraseña

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Mostrar mensaje de éxito y los datos ingresados
        echo "Registro guardado con éxito.<br>";
        echo "<h3>Datos recibidos:</h3>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Contraseña:</strong> $password</p>";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
