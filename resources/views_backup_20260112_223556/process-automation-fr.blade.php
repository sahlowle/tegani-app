<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optimisation et Automatisation des Processus | Software Makers Limited Company</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="direction: ltr;">
    <div class="scroll-progress" id="scrollProgress"></div>
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
                    <a href="{{ route('index') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.35rem 0.55rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.85rem;" title="Arabe">
                        <img src="https://flagcdn.com/w20/sa.png" alt="Drapeau de l'Arabie saoudite" width="20" height="15" style="border-radius: 3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('index-en') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.35rem 0.55rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.85rem;" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="Drapeau du Royaume-Uni" width="20" height="15" style="border-radius: 3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('index-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.35rem 0.55rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.85rem; background: rgba(0,0,0,0.2);" title="Français">
                        <img src="https://flagcdn.com/w20/fr.png" alt="Drapeau de la France" width="20" height="15" style="border-radius: 3px;">
                        <span>FR</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #fdbb2d 0%, #22c1c3 100%); padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff;">
                            Optimisation et Automatisation <span style="color: #00d4ff;">des Processus</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; font-size: 1.2rem;">
                            Nous transformons les processus manuels en processus automatisés intelligents basés sur l'intelligence artificielle et l'analyse prédictive, augmentant l'efficacité de l'institution et réduisant le gaspillage et les coûts opérationnels.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#contact" class="btn btn-primary btn-lg btn-interactive">
                                <i class="fas fa-rocket me-2"></i>
                                Obtenir une consultation gratuite
                            </a>
                            <a href="#benefits" class="btn btn-outline-light btn-lg btn-interactive">
                                <i class="fas fa-info-circle me-2"></i>
                                Découvrir les avantages
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="text-center">
                        <i class="fas fa-robot" style="font-size: 8rem; color: rgba(255,255,255,0.3);"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Details -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-detail-content">
                        <div class="service-intro">
                            <h3>🤖 Concept</h3>
                            <p class="lead">
                                Nous transformons les processus manuels en processus automatisés intelligents basés sur l'intelligence artificielle et l'analyse prédictive, augmentant l'efficacité de l'institution et réduisant le gaspillage et les coûts opérationnels.
                            </p>
                        </div>

                        <div class="benefits-section">
                            <h3>🎯 Valeur Ajoutée</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-tachometer-alt"></i>
                                        <span>Accélérer les performances jusqu'à 60%</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Réduire les erreurs humaines et améliorer la qualité des services</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-cogs"></i>
                                        <span>Intégrer les technologies RPA (Automatisation Robotic Process) et Machine Learning dans l'environnement de travail</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-chart-line"></i>
                                        <span>Construire des systèmes de rapports instantanés qui soutiennent la prise de décision</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="examples-section">
                            <h3>💡 Exemples d'Application</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-file-alt"></i>
                                        <h5>Automatisation du traitement des demandes</h5>
                                        <p>Automatisation du traitement des demandes et des approbations administratives</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-chart-bar"></i>
                                        <h5>Analyse des données opérationnelles</h5>
                                        <p>Analyse des données opérationnelles pour prédire les pannes avant qu'elles ne se produisent</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-bell"></i>
                                        <h5>Système d'alertes intelligent</h5>
                                        <p>Construire un système d'alertes intelligent pour les performances opérationnelles</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="technologies-section">
                            <h3>🛠️ Technologies Utilisées</h3>
                            <div class="tech-tags">
                                <span class="tech-tag">RPA (Robotic Process Automation)</span>
                                <span class="tech-tag">Machine Learning</span>
                                <span class="tech-tag">Artificial Intelligence</span>
                                <span class="tech-tag">Workflow Automation</span>
                                <span class="tech-tag">Business Process Management</span>
                                <span class="tech-tag">Data Analytics</span>
                                <span class="tech-tag">Predictive Analytics</span>
                                <span class="tech-tag">Cloud Computing</span>
                            </div>
                        </div>

                        <div class="automation-benefits">
                            <h3>📊 Avantages de l'Automatisation</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="automation-benefit">
                                        <h5>Amélioration de l'Efficacité</h5>
                                        <ul>
                                            <li>Réduire le temps nécessaire pour accomplir les tâches</li>
                                            <li>Augmenter la productivité de 60%</li>
                                            <li>Réduire les coûts opérationnels</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="automation-benefit">
                                        <h5>Amélioration de la Qualité</h5>
                                        <ul>
                                            <li>Réduire les erreurs humaines</li>
                                            <li>Garantir la cohérence dans les processus</li>
                                            <li>Améliorer la qualité des services fournis</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="service-sidebar">
                        <div class="sidebar-card">
                            <h4>Obtenez une consultation gratuite</h4>
                            <p>Nous sommes là pour vous aider à automatiser vos processus et améliorer leur efficacité</p>
                            <a href="index-fr.html#contact" class="btn btn-primary w-100">Contactez-nous</a>
                        </div>
                        
                        <div class="sidebar-card">
                            <h4>Autres Services</h4>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('consulting-services-fr') }}">Conseil Technique</a></li>
                                <li><a href="{{ route('system-development-fr') }}">Développement de Systèmes</a></li>
                                <li><a href="{{ route('system-integration-fr') }}">Intégration de Systèmes</a></li>
                                <li><a href="{{ route('project-management-fr') }}">Gestion de Projets Techniques</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-card">
                <h3>Voulez-vous automatiser vos processus et augmenter leur efficacité de 60% ?</h3>
                <p>Contactez-nous aujourd'hui et obtenez une consultation gratuite pour automatiser vos processus</p>
                <a href="index-fr.html#contact" class="btn btn-light btn-lg me-3">Obtenir une consultation gratuite</a>
                <a href="tel:+966555883492" class="btn btn-outline-light btn-lg">Appelez-nous maintenant</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-dark py-4">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Company Logo" class="footer-logo mb-2">
                        <span class="fw-bold">Software Makers Limited Company</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 Tous droits réservés</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('process-automation') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('process-automation-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('process-automation-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/966555883492?text=Hello%20Software%20Makers" class="whatsapp-fab" aria-label="Contact via WhatsApp" target="_blank" rel="noopener">
        <svg viewBox="0 0 32 32" aria-hidden="true" class="whatsapp-icon">
            <path fill="currentColor" d="M26.1 5.9A13.9 13.9 0 1 0 4.7 26.3L3 29.8a1 1 0 0 0 1.3 1.3l3.4-1.7A13.9 13.9 0 1 0 26.1 5.9zM16 28.1c-2.3 0-4.6-.7-6.5-1.9l-.5-.3-3.9 2 2-3.9-.3-.5A12 12 0 1 1 28 16 12 12 0 0 1 16 28.1zm6.6-7.7c-.4-.2-2.3-1.1-2.7-1.3-.4-.1-.7-.2-1 .2-.3.4-1.1 1.3-1.3 1.6-.2.2-.5.3-.9.1-2.3-1.1-4-3-4.6-3.9-.2-.3 0-.6.2-.8.2-.2.4-.5.6-.7.2-.2.3-.4.4-.7.1-.2 0-.5 0-.7 0-.2-1-2.5-1.3-3.4-.3-.8-.7-.7-1-.7h-.9c-.3 0-.7.1-1 .5-.4.4-1.3 1.3-1.3 3.1 0 1.8 1.3 3.6 1.5 3.9.2.3 2.6 3.9 6.3 5.5.9.4 1.6.6 2.1.8.9.3 1.7.2 2.3.1.7-.1 2.3-.9 2.6-1.8.3-.9.3-1.6.2-1.8-.1-.2-.3-.2-.5-.3z"/>
        </svg>
    </a>

    <!-- Cookies Banner -->
    <div id="cookiesBanner" class="cookies-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="cookies-content">
                        <i class="fas fa-cookie-bite me-2"></i>
                        <span>Nous utilisons des cookies pour personnaliser votre expérience. En continuant à naviguer, vous acceptez nos <a href="{{ route('terms-fr') }}" class="terms-link">Conditions Générales</a>.</span>
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
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
    
    <style>
        /* Ensure logo is visible */
        .logo-container img {
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
            max-width: 80px !important;
            height: auto !important;
        }
        
        .logo-container {
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
            flex-shrink: 0 !important;
        }
        
        .navbar-brand {
            flex-shrink: 0 !important;
            display: flex !important;
            align-items: center !important;
        }
        
        /* Fix overflow issues */
        html, body {
            overflow-x: hidden !important;
            max-width: 100% !important;
            width: 100% !important;
        }
    </style>
    
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




