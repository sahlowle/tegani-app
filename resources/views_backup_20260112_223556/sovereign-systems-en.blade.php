<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sovereign Systems & Digital Transformation | Software Makers Limited Company</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script>
        // STRICT: Check login status before loading the page - NO DIRECT ACCESS ALLOWED
        (function() {
            // Prevent any direct access - must go through login page first
            const isLoggedIn = localStorage.getItem('isLoggedIn');
            const username = localStorage.getItem('username');
            
            // Always redirect to login if not properly authenticated
            if (isLoggedIn !== 'true' || !username || username !== 'smlc-sa') {
                // Clear any invalid login data
                localStorage.removeItem('isLoggedIn');
                localStorage.removeItem('username');
                // Force redirect to login page
                window.location.replace('login-en.html?redirect=sovereign-systems-en.html');
                return;
            }
        })();
    </script>
    <style>
        .footer-logo { 
            height: 92px !important; 
            width: auto !important; 
            object-fit: contain !important; 
            filter: drop-shadow(0 4px 10px rgba(0,0,0,0.15)) brightness(1.05) contrast(1.05) !important; 
            animation: footerFloat 6s ease-in-out infinite !important;
            display: block !important;
            max-width: 200px;
        }
        @keyframes footerFloat { 
            0%, 100% { transform: translateY(0); } 
            50% { transform: translateY(-6px); } 
        }
    </style>
</head>
<body>
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index-en.html#home" style="display: flex; align-items: center; text-decoration: none; direction: ltr;">
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
                <ul class="navbar-nav me-auto align-items-center" style="gap: 0.15rem; flex-wrap: nowrap;">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-en.html#home" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-home me-1"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-en.html#about" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-info-circle me-1"></i>
                            About Us
                        </a>
                    </li>
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle position-relative" href="index-en.html#services" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-briefcase me-1"></i>
                            Our Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-mega shadow-lg" style="border: none; border-radius: 12px; padding: 1rem; min-width: 280px; max-width: 100%; margin-top: 0.5rem;">
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-cogs me-2"></i>
                                Technical Services
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('consulting-services-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-lightbulb me-2 text-warning"></i>
                                Technical Consulting
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-development-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-code me-2 text-info"></i>
                                System Development
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-integration-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-link me-2 text-success"></i>
                                System Integration
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('project-management-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-project-diagram me-2 text-primary"></i>
                                Technical Project Management
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('process-automation-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-robot me-2 text-danger"></i>
                                Process Optimization & Automation
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('ui-ux-design-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-palette me-2" style="color: #e91e63;"></i>
                                UI/UX Design
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('maintenance-support-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-tools me-2 text-secondary"></i>
                                Technical Support & Maintenance
                            </a></li>
                            <li><hr class="dropdown-divider my-3" style="opacity: 0.2;"></li>
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-chart-line me-2"></i>
                                Business Services
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('marketing-services-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-bullhorn me-2 text-warning"></i>
                                Marketing Services
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index-en.html#odoo-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-cube me-2 text-info"></i>
                                Odoo ERP Services
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index-en.html#ai-support" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-brain me-2" style="color: #9c27b0;"></i>
                                AI Support System
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-en.html#presence" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
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
                        <a class="nav-link position-relative" href="index-en.html#contact" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
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
    <section class="hero-section" style="padding-top: 100px; position: relative; overflow: hidden; background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 50%, #2d3561 100%);">
        <!-- Biometric background -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: 
            radial-gradient(circle at 20% 30%, rgba(0, 212, 255, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(102, 126, 234, 0.15) 0%, transparent 50%),
            linear-gradient(45deg, transparent 30%, rgba(0, 212, 255, 0.05) 50%, transparent 70%),
            linear-gradient(rgba(0, 212, 255, 0.08) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 212, 255, 0.08) 1px, transparent 1px);
            background-size: 100% 100%, 100% 100%, 100% 100%, 60px 60px, 60px 60px;
            opacity: 0.6;
            z-index: 0;"></div>
        
        <!-- Floating biometric icons -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1; pointer-events: none;">
            <i class="fas fa-fingerprint" style="position: absolute; top: 15%; left: 10%; font-size: 120px; color: rgba(0, 212, 255, 0.1); animation: float 6s ease-in-out infinite;"></i>
            <i class="fas fa-eye" style="position: absolute; top: 25%; right: 15%; font-size: 100px; color: rgba(102, 126, 234, 0.1); animation: float 8s ease-in-out infinite 1s;"></i>
            <i class="fas fa-shield-alt" style="position: absolute; bottom: 20%; left: 20%; font-size: 110px; color: rgba(0, 212, 255, 0.08); animation: float 7s ease-in-out infinite 2s;"></i>
            <i class="fas fa-lock" style="position: absolute; bottom: 15%; right: 10%; font-size: 90px; color: rgba(102, 126, 234, 0.1); animation: float 9s ease-in-out infinite 0.5s;"></i>
        </div>
        
        <!-- Dark overlay -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(rgba(15,23,42,0.75), rgba(15,23,42,0.85)); z-index: 2;"></div>
        
        <div class="container" style="position: relative; z-index: 3;">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <!-- Large fingerprint icon at the top -->
                        <div style="margin-bottom: 2rem; display: inline-block; position: relative;">
                            <div style="width: 150px; height: 150px; margin: 0 auto; position: relative; display: flex; align-items: center; justify-content: center;">
                                <div style="position: absolute; width: 100%; height: 100%; border: 3px solid rgba(0, 212, 255, 0.4); border-radius: 50%; animation: scanRing 3s ease-in-out infinite;"></div>
                                <div style="position: absolute; width: 100%; height: 100%; border: 3px solid rgba(102, 126, 234, 0.4); border-radius: 50%; animation: scanRing 3s ease-in-out infinite 1s;"></div>
                                <i class="fas fa-fingerprint" style="font-size: 80px; color: #00d4ff; text-shadow: 0 0 30px rgba(0, 212, 255, 0.8); position: relative; z-index: 1; animation: fingerprintPulse 2s ease-in-out infinite;"></i>
                            </div>
                        </div>
                        
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-shield-alt me-3" style="color: #00d4ff;"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">Biometric and Sovereign Systems</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            Advanced security solutions for biometric verification and sovereign systems
                        </p>
                        <div style="display: inline-flex; align-items: center; gap: 1rem; margin-top: 1.5rem; flex-wrap: wrap; justify-content: center;">
                            <div style="display: flex; align-items: center; gap: 0.5rem; background: rgba(0, 212, 255, 0.1); padding: 0.5rem 1rem; border-radius: 20px; border: 1px solid rgba(0, 212, 255, 0.3);">
                                <i class="fas fa-fingerprint" style="color: #00d4ff;"></i>
                                <span style="color: #00d4ff; font-weight: 600;">Biometric Verification</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 0.5rem; background: rgba(102, 126, 234, 0.1); padding: 0.5rem 1rem; border-radius: 20px; border: 1px solid rgba(102, 126, 234, 0.3);">
                                <i class="fas fa-shield-alt" style="color: #667eea;"></i>
                                <span style="color: #667eea; font-weight: 600;">Cybersecurity</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 0.5rem; background: rgba(0, 212, 255, 0.1); padding: 0.5rem 1rem; border-radius: 20px; border: 1px solid rgba(0, 212, 255, 0.3);">
                                <i class="fas fa-lock" style="color: #00d4ff;"></i>
                                <span style="color: #00d4ff; font-weight: 600;">Advanced Encryption</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <style>
            @keyframes float {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(5deg); }
            }
            @keyframes scanRing {
                0% { transform: scale(0.8); opacity: 1; }
                100% { transform: scale(1.5); opacity: 0; }
            }
            @keyframes fingerprintPulse {
                0%, 100% { transform: scale(1); filter: brightness(1); }
                50% { transform: scale(1.1); filter: brightness(1.3); }
            }
        </style>
    </section>

    <!-- Introduction Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-10 mx-auto">
                    <div class="card border-primary shadow-lg">
                        <div class="card-body p-5">
                            <h3 class="text-primary mb-4"><i class="fas fa-info-circle me-2"></i>Overview</h3>
                            <p class="lead" style="line-height: 2;">
                                Software Makers Limited Company has solid capabilities and advanced expertise in developing, implementing, and operating national and sovereign systems, according to the highest internationally approved technical and regulatory standards. The company has established its position as a trusted executive entity in major government projects, thanks to its integrated system of expertise, competencies, and specialized cadres.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Cards -->
    <section class="py-4">
        <div class="container">
            <div class="row g-4" data-aos="fade-up">
                <div class="col-md-6 col-lg-4">
                    <a href="#core-capabilities" class="text-decoration-none text-reset">
                        <div class="feature-card enhanced h-100">
                            <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                            <h4>Core Company Capabilities</h4>
                            <p>Design and development of sovereign and digital systems according to international standards.</p>
                            <div class="feature-highlight"></div>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <a href="#specialized-teams" class="text-decoration-none text-reset">
                        <div class="feature-card enhanced h-100">
                            <div class="feature-icon"><i class="fas fa-users-cog"></i></div>
                            <h4>Specialized Technical and Operational Teams</h4>
                            <p>Cybersecurity experts, government integration, sovereign platforms, and 24/7 operations centers.</p>
                            <div class="feature-highlight"></div>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-12 col-lg-4">
                    <a href="#systems-services" class="text-decoration-none text-reset">
                        <div class="feature-card enhanced h-100">
                            <div class="feature-icon"><i class="fas fa-layer-group"></i></div>
                            <h4>Systems and Services</h4>
                            <p>A package of sovereign systems including national identity, electronic passport, borders, and taxes.</p>
                            <div class="feature-highlight"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Capabilities Section -->
    <section id="core-capabilities" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-12">
                    <h2 class="section-title text-center mb-5"><span class="text-primary">Core Company Capabilities Include:</span></h2>
                    
                    <div class="row mb-4" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body p-4">
                                    <h4 class="text-primary mb-3"><i class="fas fa-cogs me-2"></i>Design and Development of National Sovereign and Digital Systems Including:</h4>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>National Identity and Civil Registry Systems</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Multi-layer Biometric Systems</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Electronic Passport Systems and Smart Border Gates</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Security, Justice, and National Verification Systems</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Revenue Systems, Digital Government, and Government Entity Integration</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <h4 class="text-primary mb-3"><i class="fas fa-certificate me-2"></i>Full Compliance with International Standards in:</h4>
                                    <div class="row g-3">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-shield-alt text-success me-2 mt-1"></i>
                                                <span>Cybersecurity</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-fingerprint text-success me-2 mt-1"></i>
                                                <span>Biometrics</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-database text-success me-2 mt-1"></i>
                                                <span>Sovereign Data Management</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-building text-success me-2 mt-1"></i>
                                                <span>Government Digital Architecture</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specialized Teams Section -->
    <section id="specialized-teams" class="py-5">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-12">
                    <h2 class="section-title text-center mb-5"><span class="text-primary">Specialized Technical and Operational Teams Include:</span></h2>
                    
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card border-primary h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="fas fa-user-shield fa-3x text-primary"></i>
                                    </div>
                                    <h5>Cybersecurity and Data Protection Experts</h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="card border-primary h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="fas fa-server fa-3x text-primary"></i>
                                    </div>
                                    <h5>Advanced Sovereign Platform Engineers</h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="card border-primary h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="fas fa-network-wired fa-3x text-primary"></i>
                                    </div>
                                    <h5>Government System Integration Experts (Gov-Integration)</h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="card border-primary h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="fas fa-headset fa-3x text-primary"></i>
                                    </div>
                                    <h5>24/7 Operations and Monitoring Centers (NOC & SOC)</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="card border-0 shadow-sm bg-light">
                                <div class="card-body p-4">
                                    <h4 class="text-primary mb-3"><i class="fas fa-tasks me-2"></i>Established Implementation Methodologies Ensuring Highest Levels of Quality and Continuity, Including:</h4>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Government Project Management According to International Methodologies</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Business Continuity Plans and Disaster Recovery (BCP/DR)</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Knowledge Transfer and National Capacity Building</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>Long-term Support, Operations, and Continuous System Development</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Systems and Services Section -->
    <section id="systems-services" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-12">
                    <h2 class="section-title text-center mb-5"><span class="text-primary">Systems and Services:</span></h2>
                </div>
            </div>

            <!-- System 1 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-fingerprint me-2"></i>1- National Biometric Registration Service</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Objective:</h5>
                            <p class="lead mb-4">Creating a unified national civil registry supported by biometrics (fingerprints + face) with a unique national identity number for each citizen and resident.</p>
                            
                            <h5 class="text-primary mb-3">Core Functions:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-database text-primary me-2 mt-1"></i>
                                        <span>Central biometric identity database</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-ban text-primary me-2 mt-1"></i>
                                        <span>1:N deduplication engine</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-id-card text-primary me-2 mt-1"></i>
                                        <span>Automatic national identity number issuance</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-check-double text-primary me-2 mt-1"></i>
                                        <span>Data auditing and verification before issuance</span>
                                    </div>
                                </div>
                            </div>
                            
                            <h5 class="text-primary mt-4 mb-3">Smart Cards with Standards:</h5>
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-qrcode text-success me-2 mt-1"></i>
                                        <span>Machine Readable Zone MRZ</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-wifi text-success me-2 mt-1"></i>
                                        <span>NFC chip</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-barcode text-success me-2 mt-1"></i>
                                        <span>Unique barcode</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-star text-success me-2 mt-1"></i>
                                        <span>Security hologram layer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 2 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-users me-2"></i>2- Civil Affairs – Comprehensive Services</h4>
                        </div>
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-user-circle text-primary me-2 mt-1"></i>
                                        <span>My Data Service</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-calendar-check text-primary me-2 mt-1"></i>
                                        <span>Appointment Booking</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-baby text-primary me-2 mt-1"></i>
                                        <span>Adding Births and Linking with Hospitals</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-id-badge text-primary me-2 mt-1"></i>
                                        <span>Identity Card Issuance</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-map-marker-alt text-primary me-2 mt-1"></i>
                                        <span>National Address Management</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-user-plus text-primary me-2 mt-1"></i>
                                        <span>Adding Dependents</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-home text-primary me-2 mt-1"></i>
                                        <span>Family Registry Issuance</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-heart text-primary me-2 mt-1"></i>
                                        <span>Marriage, Divorce, and Death Registration</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-certificate text-primary me-2 mt-1"></i>
                                        <span>Electronic Certificate Issuance</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-star text-primary me-2 mt-1"></i>
                                        <span>Government Service Evaluation Service</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 3 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-passport me-2"></i>3- Electronic Passport System e-Passport</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Core Functions:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-file-alt text-primary me-2 mt-1"></i>
                                        <span>Electronic application submission</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-shield-alt text-primary me-2 mt-1"></i>
                                        <span>Biometric security verification</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-globe text-primary me-2 mt-1"></i>
                                        <span>Compliance with ICAO international standards</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-fingerprint text-primary me-2 mt-1"></i>
                                        <span>Face + fingerprints + electronic signature</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-microchip text-primary me-2 mt-1"></i>
                                        <span>Encrypted smart chip and digital signature</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 4 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-plane-departure me-2"></i>4- Immigration and Border Management System</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Core Functions:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-stamp text-primary me-2 mt-1"></i>
                                        <span>Visa and Permit Management</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-door-open text-primary me-2 mt-1"></i>
                                        <span>Self-service Electronic ABC e-Gates</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-list-alt text-primary me-2 mt-1"></i>
                                        <span>Integration with National and International Watchlists</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-search text-primary me-2 mt-1"></i>
                                        <span>API/PNR Passenger Data Reading and Analysis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 5 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-gavel me-2"></i>5- Security, Forensics, and Criminal Records System</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Core Functions:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-database text-primary me-2 mt-1"></i>
                                        <span>Central criminal records database</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-fingerprint text-primary me-2 mt-1"></i>
                                        <span>AFIS fingerprint recognition system</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-folder-open text-primary me-2 mt-1"></i>
                                        <span>Case and Evidence Management System</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 6 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-money-bill-wave me-2"></i>6- Tax and Revenue System Integration</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Main Functions:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-link text-primary me-2 mt-1"></i>
                                        <span>Linking National Identity with Tax System</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                        <span>Automatic Identity Verification via NIN + Biometric Data</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-sign-in-alt text-primary me-2 mt-1"></i>
                                        <span>Unified Login for Tax Services</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 7 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-gun me-2"></i>7- Weapons and Licensing System</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Main Functions:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-user-check text-primary me-2 mt-1"></i>
                                        <span>Background Security Check</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-fingerprint text-primary me-2 mt-1"></i>
                                        <span>Ballistic Fingerprint Database</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-search-location text-primary me-2 mt-1"></i>
                                        <span>Tracking Lost and Seized Weapons</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 8 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-chart-line me-2"></i>8- Analysis, Auditing, and Reporting Unit</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Main Functions:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-tachometer-alt text-primary me-2 mt-1"></i>
                                        <span>Real-time SLA Dashboard</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-robot text-primary me-2 mt-1"></i>
                                        <span>AI-powered Fraud Detection System</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-warehouse text-primary me-2 mt-1"></i>
                                        <span>Data Warehouse + BI</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 9 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-network-wired me-2"></i>9- Government Integration Gateway</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Main Functions:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-plug text-primary me-2 mt-1"></i>
                                        <span>Centralized API Management</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-file-contract text-primary me-2 mt-1"></i>
                                        <span>Unified Protocols</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-code text-primary me-2 mt-1"></i>
                                        <span>Developer Environment + Sandbox</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 10 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-store me-2"></i>10- Ministry of Commerce</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Main Functions:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-building text-primary me-2 mt-1"></i>
                                        <span>Company Registration and Licensing</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-file-signature text-primary me-2 mt-1"></i>
                                        <span>Digital Records and Signatures</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-eye text-primary me-2 mt-1"></i>
                                        <span>Market Monitoring and Linking Violations with Revenue</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System 11 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-coins me-2"></i>11- Ministry of Finance</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">Main Functions:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-wallet text-primary me-2 mt-1"></i>
                                        <span>Unified Government Budget and Payment Management System</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-university text-primary me-2 mt-1"></i>
                                        <span>Financial and Banking Integration</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-chart-pie text-primary me-2 mt-1"></i>
                                        <span>Financial Transparency + Real-time Reports + IPSAS</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="card bg-primary text-white shadow-lg">
                        <div class="card-body p-5">
                            <h3 class="mb-3">Do you need a consultation on Sovereign Systems and Digital Transformation?</h3>
                            <p class="lead mb-4">Contact us today for a free consultation and assessment of your needs</p>
                            <a href="index-en.html#contact" class="btn btn-light btn-lg">
                                Contact Us Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-dark py-4">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Company Logo" class="footer-logo mb-2" style="height: 92px; width: auto; max-width: 200px; object-fit: contain; display: block; visibility: visible; opacity: 1;">
                        <span class="fw-bold">Software Makers Limited Company</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 All Rights Reserved</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('sovereign-systems') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('sovereign-systems-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('sovereign-systems-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        // STRICT: Additional check for login status when page is fully loaded
        window.addEventListener('DOMContentLoaded', function() {
            const isLoggedIn = localStorage.getItem('isLoggedIn');
            const username = localStorage.getItem('username');
            
            // Double check authentication - must be logged in with correct username
            if (isLoggedIn !== 'true' || !username || username !== 'smlc-sa') {
                // Clear invalid data and redirect
                localStorage.removeItem('isLoggedIn');
                localStorage.removeItem('username');
                window.location.replace('login-en.html?redirect=sovereign-systems-en.html');
                return;
            }
        });
        
        // STRICT: Check again when page is fully loaded
        window.addEventListener('load', function() {
            const isLoggedIn = localStorage.getItem('isLoggedIn');
            const username = localStorage.getItem('username');
            
            // Final verification before showing content
            if (isLoggedIn !== 'true' || !username || username !== 'smlc-sa') {
                localStorage.removeItem('isLoggedIn');
                localStorage.removeItem('username');
                window.location.replace('login-en.html?redirect=sovereign-systems-en.html');
                return;
            }
        });
        
        // Check when localStorage changes (in case of logout from another window)
        window.addEventListener('storage', function(e) {
            if (e.key === 'isLoggedIn' && e.newValue !== 'true') {
                localStorage.removeItem('isLoggedIn');
                localStorage.removeItem('username');
                window.location.replace('login-en.html?redirect=sovereign-systems-en.html');
            }
        });
        
        // Prevent back button from bypassing login
        window.addEventListener('pageshow', function(event) {
            if (event.persisted) {
                const isLoggedIn = localStorage.getItem('isLoggedIn');
                const username = localStorage.getItem('username');
                if (isLoggedIn !== 'true' || !username || username !== 'smlc-sa') {
                    localStorage.removeItem('isLoggedIn');
                    localStorage.removeItem('username');
                    window.location.replace('login-en.html?redirect=sovereign-systems-en.html');
                }
            }
        });
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

