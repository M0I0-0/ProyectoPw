<?php
require "conexion.php";
// === Validar que el formulario fue enviado ===
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Datos de texto
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $vehicle = $_POST['vehicle'];
    $year    = $_POST['year'];
    $plates  = $_POST['plates'];
    $vin     = $_POST['vin'];

    $payment_type = $_POST['payment_type'];
    $bank         = $_POST['bank'];
    $message      = $_POST['message'];

    // === Manejo de la imagen ===
    $receipt      = NULL;
    $receipt_type = NULL;
    $receipt_name = NULL;

    if (isset($_FILES['receipt']) && $_FILES['receipt']['error'] === UPLOAD_ERR_OK) {

        $receipt_tmp  = $_FILES['receipt']['tmp_name'];
        $receipt_name = $_FILES['receipt']['name'];
        $receipt_type = $_FILES['receipt']['type'];

        // Convertir la imagen a binario
        $receipt = file_get_contents($receipt_tmp);
    }

    // === Insertar en la BD ===
    $sql = "INSERT INTO solicitudes 
            (name, email, phone, vehicle, year, plates, vin, payment_type, bank, message, receipt, receipt_type, receipt_name)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssissssssss",
        $name, $email, $phone, $vehicle, $year, $plates, $vin,
        $payment_type, $bank, $message,
        $receipt, $receipt_type, $receipt_name
    );

    if ($stmt->execute()) {
        echo "<script> window.location='contacto.php';</script>";
    } else {
        echo "Error al guardar: " . $stmt->error;
    }

    $stmt->close();
}

$conexion->close();
?>
