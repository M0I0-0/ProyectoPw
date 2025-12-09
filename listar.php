<?php
$conexion = new mysqli("localhost", "root", "", "proyecto");

if ($conexion->connect_errno) {
    die("Error al conectar: " . $conexion->connect_error);
}

$result = $conexion->query("SELECT * FROM solicitudes ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Solicitudes Registradas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Solicitudes Registradas</h2>

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
                <?php if ($row['receipt']): ?>
                    <img src="data:<?= $row['receipt_type'] ?>;base64,<?= base64_encode($row['receipt']) ?>">
                <?php else: ?>
                    Sin imagen
                <?php endif; ?>
            </td>
        </tr>
    <?php endwhile; ?>

    </tbody>
</table>

</body>
</html>
