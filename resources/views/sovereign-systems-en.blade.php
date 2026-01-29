@extends('layouts.app')

@section('title', 'Sovereign Systems & Digital Transformation | Software Makers Limited Company')

@section('content')
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

            <!-- NOTE: Remaining systems (3 to 11) can be added here following the same structure if needed -->
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
                            <a href="{{ route('index-en') }}#contact" class="btn btn-light btn-lg">
                                Contact Us Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
