@extends('layouts.app')

@section('title', 'Conception UI/UX | Software Makers Limited Company')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%); padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff;">
                            Conception UI/UX et <span style="color: #00d4ff;">Expérience Utilisateur</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; font-size: 1.2rem;">
                            Nous croyons que le succès de tout système commence par l'expérience utilisateur. Nous concevons des interfaces interactives modernes qui facilitent l'accès des utilisateurs aux services de manière claire et fluide, augmentant la satisfaction des clients et renforçant leur fidélité au produit.
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
                        <i class="fas fa-palette" style="font-size: 8rem; color: rgba(255,255,255,0.3);"></i>
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
                            <h3>🖥️ Concept</h3>
                            <p class="lead">
                                Nous croyons que le succès de tout système commence par l'expérience utilisateur. Nous concevons des interfaces interactives modernes qui facilitent l'accès des utilisateurs aux services de manière claire et fluide, augmentant la satisfaction des clients et renforçant leur fidélité au produit.
                            </p>
                        </div>

                        <div class="benefits-section">
                            <h3>🎯 Valeur Ajoutée</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-user-check"></i>
                                        <span>Analyser le comportement de l'utilisateur et concevoir un parcours d'expérience optimal (User Journey)</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-mobile-alt"></i>
                                        <span>Appliquer les dernières normes de conception mondiales (Material Design / Human Interface)</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-desktop"></i>
                                        <span>Conception responsive pour tous les appareils et plateformes</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-chart-line"></i>
                                        <span>Améliorer l'expérience utilisateur grâce aux tests A/B et à l'analyse des performances</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="examples-section">
                            <h3>💡 Exemples d'Application</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-building"></i>
                                        <h5>Conception d'interfaces de systèmes gouvernementaux</h5>
                                        <p>Conception d'interfaces de systèmes gouvernementaux interactifs</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-shopping-cart"></i>
                                        <h5>Développement d'expérience utilisateur pour le commerce électronique</h5>
                                        <p>Développement d'expérience utilisateur pour une plateforme de commerce électronique</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-cogs"></i>
                                        <h5>Refonte d'interfaces de systèmes ERP</h5>
                                        <p>Refonte d'interfaces d'un système ERP ou CRM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="design-process">
                            <h3>🎨 Processus de Conception</h3>
                            <div class="process-steps">
                                <div class="process-step">
                                    <div class="step-number">1</div>
                                    <div class="step-content">
                                        <h5>Recherche et Analyse</h5>
                                        <p>Comprendre les besoins des utilisateurs et analyser les concurrents</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">2</div>
                                    <div class="step-content">
                                        <h5>Conception Initiale</h5>
                                        <p>Créer des prototypes et des maquettes rapides</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">3</div>
                                    <div class="step-content">
                                        <h5>Tests et Amélioration</h5>
                                        <p>Tester les conceptions avec les utilisateurs et les améliorer</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">4</div>
                                    <div class="step-content">
                                        <h5>Développement et Mise en Œuvre</h5>
                                        <p>Transformer les conceptions en interfaces interactives</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="technologies-section">
                            <h3>🛠️ Outils et Technologies</h3>
                            <div class="tech-tags">
                                <span class="tech-tag">Figma</span>
                                <span class="tech-tag">Adobe XD</span>
                                <span class="tech-tag">Sketch</span>
                                <span class="tech-tag">InVision</span>
                                <span class="tech-tag">Material Design</span>
                                <span class="tech-tag">Human Interface Guidelines</span>
                                <span class="tech-tag">Responsive Design</span>
                                <span class="tech-tag">A/B Testing</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="service-sidebar">
                        <div class="sidebar-card">
                            <h4>Obtenez une consultation gratuite</h4>
                            <p>Nous sommes là pour vous aider à concevoir des interfaces exceptionnelles pour vos utilisateurs</p>
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
                <h3>Voulez-vous concevoir des interfaces exceptionnelles qui attirent vos utilisateurs ?</h3>
                <p>Contactez-nous aujourd'hui et obtenez une consultation gratuite pour concevoir vos interfaces</p>
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
