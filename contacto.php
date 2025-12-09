<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
include 'header.php';
?>
    <section id="contacto" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Contáctanos</h2>
                <p class="section-description">Solicita tu cotización sin compromiso</p>
            </div>
            <div class="contact-grid">
                <div class="contact-form-wrapper">
                    <form class="contact-form" id="contactForm" method="post" enctype="multipart/form-data" action="">
                        <div class="form-group">
                            <label for="name">Nombre Completo</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>

                        <!-- Datos del coche -->
                        <div class="form-group">
                            <label for="vehicle">Marca y Modelo del Vehículo</label>
                            <input type="text" id="vehicle" name="vehicle" required>
                        </div>
                        <div class="form-group">
                            <label for="year">Año</label>
                            <input type="number" id="year" name="year" min="1900" max="2099" step="1" placeholder="2023" required>
                        </div>
                        <div class="form-group">
                            <label for="plates">Placas</label>
                            <input type="text" id="plates" name="plates" required>
                        </div>
                        <div class="form-group">
                            <label for="vin">VIN (Número de Serie)</label>
                            <input type="text" id="vin" name="vin">
                        </div>

                        <!-- Pago -->
                        <div class="form-group">
                            <label for="payment_type">Tipo de Pago</label>
                            <select id="payment_type" name="payment_type" required>
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
                            <small>Formato aceptado: JPG, PNG. Tamaño máximo recomendado: 5MB.</small>
                        </div>

                        <button type="submit" class="btn btn-primary btn-full">Enviar Solicitud</button>
                    </form>
                </div>
                <div class="contact-map">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6789!2d-99.1332!3d19.4326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDI1JzU3LjQiTiA5OcKwMDcnNTkuNSJX!5e0!3m2!1ses!2smx!4v1234567890"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
</body>
</html>