<?php
// Configuración de conexión
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "buffet";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Consulta para obtener los datos
$sql = "SELECT * FROM registro";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Teléfono</th><th>Fecha de Nacimiento</th><th>Comentarios</th></tr>";

    // Mostrar cada registro
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['apellido'] . "</td>";
        echo "<td>" . $fila['email'] . "</td>";
        echo "<td>" . $fila['telefono'] . "</td>";
        echo "<td>" . $fila['fecha_nacimiento'] . "</td>";
        echo "<td>" . $fila['comentarios'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay registros.";
}

// Cerrar conexión
$conn->close();
?>