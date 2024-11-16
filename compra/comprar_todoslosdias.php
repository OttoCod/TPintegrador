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
    <title>Compra Todos los Días - BlackFit Gym</title>
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <link rel="stylesheet" href="../compra/form.css">
    <link rel="stylesheet" href="../navegation/barranavega.css">
   
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
                <li><a href="../pages/about.php">Sobre Nosotros</a></li>
                <li><a href="../pages/membreship.php">Membresías</a></li>
                <li><a href="../pages/contact.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección principal de compra -->
    <main>
        <section>
            <h1>Compra todos los dias</h1>
            <p>Completa el formulario para adquirir tu membresía de 3 Veces a la Semana.</p>

            <form id="purchaseForm" action="procesar_compra.php" method="post">
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div>
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" required>
                </div>
                <div>
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required>
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="pago">Medio de Pago:</label>
                    <select id="pago" name="pago" required>
                        <option value="efectivo">Efectivo</option>
                        <option value="tarjeta">Tarjeta de Crédito</option>
                        <option value="transferencia">Transferencia Bancaria</option>
                    </select>
                </div>
                <input type="hidden" name="producto" value="Todos los Días">
                <button type="submit">Comprar</button>
            </form>
            
            <div id="loading">
                <img src="../assets/images/loading.gif" alt="Cargando...">
            </div>

            <div id="formMessage"></div>
        </section>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 BlackFit. Todos los derechos reservados.</p>
    </footer>

   
