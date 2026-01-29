@extends('layouts.app')

@section('title', 'Représentation Commerciale et Négociation | Software Makers - SMLC')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-user-tie me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">Représentation Commerciale et Négociation</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.1rem;">
                            Représenter les clients dans les négociations et réunions avec partenaires et investisseurs pour obtenir les meilleurs résultats.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Content -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <span class="service-badge">Représentation Commerciale</span>
                    <h2 class="section-title">Représentation Commerciale <span class="text-gradient">Professionnelle</span></h2>
                    <p class="section-subtitle">Représentation stratégique qui protège vos intérêts et maximise les résultats</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up">
                    <!-- Idea Section -->
                    <div class="service-intro mb-5">
                        <div class="d-flex align-items-center mb-4">
                            <span class="display-5 me-3">💡</span>
                            <h2 class="mb-0">Notre Approche</h2>
                        </div>
                        <p class="lead">
                            Nous représentons nos clients dans les réunions et négociations commerciales localement et internationalement, avec une approche professionnelle qui maintient les intérêts stratégiques et obtient les meilleurs résultats.
                            Nous fournissons des services de représentation qui améliorent la présence de l'entreprise sur les marchés et construisent la confiance avec les partenaires et investisseurs.
                        </p>
                    </div>

                    <!-- Value Added Section -->
                    <div class="service-features-section mb-5">
                        <div class="d-flex align-items-center mb-4">
                            <span class="display-5 me-3">🎯</span>
                            <h2 class="mb-0">Valeur que Nous Apportons</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-file-signature fa-2x"></i>
                                    </div>
                                    <h5>Préparation de Dossiers de Négociation Professionnels</h5>
                                    <p>Basés sur une analyse précise des situations et intérêts</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-handshake fa-2x"></i>
                                    </div>
                                    <h5>Négociation au Nom des Clients</h5>
                                    <p>Utilisant des techniques de négociation avancées</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-building fa-2x"></i>
                                    </div>
                                    <h5>Représentation d'Organisations</h5>
                                    <p>Lors de conférences, contrats et appels d'offres</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-network-wired fa-2x"></i>
                                    </div>
                                    <h5>Construction de Relations à Long Terme</h5>
                                    <p>Basées sur la transparence et l'avantage mutuel</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Examples Section -->
                    <div class="examples-section mb-5">
                        <div class="d-flex align-items-center mb-4">
                            <span class="display-5 me-3">💼</span>
                            <h2 class="mb-0">Exemples de Projets</h2>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>Négociation de Contrats de Distribution Régionaux</h5>
                                        <p class="card-text">Au nom de clients dans le secteur de la vente au détail</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>Représentation d'une Entreprise Locale dans un Accord de Partenariat</h5>
                                        <p class="card-text">Avec des investisseurs internationaux</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>Participation aux Négociations d'Achat</h5>
                                        <p class="card-text">De technologies ou licences exclusives</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quote Section -->
                    <div class="alert alert-light border-primary text-center p-4">
                        <i class="fas fa-quote-right fa-2x text-primary mb-3"></i>
                        <p class="h5 mb-0">Chez Software Makers, nous représentons les intérêts de votre entreprise avec confiance et intégrité, soutenus par une réflexion stratégique et un impact réel qui garantit des résultats optimaux et durables.</p>
                    </div>

                    <!-- CTA Section -->
                    <div class="text-center mt-5">
                        <a href="index-fr.html#contact" class="btn btn-primary btn-lg">
                            <i class="fas fa-phone me-2"></i>Parlez à nos Experts en Représentation
                        </a>
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
