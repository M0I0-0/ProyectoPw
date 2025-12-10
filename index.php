<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Protege tu vehículo con los mejores seguros de auto. Cobertura completa, precios competitivos y atención personalizada.">
    <title>Seguro de Autos - Protección Completa para tu Vehículo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php 
include 'header.php'; 
?>

    <div id="inicio" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Protege Tu Vehículo con el Mejor Seguro</h1>
                    <p class="hero-description">
                        Cobertura completa, precios competitivos y atención personalizada las 24 horas del día. 
                        Tu tranquilidad es nuestra prioridad.
                    </p>
                    <div class="hero-features">
                        <div class="feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Cobertura Total</span>
                        </div>
                        <div class="feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Asistencia 24/7</span>
                        </div>
                        <div class="feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Mejor Precio</span>
                        </div>
                    </div>
                    <div class="hero-cta">
                        <a href="solicitud.php" class="btn btn-primary">Solicitar Ahora</a>
                        <a href="#servicios" class="btn btn-secondary">Conocer Más</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="Imagenes/Fotoilustracion.jpg" alt="Seguro de Auto" loading="eager">
                </div>
            </div>
        </div>
    </div>

    <div id="servicios" class="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Nuestros Servicios</h2>
                <p class="section-description">Ofrecemos una amplia gama de coberturas para proteger tu vehículo</p>
            </div>

            <table class="services-table" role="table" aria-label="Nuestros Servicios">
                <tbody>
                    <tr>
                        <td class="service-cell">
                            <h3 class="service-title">Cobertura Amplia</h3>
                            <p class="service-description">Protección completa contra daños materiales, robo total y responsabilidad civil.</p>
                        </td>

                        <td class="service-cell">
                            <h3 class="service-title">Asistencia 24/7</h3>
                            <p class="service-description">Grúa, asistencia vial y apoyo las 24 horas del día, los 365 días del año.</p>
                        </td>

                        <td class="service-cell">
                            <h3 class="service-title">Atención Personalizada</h3>
                            <p class="service-description">Agentes especializados que te guían en todo el proceso de contratación.</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="service-cell">
                            <h3 class="service-title">Pagos Flexibles</h3>
                            <p class="service-description">Planes de pago mensuales, trimestrales o anuales adaptados a tu presupuesto.</p>
                        </td>

                        <td class="service-cell">
                            <h3 class="service-title">Trámites Rápidos</h3>
                            <p class="service-description">Proceso de contratación ágil y sencillo, 100% digital.</p>
                        </td>

                        <td class="service-cell">
                            <h3 class="service-title">Auto de Reemplazo</h3>
                            <p class="service-description">Vehículo de cortesía mientras el tuyo está en reparación.</p>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

    <div id="video" class="video-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Conoce Más Sobre Nosotros</h2>
                <p class="section-description">Descubre por qué somos la mejor opción para proteger tu vehículo</p>
            </div>
            <div class="video-container">
                <div class="video-wrapper">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/MbAneeC20C4?si=RMiDYTpDbxn2ks7x" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

<?php
include 'footer.php';
?>
</body>
</html>
