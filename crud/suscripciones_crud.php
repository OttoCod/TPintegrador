<?php
include '../connection.php'; // Conexión a la base de datos

// Manejar acciones del CRUD
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'add') {
        $tipo = $_POST['tipo_suscripcion'];
        $precio = $_POST['precio'];
        $fecha_inicio = $_POST['fecha_inicio'];
        $fecha_fin = $_POST['fecha_fin'];
        $descripcion = $_POST['descripcion'];

        $query = "INSERT INTO suscripciones (tipo_suscripcion, precio, fecha_inicio, fecha_fin, descripcion) 
                  VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sdsss", $tipo, $precio, $fecha_inicio, $fecha_fin, $descripcion);
        $stmt->execute();
    } elseif ($_POST['action'] === 'edit') {
        $id = $_POST['id'];
        $tipo = $_POST['tipo_suscripcion'];
        $precio = $_POST['precio'];
        $fecha_inicio = $_POST['fecha_inicio'];
        $fecha_fin = $_POST['fecha_fin'];
        $descripcion = $_POST['descripcion'];

        $query = "UPDATE suscripciones SET tipo_suscripcion = ?, precio = ?, fecha_inicio = ?, fecha_fin = ?, descripcion = ? 
                  WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sdsssi", $tipo, $precio, $fecha_inicio, $fecha_fin, $descripcion, $id);
        $stmt->execute();
    } elseif ($_POST['action'] === 'delete') {
        $id = $_POST['id'];

        $query = "DELETE FROM suscripciones WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}

// Obtener todas las suscripciones
$query = "SELECT * FROM suscripciones";
$result = $conn->query($query);
$suscripciones = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Suscripciones</title>
    <link rel="stylesheet" href="suscripciones_crud.css">
</head>
<body>
    <h1>Gestión de Suscripciones</h1>
    <form method="POST" class="form-crud">
        <input type="hidden" name="action" value="add">
        <label for="tipo_suscripcion">Tipo de Suscripción:</label>
        <select name="tipo_suscripcion" required>
            <option value="1_dia">1 Día</option>
            <option value="3_dias">3 Días</option>
            <option value="mensual">6 Días</option>
        </select>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" step="0.01" required>
        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" name="fecha_inicio" required>
        <label for="fecha_fin">Fecha de Fin:</label>
        <input type="date" name="fecha_fin" required>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required></textarea>
        <button type="submit">Agregar</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($suscripciones as $suscripcion): ?>
                <tr>
                    <td><?php echo $suscripcion['id']; ?></td>
                    <td><?php echo $suscripcion['tipo_suscripcion']; ?></td>
                    <td><?php echo $suscripcion['precio']; ?></td>
                    <td><?php echo $suscripcion['fecha_inicio']; ?></td>
                    <td><?php echo $suscripcion['fecha_fin']; ?></td>
                    <td><?php echo $suscripcion['descripcion']; ?></td>
                    <td>
                        <form method="POST" class="inline-form">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id" value="<?php echo $suscripcion['id']; ?>">
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
