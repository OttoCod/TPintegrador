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
    <title>Equipo Médico - BlackFit Gym</title>
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <link rel="stylesheet" href="../navegation/barranavega.css">
    <link rel="stylesheet" href="../servicios/equipomedico.css">

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
            <h1>Equipo Médico</h1>
            <p>En BlackFit, contamos con un equipo médico altamente calificado que incluye profesionales de fisioterapia y kinesiología. Nuestro objetivo es garantizar que todos nuestros miembros tengan acceso a servicios de salud integrales para prevenir y tratar lesiones.</p>
            <p>Nuestros fisioterapeutas y kinesiólogos trabajan en conjunto para diseñar programas personalizados que te ayudarán a optimizar tu rendimiento y a mejorar tu bienestar general.</p>
            <p>¡No dudes en contactarnos para obtener más información sobre nuestros servicios médicos y cómo pueden beneficiarte!</p>
           
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
