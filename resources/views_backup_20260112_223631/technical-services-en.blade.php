<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الخدمات التقنية | شركة صناع البرمجيات المحدودة</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">

    <!-- Bootstrap RTL CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-cogs me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">الخدمات التقنية</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            حلول تقنية شاملة ومتطورة لجميع احتياجاتك التقنية
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <div class="service-overview">
                        <span class="service-badge">الخدمات التقنية</span>
                        <h2 class="section-title">حلول تقنية <span class="text-gradient">شاملة ومتطورة</span></h2>
                        <p class="section-subtitle">نقدم مجموعة واسعة من الخدمات التقنية المتخصصة لتلبية جميع احتياجاتك التقنية</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-grid">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-lightbulb"></i>
                                    </div>
                                    <h4>الاستشارات التقنية</h4>
                                    <p>استشارات متخصصة لمساعدتك في اتخاذ القرارات الصحيحة في عالم التكنولوجيا</p>
                                    <ul class="service-features">
                                        <li>تحليل الاحتياجات التقنية</li>
                                        <li>تقييم البنية التحتية</li>
                                        <li>خطط التحول الرقمي</li>
                                        <li>استشارات الأمن السيبراني</li>
                                    </ul>
                                    <a href="{{ route('consulting-services') }}" class="btn btn-outline-primary">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <h4>تطوير الأنظمة</h4>
                                    <p>تطوير أنظمة متكاملة تشمل المواقع والتطبيقات وأنظمة إدارة الموارد</p>
                                    <ul class="service-features">
                                        <li>المواقع الإلكترونية</li>
                                        <li>التطبيقات الجوالة</li>
                                        <li>أنظمة ERP</li>
                                        <li>أنظمة HIS</li>
                                    </ul>
                                    <a href="{{ route('system-development') }}" class="btn btn-outline-primary">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-tools"></i>
                                    </div>
                                    <h4>الصيانة والدعم</h4>
                                    <p>خدمات صيانة شاملة ودعم فني متخصص لضمان استمرارية عمل أنظمتك</p>
                                    <ul class="service-features">
                                        <li>الصيانة الوقائية</li>
                                        <li>الصيانة التصحيحية</li>
                                        <li>التحديثات والتطوير</li>
                                        <li>الدعم الفني 24/7</li>
                                    </ul>
                                    <a href="{{ route('maintenance-support') }}" class="btn btn-outline-primary">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <h4>التدريب التقني</h4>
                                    <p>برامج تدريبية متخصصة لتطوير مهاراتك التقنية وزيادة كفاءتك المهنية</p>
                                    <ul class="service-features">
                                        <li>تطوير البرمجيات</li>
                                        <li>تطوير التطبيقات الجوالة</li>
                                        <li>الأمن السيبراني</li>
                                        <li>الحوسبة السحابية</li>
                                    </ul>
                                    <a href="{{ route('technical-training') }}" class="btn btn-outline-primary">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <h4>الأمن السيبراني</h4>
                                    <p>حلول أمنية متطورة لحماية أنظمتك وبياناتك من التهديدات السيبرانية</p>
                                    <ul class="service-features">
                                        <li>تقييم الأمان</li>
                                        <li>حماية الشبكات</li>
                                        <li>إدارة الهجمات</li>
                                        <li>التدريب الأمني</li>
                                    </ul>
                                    <a href="index.html#contact" class="btn btn-outline-primary">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-cloud"></i>
                                    </div>
                                    <h4>الحلول السحابية</h4>
                                    <p>حلول سحابية متطورة لتحسين كفاءة أنظمتك وتقليل التكاليف</p>
                                    <ul class="service-features">
                                        <li>الهجرة السحابية</li>
                                        <li>إدارة البنية التحتية</li>
                                        <li>الحلول الهجينة</li>
                                        <li>النسخ الاحتياطية</li>
                                    </ul>
                                    <a href="index.html#contact" class="btn btn-outline-primary">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">لماذا تختار خدماتنا التقنية؟</h2>
                    <p class="section-subtitle">نتميز بتقديم حلول تقنية متطورة وخدمة عملاء متميزة</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h5>خبرة واسعة</h5>
                        <p>أكثر من 10 سنوات من الخبرة في مجال التكنولوجيا</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5>فريق متخصص</h5>
                        <p>فريق من الخبراء المتخصصين في مختلف المجالات التقنية</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>دعم مستمر</h5>
                        <p>دعم فني متاح على مدار الساعة لجميع عملائنا</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h5>ضمان الجودة</h5>
                        <p>نضمن جودة عالية في جميع خدماتنا مع ضمان استرداد المال</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <div class="cta-card">
                        <h3>هل تحتاج مساعدة في اختيار الخدمة المناسبة؟</h3>
                        <p>تواصل معنا اليوم للحصول على استشارة مجانية ومساعدتك في اختيار أفضل الحلول التقنية</p>
                        <a href="index.html#contact" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-phone me-2"></i>
                            احجز استشارة مجانية
                        </a>
                        <a href="tel:+966555883492" class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-phone me-2"></i>
                            اتصل بنا الآن
                        </a>
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
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Company Logo" class="footer-logo mb-2">
                        <span class="fw-bold">Software Makers Limited Company</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 All Rights Reserved</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('technical-services') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('technical-services-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('technical-services-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
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
