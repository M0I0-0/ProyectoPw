<?php
// Conexión básica
include "conexion.php";

// Hacemos la consulta
$query = "SELECT * FROM solicitudes ORDER BY id DESC";
$resultado = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Solicitudes</title>
    <style>
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #999;
            text-align: left;
        }
        th {
            background: #eee;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        .btn-regresar {
            display: block;
            width: 120px;
            margin: 10px auto;
            padding: 8px;
            background: #d33;
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<h2>Solicitudes Registradas</h2>
<a class="btn-regresar" href="index.php">Regresar</a>

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
    // Mostrar los datos
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
    } else {
        echo "<tr><td colspan='7' style='text-align:center;'>No hay solicitudes registradas</td></tr>";
    }
    ?>

</table>

</body>
</html>
