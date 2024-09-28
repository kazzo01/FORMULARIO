<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // o tu servidor de base de datos
$username = "root"; // tu nombre de usuario de phpMyAdmin
$password = ""; // tu contraseña de phpMyAdmin (por defecto suele estar vacía en local)
$dbname = "formulario";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $rut = $_POST['rut'];
    $correo = $_POST['correo'];
    $comentarios = $_POST['comentarios'];

    // Prepara y ejecuta la consulta SQL
    $sql = "INSERT INTO usuarios (nombre, rut, correo, comentarios) VALUES ('$nombre', '$rut', '$correo', '$comentarios')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos enviados correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>