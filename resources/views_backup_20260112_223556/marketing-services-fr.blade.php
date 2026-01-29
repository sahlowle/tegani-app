<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services de marketing relationnel | Software Makers</title>
    <link rel="icon" type="image/png" href="{{ asset('images/fiv2.png') }}">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <style>
        .marketing-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .marketing-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="rgba(255,255,255,0.1)"/><stop offset="100%" stop-color="rgba(255,255,255,0)"/></radialGradient></defs><circle cx="200" cy="200" r="100" fill="url(%23a)"/><circle cx="800" cy="300" r="150" fill="url(%23a)"/><circle cx="400" cy="700" r="120" fill="url(%23a)"/></svg>') no-repeat center center;
            background-size: cover;
        }
        
        .marketing-hero-content {
            position: relative;
            z-index: 2;
            color: white;
        }
        
        .marketing-hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .marketing-hero .lead {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }
        
        .sector-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
            height: 100%;
        }
        
        .sector-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .sector-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: white;
        }
        
        .sector-icon.health { background: linear-gradient(135deg, #ff6b6b, #ee5a24); }
        .sector-icon.tech { background: linear-gradient(135deg, #4ecdc4, #44a08d); }
        .sector-icon.real-estate { background: linear-gradient(135deg, #feca57, #ff9ff3); }
        .sector-icon.tourism { background: linear-gradient(135deg, #48cae4, #0077b6); }
        .sector-icon.consumer { background: linear-gradient(135deg, #a8e6cf, #88d8a3); }
        .sector-icon.manufacturing { background: linear-gradient(135deg, #ffd93d, #6bcf7f); }
        .sector-icon.education { background: linear-gradient(135deg, #ff8a80, #ff5722); }
        .sector-icon.energy { background: linear-gradient(135deg, #81c784, #4caf50); }
        .sector-icon.food { background: linear-gradient(135deg, #ffb74d, #ff9800); }
        .sector-icon.logistics { background: linear-gradient(135deg, #90caf9, #2196f3); }
        .sector-icon.media { background: linear-gradient(135deg, #ce93d8, #9c27b0); }
        .sector-icon.sports { background: linear-gradient(135deg, #f48fb1, #e91e63); }
        .sector-icon.government { background: linear-gradient(135deg, #b39ddb, #673ab7); }
        
        .kpi-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .kpi-number {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
        }
        
        .kpi-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .success-story {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            border-left: 5px solid #667eea;
        }
        
        .success-story h5 {
            color: #667eea;
            margin-bottom: 1rem;
        }
        
        .comparison-table {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .comparison-table table {
            margin: 0;
        }
        
        .comparison-table th {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 1.5rem;
            font-weight: 600;
        }
        
        .comparison-table td {
            padding: 1.2rem 1.5rem;
            border-bottom: 1px solid #f0f0f0;
            vertical-align: middle;
        }
        
        .comparison-table tbody tr:hover {
            background: #f8f9fa;
        }
        
        .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }
        
        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .cta-section .lead {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .btn-marketing {
            background: white;
            color: #667eea;
            border: none;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-marketing:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            color: #667eea;
        }
        
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #333;
        }
        
        .section-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 3rem;
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }
        
        .floating-element {
            position: absolute;
            width: 20px;
            height: 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-element:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; }
        .floating-element:nth-child(2) { top: 60%; right: 15%; animation-delay: 2s; }
        .floating-element:nth-child(3) { bottom: 30%; left: 20%; animation-delay: 4s; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .service-feature {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .service-feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        
        .service-feature i {
            font-size: 3rem;
            color: #667eea;
            margin-bottom: 1.5rem;
        }
        
        .service-feature h4 {
            color: #333;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .service-feature p {
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container" style="padding: 0 1.25rem;">
            <a class="navbar-brand" href="index-fr.html#home" style="display: flex; align-items: center; text-decoration: none; direction: ltr; margin-right: 1rem;">
                <div class="logo-container" style="position: relative; margin-right: 15px;">
                    <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="SMLC Company Logo" class="img-fluid" style="width: 64px; height: 64px; filter: brightness(1.1) contrast(1.1);">
                </div>
                <div class="brand-text" style="display: flex; flex-direction: column; align-items: flex-start; direction: ltr;">
                    <span class="fw-bold" style="font-size: 1.05rem; color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">Software Makers Limited Company</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Basculer le menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto align-items-center" style="gap: 0.05rem; flex-wrap: nowrap;">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-fr.html#home" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-home me-1"></i>
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-fr.html#about" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-info-circle me-1"></i>
                            À propos
                        </a>
                    </li>
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle position-relative" href="index-fr.html#services" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-briefcase me-1"></i>
                            Nos Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-mega shadow-lg" style="border: none; border-radius: 12px; padding: 1rem; min-width: 280px; max-width: 100%; margin-top: 0.5rem;">
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-cogs me-2"></i>
                                Services Techniques
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('consulting-services-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-lightbulb me-2 text-warning"></i>
                                Conseil Technique
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-development-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-code me-2 text-info"></i>
                                Développement de Systèmes
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-integration-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-link me-2 text-success"></i>
                                Intégration de Systèmes
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('project-management-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-project-diagram me-2 text-primary"></i>
                                Gestion de Projets Techniques
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('process-automation-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-robot me-2 text-danger"></i>
                                Optimisation et Automatisation des Processus
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('ui-ux-design-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-palette me-2" style="color: #e91e63;"></i>
                                Conception UI/UX
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('maintenance-support-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-tools me-2 text-secondary"></i>
                                Support Technique et Maintenance
                            </a></li>
                            <li><hr class="dropdown-divider my-3" style="opacity: 0.2;"></li>
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-chart-line me-2"></i>
                                Services Commerciaux
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('marketing-services-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-bullhorn me-2 text-warning"></i>
                                Services Marketing
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index-fr.html#odoo-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-cube me-2 text-info"></i>
                                Services Odoo ERP
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index-fr.html#ai-support" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-brain me-2" style="color: #9c27b0;"></i>
                                Système de Support IA
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-fr.html#presence" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-globe me-1"></i>
                            Notre Présence
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('careers-fr') }}" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-user-tie me-1"></i>
                            Carrières
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-fr.html#contact" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-envelope me-1"></i>
                            Contactez-nous
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-1 flex-wrap ms-lg-auto" style="flex-shrink: 0;">
                    <a href="{{ route('marketing-services') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.35rem 0.55rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.85rem;" title="Arabe">
                        <img src="https://flagcdn.com/w20/sa.png" alt="Drapeau de l'Arabie saoudite" width="20" height="15" style="border-radius: 3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('marketing-services-en') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.35rem 0.55rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.85rem;" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="Drapeau du Royaume-Uni" width="20" height="15" style="border-radius: 3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('marketing-services-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.35rem 0.55rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.85rem; background: rgba(0,0,0,0.2);" title="Français">
                        <img src="https://flagcdn.com/w20/fr.png" alt="Drapeau de la France" width="20" height="15" style="border-radius: 3px;">
                        <span>FR</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="marketing-hero">
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="marketing-hero-content" data-aos="fade-up">
                        <h1>Marketing relationnel à fort impact</h1>
                        <p class="lead">Votre partenaire de confiance pour activer des réseaux d’affaires locaux et internationaux.</p>
                        <p class="lead">Chez <strong>Software Makers</strong>, nous concevons des campagnes sur mesure qui combinent intelligence de marché, relations institutionnelles et présence sur le terrain afin d’ouvrir de nouveaux canaux commerciaux et de renforcer la réputation des marques que nous accompagnons.</p>
                        <a href="#services" class="btn-marketing">
                            <i class="fas fa-rocket me-2"></i>
                            Découvrir nos expertises
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2 class="section-title">Pourquoi choisir notre équipe marketing&nbsp;?</h2>
                    <p class="section-subtitle">
                        Dans un environnement où la confiance et les partenariats déterminent la vitesse de croissance, nous élaborons des stratégies relationnelles qui connectent votre entreprise aux décideurs clés, structurent les messages différenciants et transforment chaque interaction en opportunité mesurable.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services by Sectors Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Nos services par <span class="text-gradient">secteur</span></h2>
                    <p class="section-subtitle">Des dispositifs adaptés à chaque industrie stratégique</p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Health Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="sector-card">
                        <div class="sector-icon health">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h4>Santé et dispositifs médicaux</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Positionnement des hôpitaux et cliniques privées & publiques</li>
                            <li><i class="fas fa-check text-success me-2"></i> Promotion d’équipements et consommables médicaux</li>
                            <li><i class="fas fa-check text-success me-2"></i> Programmes de tourisme médical pour les patients internationaux</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Tech Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="sector-card">
                        <div class="sector-icon tech">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <h4>Technologies et solutions numériques</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Go-to-market pour matériels, logiciels et IA</li>
                            <li><i class="fas fa-check text-success me-2"></i> Gestion d’événements de lancement et roadshows</li>
                            <li><i class="fas fa-check text-success me-2"></i> Construction d’alliances stratégiques avec investisseurs et grands comptes</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Real Estate Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="sector-card">
                        <div class="sector-icon real-estate">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4>Immobilier et construction</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Campagnes de vente pour projets résidentiels et commerciaux</li>
                            <li><i class="fas fa-check text-success me-2"></i> Roadshows investisseurs au Moyen-Orient, en Europe et en Afrique</li>
                            <li><i class="fas fa-check text-success me-2"></i> Organisation de salons immobiliers et de sessions B2B</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Tourism Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="sector-card">
                        <div class="sector-icon tourism">
                            <i class="fas fa-plane"></i>
                        </div>
                        <h4>Tourisme & tourisme médical</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Création d’offres combinant soins spécialisés et hospitalité</li>
                            <li><i class="fas fa-check text-success me-2"></i> Coordination logistique pour patients et accompagnants</li>
                            <li><i class="fas fa-check text-success me-2"></i> Partenariats avec agences de voyages santé et assureurs</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Consumer Goods Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="sector-card">
                        <div class="sector-icon consumer">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <h4>Biens de consommation & luxe</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Lancements de gammes food & beverage premium</li>
                            <li><i class="fas fa-check text-success me-2"></i> Activation retail pour mode et parfums de prestige</li>
                            <li><i class="fas fa-check text-success me-2"></i> Expansion multicanale au sein des marchés GCC, Europe et Afrique</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Manufacturing Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="sector-card">
                        <div class="sector-icon manufacturing">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h4>Industrie & commerce</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Promotion d’équipements industriels et matières premières</li>
                            <li><i class="fas fa-check text-success me-2"></i> Mise en relation avec distributeurs, fabricants et fonds d’investissement</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Education Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="sector-card">
                        <div class="sector-icon education">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>Éducation & formation</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Promotion d’universités, d’écoles spécialisées et de bootcamps</li>
                            <li><i class="fas fa-check text-success me-2"></i> Création de partenariats académiques-entreprises</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Energy Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="sector-card">
                        <div class="sector-icon energy">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h4>Énergie & transition verte</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Communication autour des projets d’énergie renouvelable</li>
                            <li><i class="fas fa-check text-success me-2"></i> Montage d’alliances avec porteurs de capitaux et partenaires technologiques</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Food Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="900">
                    <div class="sector-card">
                        <div class="sector-icon food">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h4>Agroalimentaire & restauration</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Campagnes pour chaînes de restaurants, hôtels et cafés</li>
                            <li><i class="fas fa-check text-success me-2"></i> Plans de lancement pour produits alimentaires innovants</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Logistics Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1000">
                    <div class="sector-card">
                        <div class="sector-icon logistics">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h4>Transport & logistique</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Valorisation d’opérateurs de fret et de chaînes du froid</li>
                            <li><i class="fas fa-check text-success me-2"></i> Conventions commerciales avec acteurs locaux et globaux</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Media Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1100">
                    <div class="sector-card">
                        <div class="sector-icon media">
                            <i class="fas fa-video"></i>
                        </div>
                        <h4>Médias & communication</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Activation des maisons de production et régies publicitaires</li>
                            <li><i class="fas fa-check text-success me-2"></i> Mise en contact avec des partenaires médias premium</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Sports Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1200">
                    <div class="sector-card">
                        <div class="sector-icon sports">
                            <i class="fas fa-futbol"></i>
                        </div>
                        <h4>Sport & divertissement</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Programmes pour clubs, festivals et événements live</li>
                            <li><i class="fas fa-check text-success me-2"></i> Recherche de sponsors et d’investisseurs internationaux</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Government Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1300">
                    <div class="sector-card">
                        <div class="sector-icon government">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <h4>Institutions publiques & conseil</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Programmes PPP et communication d’initiatives publiques</li>
                            <li><i class="fas fa-check text-success me-2"></i> Conseil en diplomatie économique et gestion des parties prenantes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Marketing Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Nos services marketing <span class="text-gradient">transverses</span></h2>
                    <p class="section-subtitle">Une offre complète qui combine stratégie, relations et exécution</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-feature">
                        <i class="fas fa-network-wired"></i>
                        <h4>Réseau d'influence étendu</h4>
                        <p>Accès direct aux investisseurs, distributeurs et organismes publics des marchés MENA, Europe et Afrique.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-feature">
                        <i class="fas fa-bullhorn"></i>
                        <h4>Pilotage de campagnes</h4>
                        <p>Création et exécution de campagnes omnicanales adaptées à chaque segment et objectif de conversion.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-feature">
                        <i class="fas fa-handshake"></i>
                        <h4>Construction de partenariats</h4>
                        <p>Animation de tables rondes, matchmaking B2B et négociation d’accords commerciaux gagnant-gagnant.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-feature">
                        <i class="fas fa-chart-line"></i>
                        <h4>Suivi et mesure de la valeur</h4>
                        <p>Tableaux de bord en temps réel, KPIs sectoriels et recommandations pour maximiser le ROI.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KPIs Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Indicateurs de performance <span class="text-gradient">par secteur</span></h2>
                    <p class="section-subtitle">Des résultats prouvés et comparables</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="kpi-card">
                        <div class="kpi-number">25+</div>
                        <div class="kpi-label">Nouveaux partenariats activés chaque mois</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="kpi-card">
                        <div class="kpi-number">150%</div>
                        <div class="kpi-label">Croissance moyenne du chiffre d’affaires</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="kpi-card">
                        <div class="kpi-number">500+</div>
                        <div class="kpi-label">Contacts qualifiés & investisseurs mobilisés</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="kpi-card">
                        <div class="kpi-number">95%</div>
                        <div class="kpi-label">Amélioration de la perception de marque</div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Histoires <span class="text-gradient">de réussite</span></h2>
                    <p class="section-subtitle">Des cas concrets, mesurés et documentés</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="success-story">
                        <h5><i class="fas fa-hospital me-2"></i>Santé</h5>
                        <p>Augmentation de <strong>40&nbsp;%</strong> du taux d’occupation d’un hôpital spécialisé grâce à des accords conclus avec des assureurs et agences de tourisme médical.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="success-story">
                        <h5><i class="fas fa-building me-2"></i>Immobilier</h5>
                        <p>Organisation d’un roadshow international permettant à un promoteur d’écouler <strong>60&nbsp;%</strong> de ses unités en trois mois.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="success-story">
                        <h5><i class="fas fa-laptop-code me-2"></i>Technologie</h5>
                        <p>Lancement coordonné d’une nouvelle plateforme SaaS avec relais presse et influenceurs&nbsp;: présence commerciale dans <strong>15 pays</strong> la première année.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="success-story">
                        <h5><i class="fas fa-utensils me-2"></i>Agroalimentaire</h5>
                        <p>Signature de nouveaux accords de distribution dans <strong>8 pays</strong> et +<strong>80&nbsp;%</strong> de revenus pour une marque premium de produits gourmets.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Comparatif <span class="text-gradient">par secteur</span></h2>
                    <p class="section-subtitle">Une vision synthétique de nos offres et parties prenantes</p>
                </div>
            </div>
            
            <div class="comparison-table" data-aos="fade-up">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Secteur</th>
                            <th>Focus de nos interventions</th>
                            <th>Typologie de relations activées</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Santé & dispositifs médicaux</strong></td>
                            <td>Cliniques, équipements, tourisme médical</td>
                            <td>Investisseurs, distributeurs, assureurs internationaux</td>
                        </tr>
                        <tr>
                            <td><strong>Technologies</strong></td>
                            <td>Matériel, logiciels, lancement produits</td>
                            <td>Grandes entreprises, venture capital, intégrateurs</td>
                        </tr>
                        <tr>
                            <td><strong>Immobilier</strong></td>
                            <td>Projets résidentiels & commerciaux, salons</td>
                            <td>Investisseurs locaux et internationaux</td>
                        </tr>
                        <tr>
                            <td><strong>Consommation & luxe</strong></td>
                            <td>Mode, parfums, F&B premium</td>
                            <td>Retailers, marketplaces, acheteurs-clés</td>
                        </tr>
                        <tr>
                            <td><strong>Éducation & formation</strong></td>
                            <td>Universités, programmes certifiants</td>
                            <td>Institutions académiques, entreprises, organismes d’accréditation</td>
                        </tr>
                        <tr>
                            <td><strong>Énergie & environnement</strong></td>
                            <td>Projets ENR, initiatives vertes</td>
                            <td>Fonds d’investissement, industriels, ONG</td>
                        </tr>
                        <tr>
                            <td><strong>Transport & logistique</strong></td>
                            <td>Transport routier, supply chain, entrepôts</td>
                            <td>Opérateurs logistiques, distributeurs, capital-investisseurs</td>
                        </tr>
                        <tr>
                            <td><strong>Médias & publicité</strong></td>
                            <td>Studios, agences créatives, régies</td>
                            <td>Partenaires médias, influenceurs, plateformes</td>
                        </tr>
                        <tr>
                            <td><strong>Sport & divertissement</strong></td>
                            <td>Clubs, événements live, festivals</td>
                            <td>Sponsors, fonds privés, fédérations</td>
                        </tr>
                        <tr>
                            <td><strong>Institutions publiques</strong></td>
                            <td>Programmes gouvernementaux, PPP</td>
                            <td>Ministères, agences publiques, entreprises privées</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2>Lancez votre prochaine campagne</h2>
                    <p class="lead">Le succès n’est jamais le fruit du hasard&nbsp;: il dépend de la qualité de votre réseau, de la clarté de votre proposition de valeur et de la capacité à activer les bonnes audiences.</p>
                    <p class="lead">Contactez nos consultants pour bâtir un plan d’action sur mesure et accélérer votre présence sur les principaux marchés internationaux.</p>
                    <a href="index-fr.html#contact" class="btn-marketing">
                        <i class="fas fa-phone me-2"></i>
                        Discuter avec un expert
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-dark py-4">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Logo de Software Makers Limited Company - SMLC" class="footer-logo mb-2">
                        <span class="fw-bold">Software Makers Limited Company</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 Tous droits réservés</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('marketing-services') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('marketing-services-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('marketing-services-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="https://wa.me/966555883492?text=Hello%20Software%20Makers" class="whatsapp-fab" aria-label="Contact via WhatsApp" target="_blank" rel="noopener">
        <svg viewBox="0 0 32 32" aria-hidden="true" class="whatsapp-icon">
            <path fill="currentColor" d="M26.1 5.9A13.9 13.9 0 1 0 4.7 26.3L3 29.8a1 1 0 0 0 1.3 1.3l3.4-1.7A13.9 13.9 0 1 0 26.1 5.9zM16 28.1c-2.3 0-4.6-.7-6.5-1.9l-.5-.3-3.9 2 2-3.9-.3-.5A12 12 0 1 1 28 16 12 12 0 0 1 16 28.1zm6.6-7.7c-.4-.2-2.3-1.1-2.7-1.3-.4-.1-.7-.2-1 .2-.3.4-1.1 1.3-1.3 1.6-.2.2-.5.3-.9.1-2.3-1.1-4-3-4.6-3.9-.2-.3 0-.6.2-.8.2-.2.4-.5.6-.7.2-.2.3-.4.4-.7.1-.2 0-.5 0-.7 0-.2-1-2.5-1.3-3.4-.3-.8-.7-.7-1-.7h-.9c-.3 0-.7.1-1 .5-.4.4-1.3 1.3-1.3 3.1 0 1.8 1.3 3.6 1.5 3.9.2.3 2.6 3.9 6.3 5.5.9.4 1.6.6 2.1.8.9.3 1.7.2 2.3.1.7-.1 2.3-.9 2.6-1.8.3-.9.3-1.6.2-1.8-.1-.2-.3-.2-.5-.3z"/>
        </svg>
    </a>
    <div id="cookiesBanner" class="cookies-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="cookies-content">
                        <i class="fas fa-cookie-bite me-2"></i>
                        <span>Nous utilisons des cookies pour améliorer votre expérience sur notre site. En utilisant le site, vous acceptez notre utilisation des cookies conformément à nos <a href="{{ route('terms-fr') }}" class="terms-link">termes et conditions</a>.</span>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="cookies-actions">
                        <button id="acceptCookies" class="btn btn-primary btn-sm me-2">
                            <i class="fas fa-check me-1"></i>
                            Accepter
                        </button>
                        <button id="declineCookies" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-times me-1"></i>
                            Refuser
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="i18n.js"></script>
    <!-- Custom JS -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });


        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
    <!-- Script de Protection contre la Copie -->
    <script>
        document.addEventListener('selectstart', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('copy', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('cut', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('paste', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('keydown', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                if (e.ctrlKey && (e.key === 'c' || e.key === 'v' || e.key === 'x' || e.key === 'a')) {
                    return true;
                }
            }

            if (e.ctrlKey && (e.key === 'c' || e.key === 'v' || e.key === 'x' || e.key === 'a' || e.key === 's' || e.key === 'u')) {
                e.preventDefault();
                return false;
            }

            if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J' || e.key === 'C'))) {
                e.preventDefault();
                return false;
            }
        });

        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
            return false;
        });

        document.addEventListener('dragstart', function(e) {
            e.preventDefault();
            return false;
        });
    </script>

</body>
</html>




