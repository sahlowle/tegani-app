<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systèmes Souverains et Transformation Numérique | Software Makers Limited Company</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script>
        // STRICT: Vérifier le statut de connexion avant de charger la page - AUCUN ACCÈS DIRECT AUTORISÉ
        (function() {
            // Empêcher tout accès direct - doit passer par la page de connexion d'abord
            const isLoggedIn = localStorage.getItem('isLoggedIn');
            const username = localStorage.getItem('username');
            
            // Toujours rediriger vers la connexion si non authentifié correctement
            if (isLoggedIn !== 'true' || !username || username !== 'smlc-sa') {
                // Effacer toute donnée de connexion invalide
                localStorage.removeItem('isLoggedIn');
                localStorage.removeItem('username');
                // Forcer la redirection vers la page de connexion
                window.location.replace('login-fr.html?redirect=sovereign-systems-fr.html');
                return;
            }
        })();
    </script>
    <style>
        .footer-logo { 
            height: 92px !important; 
            width: auto !important; 
            object-fit: contain !important; 
            filter: drop-shadow(0 4px 10px rgba(0,0,0,0.15)) brightness(1.05) contrast(1.05) !important; 
            animation: footerFloat 6s ease-in-out infinite !important;
            display: block !important;
            max-width: 200px;
        }
        @keyframes footerFloat { 
            0%, 100% { transform: translateY(0); } 
            50% { transform: translateY(-6px); } 
        }
        .logo-container img {
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
            max-width: 80px !important;
            height: auto !important;
            object-fit: contain;
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
        html, body {
            overflow-x: hidden !important;
            max-width: 100% !important;
            width: 100% !important;
        }
    </style>
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
    <section class="hero-section" style="padding-top: 100px; position: relative; overflow: hidden; background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 50%, #2d3561 100%);">
        <!-- Arrière-plan biométrique -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: 
            radial-gradient(circle at 20% 30%, rgba(0, 212, 255, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(102, 126, 234, 0.15) 0%, transparent 50%),
            linear-gradient(45deg, transparent 30%, rgba(0, 212, 255, 0.05) 50%, transparent 70%),
            linear-gradient(rgba(0, 212, 255, 0.08) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 212, 255, 0.08) 1px, transparent 1px);
            background-size: 100% 100%, 100% 100%, 100% 100%, 60px 60px, 60px 60px;
            opacity: 0.6;
            z-index: 0;"></div>
        
        <!-- Icônes biométriques flottantes -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1; pointer-events: none;">
            <i class="fas fa-fingerprint" style="position: absolute; top: 15%; left: 10%; font-size: 120px; color: rgba(0, 212, 255, 0.1); animation: float 6s ease-in-out infinite;"></i>
            <i class="fas fa-eye" style="position: absolute; top: 25%; right: 15%; font-size: 100px; color: rgba(102, 126, 234, 0.1); animation: float 8s ease-in-out infinite 1s;"></i>
            <i class="fas fa-shield-alt" style="position: absolute; bottom: 20%; left: 20%; font-size: 110px; color: rgba(0, 212, 255, 0.08); animation: float 7s ease-in-out infinite 2s;"></i>
            <i class="fas fa-lock" style="position: absolute; bottom: 15%; right: 10%; font-size: 90px; color: rgba(102, 126, 234, 0.1); animation: float 9s ease-in-out infinite 0.5s;"></i>
        </div>
        
        <!-- Couche sombre -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(rgba(15,23,42,0.75), rgba(15,23,42,0.85)); z-index: 2;"></div>
        
        <div class="container" style="position: relative; z-index: 3;">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <!-- Grande icône d'empreinte digitale en haut -->
                        <div style="margin-bottom: 2rem; display: inline-block; position: relative;">
                            <div style="width: 150px; height: 150px; margin: 0 auto; position: relative; display: flex; align-items: center; justify-content: center;">
                                <div style="position: absolute; width: 100%; height: 100%; border: 3px solid rgba(0, 212, 255, 0.4); border-radius: 50%; animation: scanRing 3s ease-in-out infinite;"></div>
                                <div style="position: absolute; width: 100%; height: 100%; border: 3px solid rgba(102, 126, 234, 0.4); border-radius: 50%; animation: scanRing 3s ease-in-out infinite 1s;"></div>
                                <i class="fas fa-fingerprint" style="font-size: 80px; color: #00d4ff; text-shadow: 0 0 30px rgba(0, 212, 255, 0.8); position: relative; z-index: 1; animation: fingerprintPulse 2s ease-in-out infinite;"></i>
                            </div>
                        </div>
                        
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-shield-alt me-3" style="color: #00d4ff;"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">Systèmes Biométriques et Souverains</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            Solutions de sécurité avancées pour la vérification biométrique et les systèmes souverains
                        </p>
                        <div style="display: inline-flex; align-items: center; gap: 1rem; margin-top: 1.5rem; flex-wrap: wrap; justify-content: center;">
                            <div style="display: flex; align-items: center; gap: 0.5rem; background: rgba(0, 212, 255, 0.1); padding: 0.5rem 1rem; border-radius: 20px; border: 1px solid rgba(0, 212, 255, 0.3);">
                                <i class="fas fa-fingerprint" style="color: #00d4ff;"></i>
                                <span style="color: #00d4ff; font-weight: 600;">Vérification Biométrique</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 0.5rem; background: rgba(102, 126, 234, 0.1); padding: 0.5rem 1rem; border-radius: 20px; border: 1px solid rgba(102, 126, 234, 0.3);">
                                <i class="fas fa-shield-alt" style="color: #667eea;"></i>
                                <span style="color: #667eea; font-weight: 600;">Cybersécurité</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 0.5rem; background: rgba(0, 212, 255, 0.1); padding: 0.5rem 1rem; border-radius: 20px; border: 1px solid rgba(0, 212, 255, 0.3);">
                                <i class="fas fa-lock" style="color: #00d4ff;"></i>
                                <span style="color: #00d4ff; font-weight: 600;">Chiffrement Avancé</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <style>
            @keyframes float {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(5deg); }
            }
            @keyframes scanRing {
                0% { transform: scale(0.8); opacity: 1; }
                100% { transform: scale(1.5); opacity: 0; }
            }
            @keyframes fingerprintPulse {
                0%, 100% { transform: scale(1); filter: brightness(1); }
                50% { transform: scale(1.1); filter: brightness(1.3); }
            }
        </style>
    </section>

    <!-- Introduction Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-10 mx-auto">
                    <div class="card border-primary shadow-lg">
                        <div class="card-body p-5">
                            <h3 class="text-primary mb-4"><i class="fas fa-info-circle me-2"></i>Vue d'ensemble</h3>
                            <p class="lead" style="line-height: 2;">
                                Software Makers Limited Company possède des capacités solides et une expertise avancée dans le développement, la mise en œuvre et l'exploitation de systèmes nationaux et souverains, conformément aux normes techniques et réglementaires les plus élevées reconnues internationalement. La société a établi sa position en tant qu'entité d'exécution fiable dans les grands projets gouvernementaux, grâce à sa possession d'un système intégré d'expertises, de compétences et de cadres spécialisés.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Cards -->
    <section class="py-4">
        <div class="container">
            <div class="row g-4" data-aos="fade-up">
                <div class="col-md-6 col-lg-4">
                    <a href="#core-capabilities" class="text-decoration-none text-reset">
                        <div class="feature-card enhanced h-100">
                            <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                            <h4>Capacités Clés de l'Entreprise</h4>
                            <p>Conception et développement de systèmes souverains et numériques selon les normes internationales.</p>
                            <div class="feature-highlight"></div>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <a href="#specialized-teams" class="text-decoration-none text-reset">
                        <div class="feature-card enhanced h-100">
                            <div class="feature-icon"><i class="fas fa-users-cog"></i></div>
                            <h4>Équipes Techniques et Opérationnelles Spécialisées</h4>
                            <p>Experts en cybersécurité, intégration gouvernementale, plateformes souveraines et centres d'exploitation 24/7.</p>
                            <div class="feature-highlight"></div>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-12 col-lg-4">
                    <a href="#systems-services" class="text-decoration-none text-reset">
                        <div class="feature-card enhanced h-100">
                            <div class="feature-icon"><i class="fas fa-layer-group"></i></div>
                            <h4>Systèmes et Services</h4>
                            <p>Ensemble de systèmes souverains incluant l'identité nationale, le passeport électronique, les frontières et les taxes.</p>
                            <div class="feature-highlight"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Capabilities Section -->
    <section id="core-capabilities" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-12">
                    <h2 class="section-title text-center mb-5"><span class="text-primary">Les Capacités Clés de l'Entreprise Comprennent :</span></h2>
                    
                    <div class="row mb-4" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body p-4">
                                    <h4 class="text-primary mb-3"><i class="fas fa-cogs me-2"></i>Conception et développement de systèmes souverains et numériques nationaux, y compris :</h4>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Systèmes d'identité nationale et de registre civil</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Systèmes biométriques multicouches</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Systèmes de passeports électroniques et portes frontalières intelligentes</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Systèmes de sécurité, de justice et de vérification nationale</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Systèmes de revenus et de gouvernement numérique et intégration des entités gouvernementales</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <h4 class="text-primary mb-3"><i class="fas fa-certificate me-2"></i>Conformité complète aux normes internationales en :</h4>
                                    <div class="row g-3">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-shield-alt text-success me-2 mt-1"></i>
                                                <span>Cybersécurité</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-fingerprint text-success me-2 mt-1"></i>
                                                <span>Biométrie</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-database text-success me-2 mt-1"></i>
                                                <span>Gestion des données souveraines</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-building text-success me-2 mt-1"></i>
                                                <span>Architecture numérique gouvernementale</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specialized Teams Section -->
    <section id="specialized-teams" class="py-5">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-12">
                    <h2 class="section-title text-center mb-5"><span class="text-primary">Équipes Techniques et Opérationnelles Spécialisées Comprenant :</span></h2>
                    
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card border-primary h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="fas fa-user-shield fa-3x text-primary"></i>
                                    </div>
                                    <h5>Experts en Cybersécurité et Protection des Données</h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="card border-primary h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="fas fa-server fa-3x text-primary"></i>
                                    </div>
                                    <h5>Ingénieurs de Plateformes Souveraines Avancées</h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="card border-primary h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="fas fa-network-wired fa-3x text-primary"></i>
                                    </div>
                                    <h5>Experts en Intégration de Systèmes Gouvernementaux (Gov-Integration)</h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="card border-primary h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="fas fa-headset fa-3x text-primary"></i>
                                    </div>
                                    <h5>Centres d'Exploitation et de Surveillance 24/7 (NOC & SOC)</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="card border-0 shadow-sm bg-light">
                                <div class="card-body p-4">
                                    <h4 class="text-primary mb-3"><i class="fas fa-tasks me-2"></i>Méthodologies d'exécution établies garantissant les plus hauts niveaux de qualité et de continuité, comprenant :</h4>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Gestion de projets gouvernementaux selon des méthodologies mondiales</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Plans de continuité des activités et de reprise après sinistre (BCP/DR)</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Transfert de connaissances et renforcement des capacités nationales</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Support et exploitation à long terme et développement continu des systèmes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Systems and Services Section -->
    <section id="systems-services" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-12">
                    <h2 class="section-title text-center mb-5"><span class="text-primary">Systèmes et Services :</span></h2>
                </div>
            </div>

            <!-- System 1 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-fingerprint me-2"></i>1- Service d'Enregistrement National Biométrique</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Objectif :</h5>
                            <p class="lead mb-4">Créer un registre civil national unifié soutenu par la biométrie (empreintes + visage) avec un numéro d'identité national unique pour chaque citoyen et résident.</p>
                            
                            <h5 class="text-primary mb-3">Fonctions Principales :</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-database text-primary me-2 mt-1"></i>
                                        <span>Base de données centrale d'identité biométrique</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-ban text-primary me-2 mt-1"></i>
                                        <span>Moteur de prévention de duplication 1:N</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-id-card text-primary me-2 mt-1"></i>
                                        <span>Émission automatique de numéro d'identité national</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-check-double text-primary me-2 mt-1"></i>
                                        <span>Audit des données et vérification avant émission</span>
                                    </div>
                                </div>
                            </div>
                            
                            <h5 class="text-primary mt-4 mb-3">Cartes intelligentes selon les normes :</h5>
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-qrcode text-success me-2 mt-1"></i>
                                        <span>Zone de lecture automatique MRZ</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-wifi text-success me-2 mt-1"></i>
                                        <span>Puce NFC</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-barcode text-success me-2 mt-1"></i>
                                        <span>Code-barres unique</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-star text-success me-2 mt-1"></i>
                                        <span>Couche hologramme de sécurité</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 2 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-users me-2"></i>2- État Civil – Services Complets</h4>
                        </div>
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-user-circle text-primary me-2 mt-1"></i>
                                        <span>Service Mes Données</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-calendar-check text-primary me-2 mt-1"></i>
                                        <span>Réservation de rendez-vous</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-baby text-primary me-2 mt-1"></i>
                                        <span>Ajout des naissances et liaison avec les hôpitaux</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-id-badge text-primary me-2 mt-1"></i>
                                        <span>Émission de cartes d'identité</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-map-marker-alt text-primary me-2 mt-1"></i>
                                        <span>Gestion des adresses nationales</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-user-plus text-primary me-2 mt-1"></i>
                                        <span>Ajout des dépendants</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-home text-primary me-2 mt-1"></i>
                                        <span>Émission du registre familial</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-heart text-primary me-2 mt-1"></i>
                                        <span>Enregistrement du mariage, divorce et décès</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-certificate text-primary me-2 mt-1"></i>
                                        <span>Émission de certificats électroniques</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-star text-primary me-2 mt-1"></i>
                                        <span>Service d'évaluation des services gouvernementaux</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 3 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-passport me-2"></i>3- Système de Passeport Électronique e-Passport</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Fonctions Principales :</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-file-alt text-primary me-2 mt-1"></i>
                                        <span>Soumission de demande électronique</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-shield-alt text-primary me-2 mt-1"></i>
                                        <span>Vérification de sécurité biométrique</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-globe text-primary me-2 mt-1"></i>
                                        <span>Conformité aux normes internationales ICAO</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-fingerprint text-primary me-2 mt-1"></i>
                                        <span>Empreinte faciale + empreintes digitales + signature électronique</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-microchip text-primary me-2 mt-1"></i>
                                        <span>Puce intelligente cryptée et signature numérique</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 4 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-plane-departure me-2"></i>4- Système d'Immigration et de Gestion des Frontières</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Fonctions Principales :</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-stamp text-primary me-2 mt-1"></i>
                                        <span>Gestion des visas et permis</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-door-open text-primary me-2 mt-1"></i>
                                        <span>Portes électroniques automatiques ABC e-Gates</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-list-alt text-primary me-2 mt-1"></i>
                                        <span>Intégration avec les listes de surveillance nationales et internationales</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-search text-primary me-2 mt-1"></i>
                                        <span>Lecture et analyse des données passagers API/PNR</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 5 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-gavel me-2"></i>5- Système de Sécurité, Médecine Légale et Registre Pénal</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Fonctions Principales :</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-database text-primary me-2 mt-1"></i>
                                        <span>Base de données centrale des dossiers pénaux</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-fingerprint text-primary me-2 mt-1"></i>
                                        <span>Système AFIS de reconnaissance d'empreintes</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-folder-open text-primary me-2 mt-1"></i>
                                        <span>Système de gestion des affaires et des preuves</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 6 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-money-bill-wave me-2"></i>6- Intégration du Système Fiscal et des Revenus</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Fonctions Principales :</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-link text-primary me-2 mt-1"></i>
                                        <span>Liaison de l'identité nationale au système fiscal</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                        <span>Vérification automatique de l'identité via NIN + données biométriques</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-sign-in-alt text-primary me-2 mt-1"></i>
                                        <span>Connexion unifiée aux services fiscaux</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 7 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-gun me-2"></i>7- Système d'Armes et de Licences</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Fonctions Principales :</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-user-check text-primary me-2 mt-1"></i>
                                        <span>Vérification des antécédents de sécurité</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-fingerprint text-primary me-2 mt-1"></i>
                                        <span>Base de données d'empreintes balistiques</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-search-location text-primary me-2 mt-1"></i>
                                        <span>Suivi des armes perdues et saisies</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 8 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-chart-line me-2"></i>8- Unité d'Analyse, d'Audit et de Rapports</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Fonctions Principales :</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-tachometer-alt text-primary me-2 mt-1"></i>
                                        <span>Tableau de bord en temps réel SLA</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-robot text-primary me-2 mt-1"></i>
                                        <span>Système de détection de fraude par IA</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-warehouse text-primary me-2 mt-1"></i>
                                        <span>Entrepôt de données + BI</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 9 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-network-wired me-2"></i>9- Portail d'Intégration Gouvernementale</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Fonctions Principales :</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-plug text-primary me-2 mt-1"></i>
                                        <span>Gestion centralisée des interfaces API</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-file-contract text-primary me-2 mt-1"></i>
                                        <span>Protocoles unifiés</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-code text-primary me-2 mt-1"></i>
                                        <span>Environnement développeur + Sandbox</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 10 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-store me-2"></i>10- Ministère du Commerce</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Fonctions Principales :</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-building text-primary me-2 mt-1"></i>
                                        <span>Enregistrement des entreprises et licences</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-file-signature text-primary me-2 mt-1"></i>
                                        <span>Registres et signatures numériques</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-eye text-primary me-2 mt-1"></i>
                                        <span>Surveillance des marchés et liaison des violations aux revenus</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 11 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-coins me-2"></i>11- Ministère des Finances</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Fonctions Principales :</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-wallet text-primary me-2 mt-1"></i>
                                        <span>Système de gestion budgétaire et de paiement gouvernemental unifié</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-university text-primary me-2 mt-1"></i>
                                        <span>Intégration financière et bancaire</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-chart-pie text-primary me-2 mt-1"></i>
                                        <span>Transparence financière + rapports en temps réel + IPSAS</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="card bg-primary text-white shadow-lg">
                        <div class="card-body p-5">
                            <h3 class="mb-3">Avez-vous besoin d'une consultation sur les systèmes souverains et la transformation numérique ?</h3>
                            <p class="lead mb-4">Contactez-nous aujourd'hui pour une consultation gratuite et une évaluation de vos besoins</p>
                            <a href="index-fr.html#contact" class="btn btn-light btn-lg">
                                Contactez-nous maintenant
                            </a>
                        </div>
                    </div>
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
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Company Logo" class="footer-logo mb-2" style="height: 92px; width: auto; max-width: 200px; object-fit: contain; display: block; visibility: visible; opacity: 1;">
                        <span class="fw-bold">Software Makers Limited Company</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 Tous droits réservés</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('sovereign-systems') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('sovereign-systems-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('sovereign-systems-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        // STRICT: Vérification supplémentaire du statut de connexion lorsque la page est entièrement chargée
        window.addEventListener('DOMContentLoaded', function() {
            const isLoggedIn = localStorage.getItem('isLoggedIn');
            const username = localStorage.getItem('username');
            
            // Double vérification de l'authentification - doit être connecté avec le bon nom d'utilisateur
            if (isLoggedIn !== 'true' || !username || username !== 'smlc-sa') {
                // Effacer les données invalides et rediriger
                localStorage.removeItem('isLoggedIn');
                localStorage.removeItem('username');
                window.location.replace('login-fr.html?redirect=sovereign-systems-fr.html');
                return;
            }
        });
        
        // STRICT: Vérifier à nouveau lorsque la page est entièrement chargée
        window.addEventListener('load', function() {
            const isLoggedIn = localStorage.getItem('isLoggedIn');
            const username = localStorage.getItem('username');
            
            // Vérification finale avant d'afficher le contenu
            if (isLoggedIn !== 'true' || !username || username !== 'smlc-sa') {
                localStorage.removeItem('isLoggedIn');
                localStorage.removeItem('username');
                window.location.replace('login-fr.html?redirect=sovereign-systems-fr.html');
                return;
            }
        });
        
        // Vérifier lorsque localStorage change (en cas de déconnexion depuis une autre fenêtre)
        window.addEventListener('storage', function(e) {
            if (e.key === 'isLoggedIn' && e.newValue !== 'true') {
                localStorage.removeItem('isLoggedIn');
                localStorage.removeItem('username');
                window.location.replace('login-fr.html?redirect=sovereign-systems-fr.html');
            }
        });
        
        // Empêcher le bouton retour de contourner la connexion
        window.addEventListener('pageshow', function(event) {
            if (event.persisted) {
                const isLoggedIn = localStorage.getItem('isLoggedIn');
                const username = localStorage.getItem('username');
                if (isLoggedIn !== 'true' || !username || username !== 'smlc-sa') {
                    localStorage.removeItem('isLoggedIn');
                    localStorage.removeItem('username');
                    window.location.replace('login-fr.html?redirect=sovereign-systems-fr.html');
                }
            }
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




