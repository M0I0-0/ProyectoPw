<?php 
include 'seguridad.php';
?>
<?php
require "conexion.php";
$result = $conn->query("SELECT * FROM solicitudes ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Solicitudes Registradas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="section-header">
    <h2>Solicitudes Registradas</h2>
    <a class="btnrojo" href="dashboard.php">Regresar</a>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Vehículo</th>
            <th>Año</th>
            <th>Placas</th>
            <th>Pago</th>
            <th>Mensaje</th>
            <th>Recibo</th>
        </tr>
    </thead>
    <tbody>

    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['vehicle'] ?></td>
            <td><?= $row['year'] ?></td>
            <td><?= $row['plates'] ?></td>
            <td><?= $row['payment_type'] ?></td>
            <td><?= $row['message'] ?></td>
            <td>
                <?php if (!empty($row['receipt_path'])): ?>
                    <img src="<?= $row['receipt_path'] ?>" width="120">
                <?php else: ?>
                    <span>Sin archivo</span>
                <?php endif; ?>
            </td>
        </tr>
    <?php endwhile; ?>

    </tbody>
</table>

</body>
</html>
