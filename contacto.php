<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
    <?php
include 'header.php';
?>
    <div id="contacto" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Contáctanos</h2>
                <p class="section-description">Solicita tu cotización sin compromiso</p>
            </div>
            <div class="contact-grid">
                <div class="contact-form-wrapper">
                    <form class="contact-form" id="contactForm" method="post" action="guardar.php">
                        <div class="form-group">
                            <label for="name">Nombre Completo</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="tel" id="phone" name="phone">
                        </div>

                        <!-- Datos del coche -->
                        <div class="form-group">
                            <label for="vehicle">Marca y Modelo del Vehículo</label>
                            <input type="text" id="vehicle" name="vehicle">
                        </div>
                        <div class="form-group">
                            <label for="year">Año</label>
                            <input type="number" id="year" name="year" min="1900" max="2099" step="1" placeholder="2023">
                        </div>
                        <div class="form-group">
                            <label for="plates">Placas</label>
                            <input type="text" id="plates" name="plates">
                        </div>
                        <div class="form-group">
                            <label for="vin">VIN (Número de Serie)</label>
                            <input type="text" id="vin" name="vin">
                        </div>

                        <!-- Pago -->
                        <div class="form-group">
                            <label for="payment_type">Tipo de Pago</label>
                            <select id="payment_type" name="payment_type">
                                <option value="">Selecciona tipo de pago</option>
                                <option value="transferencia">Transferencia</option>
                                <option value="tarjeta">Tarjeta</option>
                                <option value="efectivo">Efectivo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bank">Banco (si aplica)</label>
                            <input type="text" id="bank" name="bank" placeholder="Banco emisor de la transferencia">
                        </div>

                        <!-- Mensaje -->
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea id="message" name="message" rows="4"></textarea>
                        </div>

                        <!-- Adjuntar recibo -->
                        <div class="form-group">
                            <label for="receipt">Adjuntar recibo de transferencia (imagen)</label>
                            <input type="file" id="receipt" name="receipt" accept="image/*" capture="environment">
                            <p>Formato aceptado: JPG, PNG. Tamaño máximo recomendado: 5MB.</p>
                        </div>

                        <button id="btn_enviar" type="submit" class="btn btn-primary btn-full">Enviar Solicitud</button>
                    </form>
                </div>
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39249.18348242724!2d-89.66171138230918!3d21.008121389572445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56715c77aca301%3A0x9f900e123e02a7ab!2sHDI%20SEGUROS%20M%C3%A9rida!5e0!3m2!1ses-419!2smx!4v1765313339988!5m2!1ses-419!2smx" 
                        width="600" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $("#btn_enviar").click(function() {

            if ($("#name").val().trim() == "") {
                alert("Por favor, escribe tu nombre completo.");
                $("#name").focus();
                return false;
            }

            if ($("#email").val().trim() == "") {
                alert("Indica tu correo electrónico.");
                $("#email").focus();
                return false;
            }

            if ($("#phone").val().trim() == "" || $("#phone").val().length < 10) {
                alert("Ingresa un número de teléfono válido (10 dígitos).");
                $("#phone").focus();
                return false;
            }


            if ($("#vehicle").val().trim() == "") {
                alert("Indica la marca y modelo de tu vehículo.");
                $("#vehicle").focus();
                return false;
            }


            if ($("#year").val().trim() == "" || $("#year").val().length != 4) {
                alert("Ingresa un año válido de 4 dígitos (ej. 2023).");
                $("#year").focus();
                return false;
            }

            if ($("#plates").val().trim() == "") {
                alert("Ingresa las placas del vehículo.");
                $("#plates").focus();
                return false;
            }
            if ($("#payment_type").val() == "") {
                alert("Selecciona un tipo de pago.");
                $("#payment_type").focus();
                return false;
            }

            if ($("#payment_type").val() == "transferencia") {
                if ($("#receipt").val() == "") {
                    alert("Para pagos por transferencia, es obligatorio adjuntar la foto del recibo.");
                    $("#receipt").focus();
                    return false;
                }
            }
            $("#contactForm").submit();
        });
    });
</script>
</body>
</html>