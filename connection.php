<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "gym";

// Conexión con manejo de excepciones
try {
    // Crear una nueva instancia de la conexión MySQLi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si hubo un error en la conexión
    if ($conn->connect_error) {
        // Si hay un error, lanzar una excepción
        throw new Exception("Conexión fallida: " . $conn->connect_error);
    }

} catch (Exception $e) {
    // Capturar la excepción y mostrar el mensaje de error
    die("Error: " . $e->getMessage());
}
?>