@extends('layouts.app')

@section('title', 'Support Technique et Maintenance | Software Makers Limited Company')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-tools me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">Support Technique et Maintenance</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            Nous fournissons des services de maintenance complets et un support technique spécialisé pour assurer la continuité du fonctionnement de vos systèmes avec une efficacité élevée
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <div class="service-overview">
                        <span class="service-badge">Support Technique et Maintenance</span>
                        <h2 class="section-title">Support technique <span class="text-gradient">continu et fiable</span></h2>
                        <p class="section-subtitle">Nous garantissons la continuité du fonctionnement de vos systèmes avec des services de maintenance complets et un support technique disponible 24h/24 et 7j/7</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Service Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="service-detail-content" data-aos="fade-up">
                        <div class="service-intro">
                            <h3>Qu'est-ce que les services de maintenance et de support ?</h3>
                            <p class="lead">
                                Les services de maintenance et de support sont un ensemble de services techniques continus que nous fournissons pour assurer la continuité du fonctionnement de vos systèmes 
                                avec une efficacité élevée. Ces services comprennent la maintenance préventive, les mises à jour périodiques, la réparation des pannes et le support technique 
                                spécialisé pour tous les types de systèmes et logiciels.
                            </p>
                        </div>

                        <div class="maintenance-types">
                            <h3>Types de Services de Maintenance</h3>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="maintenance-card">
                                        <div class="maintenance-icon">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <h5>Maintenance Préventive</h5>
                                        <p>Inspection périodique complète de tous les composants du système pour éviter les pannes avant qu'elles ne se produisent</p>
                                        <ul>
                                            <li>Vérification de la sécurité et de la protection</li>
                                            <li>Mise à jour des logiciels</li>
                                            <li>Vérification des performances et de la vitesse</li>
                                            <li>Sauvegardes périodiques</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="maintenance-card">
                                        <div class="maintenance-icon">
                                            <i class="fas fa-wrench"></i>
                                        </div>
                                        <h5>Maintenance Corrective</h5>
                                        <p>Réparation des pannes et problèmes techniques dès leur découverte</p>
                                        <ul>
                                            <li>Diagnostic des problèmes</li>
                                            <li>Correction des erreurs</li>
                                            <li>Récupération des données</li>
                                            <li>Amélioration des performances</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="maintenance-card">
                                        <div class="maintenance-icon">
                                            <i class="fas fa-sync-alt"></i>
                                        </div>
                                        <h5>Mises à Jour et Développement</h5>
                                        <p>Mise à jour des systèmes et ajout de nouvelles fonctionnalités pour améliorer les performances</p>
                                        <ul>
                                            <li>Mise à jour des logiciels</li>
                                            <li>Ajout de nouvelles fonctionnalités</li>
                                            <li>Amélioration des interfaces</li>
                                            <li>Développement des fonctions</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="maintenance-card">
                                        <div class="maintenance-icon">
                                            <i class="fas fa-headset"></i>
                                        </div>
                                        <h5>Support Technique</h5>
                                        <p>Support technique spécialisé disponible 24h/24 et 7j/7 pour résoudre les problèmes</p>
                                        <ul>
                                            <li>Support immédiat</li>
                                            <li>Résolution des problèmes à distance</li>
                                            <li>Formation des utilisateurs</li>
                                            <li>Conseils techniques</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="support-levels">
                            <h3>Niveaux de Support</h3>
                            <div class="support-tiers">
                                <div class="support-tier">
                                    <div class="tier-header">
                                        <h5>Support de Base</h5>
                                        <span class="tier-badge">24/7</span>
                                    </div>
                                    <div class="tier-features">
                                        <ul>
                                            <li>Support technique par téléphone et e-mail</li>
                                            <li>Réparation des pannes dans les 24 heures</li>
                                            <li>Mises à jour de sécurité périodiques</li>
                                            <li>Sauvegardes hebdomadaires</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="support-tier premium">
                                    <div class="tier-header">
                                        <h5>Support Avancé</h5>
                                        <span class="tier-badge premium">VIP</span>
                                    </div>
                                    <div class="tier-features">
                                        <ul>
                                            <li>Support immédiat par téléphone et vidéo</li>
                                            <li>Réparation des pannes dans les 4 heures</li>
                                            <li>Mises à jour quotidiennes et nouvelles fonctionnalités</li>
                                            <li>Sauvegardes quotidiennes</li>
                                            <li>Gestionnaire de compte dédié</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="support-tier">
                                    <div class="tier-header">
                                        <h5>Support Entreprise</h5>
                                        <span class="tier-badge">Enterprise</span>
                                    </div>
                                    <div class="tier-features">
                                        <ul>
                                            <li>Support dédié 24/7 avec équipe dédiée</li>
                                            <li>Réparation immédiate des pannes critiques</li>
                                            <li>Développement personnalisé sur mesure</li>
                                            <li>Sauvegardes multiples</li>
                                            <li>Formation complète des utilisateurs</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="maintenance-process">
                            <h3>Processus de Maintenance</h3>
                            <div class="maintenance-timeline">
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>Diagnostic et Inspection</h5>
                                        <p>Inspection complète du système et diagnostic de tout problème potentiel</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>Rapport d'État</h5>
                                        <p>Préparation d'un rapport détaillé sur l'état du système et les recommandations</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="fas fa-tools"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>Application et Réparation</h5>
                                        <p>Application des mises à jour et réparations nécessaires</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>Tests et Vérification</h5>
                                        <p>Tester le système et s'assurer que toutes les fonctions fonctionnent</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="benefits-section">
                            <h3>Avantages des Services de Maintenance et de Support</h3>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-clock"></i>
                                        <h6>Continuité du Fonctionnement</h6>
                                        <p>Garantir le fonctionnement des systèmes 24h/24 et 7j/7 sans interruption</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <h6>Sécurité et Protection</h6>
                                        <p>Protéger les systèmes contre les menaces de sécurité et les violations</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-chart-line"></i>
                                        <h6>Amélioration des Performances</h6>
                                        <p>Améliorer les performances des systèmes et augmenter l'efficacité opérationnelle</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cta-section">
                            <div class="cta-card">
                                <h3>Besoin de services de maintenance et de support ?</h3>
                                <p>Contactez-nous aujourd'hui pour obtenir un plan de maintenance personnalisé selon vos besoins</p>
                                <a href="index-fr.html#contact" class="btn btn-primary btn-lg">
                                    <i class="fas fa-headset me-2"></i>
                                    Réservez une consultation gratuite
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
    <!-- AOS Animation -->
    <!-- Custom JS -->
    @endsection
