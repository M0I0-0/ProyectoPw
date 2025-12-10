<?php
require "conexion.php";

$id = $_GET["id"];

$sql = "DELETE FROM interesados WHERE id = $id";

if ($conn->query($sql)) {
    echo "<script>
            window.location='lista_solicitudes.php';
          </script>";
} else {
    echo "Error al eliminar: " . $conn->error;
}
?>
