<?php
// Incluir el archivo de conexión
require('../connection.php');// Usa 'require' para asegurarte que la conexión sea exitosa

// Cerrar la conexión

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Trainer y Nutricionista - BlackFit Gym</title>
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <link rel="stylesheet" href="../navegation/barranavega.css">
    <link rel="stylesheet" href="../navegation/desplazamiento.css">
    <link rel="stylesheet" href="../servicios/personalynutri.css">
    
</head>
<body>
    <!-- Encabezado con logo y barra de navegación -->
    <header>
        <div class="logo">
            <img src="../assets/images/blackfitt.png" alt="BlackFit Logo">
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../pages/about.php">Sobre Nosotros</a></li>
                <li><a href="../pages/services.php">Servicios</a></li>
                <li><a href="../pages/contact.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="service-info">
            <h1>Personal Trainer y Nutricionista</h1>
            <p>Optimiza tu rendimiento con nuestro servicio integral de Personal Trainer y Nutricionista. Un entrenador personal y un nutricionista trabajarán en conjunto para diseñar un plan adaptado a tus necesidades, ayudándote a alcanzar tus objetivos de forma más efectiva.</p>
            <p>Este enfoque holístico garantiza que no solo entrenes, sino que también cuides tu alimentación y bienestar, maximizando así tus resultados.</p>
            <p>¡Da el primer paso hacia un estilo de vida más saludable y equilibrado! Contáctanos para más detalles.</p>
            
        </div>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 BlackFit. Todos los derechos reservados.</p>
    </footer>

    <script>
        // Animación de desvanecimiento al cargar la página
        document.body.style.opacity = '0';
        window.onload = function() {
            document.body.style.opacity = '1';
        };
    </script>
</body>
</html>
