<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Optimization & Automation | Software Makers (SMLC)</title>
    <meta name="description" content="Automate manual processes with RPA, AI, and analytics to increase throughput, accuracy, and customer satisfaction.">
    <link rel="icon" type="image/png" href="{{ asset('images/fiv2.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="direction: ltr;">
    <div class="scroll-progress" id="scrollProgress"></div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index-en.html#home" style="display:flex; align-items:center; text-decoration:none; direction:ltr;">
                <div class="logo-container" style="position:relative; margin-right:15px;">
                    <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="SMLC Company Logo" class="img-fluid" style="width:64px; height:64px; filter:brightness(1.1) contrast(1.1);">
                </div>
                <div class="brand-text" style="display:flex; flex-direction:column; align-items:flex-start; direction:ltr;">
                    <span class="fw-bold" style="font-size:1.05rem; color:#ffffff; text-shadow:1px 1px 2px rgba(0,0,0,0.3);">Software Makers Limited Company</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto align-items-center" style="gap:0.15rem; flex-wrap:nowrap;">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-en.html#home" style="padding:0.5rem 0.6rem; border-radius:8px; transition:all 0.3s ease; white-space:nowrap; font-size:0.95rem;">
                            <i class="fas fa-home me-1"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-en.html#about" style="padding:0.5rem 0.6rem; border-radius:8px; transition:all 0.3s ease; white-space:nowrap; font-size:0.95rem;">
                            <i class="fas fa-info-circle me-1"></i>
                            About Us
                        </a>
                    </li>
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle position-relative" href="index-en.html#services" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding:0.5rem 0.6rem; border-radius:8px; transition:all 0.3s ease; white-space:nowrap; font-size:0.95rem;">
                            <i class="fas fa-briefcase me-1"></i>
                            Our Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-mega shadow-lg" style="border:none; border-radius:12px; padding:1rem; min-width:280px; max-width:100%; margin-top:0.5rem;">
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight:600; color:var(--brand-primary); border-bottom:2px solid rgba(0,212,255,0.2);">
                                <i class="fas fa-cogs me-2"></i>
                                Technical Services
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('consulting-services-en') }}" style="transition:all 0.2s ease; margin-bottom:0.25rem;">
                                <i class="fas fa-lightbulb me-2 text-warning"></i>
                                Technical Consulting
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-development-en') }}" style="transition:all 0.2s ease; margin-bottom:0.25rem;">
                                <i class="fas fa-code me-2 text-info"></i>
                                System Development
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-integration-en') }}" style="transition:all 0.2s ease; margin-bottom:0.25rem;">
                                <i class="fas fa-link me-2 text-success"></i>
                                System Integration
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('project-management-en') }}" style="transition:all 0.2s ease; margin-bottom:0.25rem;">
                                <i class="fas fa-project-diagram me-2 text-primary"></i>
                                Technical Project Management
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded active" href="{{ route('process-automation-en') }}" style="transition:all 0.2s ease; margin-bottom:0.25rem;">
                                <i class="fas fa-robot me-2 text-danger"></i>
                                Process Optimization & Automation
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('ui-ux-design-en') }}" style="transition:all 0.2s ease; margin-bottom:0.25rem;">
                                <i class="fas fa-palette me-2" style="color:#e91e63;"></i>
                                UI/UX Design
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('maintenance-support-en') }}" style="transition:all 0.2s ease; margin-bottom:0.25rem;">
                                <i class="fas fa-tools me-2 text-secondary"></i>
                                Technical Support & Maintenance
                            </a></li>
                            <li><hr class="dropdown-divider my-3" style="opacity:0.2;"></li>
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight:600; color:var(--brand-primary); border-bottom:2px solid rgba(0,212,255,0.2);">
                                <i class="fas fa-chart-line me-2"></i>
                                Business Services
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('marketing-services-en') }}" style="transition:all 0.2s ease; margin-bottom:0.25rem;">
                                <i class="fas fa-bullhorn me-2 text-warning"></i>
                                Marketing Services
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index-en.html#odoo-services" style="transition:all 0.2s ease; margin-bottom:0.25rem;">
                                <i class="fas fa-cube me-2 text-info"></i>
                                Odoo ERP Services
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index-en.html#ai-support" style="transition:all 0.2s ease; margin-bottom:0.25rem;">
                                <i class="fas fa-brain me-2" style="color:#9c27b0;"></i>
                                AI Support System
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-en.html#presence" style="padding:0.5rem 0.6rem; border-radius:8px; transition:all 0.3s ease; white-space:nowrap; font-size:0.95rem;">
                            <i class="fas fa-globe me-1"></i>
                            Our Presence
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('careers-en') }}" style="padding:0.5rem 0.6rem; border-radius:8px; transition:all 0.3s ease; white-space:nowrap; font-size:0.95rem;">
                            <i class="fas fa-user-tie me-1"></i>
                            Careers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-en.html#contact" style="padding:0.5rem 0.6rem; border-radius:8px; transition:all 0.3s ease; white-space:nowrap; font-size:0.95rem;">
                            <i class="fas fa-envelope me-1"></i>
                            Contact Us
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-1 flex-wrap ms-lg-auto" style="flex-shrink:0;">
                    <a href="{{ route('process-automation') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border:2px solid rgba(255,255,255,0.8); padding:0.45rem 0.65rem; border-radius:10px; transition:all 0.3s ease; font-weight:600; white-space:nowrap; font-size:0.9rem;" title="Arabic">
                        <img src="https://flagcdn.com/w20/sa.png" alt="Saudi Arabia Flag" width="20" height="15" style="border-radius:3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('process-automation-en') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border:2px solid rgba(255,255,255,0.8); padding:0.45rem 0.65rem; border-radius:10px; transition:all 0.3s ease; font-weight:600; white-space:nowrap; font-size:0.9rem; background:rgba(0,0,0,0.2);" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="UK Flag" width="20" height="15" style="border-radius:3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('process-automation-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border:2px solid rgba(255,255,255,0.8); padding:0.45rem 0.65rem; border-radius:10px; transition:all 0.3s ease; font-weight:600; white-space:nowrap; font-size:0.9rem;" title="French">
                        <img src="https://flagcdn.com/w20/fr.png" alt="France Flag" width="20" height="15" style="border-radius:3px;">
                        <span>FR</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <section class="hero-section" style="background: linear-gradient(135deg, #fdbb2d 0%, #22c1c3 100%); padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff;">
                            Process Optimization & <span style="color: #0c1f66;">Automation</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; font-size: 1.15rem;">
                            Replace repetitive tasks with RPA bots, machine learning models, and guided workflows so your teams focus on high-value work.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="index-en.html#contact" class="btn btn-primary btn-lg btn-interactive"><i class="fas fa-rocket me-2"></i>Request an Automation Audit</a>
                            <a href="#benefits" class="btn btn-outline-light btn-lg btn-interactive"><i class="fas fa-chart-line me-2"></i>See Impact</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="text-center">
                        <i class="fas fa-robot" style="font-size: 8rem; color: rgba(255,255,255,0.35);"></i>
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
                        <span class="service-badge">Automation Factory</span>
                        <h2 class="section-title">Design, Automate, <span class="text-primary">Continuously Improve</span></h2>
                        <p class="section-subtitle">
                            We map your processes, re-engineer the steps, and deploy RPA, AI, and analytics so the entire journey is measured, predictable, and scalable.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" id="benefits">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-detail-content" data-aos="fade-up">
                        <div class="service-intro">
                            <h3>Where Automation Helps</h3>
                            <p class="lead">
                                From finance shared services to contact centres and public-sector approvals, we digitise every step, add validations, and connect data to your dashboards.
                            </p>
                        </div>
                        <div class="benefits-section">
                            <h3>Measured Improvements</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-gauge"></i>
                                        <h6>Throughput +60%</h6>
                                        <p>Automated queues reduce cycle time and eliminate bottlenecks during peak demand.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-shield-check"></i>
                                        <h6>Quality Assurance</h6>
                                        <p>Validation rules catch missing data, and bots follow the exact same steps every time.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-hand-holding-dollar"></i>
                                        <h6>Cost Reduction</h6>
                                        <p>Manual effort drops by up to 45% allowing teams to handle more requests without extra headcount.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-chart-bar"></i>
                                        <h6>Real-time Insights</h6>
                                        <p>Embedded analytics display SLA adherence, error rates, and backlog so you can act quickly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="examples-section">
                            <h3>Automation Use Cases</h3>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="example-card">
                                        <i class="fas fa-file-invoice"></i>
                                        <h5>Finance & Procurement</h5>
                                        <p>Invoice capture, matching, and approvals with OCR, RPA, and ERP integration.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="example-card">
                                        <i class="fas fa-user-check"></i>
                                        <h5>HR & Onboarding</h5>
                                        <p>Automated hiring workflows, background checks, and provisioning across systems.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="example-card">
                                        <i class="fas fa-stethoscope"></i>
                                        <h5>Healthcare Operations</h5>
                                        <p>Appointment scheduling, claims submission, and reporting integrated with HIS platforms.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="automation-benefits">
                            <h3>Capabilities & Tools</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="automation-benefit">
                                        <h5>Digital Workforce</h5>
                                        <ul>
                                            <li>UiPath, Power Automate, Automation Anywhere</li>
                                            <li>Computer vision OCR extraction</li>
                                            <li>Chatbots and guided self-service</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="automation-benefit">
                                        <h5>Continuous Improvement</h5>
                                        <ul>
                                            <li>Process mining and discovery</li>
                                            <li>Lean Six Sigma assessments</li>
                                            <li>Control rooms and SLA dashboards</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-sidebar" data-aos="fade-left">
                        <div class="sidebar-card">
                            <h4>Start an Automation Sprint</h4>
                            <p>Pick one process, and we will deliver a proof-of-value bot in four weeks.</p>
                            <a href="index-en.html#contact" class="btn btn-primary w-100">Book a Discovery Call</a>
                        </div>
                        <div class="sidebar-card">
                            <h4>Related Services</h4>
                            <ul class="list-unstyled mb-0">
                                <li><a href="{{ route('consulting-services-en') }}">Strategy & Governance</a></li>
                                <li><a href="{{ route('system-integration-en') }}">Integration Layer</a></li>
                                <li><a href="{{ route('project-management-en') }}">Program Management</a></li>
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
                <h3>Let's Automate the Work that Slows You Down</h3>
                <p>Share your top three bottlenecks and we will propose an automation roadmap with ROI numbers.</p>
                <a href="index-en.html#contact" class="btn btn-light btn-lg me-3">Speak with an Expert</a>
                <a href="tel:+966555883492" class="btn btn-outline-light btn-lg">Call +966 55 588 3492</a>
            </div>
        </div>
    </section>
    <footer class="bg-white text-dark py-4">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Company Logo" class="footer-logo mb-2">
                        <span class="fw-bold">Software Makers Limited Company</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 All Rights Reserved</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('process-automation') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('process-automation-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('process-automation-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Copy Protection Script -->
    <script>
        document.addEventListener('selectstart', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('copy', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('cut', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('paste', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('keydown', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                if (e.ctrlKey && (e.key === 'c' || e.key === 'v' || e.key === 'x' || e.key === 'a')) {
                    return true;
                }
            }

            if (e.ctrlKey && (e.key === 'c' || e.key === 'v' || e.key === 'x' || e.key === 'a' || e.key === 's' || e.key === 'u')) {
                e.preventDefault();
                return false;
            }

            if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J' || e.key === 'C'))) {
                e.preventDefault();
                return false;
            }
        });

        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
            return false;
        });

        document.addEventListener('dragstart', function(e) {
            e.preventDefault();
            return false;
        });
    </script>

</body>
</html>

