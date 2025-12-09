<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Protege tu vehículo con los mejores seguros de auto. Cobertura completa, precios competitivos y atención personalizada.">
    <title>Seguro de Autos - Protección Completa para tu Vehículo</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

<?php 
include 'header.php'; 
?>

    <!-- Hero Section -->
    <section id="inicio" class="hero">
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
                        <a href="#contacto" class="btn btn-primary">Cotiza Ahora</a>
                        <a href="#servicios" class="btn btn-secondary">Conocer Más</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="Imagenes/Fotoilustracion.jpg" alt="Seguro de Auto" loading="eager">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicios" class="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Nuestros Servicios</h2>
                <p class="section-description">Ofrecemos una amplia gama de coberturas para proteger tu vehículo</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Cobertura Amplia</h3>
                    <p class="service-description">Protección completa contra daños materiales, robo total y responsabilidad civil.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Asistencia 24/7</h3>
                    <p class="service-description">Grúa, asistencia vial y apoyo las 24 horas del día, los 365 días del año.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Atención Personalizada</h3>
                    <p class="service-description">Agentes especializados que te guían en todo el proceso de contratación.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="1" x2="12" y2="23"/>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Pagos Flexibles</h3>
                    <p class="service-description">Planes de pago mensuales, trimestrales o anuales adaptados a tu presupuesto.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                            <line x1="12" y1="22.08" x2="12" y2="12"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Trámites Rápidos</h3>
                    <p class="service-description">Proceso de contratación ágil y sencillo, 100% digital.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 8h1a4 4 0 0 1 0 8h-1"/>
                            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
                            <line x1="6" y1="1" x2="6" y2="4"/>
                            <line x1="10" y1="1" x2="10" y2="4"/>
                            <line x1="14" y1="1" x2="14" y2="4"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Auto de Reemplazo</h3>
                    <p class="service-description">Vehículo de cortesía mientras el tuyo está en reparación.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section id="video" class="video-section">
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
    </section>

<?php
include 'footer.php';
?>

    <script src="script.js"></script>
</body>
</html>
