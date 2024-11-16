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
    <title>Sobre Nosotros - GymFit</title>
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <link rel="stylesheet" href="../pages/assets/styles/about.css">
    <link rel="stylesheet" href="../navegation/barranavega.css">
    <link rel="stylesheet" href="../pages/assets/styles/botonarrib.css">
    
</head>
<body>
    <!-- Encabezado con logo y barra de navegación -->
    <header>
        <div class="logo">
            <img src="../assets/images/blackfitt.png" alt="BlackFit Logo" width="50" height="50">
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="about.php">Sobre Nosotros</a></li>
                <li><a href="membreship.php">Membresías</a></li>
                <li><a href="contact.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="about">
            <h1 class="section-title">Sobre Nosotros</h1>
            <p>GymFit es el mejor gimnasio de la ciudad, dedicado a ayudarte a alcanzar tus objetivos de fitness. Contamos con un equipo de profesionales altamente capacitados y una amplia gama de servicios diseñados para ayudarte a alcanzar tu mejor versión.</p>
        </section>

        <section class="mission-values">
            <h2 class="section-title">Nuestra Misión y Valores</h2>
            <p><strong>Misión:</strong> Proporcionar un ambiente de entrenamiento motivador y profesional que inspire a nuestros miembros a alcanzar sus metas de salud y bienestar.</p>
            <p><strong>Valores:</strong> Compromiso, Profesionalismo, Inclusión, y Motivación.</p>
        </section>

        <section class="trainers">
            <h2 class="section-title">Nuestros Entrenadores</h2>
            <div class="trainer">
                <img src="../assets/images/member1.jpeg" alt="Entrenador 1">
                <div>
                    <h3>Ronnie Coleman</h3>
                    <p>Ganador de 8 Mr Olimpias y a la disposición para lo que necesites.</p>
                </div>
            </div>
            <div class="trainer">
                <img src="../assets/images/member2.jpeg" alt="Entrenador 2">
                <div>
                    <h3>Sam Sulek</h3>
                    <p>Experto en entrenamientos basados en fuerza e influencer en el mundo del gym.</p>
                </div>
            </div>
            <div class="trainer">
                <img src="../assets/images/member3.jpeg" alt="Entrenador 3">
                <div>
                    <h3>Chris Bumstead</h3>
                    <p>Ganador de 5 Mr Olimpias y dedicado a entrenamientos de hipertrofia.</p>
                </div>
            </div>
            <div class="trainer">
                <img src="../assets/images/member4.jpeg" alt="Entrenador 4">
                <div>
                    <h3>Ramon Dino</h3>
                    <p>Ganador del Arnold Classic y especializado en alimentación.</p>
                </div>
            </div>
        </section>

        <section class="join-us">
            <h2 class="section-title">¡Únete a Nosotros!</h2>
            <p>Si estás listo para comenzar tu viaje hacia una vida más saludable, únete a nuestra comunidad hoy mismo.</p>
            <a href="contact.php">Contáctanos para más información</a>
        </section>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 GymFit. Todos los derechos reservados.</p>
    </footer>

    <!-- Botón de Volver Arriba -->
    <button id="scrollToTop" style="display: none;">Volver Arriba</button>

    <script>
        const scrollToTopButton = document.getElementById('scrollToTop');

        window.addEventListener('scroll', () => {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                scrollToTopButton.style.display = 'block';
            } else {
                scrollToTopButton.style.display = 'none';
            }
        });

        scrollToTopButton.addEventListener('click', () => {
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
    </script>
</body>
</html>
