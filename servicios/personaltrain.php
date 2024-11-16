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
    <title>Personal Trainer - BlackFit Gym</title>
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <link rel="stylesheet" href="../navegation/barranavega.css">
    <link rel="stylesheet" href="../navegation/desplazamiento.css">
    <link rel="stylesheet" href="../servicios/personaltrain.css">
   
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
            <h1>Personal Trainer</h1>
            <p>¡Potencia tu rendimiento con nuestro servicio de Personal Trainer! Un entrenador personal estará presente para guiarte en tus entrenamientos, adaptando cada sesión a tus necesidades y objetivos.</p>
            <p>Nuestros entrenadores están certificados y tienen experiencia en diversas disciplinas, asegurando un enfoque profesional y motivador.</p>
            <p>¿Listo para llevar tu entrenamiento al siguiente nivel? ¡Contáctanos hoy mismo!</p>
            
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
