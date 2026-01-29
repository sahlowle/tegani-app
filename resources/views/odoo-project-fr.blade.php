@extends('layouts.app')

@section('title', 'Services Odoo - Gestion de Projet | Software Makers Limited Company')

@section('content')
<!-- Navigation -->
        

    <section class="py-5" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="text-center mb-5">
                        <h1 class="display-4 fw-bold text-primary mb-3" style="font-size: 3rem; margin-bottom: 2rem;">Gestion de Projet</h1>
                    </div>
                    
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2 class="text-primary mb-4">💡 Notre Vision :</h2>
                                    <p class="lead mb-4">La gestion de projet n'est pas seulement la planification des tâches et le suivi des calendriers — c'est l'art de gérer la valeur. Chez Software Makers, nous construisons un environnement numérique dans Odoo qui traduit la vision stratégique en résultats tangibles à travers l'intégration des tâches, des ressources et des calendriers dans une plateforme intelligente unique.</p>
                                    
                                    <h3 class="text-primary mb-3">⚙️ Comment nous l'implémentons avec un haut niveau de professionnalisme :</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Nous commençons par analyser le cycle de vie complet du projet (Project Lifecycle Analysis) pour garantir l'alignement du système avec la façon dont le client travaille</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Nous concevons des flux de tâches (Tasks Flow) dans un style visuel interactif qui facilite le suivi des performances en temps réel par l'équipe</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Nous intégrons le système de projets dans Odoo avec les modules de ressources humaines et de comptabilité pour que l'organisation puisse gérer les coûts et les efforts avec précision</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Nous ajoutons des couches d'analyse avancées (KPIs Dashboard) pour les rapports de direction et de gestion supérieure</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Nous effectuons la formation et le support technique avec la même équipe qui a développé le système pour garantir la continuité et la précision</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <i class="fas fa-project-diagram text-primary" style="font-size: 8rem; opacity: 0.3;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-body p-5">
                            <h3 class="text-primary mb-4">🏆 L'excellence de Software Makers :</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-certificate text-warning me-3 mt-1"></i>
                                        <div>
                                            <h5>Application des normes PMI et PRINCE2 dans Odoo de manière réaliste et intégrée</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-cogs text-info me-3 mt-1"></i>
                                        <div>
                                            <h5>Transformation de la gestion de projet d'un travail routinier en un système de performance intelligent entièrement automatisé</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-chart-line text-success me-3 mt-1"></i>
                                        <div>
                                            <h5>Expérience prouvée dans la gestion de projets majeurs pour des entités gouvernementales et commerciales avec une précision dépassant 99% dans le respect des délais</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <div class="alert alert-primary border-0 shadow-sm mb-4">
                            <h4 class="mb-0" style="font-size: 1.1rem;">Avec Software Makers, Odoo pour la gestion de projet devient un environnement intégré qui pulse avec l'efficacité, la précision et la rapidité de réponse, permettant à vos équipes d'exécuter des projets avec confiance et professionnalisme élevé.</h4>
                        </div>
                        <a href="index-fr.html#contact" class="btn btn-primary btn-lg px-5 py-3">Demander une Consultation</a>
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
    <!-- Script de Protection contre la Copie -->
@endsection
