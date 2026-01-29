@extends('layouts.app')

@section('title', 'Odoo Services - Accounting & Finance | Software Makers Limited Company')

@section('content')
<section class="py-5" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="text-center mb-5">
                        <h1 class="display-4 fw-bold text-primary mb-3" style="font-size: 3rem; margin-bottom: 2rem;">Accounting & Finance</h1>
                    </div>
                    
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2 class="text-primary mb-4">💡 Our Vision:</h2>
                                    <p class="lead mb-4">We consider Odoo Accounting the financial nerve of the organization. We design it to give you instant digital accuracy and strategic financial insight moment by moment.</p>
                                    
                                    <h3 class="text-primary mb-3">⚙️ What We Implement:</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Setting up an integrated chart of accounts that complies with IFRS international standards</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Complete linking between accounting, sales, purchases, and payroll</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Automating daily entries and monthly financial closing</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Building analytical financial dashboards showing revenues, expenses, and liquidity</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <i class="fas fa-calculator text-primary" style="font-size: 8rem; opacity: 0.3;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-body p-5">
                            <h3 class="text-primary mb-4">🏆 Why Software Makers is the Best in Implementation:</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-link text-warning me-3 mt-1"></i>
                                        <div>
                                            <h5>We integrate accounting solutions with ZATCA systems for issuing approved electronic invoices in Saudi Arabia</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-chart-line text-info me-3 mt-1"></i>
                                        <div>
                                            <h5>Experience in configuring executive financial reports for regulatory and government entities</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-sync text-success me-3 mt-1"></i>
                                        <div>
                                            <h5>High efficiency in transitioning from traditional systems to Odoo without disrupting operations</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <div class="alert alert-primary border-0 shadow-sm mb-4">
                            <h4 class="mb-0" style="font-size: 1.1rem;">With Software Makers, finance becomes the language of clarity, every number in its place, every procedure compliant, and every decision ready for the future.</h4>
                        </div>
                        <a href="index-en.html#contact" class="btn btn-primary btn-lg px-5 py-3">Request a Consultation</a>
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
                        <span>We use cookies to personalize your experience. By continuing to browse, you agree to our <a href="{{ route('terms-en') }}" class="terms-link">Terms & Conditions</a>.</span>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="cookies-actions">
                        <button id="acceptCookies" class="btn btn-primary btn-sm me-2">
                            <i class="fas fa-check me-1"></i>
                            Accept
                        </button>
                        <button id="declineCookies" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-times me-1"></i>
                            Decline
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <!-- AOS Animation -->
    <!-- Custom JS -->
    <!-- Copy Protection Script -->
@endsection
