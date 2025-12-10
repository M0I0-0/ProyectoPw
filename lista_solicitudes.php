<?php
// Conexión básica
include "conexion.php";

// Hacemos la consulta
$query = "SELECT * FROM interesados ORDER BY id DESC";
$resultado = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Solicitudes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="section-header">
    <h2>Solicitudes Registradas</h2>
    <a class="btnrojo" href="dashboard.php">Regresar</a>
</div>


<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Tipo de Seguro</th>
        <th>Comentarios</th>
        <th>Fecha</th>
    </tr>

    <?php
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila['id'] . "</td>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['email'] . "</td>";
            echo "<td>" . $fila['telefono'] . "</td>";
            echo "<td>" . $fila['tipo'] . "</td>";
            echo "<td>" . $fila['comentarios'] . "</td>";
            echo "<td>" . $fila['fecha_registro'] . "</td>";
            echo "</tr>";
        }
    }
    ?>

</table>

</body>
</html>
