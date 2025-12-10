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

<div class="login-container">
    <div class="margen"> 
        <div class="login-form">
            <form action="validarlog.php" method="POST">
                <p class="form-title">Login</p>

                <div class="input-container">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Tu correo">
                </div>

                <div class="input-container">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Tu contraseña">
                </div>

                <button type="submit" class="submit">Entrar</button>
            </form>
        </div>
        <div class="login-image">
            <img src="Imagenes/fotologin.jpg" alt="Ilustación de inicio de sesión">
        </div>
    </div>
</div>
</body>
</html>
