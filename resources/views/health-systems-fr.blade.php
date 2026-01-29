@extends('layouts.app')

@section('title', 'Systèmes d\'Information de Santé | Software Makers Limited Company')

@section('content')
<!-- Navigation -->
        

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
    <!-- Bootstrap JS -->
    <!-- AOS Animation -->
    <!-- Custom JS -->
    <!-- Script de Protection contre la Copie -->
@endsection
