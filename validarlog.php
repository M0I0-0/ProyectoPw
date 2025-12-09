<?php
session_start();
require "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, nombre, email, password FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();

        // Validación SIN HASH
        if ($password === $usuario['password']) {

            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];

            echo "<script>
                    window.location.href = 'dashboard.php';
                  </script>";
            exit();

        } else {
            echo "<script>
                    alert('Usuario o contraseña incorrectos');
                    window.location.href = 'login.php';
                  </script>";
            exit();
        }

    } else {
        echo "<script>
                alert('Usuario o contraseña incorrectos');
                window.location.href = 'login.php';
              </script>";
        exit();
    }
}
?>
