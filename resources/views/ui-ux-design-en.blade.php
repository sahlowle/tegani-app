@extends('layouts.app')

@section('title', 'UI/UX Design | Software Makers (SMLC)')

@section('description', 'Human-centered UI and UX design services for mobile, web, and enterprise systems that deliver clarity and measurable engagement.')

@section('content')
<section class="hero-section" style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%); padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff;">UI/UX <span style="color: #2c2a4a;">Design</span></h1>
                        <p class="lead mb-4" style="color: #e8f4fd; font-size: 1.15rem;">We craft human-centred interfaces that merge accessibility, brand personality, and business goals into a single digital experience.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="index-en.html#contact" class="btn btn-primary btn-lg btn-interactive"><i class="fas fa-pen-ruler me-2"></i>Discuss a Design Sprint</a>
                            <a href="#approach" class="btn btn-outline-light btn-lg btn-interactive"><i class="fas fa-layer-group me-2"></i>View Our Approach</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="text-center">
                        <i class="fas fa-palette" style="font-size: 8rem; color: rgba(255,255,255,0.35);"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 mx-auto text-center" data-aos="fade-up">
                    <div class="service-overview">
                        <span class="service-badge">Experience Studio</span>
                        <h2 class="section-title">Design that is <span class="text-primary">Beautiful and Usable</span></h2>
                        <p class="section-subtitle">We conduct research, design bilingual journeys, prototype quickly, and validate everything with real users before development starts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" id="approach">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-detail-content" data-aos="fade-up">
                        <div class="service-intro">
                            <h3>Our Design Approach</h3>
                            <p class="lead">Every engagement follows research, ideation, prototyping, and usability testing. We ensure the final designs work seamlessly in both Arabic and English and respect accessibility guidelines.</p>
                        </div>
                        <div class="benefits-section">
                            <h3>What You Gain</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-user-check"></i>
                                        <h6>Higher Adoption</h6>
                                        <p>Intuitive flows decrease abandonment and training time.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-eye"></i>
                                        <h6>Brand Consistency</h6>
                                        <p>Design systems guarantee the same look and feel across apps, portals, and kiosks.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-universal-access"></i>
                                        <h6>Bilingual Accessibility</h6>
                                        <p>Interfaces adapt to RTL/LTR layouts and follow WCAG and Mada guidelines.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-gauge-high"></i>
                                        <h6>Faster Delivery</h6>
                                        <p>Interactive prototypes and design tokens accelerate handover to developers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="examples-section">
                            <h3>Sample Deliverables</h3>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="example-card">
                                        <i class="fas fa-map"></i>
                                        <h5>User Journeys</h5>
                                        <p>Blueprints of every step, channel, and emotion for key personas.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="example-card">
                                        <i class="fas fa-bezier-curve"></i>
                                        <h5>Interactive Prototypes</h5>
                                        <p>Figma and XD prototypes for usability testing and stakeholder buy-in.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="example-card">
                                        <i class="fas fa-book"></i>
                                        <h5>Design Systems</h5>
                                        <p>Component libraries, typography, color tokens, and responsive specs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="technologies-section">
                            <h3>Tools & Methods</h3>
                            <div class="tech-tags">
                                <span class="tech-tag">Figma</span>
                                <span class="tech-tag">Adobe XD</span>
                                <span class="tech-tag">Miro & FigJam</span>
                                <span class="tech-tag">Design Systems</span>
                                <span class="tech-tag">WCAG 2.1</span>
                                <span class="tech-tag">Usability Testing</span>
                                <span class="tech-tag">Design Tokens</span>
                                <span class="tech-tag">Motion Guidelines</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-sidebar" data-aos="fade-left">
                        <div class="sidebar-card">
                            <h4>Need Design Support?</h4>
                            <p>We embed product designers, UX researchers, and UI leads within your squads.</p>
                            <a href="index-en.html#contact" class="btn btn-primary w-100">Book a Design Workshop</a>
                        </div>
                        <div class="sidebar-card">
                            <h4>Related Services</h4>
                            <ul class="list-unstyled mb-0">
                                <li><a href="{{ route('system-development-en') }}">App & Web Development</a></li>
                                <li><a href="{{ route('system-integration-en') }}">Integration Layer</a></li>
                                <li><a href="{{ route('process-automation-en') }}">Automation</a></li>
                                <li><a href="{{ route('maintenance-support-en') }}">Run & Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section">
        <div class="container">
            <div class="cta-card">
                <h3>Ready to Elevate Your Experience?</h3>
                <p>Share your product vision and we will deliver moodboards, prototypes, and a design system tailored to you.</p>
                <a href="index-en.html#contact" class="btn btn-light btn-lg me-3">Talk to Our Designers</a>
                <a href="tel:+966555883492" class="btn btn-outline-light btn-lg">Call +966 55 588 3492</a>
            </div>
        </div>
    </section>
    <a href="https://wa.me/966555883492?text=Hello%20Software%20Makers" class="whatsapp-fab" aria-label="Contact via WhatsApp" target="_blank" rel="noopener">
        <svg viewBox="0 0 32 32" aria-hidden="true" class="whatsapp-icon">
            <path fill="currentColor" d="M26.1 5.9A13.9 13.9 0 1 0 4.7 26.3L3 29.8a1 1 0 0 0 1.3 1.3l3.4-1.7A13.9 13.9 0 1 0 26.1 5.9zM16 28.1c-2.3 0-4.6-.7-6.5-1.9l-.5-.3-3.9 2 2-3.9-.3-.5A12 12 0 1 1 28 16 12 12 0 0 1 16 28.1zm6.6-7.7c-.4-.2-2.3-1.1-2.7-1.3-.4-.1-.7-.2-1 .2-.3.4-1.1 1.3-1.3 1.6-.2.2-.5.3-.9.1-2.3-1.1-4-3-4.6-3.9-.2-.3 0-.6.2-.8.2-.2.4-.5.6-.7.2-.2.3-.4.4-.7.1-.2 0-.5 0-.7 0-.2-1-2.5-1.3-3.4-.3-.8-.7-.7-1-.7h-.9c-.3 0-.7.1-1 .5-.4.4-1.3 1.3-1.3 3.1 0 1.8 1.3 3.6 1.5 3.9.2.3 2.6 3.9 6.3 5.5.9.4 1.6.6 2.1.8.9.3 1.7.2 2.3.1.7-.1 2.3-.9 2.6-1.8.3-.9.3-1.6.2-1.8-.1-.2-.3-.2-.5-.3z"/>
        </svg>
    </a>
    <div id="cookiesBanner" class="cookies-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="cookies-content">
                        <i class="fas fa-cookie-bite me-2"></i>
                        <span>We use cookies to personalise your experience. By continuing to browse, you agree to our <a href="{{ route('terms-en') }}" class="terms-link">Terms & Conditions</a>.</span>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="cookies-actions">
                        <button id="acceptCookies" class="btn btn-primary btn-sm me-2"><i class="fas fa-check me-1"></i>Accept</button>
                        <button id="declineCookies" class="btn btn-outline-light btn-sm"><i class="fas fa-times me-1"></i>Decline</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
