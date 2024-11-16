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
    <title>Contacto - BlackFit Gym</title>
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <link rel="stylesheet" href="../pages/assets/styles/contac.css">
    <link rel="stylesheet" href="../navegation/barranavega.css">
    <link rel="stylesheet" href="../pages/assets/styles/botonarrib.css">
 
</head>
<body>

    <!-- Encabezado con logo y barra de navegación -->
    <header>
        <div>
            <div class="logo">
                <img src="../assets/images/blackfitt.png" alt="BlackFit Logo" width="50" height="50">
            </div>
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

     <!-- Sección principal de contacto -->
     <main>
        <section class="contact-form">
            <h1>Contáctanos</h1>
            <p>Si tienes alguna pregunta o deseas más información sobre nuestros servicios, no dudes en contactarnos a través del siguiente formulario.</p>
            
            <form id="contactForm" action="guardar_contacto.php" method="post">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Teléfono:</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                
                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                
                <div class="form-group">
                    <input type="submit" value="Enviar">
                </div>
            </form>
            

         

            <div id="formMessage"></div>
        </section>

        <!-- Sección de ubicación con Google Maps -->
        <section class="location">
            <h2>Ubicación</h2>
            <p>Nos encontramos en [Bolivar 1467, Posadas, Misiones]. ¡Visítanos!</p>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3543.2594910683256!2d-55.89264962383666!3d-27.367610276378937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9457bfcaddb692ff%3A0x9ae70574641732c5!2sBol%C3%ADvar%201467%2C%20N3301HPT%20Posadas%2C%20Misiones!5e0!3m2!1ses-419!2sar!4v1724171938048!5m2!1ses-419!2sar" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>
    </main>

   
   
    
    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 BlackFit. Todos los derechos reservados.</p>
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
