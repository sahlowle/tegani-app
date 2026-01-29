<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Makers - SMLC</title>
    <meta name="description" content="Software Makers Limited Company - Leading Saudi company in software development and advanced technical solutions using AI and modern technologies">
    <link rel="icon" type="image/png" href="{{ asset('images/fiv2.png') }}">

    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Leaflet Map CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
    <body style="direction: ltr;">
        <!-- Scroll Progress Bar -->
        <div class="scroll-progress" id="scrollProgress"></div>
        
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#home" style="display: flex; align-items: center; text-decoration: none; direction: ltr;">
                <div class="logo-container" style="position: relative; margin-right: 15px;">
                    <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="SMLC Company Logo" class="img-fluid" style="width: 64px; height: 64px; filter: brightness(1.1) contrast(1.1);">
                </div>
                <div class="brand-text" style="display: flex; flex-direction: column; align-items: flex-start; direction: ltr;">
                    <span class="fw-bold" style="font-size: 1.05rem; color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">Software Makers Limited Company</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mobile-lang-switcher d-lg-none">
                    <a href="{{ route('index') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 44px; height: 44px; border: 2px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);" title="العربية">
                        <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                    </a>
                    <a href="{{ route('index-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 44px; height: 44px; border: 2px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                    </a>
                    <a href="{{ route('index-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 44px; height: 44px; border: 2px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);" title="Français">
                        <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                    </a>
                </div>
                <ul class="navbar-nav me-auto align-items-center" style="gap: 0.15rem; flex-wrap: nowrap;">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="#home" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-home me-1"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="#about" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-info-circle me-1"></i>
                            About Us
                        </a>
                    </li>
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle position-relative" href="#services" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-briefcase me-1"></i>
                            Our Services
                            <i class="fas fa-chevron-down ms-1" style="font-size: 0.7rem; opacity: 0.7;"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-mega shadow-lg" style="border: none; border-radius: 12px; padding: 1rem; min-width: 280px; max-width: 100%; margin-top: 0.5rem;">
                            <li><a class="dropdown-item px-3 py-2 rounded" href="#tech-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-cogs me-2 text-primary"></i>
                                Technical & Consulting Services
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="#business-development-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-chart-line me-2 text-success"></i>
                                Business Development Services
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="#odoo-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-cube me-2 text-info"></i>
                                Odoo ERP Services
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="#health-information-systems" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-heartbeat me-2 text-danger"></i>
                                Health Information Systems Services
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="#sovereign-systems" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-shield-alt me-2 text-warning"></i>
                                Sovereign Systems & Digital Transformation
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="#marketing-relations" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-handshake me-2" style="color: #9c27b0;"></i>
                                Marketing Services Through Relationships
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="#ai-support" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-brain me-2" style="color: #00d4ff;"></i>
                                Intelligent Technical Support System ResolvePro AI
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="#presence" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-globe me-1"></i>
                            Our Presence
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('careers-en') }}" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-user-tie me-1"></i>
                            Careers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="#contact" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-envelope me-1"></i>
                            Contact Us
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-1 flex-wrap ms-lg-auto" style="flex-shrink: 0;">
                    <a href="{{ route('index') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="Arabic">
                        <img src="https://flagcdn.com/w20/sa.png" alt="Saudi Arabia Flag" width="20" height="15" style="border-radius: 3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('index-en') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem; background: rgba(0,0,0,0.2);" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="United Kingdom Flag" width="20" height="15" style="border-radius: 3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('index-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="Français">
                        <img src="https://flagcdn.com/w20/fr.png" alt="Drapeau français" width="20" height="15" style="border-radius: 3px;">
                        <span>FR</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            We are <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">Software Makers</span>
                            <br>Building the Digital Future
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            A leading Saudi company in software development and advanced technical solutions
                            using artificial intelligence and modern technologies
                        </p>
                        <div class="partner-badges mb-4" style="background: rgba(0, 212, 255, 0.15); padding: 1rem; border-radius: 10px; border: 1px solid rgba(0, 212, 255, 0.3); display: flex; align-items: center; gap: 12px;">
                            <img class="odoo-badge" alt="Odoo Partner" src="{{ asset('images/odoo_logo.png') }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; filter: brightness(1.3);" />
                            <span style="color: #ffffff; font-weight: bold; text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">Certified Odoo Partner</span>
                        </div>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#about" class="btn btn-primary btn-lg btn-interactive">
                                <i class="fas fa-rocket me-2"></i>
                                Discover Our Services
                            </a>
                            <a href="#contact" class="btn btn-outline-light btn-lg btn-interactive">
                                <i class="fas fa-phone me-2"></i>
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="hero-image">
                        <div class="floating-icons">
                            <i class="fab fa-react floating-icon" style="--delay: 0s"></i>
                            <i class="fas fa-database floating-icon" style="--delay: 1s"></i>
                            <i class="fas fa-cloud floating-icon" style="--delay: 2s"></i>
                            <i class="fas fa-mobile-alt floating-icon" style="--delay: 0.5s"></i>
                            <i class="fas fa-brain floating-icon" style="--delay: 1.5s"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="scroll-arrow"></div>
        </div>
    </section>

    

    


    <!-- About Section -->
    <section id="about" class="py-5 position-relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="about-bg-pattern"></div>
        
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <div class="about-header">
                        <span class="about-badge">About Us</span>
                        <h2 class="section-title"><span class="text-gradient">Software Makers</span> Company</h2>
                        <p class="section-subtitle">Leaders in IT solutions and digital transformation</p>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-content">
                        <div class="about-intro">
                            <div class="intro-badge">
                                <i class="fas fa-crown"></i>
                                <span>Leading Saudi Company</span>
                            </div>
                            <h3 class="about-title">
                                We are pioneers of technical innovation in the Kingdom
                            </h3>
                            <p class="about-description">
                                Software Makers for IT Solutions is a leading Saudi company that develops and creates software 
                                using the latest technologies such as artificial intelligence, cybersecurity, virtual reality, and the Internet of Things.
                            </p>
                            <p class="about-description">
                                We work on developing enterprise systems such as Enterprise Resource Planning (ERP) systems and Hospital Information Systems (HIS), 
                                and customized Odoo solutions as an official and certified partner of Odoo.
                            </p>
                        </div>
                        
                        <div class="about-stats d-flex flex-wrap justify-content-between">
                            <div class="stat-item">
                                <div class="stat-number">169</div>
                                <div class="stat-label">Completed Projects</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">1382</div>
                                <div class="stat-label">Satisfied Clients</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">1214</div>
                                <div class="stat-label">Consultations Provided</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">7</div>
                                <div class="stat-label">Years of Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-visual">
                        <div class="tech-showcase">
                            <div class="tech-item enhanced floating" style="animation-delay: 0s;">
                                <div class="tech-icon icon-ai pulsing">
                                    <svg class="svg-icon" viewBox="0 0 64 64" aria-hidden="true">
                                        <!-- Stylized AI monogram -->
                                        <path d="M18 46l8-28 8 28M21 36h10M44 18v28"/>
                                    </svg>
                                </div>
                                <div class="tech-content">
                                    <h5>Artificial Intelligence</h5>
                                    <p>Advanced Smart Solutions</p>
                                </div>
                                <div class="tech-glow"></div>
                            </div>
                            <div class="tech-item enhanced floating" style="animation-delay: 0.5s;">
                                <div class="tech-icon icon-cyber pulsing">
                                    <svg class="svg-icon" viewBox="0 0 64 64" aria-hidden="true">
                                        <path d="M32 8l18 6v12c0 14-10 22-18 26-8-4-18-12-18-26V14l18-6zM26 34l6 6 10-12"/>
                                    </svg>
                                </div>
                                <div class="tech-content">
                                    <h5>Cybersecurity</h5>
                                    <p>Comprehensive Data Protection</p>
                                </div>
                                <div class="tech-glow"></div>
                            </div>
                            <div class="tech-item enhanced floating" style="animation-delay: 1s;">
                                <div class="tech-icon icon-vr pulsing">
                                    <svg class="svg-icon" viewBox="0 0 64 64" aria-hidden="true">
                                        <path d="M10 22h44a4 4 0 0 1 4 4v12a6 6 0 0 1-6 6H40l-6-8-6 8H12a6 6 0 0 1-6-6V26a4 4 0 0 1 4-4zM20 32a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm24 0a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                                    </svg>
                                </div>
                                <div class="tech-content">
                                    <h5>Virtual Reality</h5>
                                    <p>Advanced Interactive Experiences</p>
                                </div>
                                <div class="tech-glow"></div>
                            </div>
                            <div class="tech-item enhanced floating" style="animation-delay: 1.5s;">
                                <div class="tech-icon icon-iot pulsing">
                                    <svg class="svg-icon" viewBox="0 0 64 64" aria-hidden="true">
                                        <path d="M32 12a8 8 0 0 1 8 8m-8-14c12 0 22 10 22 22M10 28c0-12 10-22 22-22M32 32v12m0 0-10 6m10-6 10 6M12 44l10-6M52 44l-10-6"/>
                                    </svg>
                                </div>
                                <div class="tech-content">
                                    <h5>Internet of Things</h5>
                                    <p>Smart Device Connectivity</p>
                                </div>
                                <div class="tech-glow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card enhanced">
                        <div class="feature-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4>Global Expertise</h4>
                        <p>We leverage American and European expertise and localize it to meet local market requirements</p>
                        <div class="feature-highlight"></div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card enhanced">
                        <div class="feature-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4>Vision 2030</h4>
                        <p>We contribute to achieving Saudi Arabia's Vision 2030 through innovative technical solutions</p>
                        <div class="feature-highlight"></div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card enhanced">
                        <div class="feature-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4>Digital Transformation</h4>
                        <p>We support our clients in their journey towards development and sustainable success to the farthest horizons</p>
                        <div class="feature-highlight"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section id="vision-mission" class="py-5 bg-light position-relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="vm-bg-pattern"></div>
        
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <div class="vm-header">
                        <span class="vm-badge">Our Vision & Mission</span>
                        <h2 class="section-title">Towards a <span class="text-gradient">More Efficient Digital Future</span></h2>
                        <p class="section-subtitle">We believe in the power of technology to build a better future</p>
                    </div>
                </div>
            </div>
            
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="vm-card vision h-100 interactive-element">
                        <div class="vm-card-bg"></div>
                        <div class="vm-icon icon-eye glowing">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="vm-content">
                            <h3 class="vm-title">Our Vision</h3>
                            <p class="vm-text">
                                To be Software Makers Limited Company the leading company in consulting, marketing, and IT solutions, providing sustainable and innovative solutions to face challenges in Saudi Arabia and beyond.
                            </p>
                            <div class="vm-features">
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Leadership in Consulting</span>
                                </div>
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Sustainable and Innovative Solutions</span>
                                </div>
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Reach to the Region and the World</span>
                                </div>
                            </div>
                        </div>
                        <div class="vm-decoration">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="vm-card mission h-100 interactive-element">
                        <div class="vm-card-bg"></div>
                        <div class="vm-icon icon-rocket bouncing">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="vm-content">
                            <h3 class="vm-title">Our Mission</h3>
                            <p class="vm-text">
                                Empowering government and private institutions in digital transformation and expanding their presence in local and international markets through innovative solutions that support investment and operations. We are committed to being a trusted partner that transforms challenges into opportunities, and to be contributors to building a more efficient and sustainable future in line with the Kingdom's Vision 2030.
                            </p>
                            <div class="vm-features">
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Enable Digital Transformation</span>
                                </div>
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Innovative Solutions</span>
                                </div>
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Support Vision 2030</span>
                                </div>
                            </div>
                        </div>
                        <div class="vm-decoration">
                            <i class="fas fa-flag"></i>
                            <i class="fas fa-flag"></i>
                            <i class="fas fa-flag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Why Choose Us Section -->
    <section id="why-us" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Why <span class="text-primary">Software Makers</span>?</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <div class="why-content">
                            <h4>Unified System</h4>
                            <p>Integrates all company operations into one integrated platform</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                        <div class="why-content">
                            <h4>Easy Scalability</h4>
                            <p>Ability to easily add new modules in the future</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <div class="why-content">
                            <h4>Efficiency Improvement</h4>
                            <p>Increase operational efficiency and reduce human errors</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <div class="why-content">
                            <h4>Real-time Reports</h4>
                            <p>Instant reports and analytics that support decision-making</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Services Section -->
    <section id="tech-services" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Technical & <span class="text-primary">Consulting Services</span></h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-lightbulb">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>Technical Consulting</h4>
                        <p>We provide comprehensive strategic and technical consulting that enables institutions to make accurate decisions in their digital transformation journey</p>
                        <a href="{{ route('consulting-services-en') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            Read More
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-cogs">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>System Development</h4>
                        <p>Design and development of integrated systems that suit the client's nature, including enterprise systems, websites, and smart applications</p>
                        <a href="{{ route('system-development-en') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            Read More
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-link">
                            <i class="fas fa-link"></i>
                        </div>
                        <h4>System Integration</h4>
                        <p>Connecting multiple systems within the institution or between them and external parties through smart integration solutions</p>
                        <a href="{{ route('system-integration-en') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            Read More
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-diagram">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h4>Technical Project Management</h4>
                        <p>Integrated management of technical projects including planning, implementation, monitoring, and quality assurance</p>
                        <a href="{{ route('project-management-en') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            Read More
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-robot">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h4>Process Optimization & Automation</h4>
                        <p>Converting manual processes into smart automated processes based on artificial intelligence and predictive analytics</p>
                        <a href="{{ route('process-automation-en') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            Read More
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-palette">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4>UI/UX Design</h4>
                        <p>Designing modern interactive interfaces that make it easy for users to access services clearly and smoothly</p>
                        <a href="{{ route('ui-ux-design-en') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            Read More
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-tools">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4>Technical Support & Maintenance</h4>
                        <p>Integrated technical support that ensures continuity of digital systems without interruption through specialized teams</p>
                        <a href="{{ route('maintenance-support-en') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-2"></i>
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Development Services Section -->
    <section id="business-development-services" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <span class="service-badge">Business Development Services</span>
                    <h2 class="section-title">Business <span class="text-primary">Development Services</span></h2>
                    <p class="section-subtitle">Comprehensive services to support the growth and development of your business</p>
                </div>
            </div>
            
            <div class="row">
                <!-- Growth Strategy -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card interactive-element">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Growth Strategy Formulation</h4>
                        <p>Preparing innovative strategic plans to increase market share and enhance competitiveness locally and internationally</p>
                        <a href="{{ route('growth-strategy-en') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i>Read More
                        </a>
                    </div>
                </div>
                
                <!-- Partnership Management -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card interactive-element">
                        <div class="service-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Partnership Management & Building</h4>
                        <p>Searching for cooperation opportunities and building strategic partnerships with local and international entities</p>
                        <a href="{{ route('partnership-management-en') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i>Read More
                        </a>
                    </div>
                </div>
                
                <!-- Market Analysis -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card interactive-element">
                        <div class="service-icon">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                        <h4>Market & Investment Opportunities Analysis</h4>
                        <p>Studying target markets and analyzing trends and challenges to select the best opportunities</p>
                        <a href="{{ route('market-analysis-en') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i>Read More
                        </a>
                    </div>
                </div>
                
                <!-- Business Model Design -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card interactive-element">
                        <div class="service-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>Business Model Design</h4>
                        <p>Creating integrated and sustainable business models that ensure profitability and added value</p>
                        <a href="{{ route('business-model-design-en') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i>Read More
                        </a>
                    </div>
                </div>
                
                <!-- Project Management -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card interactive-element">
                        <div class="service-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h4>Development Projects Management</h4>
                        <p>Leading and executing business development projects from idea to tangible results</p>
                        <a href="{{ route('development-projects-en') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i>Read More
                        </a>
                    </div>
                </div>
                
                <!-- Commercial Representation -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card interactive-element">
                        <div class="service-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h4>Commercial Representation & Negotiation</h4>
                        <p>Representing clients in negotiations and meetings with partners and investors to achieve the best results</p>
                        <a href="{{ route('commercial-representation-en') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i>Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Odoo Official Partner Banner -->
    <section id="odoo-partner-banner" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-5 text-center" data-aos="fade-right">
                    <img src="{{ asset('images/smlc-odoo.png') }}" alt="SMLC - Odoo Official Partner" class="img-fluid" style="max-height: 260px;">
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <h2 class="mb-3">Official Odoo Partners</h2>
                    <p class="lead mb-3">
                        We are proud of Odoo's trust in us as an official partner to provide comprehensive ERP solutions that simplify business management
                        and connect teams and operations in one smart and easy-to-use platform.
                    </p>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Professional implementation and customization that matches your business nature</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Continuous training and technical support to ensure successful digital transformation</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Flexible integration with existing systems and services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Odoo Services Section -->
    <section id="odoo-services" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title"><span class="text-primary">Odoo ERP</span> Services</h2>
                    <p class="section-subtitle">Official and certified partner of Odoo</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-sales-en') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Sales" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/sale/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Sales Management</h5>
                        <p>Tracking quotes, sales orders, and invoices</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> Read More
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-purchase-en') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Purchase" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/purchase/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Purchase Management</h5>
                        <p>Organizing purchase orders and managing suppliers</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> Read More
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-inventory-en') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Inventory" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/stock/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Inventory Management</h5>
                        <p>Full control over inventory and goods tracking</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> Read More
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-hr-en') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo HR" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/hr/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Human Resources</h5>
                        <p>Managing recruitment, attendance, and payroll</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> Read More
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-accounting-en') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Accounting" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/account/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Accounting & Finance</h5>
                        <p>Managing accounts, taxes, and financial reports</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> Read More
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-crm-en') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo CRM" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/crm/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Customer Management CRM</h5>
                        <p>Tracking customers, sales opportunities, and campaigns</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> Read More
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-project-en') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Project" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/project/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Project Management</h5>
                        <p>Planning, organizing, and tracking project progress</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> Read More
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-manufacturing-en') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Manufacturing" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/mrp/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5>Manufacturing Management</h5>
                        <p>Efficiently planning and tracking production operations</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-right me-1"></i> Read More
                        </span>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Health Information Systems Section -->
    <section id="health-information-systems" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <span class="service-badge">Health Information Systems</span>
                    <h2 class="section-title"><span class="text-primary">Health Information Systems</span> Services</h2>
                    <p class="section-subtitle">Integrated technical solutions for hospitals and health centers</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <div class="card border-primary">
                        <div class="card-body p-5">
                            <i class="fas fa-hospital fa-3x text-primary mb-4"></i>
                            <h4 class="mb-3">Comprehensive Health Information Systems Solutions</h4>
                            <p class="lead mb-4">
                                We provide integrated technical solutions for hospitals and health centers including patient management, electronic medical records, pharmacy management, surgical operations, and health analytics using artificial intelligence.
                            </p>
                            <a href="{{ route('health-systems-en') }}" class="btn btn-primary btn-lg">
                                <i class="fas fa-arrow-right me-2"></i>
                                Read More About Health Information Systems Services
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sovereign Systems Section -->
    <section id="sovereign-systems" class="py-5 bg-light position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <span class="service-badge">Sovereign Systems & Digital Transformation</span>
                    <h2 class="section-title">Software Makers Company… <span class="text-primary">Comprehensive expertise in building sovereign systems and comprehensive digital transformation</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up">
                    <div class="card border-0 shadow-lg" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
                        <div class="card-body p-5">
                            <div class="row align-items-center">
                                <div class="col-lg-3 text-center mb-4 mb-lg-0">
                                    <div class="sovereign-icon-wrapper" style="background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary)); width: 120px; height: 120px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 10px 30px rgba(0, 212, 255, 0.3);">
                                        <i class="fas fa-shield-alt fa-3x text-white"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <p class="lead mb-4" style="line-height: 2; font-size: 1.1rem; color: #333;">
                                        Software Makers Limited Company has solid capabilities and advanced expertise in developing, implementing, and operating national and sovereign systems, according to the highest internationally approved technical and regulatory standards. The company has established its position as a trusted executive entity in major government projects, thanks to its integrated system of expertise, competencies, and specialized cadres.
                                    </p>
                                    <a href="login-en.html?redirect=sovereign-systems-en.html" class="btn btn-primary btn-lg">
                                        <i class="fas fa-arrow-right me-2"></i>
                                        Read More About Our Sovereign Systems Capabilities
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Marketing Services Section -->
    <section id="marketing-relations" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title mb-4">
                        <i class="fas fa-handshake me-3 text-primary"></i>
                        <span>Marketing Services Through Relationships</span>
                    </h2>
                    <p class="lead mb-4">
                        We provide integrated marketing services that focus on building strong relationships with customers and partners, through innovative marketing strategies and customized solutions that help you expand your business and increase your market presence.
                    </p>
                    <a href="{{ route('marketing-services-en') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-arrow-right me-2"></i>
                        Discover Our Marketing Services
                    </a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="feature-card enhanced h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h5>Relationship Management</h5>
                                <p>Building strong relationships with customers and partners</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card enhanced h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h5>Marketing Strategies</h5>
                                <p>Innovative and customized marketing solutions</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card enhanced h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <h5>Marketing Campaigns</h5>
                                <p>Effective campaigns to increase market presence</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card enhanced h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <h5>Relationship Network</h5>
                                <p>Expanding your business relationship network</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Support Section -->
    <section id="ai-support" class="py-5 text-white" style="background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="mb-4" style="font-size: 2.5rem;">
                        <i class="fas fa-microchip me-3" style="font-size: 2rem; background: linear-gradient(135deg, #00d4ff, #22e1ff, #4bffa5); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent;"></i>
                        Intelligent Technical Support System
                        <span class="d-block h4 mt-2">ResolvePro AI</span>
                    </h2>
                    <p class="lead mb-4">
                        Smart automation for the technical support system and converting every inquiry into a fast and accurate solution
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-2"></i>
                                <span>Instant integration without complexity</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-2"></i>
                                <span>Smart and context-aware responses</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-2"></i>
                                <span>Agent-guided interface</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-2"></i>
                                <span>Automatic scalability</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="ai-features">
                        <div class="feature-item">
                            <i class="fas fa-brain"></i>
                            <div>
                                <h5>Multi-stage Decision Engine</h5>
                                <p>From initial sorting to diagnosis and solution formulation</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-chart-bar"></i>
                            <div>
                                <h5>Continuous Improvement Loop</h5>
                                <p>Analytics to measure resolution time and customer satisfaction</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-rocket"></i>
                            <div>
                                <h5>Quick Launch</h5>
                                <p>From proof of concept to full operation in weeks</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Team Section (hidden) -->
    <section id="team" class="py-5" style="display: none !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">فريق <span class="text-primary">العمل</span></h2>
                    <p class="section-subtitle">نؤمن بالشغف في صناعة البرمجيات والابتكار وتجارب المستخدم المميزة.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Member 2 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <div class="member-photo">
                            <img class="lazy" alt="أمجد ربوعي" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/امجد.jpeg') }}"/>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">م/ د. أمجد ربوعي</h5>
                            <p class="member-role">مستشار التحول الرقمي وإدارة المشاريع الكبرى</p>
                            <div class="member-social">
                                <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 3 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-card">
                        <div class="member-photo">
                            <img class="lazy" alt="عبدالله البطاطي" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/عبدالله.jpeg') }}"/>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">أ/ عبدالله البطاطي</h5>
                            <p class="member-role">إدارة العلاقات العامة</p>
                            <div class="member-social">
                                <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 4 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-card">
                        <div class="member-photo">
                            <img class="lazy" alt="أمين العبيد" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="https://images.unsplash.com/photo-1600880292089-90e4b97f5b9f?q=80&w=600&auto=format&fit=crop"/>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">م/ أمين العبيد</h5>
                            <p class="member-role">مدير تقنية المعلومات</p>
                            <div class="member-social">
                                <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 5 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-card">
                        <div class="member-photo">
                            <img class="lazy" alt="حسن باودود" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/حسن.jpeg') }}"/>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">م/ حسن باودود</h5>
                            <p class="member-role">اختصاصي مركز بيانات</p>
                            <div class="member-social">
                                <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 6 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="team-card">
                        <div class="member-photo">
                            <img class="lazy" alt="التجاني مصطفى" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/التجانى.jpeg') }}"/>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">م/ التجاني مصطفى</h5>
                            <p class="member-role">مدير فريق المطورين والدعم الفني</p>
                            <div class="member-social">
                                <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 7 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="team-card">
                        <div class="member-photo">
                            <img class="lazy" alt="خالد صبيح" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/خالد.jpeg') }}"/>
                        </div>
                        <div class="member-info">
                            <h5 class="member-name">د/م خالد صبيح</h5>
                            <p class="member-role">مدير إدارة مشاريع Odoo</p>
                            <div class="member-social">
                                <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Partners Section -->
    <section id="partners" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Certifications - <span class="text-primary">Partnerships</span></h2>
                    <p class="section-subtitle">Entities we rely on and are proud to cooperate with</p>
                </div>
            </div>
            <div class="row g-4 align-items-center justify-content-center partners-grid" data-aos="fade-up">
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="2" loading="lazy" src="{{ asset('images/2.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="3" loading="lazy" src="{{ asset('images/3.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="4" loading="lazy" src="{{ asset('images/4.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="5" loading="lazy" src="{{ asset('images/5.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="6" loading="lazy" src="{{ asset('images/6.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="7" loading="lazy" src="{{ asset('images/7.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="8" loading="lazy" src="{{ asset('images/8.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="9" loading="lazy" src="{{ asset('images/9.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="10" loading="lazy" src="{{ asset('images/10.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="11" loading="lazy" src="{{ asset('images/11.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="12" loading="lazy" src="{{ asset('images/12.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="14" loading="lazy" src="{{ asset('images/14.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="15" loading="lazy" src="{{ asset('images/15.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="16" loading="lazy" src="{{ asset('images/16.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="17" loading="lazy" src="{{ asset('images/17.png') }}"></div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="partner-tile"><img alt="18" loading="lazy" src="{{ asset('images/18.png') }}"></div></div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">What <span class="text-primary">They Say About Us</span></h2>
                    <p class="section-subtitle">Opinions of our clients and partners about the quality of our services</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="testimonial-card">
                        <div class="testimonial-rating" aria-label="5 نجوم">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Professional service and fast support. They helped us accelerate our digital transformation with high efficiency.</p>
                        <div class="testimonial-author">
                            <img class="avatar" alt="Client" src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" style="width: 50px; height: 50px; border-radius: 50%;"/>
                            <div>
                                <h6 class="mb-0">Ahmed Al-Subaie</h6>
                                <small class="text-muted">IT Manager</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <div class="testimonial-rating" aria-label="5 stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">Innovative solutions and meticulous execution. A cooperative team that provides real added value.</p>
                        <div class="testimonial-author">
                            <img class="avatar" alt="Client" src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" style="width: 50px; height: 50px; border-radius: 50%;"/>
                            <div>
                                <h6 class="mb-0">Nora Al-Qahtani</h6>
                                <small class="text-muted">Project Manager</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <div class="testimonial-rating" aria-label="5 stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">The best technical partner we have dealt with in recent years. We highly recommend them.</p>
                        <div class="testimonial-author">
                            <img class="avatar" alt="Client" src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" style="width: 50px; height: 50px; border-radius: 50%;"/>
                            <div>
                                <h6 class="mb-0">Salem Al-Shehri</h6>
                                <small class="text-muted">Business Sector Head</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="presence" class="py-5 bg-light position-relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="presence-bg-pattern"></div>
        
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <div class="presence-header">
                        <span class="presence-badge">Our Presence</span>
                        <h2 class="section-title">Our <span class="text-gradient">Global Presence</span></h2>
                        <p class="section-subtitle">The company is present in four main locations:</p>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="presence-map-container">
                        <div class="world-map-image world-map-en">
                            <img src="{{ asset('images/world.png') }}" 
                                 alt="World Map" 
                                 class="world-map-img">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="presence-locations">
                        <div class="location-item" data-country="saudi">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/sa.png" alt="Saudi Arabia Flag" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5>Kingdom of Saudi Arabia</h5>
                                <p>Makkah</p>
                            </div>
                        </div>
                        
                        <div class="location-item" data-country="usa">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/us.png" alt="USA Flag" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5>United States of America</h5>
                                <p>Chicago</p>
                            </div>
                        </div>
                        
                        <div class="location-item" data-country="egypt">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/eg.png" alt="Egypt Flag" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5>Egypt</h5>
                                <p>Cairo</p>
                            </div>
                        </div>
                        
                        <div class="location-item" data-country="bahrain">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/bh.png" alt="Bahrain Flag" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5>Bahrain</h5>
                                <p>Manama</p>
                            </div>
                        </div>
                        
                        <div class="location-item coming-soon" data-country="senegal">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/sn.png" alt="Senegal Flag" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5>Senegal</h5>
                                <p>Dakar <span class="coming-soon-badge">(Coming Soon)</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-12" data-aos="fade-up">
                    <div class="presence-description">
                        <p class="text-center lead">
                            This allows cooperation with global experts and leveraging international expertise and business models that represent best practices, and thanks to this, distinctive and high-quality services are provided that meet the needs and requirements of clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title text-white">Contact <span class="text-primary">Us</span></h2>
                    <p class="section-subtitle text-light">We are here to help you achieve your technical goals</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- تعديل مهم: إضافة action + method -->
                    <form class="contact-form" action="sendmail.php" method="POST" data-aos="fade-up">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
            
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-6 text-center mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h5>Call Us</h5>
                        <p>+966555883492</p>
                    </div>
                </div>
                
                <div class="col-lg-6 text-center mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5>Email Us</h5>
                        <p>info@smlc.com</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Social links moved up to contact section -->
        <div class="container">
            <div class="row mt-3 justify-content-center">
                <div class="col-12 text-center">
                    <h6 class="text-light mb-3">Follow Us on Social Media</h6>
                    <div class="social-links mt-2">
                        <a href="https://x.com/smlc_sa" target="_blank" rel="noopener" class="me-3 x" aria-label="X (Twitter)">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M4 4L20 20M20 4L4 20" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/smlc-sa" target="_blank" rel="noopener" class="me-3 linkedin" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/smlc_sa/" target="_blank" rel="noopener" class="me-3 instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/share/17UZBkAncT/?mibextid=wwXIfr" target="_blank" rel="noopener" class="facebook" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Ensure logo is visible */
        .logo-container img {
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
            max-width: 80px !important;
            height: auto !important;
        }
        
        .logo-container {
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
            flex-shrink: 0 !important;
        }
        
        .navbar-brand {
            flex-shrink: 0 !important;
            display: flex !important;
            align-items: center !important;
        }
        
        /* Ensure LTR direction for entire page */
        html[dir="ltr"] {
            direction: ltr;
        }
        
        html[dir="ltr"] body {
            direction: ltr;
            text-align: left;
        }
        
        html[dir="ltr"] .container,
        html[dir="ltr"] .row,
        html[dir="ltr"] .col,
        html[dir="ltr"] .col-lg,
        html[dir="ltr"] .col-md,
        html[dir="ltr"] .col-sm {
            direction: ltr;
        }
        
        /* Navbar Enhancements */
        .navbar-nav {
            flex-wrap: nowrap !important;
        }
        
        .navbar-nav .nav-item {
            flex-shrink: 0;
        }
        
        .navbar-nav .nav-link {
            position: relative;
            white-space: nowrap;
        }
        
        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--brand-primary), var(--brand-secondary));
            transition: width 0.3s ease;
        }
        
        .navbar-nav .nav-link:hover::before,
        .navbar-nav .nav-link.active::before {
            width: 80%;
        }
        
        .navbar-nav .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: var(--brand-primary) !important;
            transform: translateY(-2px);
        }
        
        .navbar-nav .dropdown-item:hover {
            background: linear-gradient(90deg, rgba(0, 212, 255, 0.1), rgba(34, 225, 255, 0.1));
            transform: translateX(5px);
            color: var(--brand-primary);
            font-weight: 500;
        }
        
        .navbar-nav .dropdown-item i {
            transition: transform 0.2s ease;
        }
        
        .navbar-nav .dropdown-item:hover i {
            transform: scale(1.2);
        }
        
        #lang-switcher:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: var(--brand-primary) !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 212, 255, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(0, 212, 255, 0.4) !important;
        }
        
        .dropdown-menu {
            animation: fadeInDown 0.3s ease;
        }
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Fix overflow issues */
        html, body {
            overflow-x: hidden !important;
            max-width: 100% !important;
            width: 100% !important;
        }
        
        @media (max-width: 991px) {
            .navbar-nav {
                padding: 1rem 0;
                flex-wrap: wrap !important;
            }
            
            .navbar-nav .nav-link {
                padding: 0.75rem 1rem !important;
                margin: 0.25rem 0;
            }
            
            /* Fix dropdown menu in mobile */
            .navbar-collapse.show .dropdown-menu {
                position: static !important;
                float: none !important;
                width: 100% !important;
                min-width: 100% !important;
                max-width: 100% !important;
                margin: 0.5rem 0 !important;
                border-radius: 8px !important;
                box-shadow: none !important;
                border: 1px solid rgba(255, 255, 255, 0.1) !important;
                background: rgba(0, 0, 0, 0.2) !important;
                display: block !important;
                opacity: 1 !important;
                transform: none !important;
            }
            
            .navbar-collapse.show .dropdown-menu .dropdown-item {
                color: #0f172a !important;
                padding: 0.75rem 1rem !important;
                width: 100% !important;
            }
            
            .navbar-collapse.show .dropdown-menu .dropdown-item:hover {
                background: rgba(54, 180, 179, 0.1) !important;
                color: var(--brand-primary) !important;
            }
            
            .navbar-nav .nav-item.dropdown {
                width: 100%;
            }
            
            .navbar-nav .nav-item.dropdown .nav-link {
                width: 100%;
            }
            
            /* Ensure dropdown is always visible when parent is active */
            .navbar-nav .nav-item.dropdown.show .dropdown-menu {
                display: block !important;
            }
            
            /* Override any conflicting styles from style.css */
            #mainNav .navbar-collapse.collapse.show {
                background: rgba(255,255,255,0.98) !important;
                width: 100vw !important;
                max-width: 100vw !important;
                left: 0 !important;
                right: 0 !important;
                height: 100vh;
            }
            
            /* Language switcher in mobile menu */
            #mainNav .navbar-collapse.collapse.show .mobile-lang-switcher {
                display: flex !important;
                justify-content: center;
                align-items: center;
                gap: 12px;
                padding: 20px 20px 16px;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                margin-bottom: 16px;
            }
            
            #mainNav .navbar-collapse.collapse.show .mobile-lang-switcher a {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 44px;
                height: 44px;
                border-radius: 50%;
                border: 2px solid rgba(0, 0, 0, 0.15);
                overflow: hidden;
                background: rgba(0, 0, 0, 0.02);
                transition: all 0.3s ease;
            }
            
            #mainNav .navbar-collapse.collapse.show .mobile-lang-switcher a:hover {
                transform: scale(1.1);
                border-color: var(--brand-primary);
                box-shadow: 0 4px 12px rgba(54, 180, 179, 0.2);
            }
            
            #mainNav .navbar-collapse.collapse.show .mobile-lang-switcher a img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            
            #mainNav .navbar-collapse.collapse.show .dropdown-menu {
                position: static !important;
                float: none !important;
                width: 100% !important;
                min-width: 100% !important;
                max-width: 100% !important;
                margin: 0.5rem 0 !important;
                border-radius: 8px !important;
                box-shadow: none !important;
                border: 1px solid rgba(0, 0, 0, 0.1) !important;
                background: rgba(0, 0, 0, 0.05) !important;
                display: block !important;
                opacity: 1 !important;
                transform: none !important;
                padding: 0.5rem 0 !important;
            }
            
            #mainNav .navbar-collapse.collapse.show .dropdown-item {
                color: #0f172a !important;
                padding: 0.75rem 1rem !important;
                width: 100% !important;
            }
            
            #mainNav .navbar-collapse.collapse.show .dropdown-item:hover {
                background: rgba(54, 180, 179, 0.1) !important;
                color: var(--brand-primary) !important;
            }
            
            /* Fix body and html overflow */
            html, body {
                overflow-x: hidden !important;
                max-width: 100vw !important;
                width: 100% !important;
            }
            
            /* Ensure container doesn't cause overflow */
            .container {
                max-width: 100% !important;
                padding-left: 15px !important;
                padding-right: 15px !important;
            }
        }
        
        /* Improve tech-content text display */
        .tech-content {
            min-height: auto !important;
            padding: 0.5rem 0 !important;
        }
        
        .tech-content h5 {
            font-size: 1rem !important;
            line-height: 1.4 !important;
            margin-bottom: 0.25rem !important;
            word-wrap: break-word !important;
            overflow-wrap: break-word !important;
            white-space: normal !important;
        }
        
        .tech-content p {
            font-size: 0.85rem !important;
            line-height: 1.3 !important;
            margin-bottom: 0 !important;
            word-wrap: break-word !important;
            overflow-wrap: break-word !important;
            white-space: normal !important;
        }
        
        .tech-item.enhanced {
            min-height: auto !important;
            padding: 1rem !important;
        }
        
        /* Hero Section Responsive Fixes */
        .hero-content {
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        .hero-content h1 {
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: normal;
            line-height: 1.3;
        }
        
        .hero-content h1 .display-4 {
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: normal;
        }
        
        .hero-content p {
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: normal;
            line-height: 1.6;
        }
        
        .hero-content .lead {
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: normal;
        }
        
        .hero-content .partner-badges {
            word-wrap: break-word;
            overflow-wrap: break-word;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        
        .hero-content .partner-badges span {
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: normal;
            display: inline-block;
        }
        
        .hero-content .btn {
            white-space: normal;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        .hero-content .btn span {
            white-space: normal;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
                line-height: 1.4;
            }
            
            .hero-content h1 .display-4 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1rem;
                line-height: 1.6;
            }
            
            .hero-content .lead {
                font-size: 1rem;
            }
            
            .hero-content .partner-badges {
                padding: 0.75rem;
                text-align: center;
                justify-content: center;
            }
            
            .hero-content .partner-badges img {
                max-width: 80px;
                height: auto;
            }
            
            .hero-content .partner-badges span {
                font-size: 0.9rem;
                display: block;
                margin-top: 0.5rem;
                width: 100%;
                text-align: center;
            }
            
            .hero-content .btn {
                font-size: 0.9rem;
                padding: 0.75rem 1.5rem;
                white-space: normal;
                width: 100%;
                margin-bottom: 0.5rem;
            }
            
            .hero-content .d-flex.gap-3 {
                flex-direction: column;
                gap: 0.5rem !important;
            }
        }
        
        @media (max-width: 576px) {
            .hero-content h1 {
                font-size: 1.75rem;
                line-height: 1.4;
            }
            
            .hero-content h1 .display-4 {
                font-size: 1.75rem;
            }
            
            .hero-content p {
                font-size: 0.95rem;
                line-height: 1.6;
            }
            
            .hero-content .lead {
                font-size: 0.95rem;
            }
            
            .hero-content .partner-badges {
                padding: 0.6rem;
                text-align: center;
            }
            
            .hero-content .partner-badges img {
                max-width: 70px;
                height: auto;
            }
            
            .hero-content .partner-badges span {
                font-size: 0.85rem;
                display: block;
                margin-top: 0.5rem;
            }
            
            .hero-content .btn {
                font-size: 0.85rem;
                padding: 0.6rem 1.2rem;
                white-space: normal;
                width: 100%;
                margin-bottom: 0.5rem;
            }
        }
        
        .footer-logo { height: 92px; width: auto; object-fit: contain; filter: drop-shadow(0 4px 10px rgba(0,0,0,0.15)) brightness(1.05) contrast(1.05); animation: footerFloat 6s ease-in-out infinite; }
        @keyframes footerFloat { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-6px); } }
        /* Brand colors and styling for social icons */
        .social-links { display: inline-flex; gap: 10px; }
        .social-links a { font-size: 1.25rem; display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 50%; background: rgba(255,255,255,0.08); color: inherit; transition: transform .2s ease, box-shadow .2s ease, opacity .2s ease; }
        .social-links a:hover { transform: translateY(-2px); box-shadow: 0 6px 14px rgba(0,0,0,0.25); opacity: 1; }
        .social-links a.instagram { color: #E1306C; }
        .social-links a.linkedin { color: #0A66C2; }
        .social-links a.facebook { color: #1877F2; }
        .social-links a i.fa-x-twitter { color: #ffffff; }
        .social-links a.x { background: #000000; color: #ffffff; }
        .social-links a.x svg { color: #ffffff; }
    </style>
    <!-- Footer -->
    <footer class="bg-white text-dark py-4">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Company Logo" class="footer-logo mb-2">
                        <span class="fw-bold">Software Makers Limited Company</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 All Rights Reserved</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('index') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('index-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('index-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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
                        <span>نحن نستخدم ملفات تعريف الارتباط (Cookies) لتحسين تجربتك على موقعنا. باستخدامك للموقع، فإنك توافق على استخدامنا لملفات تعريف الارتباط وفقاً لـ <a href="{{ route('terms') }}" class="terms-link">شروطنا وأحكامنا</a>.</span>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="cookies-actions">
                        <button id="acceptCookies" class="btn btn-primary btn-sm me-2">
                            <i class="fas fa-check me-1"></i>
                            موافق
                        </button>
                        <button id="declineCookies" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-times me-1"></i>
                            رفض
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Leaflet Map JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
    
    <!-- Fix dropdown menu in mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fix dropdown menu in mobile view
            const dropdownToggle = document.querySelector('.dropdown-toggle');
            const dropdownMenu = document.querySelector('.dropdown-menu');
            
            if (dropdownToggle && dropdownMenu) {
                dropdownToggle.addEventListener('click', function(e) {
                    if (window.innerWidth <= 991) {
                        e.preventDefault();
                        const isOpen = dropdownMenu.classList.contains('show');
                        
                        // Close all dropdowns first
                        document.querySelectorAll('.dropdown-menu').forEach(menu => {
                            menu.classList.remove('show');
                        });
                        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                            toggle.classList.remove('show');
                            toggle.setAttribute('aria-expanded', 'false');
                        });
                        
                        // Toggle current dropdown
                        if (!isOpen) {
                            dropdownMenu.classList.add('show');
                            dropdownToggle.classList.add('show');
                            dropdownToggle.setAttribute('aria-expanded', 'true');
                        }
                    }
                });
            }
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (window.innerWidth <= 991) {
                    if (!e.target.closest('.dropdown')) {
                        document.querySelectorAll('.dropdown-menu').forEach(menu => {
                            menu.classList.remove('show');
                        });
                        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                            toggle.classList.remove('show');
                            toggle.setAttribute('aria-expanded', 'false');
                        });
                    }
                }
            });
        });
    </script>
    
    <!-- Copy Protection Script -->
    <script>
        // Prevent text selection
        document.addEventListener('selectstart', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        // Prevent copy
        document.addEventListener('copy', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        // Prevent cut
        document.addEventListener('cut', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        // Prevent paste
        document.addEventListener('paste', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        // Prevent keyboard shortcuts
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

        // Prevent right-click
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
            return false;
        });

        // Prevent drag and drop
        document.addEventListener('dragstart', function(e) {
            e.preventDefault();
            return false;
        });
    </script>
    
</body>
</html>