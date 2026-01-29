@extends('layouts.app')

@section('title', 'System Integration | Software Makers (SMLC)')

@section('description', 'Connect legacy, cloud, and third-party platforms through secure APIs, middleware, and automation to build a unified digital ecosystem.')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff;">
                            System <span style="color: #00d4ff;">Integration</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; font-size: 1.15rem;">
                            We orchestrate APIs, ESB layers, and secure data pipelines so every application -- on-prem, cloud, or SaaS -- shares information in real time with full governance.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="index-en.html#contact" class="btn btn-primary btn-lg btn-interactive">
                                <i class="fas fa-rocket me-2"></i>Schedule a Workshop
                            </a>
                            <a href="#value" class="btn btn-outline-light btn-lg btn-interactive">
                                <i class="fas fa-diagram-project me-2"></i>See the Benefits
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

    <!-- Overview -->
    <section class="py-5 bg-light" id="value">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 mx-auto text-center" data-aos="fade-up">
                    <div class="service-overview">
                        <span class="service-badge">Integration Office</span>
                        <h2 class="section-title">Unified Platforms, <span class="text-primary">Unified Decisions</span></h2>
                        <p class="section-subtitle">
                            Whether you are modernising a ministry platform or connecting hospital, finance, and citizen-service systems, we design integration blueprints that keep data consistent, secure, and audit-ready.
                        </p>
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
                    <div class="service-detail-content" data-aos="fade-up">
                        <div class="service-intro">
                            <h3>How We Approach Integration</h3>
                            <p class="lead">
                                We begin with an enterprise integration assessment, map every data flow, then deploy the right mix of middleware, orchestration, and governance so systems can exchange information without manual effort.
                            </p>
                        </div>

                        <div class="benefits-section">
                            <h3>Business Outcomes</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-sync"></i>
                                        <h6>Consistent Data</h6>
                                        <p>Eliminate duplicates and keep customer, finance, and operations data synchronised across all channels.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-stopwatch"></i>
                                        <h6>Real-time Processes</h6>
                                        <p>Trigger workflows instantly -- onboarding, approvals, or notifications -- by wiring apps together with events.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <h6>Security & Compliance</h6>
                                        <p>Apply unified policies for encryption, logging, and access aligned with NCA, NDMO, and HIPAA equivalents.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-gauge-high"></i>
                                        <h6>Faster Change</h6>
                                        <p>Reusable integration services shorten the time needed to launch new channels and digital products.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="examples-section">
                            <h3>Integration Scenarios We Deliver</h3>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="example-card">
                                        <i class="fas fa-hospital"></i>
                                        <h5>Healthcare Interoperability</h5>
                                        <p>HL7 / FHIR bridges between HIS, LIMS, pharmacy, insurance, and national health portals.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="example-card">
                                        <i class="fas fa-credit-card"></i>
                                        <h5>Payments & Finance</h5>
                                        <p>Secure links between POS, payment gateways, ERP, and government compliance platforms.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="example-card">
                                        <i class="fas fa-building"></i>
                                        <h5>Smart Government</h5>
                                        <p>API hubs that connect ministries, municipalities, and citizen apps with national data services.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="technologies-section">
                            <h3>Technology Stack</h3>
                            <div class="tech-tags">
                                <span class="tech-tag">REST & GraphQL APIs</span>
                                <span class="tech-tag">Enterprise Service Bus</span>
                                <span class="tech-tag">Apache Camel</span>
                                <span class="tech-tag">MuleSoft</span>
                                <span class="tech-tag">Azure Integration Services</span>
                                <span class="tech-tag">AWS EventBridge</span>
                                <span class="tech-tag">Kafka & RabbitMQ</span>
                                <span class="tech-tag">Data Loss Prevention</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="service-sidebar" data-aos="fade-left">
                        <div class="sidebar-card">
                            <h4>Need Integration Support?</h4>
                            <p>We embed architects and integration engineers who design, build, and operate your middleware layer.</p>
                            <a href="index-en.html#contact" class="btn btn-primary w-100">Book a Consultation</a>
                        </div>
                        <div class="sidebar-card">
                            <h4>Related Services</h4>
                            <ul class="list-unstyled mb-0">
                                <li><a href="{{ route('consulting-services-en') }}">Digital Strategy</a></li>
                                <li><a href="{{ route('system-development-en') }}">Custom Systems</a></li>
                                <li><a href="{{ route('process-automation-en') }}">Automation Programs</a></li>
                                <li><a href="{{ route('maintenance-support-en') }}">Support & Operations</a></li>
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
                <h3>Ready to Build a Connected Enterprise?</h3>
                <p>Share your current landscape and we will deliver an integration roadmap covering architecture, governance, and delivery timeline.</p>
                <a href="index-en.html#contact" class="btn btn-light btn-lg me-3">Talk to an Architect</a>
                <a href="tel:+966555883492" class="btn btn-outline-light btn-lg">Call +966 55 588 3492</a>
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

    <!-- Scripts -->
@endsection
