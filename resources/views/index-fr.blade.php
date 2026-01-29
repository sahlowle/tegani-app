@extends('layouts.app')

@section('title', 'Software Makers - SMLC')

@section('description', 'Software Makers Limited Company - Entreprise saoudienne leader dans le développement de logiciels et les solutions techniques avancées utilisant l\'IA et les technologies modernes')

@section('content')
<!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            Nous sommes <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">Software Makers</span>
                            <br>Construisons l'Avenir Numérique
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            Une entreprise saoudienne leader dans le développement de logiciels et les solutions techniques avancées
                            utilisant l'intelligence artificielle et les technologies modernes
                        </p>
                        <div class="partner-badges mb-4" style="background: rgba(0, 212, 255, 0.15); padding: 1rem; border-radius: 10px; border: 1px solid rgba(0, 212, 255, 0.3); display: flex; align-items: center; gap: 12px;">
                            <img class="odoo-badge" alt="Partenaire Odoo" src="{{ asset('images/odoo_logo.png') }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; filter: brightness(1.3);" />
                            <span style="color: #ffffff; font-weight: bold; text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">Partenaire Odoo Certifié</span>
                        </div>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#about" class="btn btn-primary btn-lg btn-interactive">
                                <i class="fas fa-rocket me-2"></i>
                                Découvrir Nos Services
                            </a>
                            <a href="#contact" class="btn btn-outline-light btn-lg btn-interactive">
                                <i class="fas fa-phone me-2"></i>
                                Contactez-nous
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="hero-image">
                        <div class="floating-icons">
                            <i class="fab fa-react floating-icon" style="--delay: 0s"></i>
                            <i class="fas fa-database floating-icon" style="--delay: 1s"></i>
                            <i class="fas fa-cloud floating-icon" style="--delay: 2s"></i>
                            <i class="fas fa-mobile-alt floating-icon" style="--delay: 0.5s"></i>
                            <i class="fas fa-brain floating-icon" style="--delay: 1.5s"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="scroll-arrow"></div>
        </div>
    </section>

    

    


    <!-- About Section -->
    <section id="about" class="py-5 position-relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="about-bg-pattern"></div>
        
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <div class="about-header">
                        <span class="about-badge">À propos de nous</span>
                        <h2 class="section-title">Société <span class="text-gradient">Software Makers</span></h2>
                        <p class="section-subtitle">Leaders dans les solutions informatiques et la transformation numérique</p>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-content">
                        <div class="about-intro">
                            <div class="intro-badge">
                                <i class="fas fa-crown"></i>
                                <span>Entreprise saoudienne leader</span>
                            </div>
                            <h3 class="about-title">
                                Nous sommes des pionniers de l'innovation technique dans le Royaume
                            </h3>
                            <p class="about-description">
                                Software Makers pour les solutions informatiques est une entreprise saoudienne leader qui développe et crée des logiciels 
                                en utilisant les dernières technologies telles que l'intelligence artificielle, la cybersécurité, la réalité virtuelle et l'Internet des objets.
                            </p>
                            <p class="about-description">
                                Nous travaillons au développement de systèmes d'entreprise tels que les systèmes de planification des ressources d'entreprise (ERP) et les systèmes d'information hospitaliers (HIS), 
                                et des solutions Odoo personnalisées en tant que partenaire officiel et certifié d'Odoo.
                            </p>
                        </div>
                        
                        <div class="about-stats d-flex flex-wrap justify-content-between">
                            <div class="stat-item">
                                <div class="stat-number">169</div>
                                <div class="stat-label">Projets réalisés</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">1382</div>
                                <div class="stat-label">Clients satisfaits</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">1214</div>
                                <div class="stat-label">Consultations fournies</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">7</div>
                                <div class="stat-label">Années d'expérience</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-visual">
                        <div class="tech-showcase">
                            <div class="tech-item enhanced floating" style="animation-delay: 0s;">
                                <div class="tech-icon icon-ai pulsing">
                                    <svg class="svg-icon" viewBox="0 0 64 64" aria-hidden="true">
                                        <!-- Stylized AI monogram -->
                                        <path d="M18 46l8-28 8 28M21 36h10M44 18v28"/>
                                    </svg>
                                </div>
                                <div class="tech-content">
                                    <h5>Intelligence Artificielle</h5>
                                    <p>Solutions Intelligentes Avancées</p>
                                </div>
                                <div class="tech-glow"></div>
                            </div>
                            <div class="tech-item enhanced floating" style="animation-delay: 0.5s;">
                                <div class="tech-icon icon-cyber pulsing">
                                    <svg class="svg-icon" viewBox="0 0 64 64" aria-hidden="true">
                                        <path d="M32 8l18 6v12c0 14-10 22-18 26-8-4-18-12-18-26V14l18-6zM26 34l6 6 10-12"/>
                                    </svg>
                                </div>
                                <div class="tech-content">
                                    <h5>Cybersécurité</h5>
                                    <p>Protection Complète des Données</p>
                                </div>
                                <div class="tech-glow"></div>
                            </div>
                            <div class="tech-item enhanced floating" style="animation-delay: 1s;">
                                <div class="tech-icon icon-vr pulsing">
                                    <svg class="svg-icon" viewBox="0 0 64 64" aria-hidden="true">
                                        <path d="M10 22h44a4 4 0 0 1 4 4v12a6 6 0 0 1-6 6H40l-6-8-6 8H12a6 6 0 0 1-6-6V26a4 4 0 0 1 4-4zM20 32a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm24 0a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                                    </svg>
                                </div>
                                <div class="tech-content">
                                    <h5>Réalité Virtuelle</h5>
                                    <p>Expériences Interactives Avancées</p>
                                </div>
                                <div class="tech-glow"></div>
                            </div>
                            <div class="tech-item enhanced floating" style="animation-delay: 1.5s;">
                                <div class="tech-icon icon-iot pulsing">
                                    <svg class="svg-icon" viewBox="0 0 64 64" aria-hidden="true">
                                        <path d="M32 12a8 8 0 0 1 8 8m-8-14c12 0 22 10 22 22M10 28c0-12 10-22 22-22M32 32v12m0 0-10 6m10-6 10 6M12 44l10-6M52 44l-10-6"/>
                                    </svg>
                                </div>
                                <div class="tech-content">
                                    <h5>Internet des Objets</h5>
                                    <p>Connectivité des Appareils Intelligents</p>
                                </div>
                                <div class="tech-glow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card enhanced">
                        <div class="feature-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4>Expertise mondiale</h4>
                        <p>Nous exploitons l'expertise américaine et européenne et la localisons pour répondre aux exigences du marché local</p>
                        <div class="feature-highlight"></div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card enhanced">
                        <div class="feature-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4>Vision 2030</h4>
                        <p>Nous contribuons à la réalisation de la Vision 2030 de l'Arabie saoudite grâce à des solutions techniques innovantes</p>
                        <div class="feature-highlight"></div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card enhanced">
                        <div class="feature-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4>Transformation numérique</h4>
                        <p>Nous accompagnons nos clients dans leur parcours vers le développement et le succès durable jusqu'aux horizons les plus lointains</p>
                        <div class="feature-highlight"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section id="vision-mission" class="py-5 bg-light position-relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="vm-bg-pattern"></div>
        
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <div class="vm-header">
                        <span class="vm-badge">Notre vision et mission</span>
                        <h2 class="section-title">Vers un <span class="text-gradient">avenir numérique plus efficace</span></h2>
                        <p class="section-subtitle">Nous croyons en la puissance de la technologie pour construire un avenir meilleur</p>
                    </div>
                </div>
            </div>
            
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="vm-card vision h-100 interactive-element">
                        <div class="vm-card-bg"></div>
                        <div class="vm-icon icon-eye glowing">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="vm-content">
                            <h3 class="vm-title">Notre vision</h3>
                            <p class="vm-text">
                                Être Software Makers Limited Company, l'entreprise leader dans le conseil, le marketing et les solutions informatiques, fournissant des solutions durables et innovantes pour faire face aux défis en Arabie saoudite et au-delà.
                            </p>
                            <div class="vm-features">
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Leadership dans le conseil</span>
                                </div>
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Solutions durables et innovantes</span>
                                </div>
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Portée régionale et mondiale</span>
                                </div>
                            </div>
                        </div>
                        <div class="vm-decoration">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="vm-card mission h-100 interactive-element">
                        <div class="vm-card-bg"></div>
                        <div class="vm-icon icon-rocket bouncing">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="vm-content">
                            <h3 class="vm-title">Notre mission</h3>
                            <p class="vm-text">
                                Autonomiser les institutions gouvernementales et privées dans la transformation numérique et étendre leur présence sur les marchés locaux et internationaux grâce à des solutions innovantes qui soutiennent l'investissement et les opérations. Nous nous engageons à être un partenaire de confiance qui transforme les défis en opportunités, et à contribuer à la construction d'un avenir plus efficace et durable conformément à la Vision 2030 du Royaume.
                            </p>
                            <div class="vm-features">
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Permettre la transformation numérique</span>
                                </div>
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Solutions innovantes</span>
                                </div>
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Soutenir la Vision 2030</span>
                                </div>
                            </div>
                        </div>
                        <div class="vm-decoration">
                            <i class="fas fa-flag"></i>
                            <i class="fas fa-flag"></i>
                            <i class="fas fa-flag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Why Choose Us Section -->
    <section id="why-us" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Pourquoi <span class="text-primary">Software Makers</span> ?</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <div class="why-content">
                            <h4>Système unifié</h4>
                            <p>Intègre toutes les opérations de l'entreprise dans une plateforme intégrée</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                        <div class="why-content">
                            <h4>Évolutivité facile</h4>
                            <p>Possibilité d'ajouter facilement de nouveaux modules à l'avenir</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <div class="why-content">
                            <h4>Amélioration de l'efficacité</h4>
                            <p>Augmenter l'efficacité opérationnelle et réduire les erreurs humaines</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <div class="why-content">
                            <h4>Rapports en temps réel</h4>
                            <p>Rapports et analyses instantanés qui soutiennent la prise de décision</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Services Section -->
    <section id="tech-services" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Services techniques et <span class="text-primary">de conseil</span></h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-lightbulb">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>Conseil technique</h4>
                        <p>Nous fournissons des conseils stratégiques et techniques complets qui permettent aux institutions de prendre des décisions précises dans leur parcours de transformation numérique</p>
                        <a href="{{ route('consulting-services-fr') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            En savoir plus
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-cogs">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>Développement de systèmes</h4>
                        <p>Conception et développement de systèmes intégrés adaptés à la nature du client, y compris les systèmes d'entreprise, les sites web et les applications intelligentes</p>
                        <a href="{{ route('system-development-fr') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            En savoir plus
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-link">
                            <i class="fas fa-link"></i>
                        </div>
                        <h4>Intégration de systèmes</h4>
                        <p>Connexion de plusieurs systèmes au sein de l'institution ou entre eux et des parties externes grâce à des solutions d'intégration intelligentes</p>
                        <a href="{{ route('system-integration-fr') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            En savoir plus
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-diagram">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h4>Gestion de projets techniques</h4>
                        <p>Gestion intégrée des projets techniques incluant la planification, la mise en œuvre, le suivi et l'assurance qualité</p>
                        <a href="{{ route('project-management-fr') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            En savoir plus
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-robot">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h4>Optimisation et automatisation des processus</h4>
                        <p>Conversion des processus manuels en processus automatisés intelligents basés sur l'intelligence artificielle et l'analyse prédictive</p>
                        <a href="{{ route('process-automation-fr') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            En savoir plus
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-palette">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4>Conception UI/UX</h4>
                        <p>Designing modern interactive interfaces that make it easy for users to access services clearly and smoothly</p>
                        <a href="{{ route('ui-ux-design-fr') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            En savoir plus
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-tools">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4>Support technique et maintenance</h4>
                        <p>Integrated technical support that ensures continuity of digital systems without interruption through specialized teams</p>
                        <a href="{{ route('maintenance-support-fr') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Development Services Section -->
    <section id="business-development-services" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <span class="service-badge">Business Development Services</span>
                    <h2 class="section-title">Business <span class="text-primary">Development Services</span></h2>
                    <p class="section-subtitle">Comprehensive services to support the growth and development of your business</p>
                </div>
            </div>
            
            <div class="row">
                <!-- Growth Strategy -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card interactive-element">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Formulation de Stratégies de Croissance</h4>
                        <p>Préparation de plans stratégiques innovants pour augmenter la part de marché et renforcer la compétitivité localement et internationalement</p>
                        <a href="{{ route('growth-strategy-fr') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i>En savoir plus
                        </a>
                    </div>
                </div>
                
                <!-- Partnership Management -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card interactive-element">
                        <div class="service-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Gestion et construction de partenariats</h4>
                        <p>Recherche d'opportunités de coopération et construction de partenariats stratégiques avec des entités locales et internationales</p>
                        <a href="{{ route('partnership-management-fr') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i>En savoir plus
                        </a>
                    </div>
                </div>
                
                <!-- Market Analysis -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card interactive-element">
                        <div class="service-icon">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                        <h4>Analyse des Marchés et Opportunités d'Investissement</h4>
                        <p>Étude des marchés cibles et analyse des tendances et défis pour sélectionner les meilleures opportunités</p>
                        <a href="{{ route('market-analysis-fr') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i>En savoir plus
                        </a>
                    </div>
                </div>
                
                <!-- Business Model Design -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card interactive-element">
                        <div class="service-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>Conception de Modèles d'Affaires</h4>
                        <p>Création de modèles d'affaires intégrés et durables qui assurent la rentabilité et la valeur ajoutée</p>
                        <a href="{{ route('business-model-design-fr') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i>En savoir plus
                        </a>
                    </div>
                </div>
                
                <!-- Project Management -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card interactive-element">
                        <div class="service-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h4>Gestion de Projets de Développement</h4>
                        <p>Diriger et exécuter des projets de développement d'affaires de l'idée aux résultats tangibles</p>
                        <a href="{{ route('development-projects-fr') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i>En savoir plus
                        </a>
                    </div>
                </div>
                
                <!-- Commercial Representation -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card interactive-element">
                        <div class="service-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h4>Représentation Commerciale et Négociation</h4>
                        <p>Représenter les clients dans les négociations et réunions avec partenaires et investisseurs pour obtenir les meilleurs résultats</p>
                        <a href="{{ route('commercial-representation-fr') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i>En savoir plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Odoo Official Partner Banner -->
    <section id="odoo-partner-banner" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-5 text-center" data-aos="fade-right">
                    <img src="{{ asset('images/smlc-odoo.png') }}" alt="SMLC - Odoo Official Partner" class="img-fluid" style="max-height: 260px;">
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <h2 class="mb-3">Partenaires officiels Odoo</h2>
                    <p class="lead mb-3">
                        Nous sommes fiers de la confiance d'Odoo en nous en tant que partenaire officiel pour fournir des solutions ERP complètes qui simplifient la gestion d'entreprise
                        et connectent les équipes et les opérations sur une plateforme intelligente et facile à utiliser.
                    </p>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Mise en œuvre professionnelle et personnalisation adaptée à la nature de votre entreprise</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Formation continue et support technique pour assurer une transformation numérique réussie</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Intégration flexible avec les systèmes et services existants</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Odoo Services Section -->
    <section id="odoo-services" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Services <span class="text-primary">Odoo ERP</span></h2>
                    <p class="section-subtitle">Partenaire officiel et certifié d'Odoo</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-sales-fr') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Sales" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/sale/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Gestion des ventes</h5>
                        <p>Suivi des devis, commandes et factures</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> En savoir plus
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-purchase-fr') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Purchase" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/purchase/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Gestion des achats</h5>
                        <p>Organisation des commandes d'achat et gestion des fournisseurs</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> En savoir plus
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-inventory-fr') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Inventory" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/stock/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Gestion des stocks</h5>
                        <p>Contrôle total des stocks et suivi des marchandises</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> En savoir plus
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-hr-fr') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo HR" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/hr/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Ressources humaines</h5>
                        <p>Gestion du recrutement, de la présence et de la paie</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> En savoir plus
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-accounting-fr') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Accounting" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/account/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Comptabilité et finance</h5>
                        <p>Gestion des comptes, taxes et rapports financiers</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> En savoir plus
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-crm-fr') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo CRM" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/crm/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Gestion de la relation client (CRM)</h5>
                        <p>Suivi des clients, opportunités de vente et campagnes</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> En savoir plus
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-project-fr') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Project" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/project/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Gestion de projet</h5>
                        <p>Planification, organisation et suivi de l'avancement des projets</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> En savoir plus
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-manufacturing-fr') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Manufacturing" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/mrp/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Gestion de la fabrication</h5>
                        <p>Planification et suivi efficaces des opérations de production</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> En savoir plus
                        </span>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Health Information Systems Section -->
    <section id="health-information-systems" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <span class="service-badge">Systèmes d'information de santé</span>
                    <h2 class="section-title">Services de <span class="text-primary">systèmes d'information de santé</span></h2>
                    <p class="section-subtitle">Solutions techniques intégrées pour les hôpitaux et centres de santé</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <div class="card border-primary">
                        <div class="card-body p-5">
                            <i class="fas fa-hospital fa-3x text-primary mb-4"></i>
                            <h4 class="mb-3">Solutions complètes de systèmes d'information de santé</h4>
                            <p class="lead mb-4">
                                Nous fournissons des solutions techniques intégrées pour les hôpitaux et centres de santé, notamment la gestion des patients, les dossiers médicaux électroniques, la gestion de la pharmacie, les opérations chirurgicales et l'analyse de santé utilisant l'intelligence artificielle.
                            </p>
                            <a href="{{ route('health-systems-fr') }}" class="btn btn-primary btn-lg">
                                <i class="fas fa-arrow-right me-2"></i>
                                En savoir plus sur les services de systèmes d'information de santé
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sovereign Systems Section -->
    <section id="sovereign-systems" class="py-5 bg-light position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <span class="service-badge">Systèmes souverains et transformation numérique</span>
                    <h2 class="section-title">Société Software Makers… <span class="text-primary">Expertise complète dans la construction de systèmes souverains et la transformation numérique complète</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up">
                    <div class="card border-0 shadow-lg" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
                        <div class="card-body p-5">
                            <div class="row align-items-center">
                                <div class="col-lg-3 text-center mb-4 mb-lg-0">
                                    <div class="sovereign-icon-wrapper" style="background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary)); width: 120px; height: 120px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 10px 30px rgba(0, 212, 255, 0.3);">
                                        <i class="fas fa-shield-alt fa-3x text-white"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <p class="lead mb-4" style="line-height: 2; font-size: 1.1rem; color: #333;">
                                        Software Makers Limited Company possède des capacités solides et une expertise avancée dans le développement, la mise en œuvre et l'exploitation de systèmes nationaux et souverains, conformément aux normes techniques et réglementaires les plus élevées approuvées internationalement. L'entreprise a établi sa position en tant qu'entité exécutive de confiance dans les grands projets gouvernementaux, grâce à son système intégré d'expertise, de compétences et de cadres spécialisés.
                                    </p>
                                    <a href="login-fr.html?redirect=sovereign-systems-fr.html" class="btn btn-primary btn-lg">
                                        <i class="fas fa-arrow-right me-2"></i>
                                        En savoir plus sur nos capacités en systèmes souverains
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Marketing Services Section -->
    <section id="marketing-relations" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title mb-4">
                        <i class="fas fa-handshake me-3 text-primary"></i>
                        <span>Services de marketing par les relations</span>
                    </h2>
                    <p class="lead mb-4">
                        Nous proposons des services marketing intégrés axés sur la construction de relations solides avec les clients et les partenaires, grâce à des stratégies marketing innovantes et des solutions personnalisées qui vous aident à développer votre entreprise et à accroître votre présence sur le marché.
                    </p>
                    <a href="{{ route('marketing-services-fr') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-arrow-right me-2"></i>
                        Découvrez nos services marketing
                    </a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="feature-card enhanced h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h5>Gestion des relations</h5>
                                <p>Construire des relations solides avec les clients et les partenaires</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card enhanced h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h5>Stratégies marketing</h5>
                                <p>Solutions marketing innovantes et personnalisées</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card enhanced h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <h5>Campagnes marketing</h5>
                                <p>Campagnes efficaces pour accroître la présence sur le marché</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card enhanced h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <h5>Réseau de relations</h5>
                                <p>Élargir votre réseau de relations commerciales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Support Section -->
    <section id="ai-support" class="py-5 text-white" style="background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="mb-4" style="font-size: 2.5rem;">
                        <i class="fas fa-microchip me-3" style="font-size: 2rem; background: linear-gradient(135deg, #00d4ff, #22e1ff, #4bffa5); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent;"></i>
                        Système de support technique intelligent
                        <span class="d-block h4 mt-2">ResolvePro AI</span>
                    </h2>
                    <p class="lead mb-4">
                        Automatisation intelligente pour le système de support technique et conversion de chaque demande en solution rapide et précise
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-2"></i>
                                <span>Instant integration without complexity</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-2"></i>
                                <span>Smart and context-aware responses</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-2"></i>
                                <span>Agent-guided interface</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-2"></i>
                                <span>Automatic scalability</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="ai-features">
                        <div class="feature-item">
                            <i class="fas fa-brain"></i>
                            <div>
                                <h5>Multi-stage Decision Engine</h5>
                                <p>From initial sorting to diagnosis and solution formulation</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-chart-bar"></i>
                            <div>
                                <h5>Continuous Improvement Loop</h5>
                                <p>Analytics to measure resolution time and customer satisfaction</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-rocket"></i>
                            <div>
                                <h5>Quick Launch</h5>
                                <p>From proof of concept to full operation in weeks</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Team Section (hidden) -->
    <section id="team" class="py-5" style="display: none !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">فريق <span class="text-primary">العمل</span></h2>
                    <p class="section-subtitle">نؤمن بالشغف في صناعة البرمجيات والابتكار وتجارب المستخدم المميزة.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Member 2 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <div class="member-photo">
                            <img class="lazy" alt="أمجد ربوعي" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/امجد.jpeg') }}"/>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">م/ د. أمجد ربوعي</h5>
                            <p class="member-role">مستشار التحول الرقمي وإدارة المشاريع الكبرى</p>
                            <div class="member-social">
                                <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 3 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-card">
                        <div class="member-photo">
                            <img class="lazy" alt="عبدالله البطاطي" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/عبدالله.jpeg') }}"/>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">أ/ عبدالله البطاطي</h5>
                            <p class="member-role">إدارة العلاقات العامة</p>
                            <div class="member-social">
                                <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 4 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-card">
                        <div class="member-photo">
                            <img class="lazy" alt="أمين العبيد" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="https://images.unsplash.com/photo-1600880292089-90e4b97f5b9f?q=80&w=600&auto=format&fit=crop"/>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">م/ أمين العبيد</h5>
                            <p class="member-role">مدير تقنية المعلومات</p>
                            <div class="member-social">
                                <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 5 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-card">
                        <div class="member-photo">
                            <img class="lazy" alt="حسن باودود" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/حسن.jpeg') }}"/>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">م/ حسن باودود</h5>
                            <p class="member-role">اختصاصي مركز بيانات</p>
                            <div class="member-social">
                                <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 6 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="team-card">
                        <div class="member-photo">
                            <img class="lazy" alt="التجاني مصطفى" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/التجانى.jpeg') }}"/>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">م/ التجاني مصطفى</h5>
                            <p class="member-role">مدير فريق المطورين والدعم الفني</p>
                            <div class="member-social">
                                <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 7 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="team-card">
                        <div class="member-photo">
                            <img class="lazy" alt="خالد صبيح" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/خالد.jpeg') }}"/>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">د/م خالد صبيح</h5>
                            <p class="member-role">مدير إدارة مشاريع Odoo</p>
                            <div class="member-social">
                                <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Partners Section -->
    <section id="partners" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Certifications - <span class="text-primary">Partenariats</span></h2>
                    <p class="section-subtitle">Entités sur lesquelles nous comptons et avec lesquelles nous sommes fiers de coopérer</p>
                </div>
            </div>
            <div class="row g-4 align-items-center justify-content-center partners-grid" data-aos="fade-up">
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="2" loading="lazy" src="{{ asset('images/2.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="3" loading="lazy" src="{{ asset('images/3.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="4" loading="lazy" src="{{ asset('images/4.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="5" loading="lazy" src="{{ asset('images/5.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="6" loading="lazy" src="{{ asset('images/6.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="7" loading="lazy" src="{{ asset('images/7.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="8" loading="lazy" src="{{ asset('images/8.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="9" loading="lazy" src="{{ asset('images/9.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="10" loading="lazy" src="{{ asset('images/10.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="11" loading="lazy" src="{{ asset('images/11.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="12" loading="lazy" src="{{ asset('images/12.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="14" loading="lazy" src="{{ asset('images/14.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="15" loading="lazy" src="{{ asset('images/15.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="16" loading="lazy" src="{{ asset('images/16.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="17" loading="lazy" src="{{ asset('images/17.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="18" loading="lazy" src="{{ asset('images/18.png') }}"></div></div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Ce qu'ils <span class="text-primary">disent de nous</span></h2>
                    <p class="section-subtitle">Opinions de nos clients et partenaires sur la qualité de nos services</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="testimonial-card">
                        <div class="testimonial-rating" aria-label="5 نجوم">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Service professionnel et support rapide. Ils nous ont aidés à accélérer notre transformation numérique avec une grande efficacité.</p>
                        <div class="testimonial-author">
                            <img class="avatar" alt="Client" src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" style="width: 50px; height: 50px; border-radius: 50%;"/>
                            <div>
                                <h6 class="mb-0">Ahmed Al-Subaie</h6>
                                <small class="text-muted">Directeur informatique</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <div class="testimonial-rating" aria-label="5 étoiles">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Solutions innovantes et exécution méticuleuse. Une équipe coopérative qui apporte une réelle valeur ajoutée.</p>
                        <div class="testimonial-author">
                            <img class="avatar" alt="Client" src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" style="width: 50px; height: 50px; border-radius: 50%;"/>
                            <div>
                                <h6 class="mb-0">Nora Al-Qahtani</h6>
                                <small class="text-muted">Chef de projet</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <div class="testimonial-rating" aria-label="5 étoiles">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Le meilleur partenaire technique avec lequel nous avons travaillé ces dernières années. Nous les recommandons vivement.</p>
                        <div class="testimonial-author">
                            <img class="avatar" alt="Client" src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" style="width: 50px; height: 50px; border-radius: 50%;"/>
                            <div>
                                <h6 class="mb-0">Salem Al-Shehri</h6>
                                <small class="text-muted">Chef du secteur commercial</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="presence" class="py-5 bg-light position-relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="presence-bg-pattern"></div>
        
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <div class="presence-header">
                        <span class="presence-badge">Notre présence</span>
                        <h2 class="section-title">Notre <span class="text-gradient">présence mondiale</span></h2>
                        <p class="section-subtitle">L'entreprise est présente dans quatre emplacements principaux :</p>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="presence-map-container">
                        <div class="world-map-image world-map-fr">
                            <img src="{{ asset('images/world.png') }}" 
                                 alt="World Map" 
                                 class="world-map-img">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="presence-locations">
                        <div class="location-item" data-country="saudi">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/sa.png" alt="Saudi Arabia Flag" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5>Royaume d'Arabie saoudite</h5>
                                <p>La Mecque</p>
                            </div>
                        </div>
                        
                        <div class="location-item" data-country="usa">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/us.png" alt="Drapeau des États-Unis" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5>États-Unis d'Amérique</h5>
                                <p>Chicago</p>
                            </div>
                        </div>
                        
                        <div class="location-item" data-country="egypt">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/eg.png" alt="Drapeau de l'Égypte" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5>Égypte</h5>
                                <p>Le Caire</p>
                            </div>
                        </div>
                        
                        <div class="location-item" data-country="bahrain">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/bh.png" alt="Drapeau de Bahreïn" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5>Bahreïn</h5>
                                <p>Manama</p>
                            </div>
                        </div>
                        
                        <div class="location-item coming-soon" data-country="senegal">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/sn.png" alt="Drapeau du Sénégal" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5>Senegal</h5>
                                <p>Dakar <span class="coming-soon-badge">(Bientôt disponible)</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-12" data-aos="fade-up">
                    <div class="presence-description">
                        <p class="text-center lead">
                            Cela permet la coopération avec des experts mondiaux et l'exploitation de l'expertise internationale et des modèles commerciaux qui représentent les meilleures pratiques, et grâce à cela, des services distinctifs et de haute qualité sont fournis qui répondent aux besoins et exigences des clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title text-white">Contactez-<span class="text-primary">nous</span></h2>
                    <p class="section-subtitle text-light">Nous sommes là pour vous aider à atteindre vos objectifs techniques</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- تعديل مهم: إضافة action + method -->
                    <form id="contact-form" class="contact-form" action="{{ route('contact-form-email') }}" method="POST" data-aos="fade-up">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="name" class="form-label">Nom complet</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Numéro de téléphone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>
                                Envoyer le message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
            
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-6 text-center mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h5>Appelez-nous</h5>
                        <p>+966555883492</p>
                    </div>
                </div>
                
                <div class="col-lg-6 text-center mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5>Envoyez-nous un email</h5>
                        <p>info@smlc.com</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Social links moved up to contact section -->
        <div class="container">
            <div class="row mt-3 justify-content-center">
                <div class="col-12 text-center">
                    <h6 class="text-light mb-3">Suivez-nous sur les réseaux sociaux</h6>
                    <div class="social-links mt-2">
                        <a href="https://x.com/smlc_sa" target="_blank" rel="noopener" class="me-3 x" aria-label="X (Twitter)">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M4 4L20 20M20 4L4 20" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/smlc-sa" target="_blank" rel="noopener" class="me-3 linkedin" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/smlc_sa/" target="_blank" rel="noopener" class="me-3 instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/share/17UZBkAncT/?mibextid=wwXIfr" target="_blank" rel="noopener" class="facebook" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
