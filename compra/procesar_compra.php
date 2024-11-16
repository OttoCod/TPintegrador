<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; // o "127.0.0.1"
$username = "root"; // Cambia a tu usuario de MySQL
$password = "1234"; // Cambia a tu contraseña de MySQL
$dbname = "gym";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$medio_pago = $_POST['pago'];
$producto = $_POST['producto'];

// Insertar datos en la tabla membresias
$sql = "INSERT INTO membresias (nombre, direccion, telefono, email, medio_pago, producto)
        VALUES ('$nombre', '$direccion', '$telefono', '$email', '$medio_pago', '$producto')";

if ($conn->query($sql) === TRUE) {
    echo "Compra registrada con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
