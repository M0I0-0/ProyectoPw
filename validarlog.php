<?php
require "conexion.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email    = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios 
            WHERE email = '$email' 
            AND password = '$password'";

    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        $usuario = mysqli_fetch_assoc($resultado);
        $_SESSION["usuario_id"]      = $usuario["id"];
        $_SESSION["usuario_nombre"]  = $usuario["nombre"];
        $_SESSION["autentificado"]   = "SI";

        echo "
        <script>
            window.location = 'dashboard.php';
        </script>";
        exit();

    } else {

        echo "
        <script>
            alert('Usuario o contraseña incorrectos');
            window.location = 'login.php';
        </script>";
        exit();
    }
}
?>
