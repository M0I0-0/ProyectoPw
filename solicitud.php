<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud</title>
    <meta name="description" content="Página de solicitud para AutoSeguro">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
    <?php
include 'header.php';
?>

    <h2>Solicitud de Seguro</h2>
    <div class="contact-form-wrapper">
        <form id="form_soli" class="contact-form" action="guardarformulario.php" method="post">
            <div class="form-group">
                        <label for="nombre">Nombre completo</label>
                        <input type="text" id="nombre" name="nombre">


                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email">


                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono">


                        <label for="tipo">Tipo de seguro</label>
                        <select id="tipo" name="tipo">
                        <option value="">Seleccione...</option>
                        <option value="vida">Seguro de Vida</option>
                        <option value="auto">Seguro de Auto</option>
                        <option value="medico">Seguro Médico</option>
                        </select>


                        <label for="comentarios">Comentarios adicionales</label>
                        <textarea id="comentarios" name="comentarios" rows="3"></textarea>
            </div>



        <button id="btn_mandar" class="btn" type="submit">Enviar solicitud</button>
        </form>
    </div>


    <div class="contact-map">
        <h2>Ven a visitarnos!!!!</h2>
        <p>Te dejamos nuestra ubicacion para que conzocas nuestras oficinas y tener un trato en persona!</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39249.18348242724!2d-89.66171138230918!3d21.008121389572445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56715c77aca301%3A0x9f900e123e02a7ab!2sHDI%20SEGUROS%20M%C3%A9rida!5e0!3m2!1ses-419!2smx!4v1765313339988!5m2!1ses-419!2smx" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</body>
</html>