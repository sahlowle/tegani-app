@extends('layouts.app')

@section('title', 'Health Information Systems | Software Makers Limited Company')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-hospital me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">Health Information Systems Services</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            Integrated technical solutions for hospitals and health centers
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-10 mx-auto">
                    <div class="card border-primary">
                        <div class="card-body p-4">
                            <h3 class="text-primary mb-3"><i class="fas fa-info-circle me-2"></i>About Health Information Systems Services</h3>
                            <p class="lead">
                                Over the years, Software Makers Limited Company has distinguished itself with extensive experience in designing and implementing health information technology solutions, with a proven track record of delivering innovative and reliable systems for hospitals, clinics, and health centers. We place the utmost importance on quality and accuracy in all project phases, from analysis and planning, through design and development, to implementation and ongoing technical support.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-10 mx-auto">
                    <h3 class="mb-4"><i class="fas fa-star me-2 text-primary"></i>Key Professional Features of the Company in Implementation:</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>Reliability and accuracy in implementation according to international best practices</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>Customized solutions for each health institution with precision</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>Strict security standards (HIPAA and GDPR)</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>24/7 continuous technical support</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>Proven experience with diverse hospitals and clinics</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>High system reliability and efficiency</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Diagram Section -->
    <section class="py-5">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 text-center mb-4">
                    <h2 class="section-title">Health Information Systems <span class="text-primary">Structure</span></h2>
                    <p class="section-subtitle">Comprehensive view of advanced health systems integration</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-xl-7 mx-auto" data-aos="zoom-in">
                    <div class="diagram-container shadow-lg rounded-4 overflow-hidden p-3 bg-white">
                        <img src="{{ asset('images/digram.jpeg') }}" alt="Health Information Systems Structure" class="img-fluid w-100" style="display: block; max-height: 600px; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services List -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Health Information Systems <span class="text-primary">Services</span></h2>
                    <p class="section-subtitle">Comprehensive solutions for developing and organizing the health sector</p>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-hospital text-primary"></i>
                                </div>
                                <h4>Hospital Management Systems (HMS)</h4>
                                <p>An integrated system for efficiently managing hospitals or health centers, including all administrative and medical operations</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-user-injured text-success"></i>
                                </div>
                                <h4>Patient and Appointment Management</h4>
                                <p>Patient registration, appointment scheduling, outpatient clinic management, and patient visit tracking</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-file-medical text-danger"></i>
                                </div>
                                <h4>Electronic Medical Records (EMR)</h4>
                                <p>Storing and updating each patient's medical records digitally, with easy access to data by the medical team</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-pills text-warning"></i>
                                </div>
                                <h4>Pharmacy and Medical Inventory Management</h4>
                                <p>Tracking medical inventory, dispensing medications, low stock alerts, and generating inventory reports</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-user-md text-info"></i>
                                </div>
                                <h4>Surgical Operations Management</h4>
                                <p>Recording surgeries, scheduling operating rooms, tracking surgical teams and equipment needed for each procedure</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-user-nurse text-secondary"></i>
                                </div>
                                <h4>Staff and Medical Schedule Management</h4>
                                <p>Organizing doctors' and nurses' schedules, tracking attendance, and automatically distributing daily tasks</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-chart-bar text-primary"></i>
                                </div>
                                <h4>Analytical and Administrative Reports</h4>
                                <p>Generating hospital performance reports, quality indicators, financial and administrative reports to support decision-making</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-database text-success"></i>
                                </div>
                                <h4>Health Information Management System (HIS)</h4>
                                <p>An integrated system for collecting and managing hospital medical and administrative data, linking different departments</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-clinic-medical text-danger"></i>
                                </div>
                                <h4>Clinic and Private Practice Systems</h4>
                                <p>Customized solutions for private clinics to manage appointments, track test results, manage patient files, and accounting</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-cloud text-info"></i>
                                </div>
                                <h4>Cloud Solutions for Health Data</h4>
                                <p>Secure cloud storage of medical data, encrypted backups, easy data recovery capabilities</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-heartbeat text-warning"></i>
                                </div>
                                <h4>Medical Device Integration</h4>
                                <p>Linking systems with diagnostic and laboratory equipment to automatically collect data and convert it into accurate reports</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-brain text-secondary"></i>
                                </div>
                                <h4>Analytics and Artificial Intelligence</h4>
                                <p>Using artificial intelligence to analyze health data, provide performance indicators, and predict patient flow</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-video text-primary"></i>
                                </div>
                                <h4>Telemedicine</h4>
                                <p>Enabling patients to receive medical consultations via secure video, monitoring their health remotely</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-mobile-alt text-success"></i>
                                </div>
                                <h4>Smart Health Applications</h4>
                                <p>Applications for patients and doctors to track appointments, test results, medication reminders, and monitor vital signs</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-shield-alt text-danger"></i>
                                </div>
                                <h4>Cybersecurity and Data Protection</h4>
                                <p>Protecting health data from breaches, encrypting information, access control, compliance with international standards</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-chalkboard-teacher text-info"></i>
                                </div>
                                <h4>Training and Technical Support</h4>
                                <p>Training programs for hospital and clinic staff, 24/7 technical support, regular updates, and technical consultations</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-cogs text-secondary"></i>
                                </div>
                                <h4>Additional Specialized Solutions</h4>
                                <p>Laboratory and test management, emergency management, health insurance and electronic billing management, healthcare quality management systems</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="row mt-5" data-aos="fade-up">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="card bg-primary text-white">
                        <div class="card-body p-5">
                            <h3 class="mb-3">Do you need a consultation for Health Information Systems solutions?</h3>
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
    <!-- AOS Animation -->
    <!-- Custom JS -->
    <!-- Copy Protection Script -->
@endsection
