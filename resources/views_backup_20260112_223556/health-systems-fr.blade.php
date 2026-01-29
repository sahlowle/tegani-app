<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systèmes d'Information de Santé | Software Makers Limited Company</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-hospital me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">Services de Systèmes d'Information de Santé</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            Solutions techniques intégrées pour les hôpitaux et centres de santé
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-10 mx-auto">
                    <div class="card border-primary">
                        <div class="card-body p-4">
                            <h3 class="text-primary mb-3"><i class="fas fa-info-circle me-2"></i>À propos des Services de Systèmes d'Information de Santé</h3>
                            <p class="lead">
                                Depuis des années, Software Makers Limited Company se distingue par une longue expérience dans la conception et la mise en œuvre de solutions d'information de santé, avec un historique solide de fourniture de systèmes innovants et fiables pour les hôpitaux, les cliniques et les centres de santé. Nous accordons une importance primordiale à la qualité et à la précision à toutes les étapes du projet, depuis l'analyse et la planification, en passant par la conception et le développement, jusqu'à l'application et le support technique continu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-10 mx-auto">
                    <h3 class="mb-4"><i class="fas fa-star me-2 text-primary"></i>Caractéristiques professionnelles les plus importantes de l'entreprise dans l'exécution :</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>Fiabilité et précision d'exécution selon les meilleures pratiques internationales</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>Solutions personnalisées pour chaque établissement de santé de manière précise</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>Normes de sécurité strictes (HIPAA et GDPR)</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>Support technique continu 24/7</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>Expérience éprouvée avec divers hôpitaux et cliniques</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>Fiabilité du système avec une efficacité élevée</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Diagram Section -->
    <section class="py-5">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 text-center mb-4">
                    <h2 class="section-title">Structure des <span class="text-primary">Systèmes d'Information de Santé</span></h2>
                    <p class="section-subtitle">Vue d'ensemble de l'intégration des systèmes de santé avancés</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-xl-7 mx-auto" data-aos="zoom-in">
                    <div class="diagram-container shadow-lg rounded-4 overflow-hidden p-3 bg-white">
                        <img src="{{ asset('images/digram.jpeg') }}" alt="Structure des Systèmes d'Information de Santé" class="img-fluid w-100" style="display: block; max-height: 600px; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services List -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Services des <span class="text-primary">Systèmes d'Information de Santé</span></h2>
                    <p class="section-subtitle">Solutions complètes pour le développement et l'organisation du secteur de la santé</p>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-hospital text-primary"></i>
                                </div>
                                <h4>Systèmes de Gestion Hospitalière (HMS)</h4>
                                <p>Système intégré pour gérer l'hôpital ou le centre de santé avec une efficacité élevée, incluant tous les processus administratifs et médicaux</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-user-injured text-success"></i>
                                </div>
                                <h4>Gestion des Patients et des Rendez-vous</h4>
                                <p>Enregistrement des patients, planification des rendez-vous, gestion des cliniques externes et suivi des visites des patients</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-file-medical text-danger"></i>
                                </div>
                                <h4>Dossiers Médicaux Électroniques (EMR)</h4>
                                <p>Stockage et mise à jour des dossiers médicaux de chaque patient numériquement, avec un accès facile aux données par l'équipe médicale</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-pills text-warning"></i>
                                </div>
                                <h4>Gestion de la Pharmacie et des Stocks Médicaux</h4>
                                <p>Suivi des stocks médicaux, distribution des médicaments, alertes pour les médicaments épuisés et génération de rapports de stock</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-user-md text-info"></i>
                                </div>
                                <h4>Gestion des Interventions Chirurgicales</h4>
                                <p>Enregistrement des opérations, planification des salles d'opération, suivi des équipes chirurgicales et de l'équipement nécessaire pour chaque opération</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-user-nurse text-secondary"></i>
                                </div>
                                <h4>Gestion du Personnel et des Horaires Médicaux</h4>
                                <p>Organisation des horaires des médecins et des infirmières, suivi de la présence et distribution automatique des tâches quotidiennes</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-chart-bar text-primary"></i>
                                </div>
                                <h4>Rapports Analytiques et Administratifs</h4>
                                <p>Génération de rapports de performance de l'hôpital, indicateurs de qualité, rapports financiers et administratifs pour soutenir la prise de décision</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-database text-success"></i>
                                </div>
                                <h4>Système d'Information Hospitalière (HIS)</h4>
                                <p>Système intégré pour collecter et gérer les données médicales et administratives de l'hôpital, reliant les différents départements</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-clinic-medical text-danger"></i>
                                </div>
                                <h4>Systèmes pour Cliniques et Cliniques Privées</h4>
                                <p>Solutions personnalisées pour les cliniques privées pour gérer les rendez-vous, suivre les résultats des tests, gérer les dossiers des patients, la comptabilité</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-cloud text-info"></i>
                                </div>
                                <h4>Solutions Cloud pour les Données de Santé</h4>
                                <p>Stockage sécurisé des données médicales sur le cloud, sauvegardes cryptées, possibilité de récupération facile des données</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-heartbeat text-warning"></i>
                                </div>
                                <h4>Intégration avec les Équipements Médicaux</h4>
                                <p>Connexion des systèmes aux équipements de diagnostic et de laboratoire pour collecter automatiquement les données et les convertir en rapports précis</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-brain text-secondary"></i>
                                </div>
                                <h4>Analyses et Intelligence Artificielle</h4>
                                <p>Utilisation de l'IA pour analyser les données de santé, fournir des indicateurs de performance, prédire le flux des patients</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-video text-primary"></i>
                                </div>
                                <h4>Télémédecine (Telemedicine)</h4>
                                <p>Permettre aux patients de recevoir des consultations médicales via vidéo de manière sécurisée, suivi de leur état de santé à distance</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-mobile-alt text-success"></i>
                                </div>
                                <h4>Applications de Santé Intelligentes</h4>
                                <p>Applications pour les patients et les médecins pour suivre les rendez-vous, les résultats des tests, rappels de médicaments, surveillance des signes vitaux</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-shield-alt text-danger"></i>
                                </div>
                                <h4>Cybersécurité et Protection des Données</h4>
                                <p>Protection des données de santé contre les violations, cryptage des informations, contrôle d'accès, conformité aux normes internationales</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-chalkboard-teacher text-info"></i>
                                </div>
                                <h4>Formation et Support Technique</h4>
                                <p>Programmes de formation pour le personnel des hôpitaux et des cliniques, support technique 24/7, mises à jour régulières et consultations techniques</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-cogs text-secondary"></i>
                                </div>
                                <h4>Solutions Spécialisées Supplémentaires</h4>
                                <p>Gestion des laboratoires et des analyses, gestion des urgences, gestion de l'assurance maladie et facturation électronique, systèmes de gestion de la qualité des soins de santé</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="row mt-5" data-aos="fade-up">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="card bg-primary text-white">
                        <div class="card-body p-5">
                            <h3 class="mb-3">Avez-vous besoin d'une consultation pour les solutions de systèmes d'information de santé ?</h3>
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
                            <a href="{{ route('health-systems') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('health-systems-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('health-systems-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
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




