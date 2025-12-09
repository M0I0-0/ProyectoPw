<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="description" content="Página de inicio de sesión para AutoSeguro">
</head>
<body>

    <form class="form" action="validarlog.php" method="POST">
        <p class="form-title">Iniciar Sesión</p>

        <div class="input-container">
            <input type="email" name="email" required placeholder="Enter email">
        </div>

        <div class="input-container">
            <input type="password" name="password" required placeholder="Enter password">
        </div>

        <button type="submit" class="submit">
            Sign in
        </button>
    </form>

</body>
</html>
