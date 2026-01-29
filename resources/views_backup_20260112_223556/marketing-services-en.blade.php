<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Services | Software Makers Limited Company</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .marketing-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .marketing-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="rgba(255,255,255,0.1)"/><stop offset="100%" stop-color="rgba(255,255,255,0)"/></radialGradient></defs><circle cx="200" cy="200" r="100" fill="url(%23a)"/><circle cx="800" cy="300" r="150" fill="url(%23a)"/><circle cx="400" cy="700" r="120" fill="url(%23a)"/></svg>') no-repeat center center;
            background-size: cover;
        }
        .marketing-hero-content { position: relative; z-index: 2; color: #fff; }
        .marketing-hero h1 {
            font-size: 3.2rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .marketing-hero .lead {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        .sector-card {
            background: #fff;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border: 1px solid #f0f0f0;
            height: 100%;
            transition: all 0.3s ease;
        }
        .sector-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 40px rgba(0,0,0,0.15);
        }
        .sector-icon {
            width: 72px;
            height: 72px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.25rem;
            font-size: 2rem;
            color: #fff;
        }
        .sector-icon.health { background: linear-gradient(135deg, #ff6b6b, #ee5a24); }
        .sector-icon.tech { background: linear-gradient(135deg, #4ecdc4, #44a08d); }
        .sector-icon.real-estate { background: linear-gradient(135deg, #feca57, #ff9ff3); }
        .sector-icon.tourism { background: linear-gradient(135deg, #48cae4, #0077b6); }
        .sector-icon.consumer { background: linear-gradient(135deg, #a8e6cf, #88d8a3); }
        .sector-icon.manufacturing { background: linear-gradient(135deg, #ffd93d, #6bcf7f); }
        .sector-icon.education { background: linear-gradient(135deg, #ff8a80, #ff5722); }
        .sector-icon.energy { background: linear-gradient(135deg, #81c784, #4caf50); }

        .kpi-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            margin-bottom: 2rem;
        }
        .kpi-number {
            font-size: 2.6rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
        }
        .kpi-label { font-size: 1rem; opacity: 0.9; }

        .success-story {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 1.75rem;
            margin-bottom: 1.75rem;
            border-left: 5px solid #667eea;
        }
        .success-story h5 { color: #667eea; margin-bottom: 0.75rem; }

        .comparison-table {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }
        .comparison-table th {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            border: none;
            padding: 1.4rem;
            font-weight: 600;
        }
        .comparison-table td {
            padding: 1.1rem 1.4rem;
            border-bottom: 1px solid #f0f0f0;
            vertical-align: middle;
        }
        .comparison-table tbody tr:hover { background: #f8f9fa; }

        .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            padding: 4rem 0;
            text-align: center;
        }
        .cta-section h2 {
            font-size: 2.4rem;
            font-weight: 700;
            margin-bottom: 1.4rem;
        }
        .cta-section .lead {
            font-size: 1.1rem;
            margin-bottom: 1.7rem;
            opacity: 0.9;
        }
        .btn-marketing {
            background: #fff;
            color: #667eea;
            border: none;
            padding: 0.9rem 2.4rem;
            border-radius: 999px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .btn-marketing:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            color: #667eea;
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #111827;
        }
        .section-subtitle {
            font-size: 1.05rem;
            color: #6b7280;
            margin-bottom: 2.5rem;
        }
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        @media (max-width: 768px) {
            .marketing-hero h1 { font-size: 2.3rem; }
            .marketing-hero { min-height: 70vh; }
        }
    </style>
</head>
<body>
    <!-- Navigation (same style as index-en) -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index-en.html#home" style="display:flex; align-items:center; text-decoration:none; direction:ltr;">
                <div class="logo-container" style="position:relative; margin-right:15px;">
                    <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Software Makers Logo" class="img-fluid" style="width:64px; height:64px; filter:brightness(1.1) contrast(1.1);">
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
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('process-automation-en') }}" style="transition:all 0.2s ease; margin-bottom:0.25rem;">
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
                            <li><a class="dropdown-item px-3 py-2 rounded active" href="{{ route('marketing-services-en') }}" style="transition:all 0.2s ease; margin-bottom:0.25rem;">
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
                    <a href="{{ route('marketing-services') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border:2px solid rgba(255,255,255,0.8); padding:0.45rem 0.65rem; border-radius:10px; transition:all 0.3s ease; font-weight:600; white-space:nowrap; font-size:0.9rem;" title="Arabic">
                        <img src="https://flagcdn.com/w20/sa.png" alt="Saudi Arabia Flag" width="20" height="15" style="border-radius:3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('marketing-services-en') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border:2px solid rgba(255,255,255,0.8); padding:0.45rem 0.65rem; border-radius:10px; transition:all 0.3s ease; font-weight:600; white-space:nowrap; font-size:0.9rem; background:rgba(0,0,0,0.2);" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="UK Flag" width="20" height="15" style="border-radius:3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('marketing-services-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border:2px solid rgba(255,255,255,0.8); padding:0.45rem 0.65rem; border-radius:10px; transition:all 0.3s ease; font-weight:600; white-space:nowrap; font-size:0.9rem;" title="French">
                        <img src="https://flagcdn.com/w20/fr.png" alt="France Flag" width="20" height="15" style="border-radius:3px;">
                        <span>FR</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="marketing-hero">
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="marketing-hero-content" data-aos="fade-up">
                        <h1>Relationship-based Marketing Services</h1>
                        <p class="lead">
                            Your partner for local and international growth, powered by strategic relationships and high-impact partnerships.
                        </p>
                        <p class="lead">
                            At <strong>Software Makers</strong>, we leverage a trusted network of decision-makers, partners and influencers to open real business opportunities, expand your reach and increase the lifetime value of your customers.
                        </p>
                        <a href="#services" class="btn-marketing">
                            <i class="fas fa-rocket me-1"></i>
                            Explore our services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up">
                    <h2 class="section-title text-center">How we accelerate your go‑to‑market</h2>
                    <p class="section-subtitle text-center">
                        In modern markets, access to the right people is as critical as the quality of your product.
                        We combine <strong>relationship marketing</strong>, sector expertise and data-driven targeting
                        to connect you with customers, investors and strategic partners that truly move the needle.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sectors -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Sector-focused <span class="text-gradient">marketing plays</span></h2>
                    <p class="section-subtitle">Tailored strategies designed for the realities of each industry.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="sector-card">
                        <div class="sector-icon health"><i class="fas fa-heartbeat"></i></div>
                        <h4>Healthcare & Life Sciences</h4>
                        <ul class="mt-3 mb-0">
                            <li><i class="fas fa-check text-success me-2"></i> Positioning hospitals and specialty clinics</li>
                            <li><i class="fas fa-check text-success me-2"></i> Launching medical devices and health platforms</li>
                            <li><i class="fas fa-check text-success me-2"></i> Building international medical tourism funnels</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
                    <div class="sector-card">
                        <div class="sector-icon tech"><i class="fas fa-microchip"></i></div>
                        <h4>Technology & SaaS</h4>
                        <ul class="mt-3 mb-0">
                            <li><i class="fas fa-check text-success me-2"></i> Go‑to‑market for B2B platforms and SaaS</li>
                            <li><i class="fas fa-check text-success me-2"></i> Product launch events and roadshows</li>
                            <li><i class="fas fa-check text-success me-2"></i> Strategic alliances with hyperscalers and resellers</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="sector-card">
                        <div class="sector-icon real-estate"><i class="fas fa-city"></i></div>
                        <h4>Real Estate & Development</h4>
                        <ul class="mt-3 mb-0">
                            <li><i class="fas fa-check text-success me-2"></i> Marketing residential and mixed‑use projects</li>
                            <li><i class="fas fa-check text-success me-2"></i> Investor roadshows for local & foreign capital</li>
                            <li><i class="fas fa-check text-success me-2"></i> Industry events & investment forums</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="sector-card">
                        <div class="sector-icon tourism"><i class="fas fa-plane-departure"></i></div>
                        <h4>Tourism & Hospitality</h4>
                        <ul class="mt-3 mb-0">
                            <li><i class="fas fa-check text-success me-2"></i> Campaigns for destinations, hotels and resorts</li>
                            <li><i class="fas fa-check text-success me-2"></i> Partnerships with global travel operators</li>
                            <li><i class="fas fa-check text-success me-2"></i> Integrated tourism & experience programs</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
                    <div class="sector-card">
                        <div class="sector-icon consumer"><i class="fas fa-shopping-bag"></i></div>
                        <h4>Consumer & Luxury</h4>
                        <ul class="mt-3 mb-0">
                            <li><i class="fas fa-check text-success me-2"></i> GTM for F&amp;B brands and retail chains</li>
                            <li><i class="fas fa-check text-success me-2"></i> Launching fragrances, fashion and lifestyle lines</li>
                            <li><i class="fas fa-check text-success me-2"></i> Expanding distribution into GCC and global markets</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="sector-card">
                        <div class="sector-icon energy"><i class="fas fa-bolt"></i></div>
                        <h4>Energy & Sustainability</h4>
                        <ul class="mt-3 mb-0">
                            <li><i class="fas fa-check text-success me-2"></i> Positioning clean‑energy and ESG initiatives</li>
                            <li><i class="fas fa-check text-success me-2"></i> Connecting with global investors & operators</li>
                            <li><i class="fas fa-check text-success me-2"></i> Storytelling around impact and national vision</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Marketing Services -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Our core <span class="text-gradient">marketing services</span></h2>
                    <p class="section-subtitle">From strategy to execution, we own the full relationship cycle.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="service-feature">
                        <i class="fas fa-network-wired text-primary mb-3" style="font-size:2.7rem;"></i>
                        <h4>Relationship mapping</h4>
                        <p>Identify high‑value decision makers and ecosystem partners across government, enterprise and investor networks.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="50">
                    <div class="service-feature">
                        <i class="fas fa-bullseye text-danger mb-3" style="font-size:2.7rem;"></i>
                        <h4>Campaign orchestration</h4>
                        <p>Design and manage multi‑channel campaigns (events, digital, field marketing) aligned to clear revenue targets.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-feature">
                        <i class="fas fa-handshake-angle text-success mb-3" style="font-size:2.7rem;"></i>
                        <h4>Partnership development</h4>
                        <p>Convert conversations into structured MoUs, joint ventures, distribution agreements and strategic alliances.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
                    <div class="service-feature">
                        <i class="fas fa-chart-line text-info mb-3" style="font-size:2.7rem;"></i>
                        <h4>Performance & analytics</h4>
                        <p>Track KPIs in real time, measure ROI by sector and continuously optimise your marketing investments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KPIs -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Key performance <span class="text-gradient">indicators</span></h2>
                    <p class="section-subtitle">We measure success with concrete numbers – not vanity metrics.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-3" data-aos="fade-up">
                    <div class="kpi-card">
                        <div class="kpi-number">30+</div>
                        <div class="kpi-label">New qualified relationships per month</div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="50">
                    <div class="kpi-card">
                        <div class="kpi-number">45%</div>
                        <div class="kpi-label">Average revenue uplift after 12 months</div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="kpi-card">
                        <div class="kpi-number">20+</div>
                        <div class="kpi-label">Markets accessed via our partner network</div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="150">
                    <div class="kpi-card">
                        <div class="kpi-number">95%</div>
                        <div class="kpi-label">Client satisfaction across sectors</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Selected <span class="text-gradient">success stories</span></h2>
                    <p class="section-subtitle">Real outcomes from real engagements in the region.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="success-story">
                        <h5><i class="fas fa-hospital me-2"></i>Healthcare network</h5>
                        <p>Helped a private hospital group build international referral channels and increase
                           occupancy by <strong>40%</strong> in six months through targeted relationship marketing
                           across the GCC and North Africa.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="success-story">
                        <h5><i class="fas fa-building me-2"></i>Real estate developer</h5>
                        <p>Designed investor roadshows and joint events that enabled a mixed‑use project to
                           secure foreign investment and lift sales by <strong>60%</strong> in the first quarter.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="success-story">
                        <h5><i class="fas fa-laptop-code me-2"></i>Technology vendor</h5>
                        <p>Launched a new SaaS platform via strategic alliances, achieving presence in
                           <strong>15 countries</strong> and multi‑million SAR pipeline within the first year.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="success-story">
                        <h5><i class="fas fa-utensils me-2"></i>Food & beverage brand</h5>
                        <p>Expanded distribution into <strong>8 new markets</strong> and increased revenues by
                           <strong>80%</strong> by connecting the brand with regional distributors and retail partners.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Why choose a <span class="text-gradient">relationship-first</span> model?</h2>
                    <p class="section-subtitle">Understand the difference between transactional marketing and what we offer.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up">
                    <div class="comparison-table">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Dimension</th>
                                    <th>Traditional campaigns</th>
                                    <th>Relationship-based marketing</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Focus</td>
                                    <td>Short‑term impressions and clicks</td>
                                    <td>Long‑term revenue and strategic partnerships</td>
                                </tr>
                                <tr>
                                    <td>Targeting</td>
                                    <td>Broad audience, generic messaging</td>
                                    <td>Hand‑picked decision makers and influencers</td>
                                </tr>
                                <tr>
                                    <td>Channels</td>
                                    <td>Paid media only</td>
                                    <td>Mix of events, networks, alliances and digital campaigns</td>
                                </tr>
                                <tr>
                                    <td>Measurement</td>
                                    <td>Basic metrics (views, traffic)</td>
                                    <td>Deals closed, partnerships signed, markets opened</td>
                                </tr>
                                <tr>
                                    <td>Value creation</td>
                                    <td>Single campaign outcomes</td>
                                    <td>Compounding value across sectors and geographies</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2>Ready to unlock your next wave of growth?</h2>
                    <p class="lead">
                        Let’s design a relationship‑driven marketing plan for your sector and connect you with
                        the partners, investors and customers that matter most.
                    </p>
                    <a href="index-en.html#contact" class="btn-marketing">
                        <i class="fas fa-phone me-2"></i>
                        Talk to our team
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (same as index-en) -->
    <footer class="bg-white text-dark py-4">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Company Logo" class="footer-logo mb-2">
                        <span class="fw-bold">Software Makers Limited Company</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 All Rights Reserved</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('marketing-services') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('marketing-services-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('marketing-services-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
    </script>
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


