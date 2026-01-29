@extends('layouts.app')

@section('title', 'Technical Consulting | Software Makers (SMLC)')

@section('description', 'Strategic and technical consulting services that help organizations plan, architect, and execute digital initiatives with confidence.')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 120px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-10 mx-auto text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-lightbulb me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">Technical Consulting</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            Specialized consulting that combines strategy, technology, and execution to help you make confident, data-driven decisions throughout your digital transformation journey.
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="index-en.html#contact" class="btn btn-primary btn-lg btn-interactive">
                                <i class="fas fa-phone me-2"></i>
                                Book a Free Consultation
                            </a>
                            <a href="index-en.html#services" class="btn btn-outline-light btn-lg btn-interactive">
                                <i class="fas fa-briefcase me-2"></i>
                                Explore All Services
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 mx-auto text-center mb-5" data-aos="fade-up">
                    <div class="service-overview">
                        <span class="service-badge">Technical Consulting</span>
                        <h2 class="section-title">Specialized and <span class="text-primary">Forward-Looking Advisory</span></h2>
                        <p class="section-subtitle">We combine deep technical expertise with practical business insight to evaluate your current landscape, identify improvement opportunities, and design actionable roadmaps for lasting impact.</p>
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
                            <h3>What is Technical Consulting?</h3>
                            <p class="lead">
                                Technical consulting aligns your business strategy with the right digital capabilities. Our consultants analyze processes, systems, and operating models, then recommend solutions that maximize value, reduce risk, and accelerate transformation efforts.
                            </p>
                        </div>

                        <div class="service-features-section">
                            <h3>Advisory Services We Deliver</h3>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="feature-card h-100">
                                        <div class="feature-icon">
                                            <i class="fas fa-search"></i>
                                        </div>
                                        <h5>Technical Needs Assessment</h5>
                                        <p>End-to-end analysis of current capabilities, pain points, and growth priorities to define the right technology mix.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="feature-card h-100">
                                        <div class="feature-icon">
                                            <i class="fas fa-network-wired"></i>
                                        </div>
                                        <h5>Infrastructure Evaluation</h5>
                                        <p>Comprehensive health checks for infrastructure, integrations, performance, and security to unlock efficiencies.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="feature-card h-100">
                                        <div class="feature-icon">
                                            <i class="fas fa-route"></i>
                                        </div>
                                        <h5>Digital Transformation Roadmaps</h5>
                                        <p>Clear multi-phase plans with milestones, investment estimates, and KPIs tailored to your operating model.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="feature-card h-100">
                                        <div class="feature-icon">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <h5>Cybersecurity Advisory</h5>
                                        <p>Risk assessments, governance frameworks, and resilience strategies to safeguard critical data and services.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="consultation-process">
                            <h3>How Our Consulting Engagement Works</h3>
                            <div class="process-timeline">
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <span class="marker-number">1</span>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>Discovery & Analysis</h5>
                                        <p>Interactive workshops to capture business context, stakeholders, and measurable goals.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <span class="marker-number">2</span>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>Technical Assessment</h5>
                                        <p>Detailed review of applications, architecture, integrations, and operating processes.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <span class="marker-number">3</span>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>Recommendations & Roadmap</h5>
                                        <p>Prioritized initiatives with investment estimates, ROI projections, and execution timelines.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <span class="marker-number">4</span>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>Implementation Support</h5>
                                        <p>Hands-on guidance during delivery plus continuous coaching to keep the program on track.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="benefits-section">
                            <h3>Key Benefits</h3>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-dollar-sign"></i>
                                        <h6>Cost Optimization</h6>
                                        <p>Invest in the right platforms from day one and eliminate redundant spending.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-tachometer-alt"></i>
                                        <h6>Operational Efficiency</h6>
                                        <p>Streamlined processes, better automation, and faster time-to-market.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-shield-check"></i>
                                        <h6>Risk Reduction</h6>
                                        <p>Make informed decisions backed by data, standards, and proven playbooks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cta-section">
                            <div class="cta-card">
                                <h3>Ready to Plan Your Next Move?</h3>
                                <p>Schedule a free discovery call to discuss your requirements and receive an actionable advisory brief.</p>
                                <a href="index-en.html#contact" class="btn btn-primary btn-lg">
                                    <i class="fas fa-phone me-2"></i>
                                    Book a Consultation
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
@endsection
