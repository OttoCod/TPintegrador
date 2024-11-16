<?php
// Incluir el archivo de conexión
require('../connection.php');  // Usa 'require' para asegurarte que la conexión sea exitosa

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - BlackFit Gym</title>
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <link rel="stylesheet" href="../navegation/barranavega.css">
    <link rel="stylesheet" href="../pages/assets/styles/services.css"> 
    <link rel="stylesheet" href="../navegation/desplazamiento.css">
   
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
                <li><a href="about.php">Sobre Nosotros</a></li>
                <li><a href="membreship.php">Membresias</a></li>
                <li><a href="contact.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="services-header">
            <h1 class="neon-text">Servicios</h1>
        </section>
        <section class="services-container">
            <div class="service-box">
                <h2>Personal Trainer</h2>
                <p>Un entrenador personal estará presente para guiarte de manera presencial en tu entrenamiento y ayudarte a alcanzar tus objetivos.</p>
                <a href="../servicios/personaltrain.php ">Más Información</a>
            </div>
            <div class="service-box">
                <h2>Personal Trainer y Nutricionista</h2>
                <p>Un plan integral donde un entrenador personal y un nutricionista trabajarán en conjunto para optimizar tu rendimiento y salud.</p>
                <a href="../servicios/personalynutri.php">Más Información</a>
            </div>
            <div class="service-box">
                <h2>Equipo Medico</h2>
                <p>Un equipo Medico especializado, incluyendo un fisioterapeutas y kinesiologos profesionales, te ayudaran con cualquier tipo de dolor o molestia.</p>
                <a href="../servicios/equipomedico.php">Más Información</a>
            </div>
        </section>
    </main>
    

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 BlackFit. Todos los derechos reservados.</p>
    </footer>

    <script>
        // Evento para manejar la transición al cambiar de página
        const links = document.querySelectorAll('nav a');

        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Evitar el comportamiento por defecto

                // Animación de desvanecimiento
                document.body.style.opacity = '0';

                // Esperar a que la animación de desvanecimiento termine antes de cambiar de página
                setTimeout(() => {
                    window.location.href = this.href; // Cambiar a la nueva URL
                }, 500); // Tiempo de espera en milisegundos (debe coincidir con la duración de la transición)
            });
        });
    </script>
</body>
</html>
