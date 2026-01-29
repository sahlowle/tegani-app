@extends('layouts.app')

@section('title', 'Software Makers - SMLC')

@section('description', 'Software Makers Limited Company - Leading Saudi company in software development and advanced technical solutions using AI and modern technologies')

@section('content')
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
                     <form id="contact-form" class="contact-form" action="{{ route('contact-form-email') }}" method="POST" data-aos="fade-up">
                        @csrf
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
@endsection
