<?php
require "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre      = $_POST['nombre'];
    $email       = $_POST['email'];
    $telefono    = $_POST['telefono'];
    $tipo        = $_POST['tipo'];
    $comentarios = $_POST['comentarios'];

    $sql = "INSERT INTO interesados (nombre, email, telefono, tipo, comentarios)
            VALUES ('$nombre', '$email', '$telefono', '$tipo', '$comentarios')";

    if ($conn->query($sql)) {
        echo "<script>window.location='solicitud.php';</script>";
    } else {
        echo "Error al guardar: " . $conn->error;
    }

    $conn->close();
}
?>

