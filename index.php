<?php
// Incluir el archivo de conexión
include('connection.php');  // Usa 'require' para asegurarte que la conexión sea exitosa

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackFit Gym</title>
    <link rel="stylesheet" href="assets/styles/styles.css">
    <link rel="stylesheet" href="assets/styles/stylevideo.css">
</head>
<body>
    <main>
        <section id="hero">
            <div class="video-background">
                <video autoplay muted loop>
                    <!-- Asegúrate de que la ruta y el nombre del archivo sean correctos -->
                    <source src="assets/images/fondo.mp4" type="video/mp4">
                    Tu navegador no soporta video.
                </video>
            </div>
            <h1>Bienvenido a BlackFit Gym</h1>
            <p>Donde la fuerza se encuentra con el estilo.</p>
            <a href="pages/services.php" class="cta-button">Nuestros Servicios</a>
        </section>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 BlackFit. Todos los derechos reservados.</p>
    </footer>
</body>
</html>