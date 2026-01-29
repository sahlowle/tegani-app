@extends('layouts.app')

@section('title', 'Intégration de Systèmes | Software Makers Limited Company')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff;">
                            Intégration de <span style="color: #00d4ff;">Systèmes</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; font-size: 1.2rem;">
                            Nous connectons plusieurs systèmes au sein de l'institution ou entre eux et des parties externes grâce à des solutions d'intégration intelligentes (API / ESB / Middleware), créant un environnement numérique unifié qui fonctionne en parfaite harmonie.
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
                        <i class="fas fa-link" style="font-size: 8rem; color: rgba(255,255,255,0.3);"></i>
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
                            <h3>🔗 Concept</h3>
                            <p class="lead">
                                Nous connectons plusieurs systèmes au sein de l'institution ou entre eux et des parties externes grâce à des solutions d'intégration intelligentes (API / ESB / Middleware), créant un environnement numérique unifié qui fonctionne en parfaite harmonie.
                            </p>
                        </div>

                        <div class="benefits-section">
                            <h3>🎯 Valeur Ajoutée</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-ban"></i>
                                        <span>Éliminer la duplication et améliorer le flux d'information en temps réel</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-chart-line"></i>
                                        <span>Améliorer l'efficacité décisionnelle en intégrant des sources de données dispersées dans un tableau de bord unifié</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-sync-alt"></i>
                                        <span>Réaliser l'intégration entre les systèmes hérités (Legacy) et les systèmes modernes (Cloud / SaaS)</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <span>Élever le niveau de sécurité et de conformité avec les politiques de gouvernance numérique</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="examples-section">
                            <h3>💡 Exemples d'Application</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-users"></i>
                                        <h5>Connexion du système RH</h5>
                                        <p>Connexion du système de ressources humaines au système de présence et d'absence</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-building"></i>
                                        <h5>Intégration des plateformes de services gouvernementaux</h5>
                                        <p>Intégration des plateformes de services gouvernementaux via des interfaces de programmation d'applications API</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-credit-card"></i>
                                        <h5>Connexion des systèmes de paiement électronique</h5>
                                        <p>Connexion des systèmes de paiement électronique aux plateformes financières internes</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="technologies-section">
                            <h3>🛠️ Technologies Utilisées</h3>
                            <div class="tech-tags">
                                <span class="tech-tag">RESTful APIs</span>
                                <span class="tech-tag">GraphQL</span>
                                <span class="tech-tag">Enterprise Service Bus (ESB)</span>
                                <span class="tech-tag">Message Queues</span>
                                <span class="tech-tag">Webhooks</span>
                                <span class="tech-tag">Microservices</span>
                                <span class="tech-tag">Docker</span>
                                <span class="tech-tag">Kubernetes</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="service-sidebar">
                        <div class="sidebar-card">
                            <h4>Obtenez une consultation gratuite</h4>
                            <p>Nous sommes là pour vous aider à déterminer les meilleures solutions d'intégration pour votre institution</p>
                            <a href="index-fr.html#contact" class="btn btn-primary w-100">Contactez-nous</a>
                        </div>
                        
                        <div class="sidebar-card">
                            <h4>Autres Services</h4>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('consulting-services-fr') }}">Conseil Technique</a></li>
                                <li><a href="{{ route('system-development-fr') }}">Développement de Systèmes</a></li>
                                <li><a href="{{ route('project-management-fr') }}">Gestion de Projets Techniques</a></li>
                                <li><a href="{{ route('process-automation-fr') }}">Optimisation et Automatisation des Processus</a></li>
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
                <h3>Êtes-vous prêt à transformer vos systèmes en un environnement unifié et intégré ?</h3>
                <p>Contactez-nous aujourd'hui et obtenez une consultation gratuite pour déterminer les meilleures solutions d'intégration pour votre institution</p>
                <a href="index-fr.html#contact" class="btn btn-light btn-lg me-3">Obtenir une consultation gratuite</a>
                <a href="tel:+966555883492" class="btn btn-outline-light btn-lg">Appelez-nous maintenant</a>
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
