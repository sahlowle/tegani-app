@extends('layouts.app')

@section('title', 'Technical Project Management | Software Makers (SMLC)')

@section('description', 'PMO specialists who plan, execute, and govern complex technology programs with clear KPIs, risk controls, and stakeholder visibility.')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff;">
                            Technical <span style="color: #00d4ff;">Project Management</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; font-size: 1.2rem;">
                            PMO-certified leaders who orchestrate scope, budget, people, and technology so your initiatives land on time, on value, and fully aligned with Vision 2030 mandates.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="index-en.html#contact" class="btn btn-primary btn-lg btn-interactive">
                                <i class="fas fa-calendar-check me-2"></i>
                                Schedule a PMO Consultation
                            </a>
                            <a href="#delivery" class="btn btn-outline-light btn-lg btn-interactive">
                                <i class="fas fa-chart-pie me-2"></i>
                                Explore Our Method
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="text-center">
                        <i class="fas fa-project-diagram" style="font-size: 8rem; color: rgba(255,255,255,0.35);"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 mx-auto text-center" data-aos="fade-up">
                    <div class="service-overview">
                        <span class="service-badge">PMO-as-a-Service</span>
                        <h2 class="section-title">From Vision to <span class="text-primary">Verified Delivery</span></h2>
                        <p class="section-subtitle">
                            We combine classic waterfall control with agile execution, ensuring every release, migration, or infrastructure rollout is traceable, testable, and measured by the KPIs that matter to your executives.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Delivery Details -->
    <section class="py-5" id="delivery">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-detail-content" data-aos="fade-up">
                        <div class="service-intro">
                            <h3>How We Lead Your Initiatives</h3>
                            <p class="lead">
                                Our project managers coordinate architecture, vendors, cybersecurity, procurement, and business owners. You get a single command center overseeing risks, dependencies, change requests, and benefits realization.
                            </p>
                        </div>

                        <div class="benefits-section">
                            <h3>Delivery Guarantees</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-clock"></i>
                                        <h6>Predictable Timelines</h6>
                                        <p>Synchronized plans and earned-value tracking keep milestones realistic and transparent.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-clipboard-check"></i>
                                        <h6>Scope & Quality Control</h6>
                                        <p>Formal change authority plus automated testing ensure every deliverable meets acceptance criteria.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <h6>Risk & Compliance</h6>
                                        <p>Continuous risk logs, mitigation plans, and alignment with NCA / NDMO requirements.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-people-group"></i>
                                        <h6>Stakeholder Visibility</h6>
                                        <p>Executive-ready dashboards, steering-committee packs, and bilingual communications.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="examples-section">
                            <h3>Programs We Commonly Run</h3>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="example-card">
                                        <i class="fas fa-database"></i>
                                        <h5>National Platforms</h5>
                                        <p>Large-scale ERP, CRM, and data-platform implementations across ministries and holding groups.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="example-card">
                                        <i class="fas fa-cloud"></i>
                                        <h5>Cloud & Infra</h5>
                                        <p>Hybrid cloud migrations, smart city infrastructure, and cybersecurity uplift programs.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="example-card">
                                        <i class="fas fa-mobile-screen-button"></i>
                                        <h5>Digital Products</h5>
                                        <p>Agile delivery of citizen services, mobile apps, and AI-powered customer journeys.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="technologies-section">
                            <h3>Tooling & Methodologies</h3>
                            <div class="tech-tags">
                                <span class="tech-tag">PMI / PMP</span>
                                <span class="tech-tag">SAFe & Scrum</span>
                                <span class="tech-tag">Prince2</span>
                                <span class="tech-tag">MS Project</span>
                                <span class="tech-tag">Jira & Confluence</span>
                                <span class="tech-tag">Power BI Dashboards</span>
                                <span class="tech-tag">ServiceNow ITBM</span>
                                <span class="tech-tag">Automated Testing Suites</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-sidebar" data-aos="fade-left">
                        <div class="sidebar-card">
                            <h4>Need a PMO Partner?</h4>
                            <p>We embed seasoned project directors, planners, and business analysts within your teams.</p>
                            <a href="index-en.html#contact" class="btn btn-primary w-100">Request a Proposal</a>
                        </div>

                        <div class="sidebar-card">
                            <h4>Helpful Links</h4>
                            <ul class="list-unstyled mb-0">
                                <li><a href="{{ route('consulting-services-en') }}">Integration Readiness</a></li>
                                <li><a href="{{ route('system-development-en') }}">Product Engineering</a></li>
                                <li><a href="{{ route('process-automation-en') }}">Automation Services</a></li>
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
                <h3>Let's De-risk Your Next Launch</h3>
                <p>Share your roadmap and we'll deliver a PMO blueprint covering people, process, tooling, and timeline.</p>
                <a href="index-en.html#contact" class="btn btn-light btn-lg me-3">Book a Discovery Call</a>
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

    <!-- Scripts -->
@endsection
