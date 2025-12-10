<?php
require "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name          = $_POST['name'];
    $email         = $_POST['email'];
    $phone         = $_POST['phone'];
    $vehicle       = $_POST['vehicle'];
    $year          = $_POST['year'];
    $plates        = $_POST['plates'];
    $vin           = $_POST['vin'];
    $payment_type  = $_POST['payment_type'];
    $bank          = $_POST['bank'];
    $message       = $_POST['message'];

    // creando carpeta para recibos
    $ruta_archivos = "recibos"; 

    if (!file_exists($ruta_archivos)) {
        mkdir($ruta_archivos, 0777, true);
    }

    $ruta_final = NULL;

    if (isset($_FILES['receipt']) && $_FILES['receipt']['error'] === UPLOAD_ERR_OK) {

        $archivo_nombre = $_FILES['receipt']['name'];
        $archivo_tmp    = $_FILES['receipt']['tmp_name'];


        $nombre_unico = date("YmdHis") . "_" . $archivo_nombre;


        $ruta_final = $ruta_archivos . "/" . $nombre_unico;


        move_uploaded_file($archivo_tmp, $ruta_final);
    }

    $sql = "INSERT INTO solicitudes
            (name, email, phone, vehicle, year, plates, vin, payment_type, bank, message, receipt_path)
            VALUES
            ('$name', '$email', '$phone', '$vehicle', '$year', '$plates', '$vin', 
             '$payment_type', '$bank', '$message', '$ruta_final')";

    if ($conn->query($sql)) {
        echo "<script> window.location='Asegurados.php'; </script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
