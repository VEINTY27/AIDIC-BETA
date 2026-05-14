<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AIDIC - Asociación de Innovación de Desarrollo Interactivo y Creativo">
    <meta name="theme-color" content="#4a6fa8">
    <title>AIDIC - Innovación y Desarrollo Interactivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/animations.css">
</head>
<body>
    <a class="skip-link" href="#inicio">Saltar al contenido</a>

    <div class="intro-splash" data-intro-splash aria-hidden="true">
        <div class="intro-splash__inner">
            <img class="intro-splash__logo" src="img/AIDIC%20-%20blanco@2x.png" alt="" width="640" height="240" />
        </div>
    </div>

    <header class="site-header sticky-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2" href="#inicio" aria-label="Ir a inicio AIDIC">
                    <span class="brand-mark" aria-hidden="true">
                        <img class="brand-logo" id="siteLogo" src="img/AIDIC%20-%20blanco@2x.png" alt="Logo AIDIC" width="48" height="48" />
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Abrir menú">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                        <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#quienes">Quiénes somos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#equipo">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#proyectos">Proyectos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#aliados">Aliados</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="inicio" class="hero-slider" aria-label="Sección de bienvenida">
        <div class="hero-slider__viewport" data-slider>
            <div class="hero-slider__track" data-slider-track>
                <article class="hero-slide is-active" data-slide style="--bg:url('img/AIDIC%20-%20ParafondoOsc@2x.png')">
                    <div class="container">
                        <div class="hero-slide__content">
                            <div class="hero-slide__kicker">Camino al éxito</div>
                            <h1 class="hero-slide__title">Asociación de innovación y desarrollo interactivo y creativo</h1>
                            <p class="hero-slide__text">AIDIC nace para organizar iniciativas y construir proyectos con seriedad, orden y resultados medibles junto a aliados estratégicos.</p>
                            <div class="d-flex flex-column flex-sm-row gap-2 mt-4">
                                <a class="btn btn-primary btn-lg" href="#quienes"><i class="bi bi-arrow-right me-2"></i>Conocer la asociación</a>
                                <a class="btn btn-outline-primary btn-lg" href="#contacto"><i class="bi bi-people me-2"></i>Ser parte de la comunidad</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="hero-slide" data-slide style="--bg:url('img/AIDIC%20-%20NEGRO@2x.png')">
                    <div class="container">
                        <div class="hero-slide__content">
                            <div class="hero-slide__kicker">Servicios</div>
                            <h2 class="hero-slide__title">Áreas internas claras y ordenadas</h2>
                            <p class="hero-slide__text">Desarrollo, diseño, administración, relaciones públicas y más: todo presentado en bloques simples y eficientes.</p>
                            <div class="d-flex flex-column flex-sm-row gap-2 mt-4">
                                <a class="btn btn-primary btn-lg" href="#servicios"><i class="bi bi-briefcase me-2"></i>Ver servicios</a>
                                <a class="btn btn-outline-primary btn-lg" href="#proyectos"><i class="bi bi-folder me-2"></i>Ver proyectos</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="hero-slide" data-slide style="--bg:url('img/AIDIC%201@2x.png')">
                    <div class="container">
                        <div class="hero-slide__content">
                            <div class="hero-slide__kicker">Alianzas</div>
                            <h2 class="hero-slide__title">Respaldo y vínculos estratégicos</h2>
                            <p class="hero-slide__text">Mostramos aliados y proyectos para fortalecer la confianza y la proyección institucional con credibilidad.</p>
                            <div class="d-flex flex-column flex-sm-row gap-2 mt-4">
                                <a class="btn btn-primary btn-lg" href="#aliados"><i class="bi bi-diagram-3 me-2"></i>Ver aliados</a>
                                <a class="btn btn-outline-primary btn-lg" href="#equipo"><i class="bi bi-people me-2"></i>Conocer el equipo</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <button class="hero-slider__btn hero-slider__btn--prev" type="button" aria-label="Slide anterior" data-slider-prev><i class="bi bi-chevron-left"></i></button>
            <button class="hero-slider__btn hero-slider__btn--next" type="button" aria-label="Siguiente slide" data-slider-next><i class="bi bi-chevron-right"></i></button>
        </div>
    </section>

    <section id="quienes" class="section-block section-soft">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="h2 fw-bold mb-2">Quiénes Somos</h2>
                <p class="lead text-muted">Asociación dedicada a la innovación, el desarrollo interactivo y la creatividad.</p>
            </div>
            <div class="row g-4">
                <?php
                $attributes = [
                    ['title' => 'Innovación', 'icon' => 'bi-lightbulb', 'desc' => 'Nuevas formas de resolver problemas y crear soluciones creativas.'],
                    ['title' => 'Operatividad', 'icon' => 'bi-gear-fill', 'desc' => 'Operamos con orden, eficiencia y métodos comprobados.'],
                    ['title' => 'Resultados Medibles', 'icon' => 'bi-graph-up', 'desc' => 'Cada proyecto incluye métricas claras de impacto.'],
                    ['title' => 'Compromiso', 'icon' => 'bi-hand-thumbs-up', 'desc' => 'Nos comprometemos con la excelencia en cada proyecto.'],
                    ['title' => 'Calidad', 'icon' => 'bi-star', 'desc' => 'Buscamos ser referentes en calidad del ecosistema.'],
                    ['title' => 'Confiabilidad', 'icon' => 'bi-shield-check', 'desc' => 'Somos confiables y transparentes en nuestras operaciones.'],
                ];
                foreach ($attributes as $attr): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="info-card p-4 h-100">
                        <div class="mb-3"><i class="bi <?php echo $attr['icon']; ?> text-primary" style="font-size:2.5rem;"></i></div>
                        <h3 class="h5 fw-bold"><?php echo $attr['title']; ?></h3>
                        <p class="text-muted small"><?php echo $attr['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="equipo" class="section-block">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="h2 fw-bold mb-2">Nuestro Equipo</h2>
                <p class="lead text-muted">Profesionales dedicados a impulsar la innovación.</p>
            </div>
            <div class="row g-4">
                <?php
                $team = [
                    ['name' => 'Juan Carlos García', 'role' => 'Director Ejecutivo'],
                    ['name' => 'María López Rodríguez', 'role' => 'Directora de Operaciones'],
                    ['name' => 'Pedro Martínez Sánchez', 'role' => 'Jefe de Comunicación'],
                    ['name' => 'Ana Gómez Fernández', 'role' => 'Directora de Tecnología'],
                ];
                foreach ($team as $idx => $member):
                    $initials = implode('', array_map(fn($w) => $w[0], explode(' ', $member['name'])));
                    $email = strtolower(str_replace(' ', '.', $member['name'])) . '@aidic.org';
                    $phone = '+34 91 234 567' . (10 + $idx);
                ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="person-card person-hover text-center p-4 position-relative overflow-hidden" data-member-name="<?php echo $member['name']; ?>" data-member-email="<?php echo $email; ?>" data-member-phone="<?php echo $phone; ?>">
                        <div class="person-card__content">
                            <div class="avatar mb-3"><?php echo $initials; ?></div>
                            <h3 class="h6 fw-bold"><?php echo $member['name']; ?></h3>
                            <p class="small text-muted mb-3"><?php echo $member['role']; ?></p>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="btn btn-sm btn-outline-primary" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                <a href="mailto:<?php echo $email; ?>" class="btn btn-sm btn-outline-primary" aria-label="Email"><i class="bi bi-envelope"></i></a>
                            </div>
                        </div>
                        <div class="person-card__overlay">
                            <div class="person-card__overlay-content">
                                <p class="small fw-bold mb-2"><?php echo $member['name']; ?></p>
                                <p class="tiny text-muted mb-2"><?php echo $member['role']; ?></p>
                                <div class="d-flex flex-column gap-2">
                                    <a href="mailto:<?php echo $email; ?>" class="small text-white text-decoration-none d-flex align-items-center gap-1"><i class="bi bi-envelope" style="font-size:0.8rem;"></i> <?php echo $email; ?></a>
                                    <a href="tel:<?php echo str_replace(' ', '', $phone); ?>" class="small text-white text-decoration-none d-flex align-items-center gap-1"><i class="bi bi-telephone" style="font-size:0.8rem;"></i> <?php echo $phone; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="servicios" class="section-block section-soft">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="h2 fw-bold mb-2">Nuestros Servicios</h2>
                <p class="lead text-muted">Áreas de especialización y competencia.</p>
            </div>
            <div class="row g-4">
                <?php
                $services = [
                    ['title' => 'Desarrollo Web', 'icon' => 'bi-code-slash', 'desc' => 'Soluciones web modernas y escalables'],
                    ['title' => 'Diseño Digital', 'icon' => 'bi-palette', 'desc' => 'Interfaces intuitivas y atractivas'],
                    ['title' => 'Marketing Digital', 'icon' => 'bi-graph-up-arrow', 'desc' => 'Estrategias de marketing efectivas'],
                    ['title' => 'Consultoría', 'icon' => 'bi-chat-left-dots', 'desc' => 'Asesoría en transformación digital'],
                    ['title' => 'Administración', 'icon' => 'bi-clipboard-check', 'desc' => 'Gestión administrativa profesional'],
                    ['title' => 'RRPP', 'icon' => 'bi-megaphone', 'desc' => 'Relaciones públicas estratégicas'],
                ];
                foreach ($services as $idx => $service): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="tile-card service-hover p-4 text-center h-100" data-service-id="<?php echo $idx; ?>">
                        <i class="bi <?php echo $service['icon']; ?> text-primary" style="font-size:3rem;"></i>
                        <h3 class="h5 fw-bold mt-3"><?php echo $service['title']; ?></h3>
                        <p class="text-muted small"><?php echo $service['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="productos" class="section-block">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="h2 fw-bold mb-2">Productos y Merchandise</h2>
                <p class="lead text-muted">Artículos exclusivos de AIDIC.</p>
            </div>
            <div class="row g-4">
                <?php
                $products = [
                    ['name' => 'Camiseta AIDIC', 'color' => '#4a6fa8'],
                    ['name' => 'Gorra Bordada', 'color' => '#b2d5eb'],
                    ['name' => 'Mochila Corporativa', 'color' => '#2a2830'],
                    ['name' => 'Botella Isotérmica', 'color' => '#4a6fa8'],
                    ['name' => 'Mousepad Premium', 'color' => '#b2d5eb'],
                    ['name' => 'Cuaderno AIDIC', 'color' => '#2a2830'],
                    ['name' => 'Llavero Exclusivo', 'color' => '#4a6fa8'],
                    ['name' => 'USB Corporativo', 'color' => '#b2d5eb'],
                ];
                foreach ($products as $idx => $product): ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="product-card product-hover overflow-hidden h-100" data-product-id="<?php echo $idx; ?>">
                        <div class="product-image" style="background-color:<?php echo $product['color']; ?>;height:200px;display:flex;align-items:center;justify-content:center;">
                            <i class="bi bi-box2" style="font-size:3rem;color:rgba(255,255,255,0.3);"></i>
                        </div>
                        <div class="p-3">
                            <h3 class="h6 fw-bold"><?php echo $product['name']; ?></h3>
                            <p class="text-muted small">Artículo exclusivo</p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="proyectos" class="section-block section-soft">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="h2 fw-bold mb-2">Nuestros Proyectos</h2>
                <p class="lead text-muted">Iniciativas realizadas y en desarrollo.</p>
            </div>
            <div class="row g-4">
                <?php
                $projects = [
                    ['title' => 'Proyecto Alpha', 'desc' => 'Plataforma digital innovadora en desarrollo activo.', 'status' => 'active'],
                    ['title' => 'Iniciativa Beta', 'desc' => 'Solución empresarial completada con éxito.', 'status' => 'done'],
                    ['title' => 'Proyecto Gamma', 'desc' => 'Nueva iniciativa estratégica en fase de planificación.', 'status' => 'planned'],
                ];
                $statusMap = ['planned' => ['label' => 'Planificado', 'color' => 'secondary'], 'active' => ['label' => 'En desarrollo', 'color' => 'warning'], 'done' => ['label' => 'Realizado', 'color' => 'success']];
                foreach ($projects as $project):
                    $badge = $statusMap[$project['status']];
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="project-card project-hover p-4 h-100 d-flex flex-column" data-project-status="<?php echo $project['status']; ?>">
                        <span class="badge bg-<?php echo $badge['color']; ?> align-self-start mb-2"><?php echo $badge['label']; ?></span>
                        <h3 class="h5 fw-bold mb-2"><?php echo $project['title']; ?></h3>
                        <p class="text-muted small flex-grow-1"><?php echo $project['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="aliados" class="section-block">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="h2 fw-bold mb-2">Nuestros Aliados</h2>
                <p class="lead text-muted">Empresas y organizaciones que confían en nosotros.</p>
            </div>
            <div class="row g-4 align-items-center">
                <?php
                $allies = ['AIDIC 1@2x.png', 'AIDIC - NEGRO@2x.png', 'AIDIC - blanco@2x.png', 'AIDIC - ParafondoOsc@2x.png', 'AIDIC 1@2x.png', 'AIDIC - NEGRO@2x.png'];
                foreach ($allies as $idx => $logo): ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="logo-card p-4 text-center h-100">
                        <img src="img/<?php echo $logo; ?>" alt="Aliado" loading="lazy" style="max-width:100%;height:auto;">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="contacto" class="section-block section-soft">
        <div class="container text-center">
            <h2 class="h2 fw-bold mb-4">Contáctanos</h2>
            <p class="lead text-muted mb-4">¿Tienes una pregunta o propuesta? Nos encantaría escucharte.</p>
            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                <a href="mailto:contacto@aidic.org" class="btn btn-primary btn-lg"><i class="bi bi-envelope me-2"></i>Email</a>
                <a href="tel:+34912345670" class="btn btn-outline-primary btn-lg"><i class="bi bi-telephone me-2"></i>Teléfono</a>
                <a href="#" class="btn btn-outline-primary btn-lg"><i class="bi bi-linkedin me-2"></i>LinkedIn</a>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <h3 class="footer-title">AIDIC</h3>
                    <p class="small text-muted">Asociación de Innovación de Desarrollo Interactivo y Creativo.</p>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-title">Servicios</h4>
                    <ul class="footer-links">
                        <li><a href="#servicios" class="footer-link"><i class="bi bi-code-slash"></i> Desarrollo</a></li>
                        <li><a href="#servicios" class="footer-link"><i class="bi bi-palette"></i> Diseño</a></li>
                        <li><a href="#servicios" class="footer-link"><i class="bi bi-graph-up-arrow"></i> Marketing</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-title">Enlaces</h4>
                    <ul class="footer-links">
                        <li><a href="#quienes" class="footer-link"><i class="bi bi-info-circle"></i> Quiénes somos</a></li>
                        <li><a href="#equipo" class="footer-link"><i class="bi bi-people"></i> Equipo</a></li>
                        <li><a href="#proyectos" class="footer-link"><i class="bi bi-folder"></i> Proyectos</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-title">Síguenos</h4>
                    <div class="footer-social">
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 AIDIC. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

      <script src="assets/js/main.js"></script>
    <script src="assets/js/animations.js"></script>
</body>
</html>