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
    <title>Membresías - BlackFit Gym</title>
    <link rel="stylesheet" href="../navegation/barranavega.css">
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <link rel="stylesheet" href="../pages/assets/styles/box.css">
    <link rel="stylesheet" href="../pages/assets/styles/membreships.css">
    <style>
        .user-reviews {
            font-size: 0.8em;
            color: #777;
            margin-top: 10px;
            text-align: center;
            font-style: italic;
        }
    </style>
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

    <!-- Sección principal de membresías -->
    <main>
        <section>
            <h1>Membresías</h1>
            <p>Elige la membresía que mejor se adapte a tu estilo de vida.</p>

            <!-- Presentación de las membresías en forma de cuadros -->
            <table border="1" cellspacing="0" cellpadding="10" align="center">
                <tr>
                    <td width="300">
                        <a href="../compra/comprar_diario.php" class="membership-link" onclick="confirmMembership('Pase Diario')">
                            <h2>Pase Diario</h2>
                            <p>Precio: $2500</p>
                            <p>Descuento en efectivo: <strong>$2300</strong></p>
                            <p class="membership-details">Ideal para aquellos que desean probar el gimnasio sin compromiso.</p>
                           
                            <p class="user-reviews">"Excelente opción para un primer acercamiento" - Cliente nuevo</p>
                        </a>
                    </td>
                    <td width="300">
                        <a href="../compra/compra_3veces.php" class="membership-link" onclick="confirmMembership('3 Veces a la Semana')">
                            <h2>3 Veces a la Semana</h2>
                            <p>Precio: $23,000</p>
                            <p>Descuento en efectivo: <strong>$21,000</strong></p>
                            <p class="membership-details">Perfecta para quienes quieren mantener una rutina regular sin venir diariamente.</p>
                            <p class="user-reviews">"Buena opción para mantenerse en forma sin comprometer tanto tiempo" - Cliente frecuente</p>
                        </a>
                    </td>
                    <td width="300">
                        <a href="../compra/comprar_todoslosdias.php" class="membership-link" onclick="confirmMembership('Todos los Días')">
                            <h2>Todos los Días</h2>
                            <p>Precio: $25,000</p>
                            <p>Descuento en efectivo: <strong>$23,000</strong></p>
                            <p class="membership-details">La membresía más completa para aquellos comprometidos con su entrenamiento diario.</p>
                            
                            <p class="user-reviews">"Vale cada peso, lo mejor en calidad y servicios" - Cliente fiel</p>
                        </a>
                    </td>
                </tr>
            </table>

        </section>
    </main>
    
    <!-- Horarios -->
    <p>Nuestros horarios de atención son de lunes a viernes de 6:00 AM a 10:00 PM y los sábados de 9:00 AM a 5:00 PM. Los domingos estamos cerrados.</p>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 BlackFit. Todos los derechos reservados.</p>
    </footer>

    <!-- Script de JavaScript -->
    <script>
        function confirmMembership(membershipType) {
            alert('Has seleccionado la membresía: ' + membershipType);
        }
    </script>

</body>
</html>
