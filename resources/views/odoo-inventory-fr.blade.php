@extends('layouts.app')

@section('title', 'Services Odoo - Gestion des Stocks | Software Makers Limited Company')

@section('content')
<!-- Navigation -->
        

    <section class="py-5" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="text-center mb-5">
                        <h1 class="display-4 fw-bold text-primary mb-3" style="font-size: 3rem; margin-bottom: 2rem;">Gestion des Stocks</h1>
                    </div>
                    
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2 class="text-primary mb-4">💡 Notre Vision :</h2>
                                    <p class="lead mb-4">Nous réalisons que la précision des stocks signifie l'efficacité opérationnelle et la rentabilité des affaires. C'est pourquoi nous construisons le système Odoo Inventory pour qu'il fonctionne comme un œil numérique qui ne dort jamais.</p>
                                    
                                    <h3 class="text-primary mb-3">⚙️ Ce que nous implémentons :</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Suivi complet des stocks via code-barres et QR avec notifications automatiques de mouvement</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Gestion des niveaux d'article et des points de réapprovisionnement (Reorder Points)</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Liaison directe entre les stocks, les ventes, la fabrication et les achats</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Rapports instantanés sur la valeur, les emplacements et le niveau de performance</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <i class="fas fa-warehouse text-primary" style="font-size: 8rem; opacity: 0.3;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-body p-5">
                            <h3 class="text-primary mb-4">🏆 Pourquoi Software Makers est le meilleur en implémentation :</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-building text-warning me-3 mt-1"></i>
                                        <div>
                                            <h5>Expérience dans la gestion d'entrepôts massifs multi-filiales sur Odoo</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-chart-bar text-info me-3 mt-1"></i>
                                        <div>
                                            <h5>Construction de systèmes de vérification avec une précision dépassant 99,8% dans l'inventaire et l'analyse</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-brain text-success me-3 mt-1"></i>
                                        <div>
                                            <h5>Utilisation de l'intelligence artificielle pour prédire les pénuries et les besoins futurs</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <div class="alert alert-primary border-0 shadow-sm mb-4">
                            <h4 class="mb-0" style="font-size: 1.1rem;">Software Makers construit des entrepôts intelligents gérés par les données, où chaque unité est préparée, suivie et améliorée en temps réel pour atteindre une efficacité opérationnelle maximale</h4>
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
