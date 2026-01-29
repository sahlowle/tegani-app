<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التدريب التقني | شركة صناع البرمجيات المحدودة</title>
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
                            <i class="fas fa-graduation-cap me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">التدريب التقني</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            برامج تدريبية متخصصة لتطوير مهاراتك التقنية وزيادة كفاءتك المهنية
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
                        <span class="service-badge">التدريب التقني</span>
                        <h2 class="section-title">برامج تدريبية <span class="text-gradient">متخصصة ومتطورة</span></h2>
                        <p class="section-subtitle">نقدم برامج تدريبية شاملة تغطي أحدث التقنيات وأفضل الممارسات في مجال التكنولوجيا</p>
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
                            <h3>ما هو التدريب التقني؟</h3>
                            <p class="lead">
                                التدريب التقني هو عملية تعليمية متخصصة تهدف إلى تطوير المهارات التقنية للموظفين والمهنيين 
                                في مجال التكنولوجيا. نحن نقدم برامج تدريبية شاملة تغطي أحدث التقنيات وأفضل الممارسات 
                                لضمان حصول المتدربين على المعرفة والمهارات اللازمة للنجاح في عالم التكنولوجيا المتطور.
                            </p>
                        </div>

                        <div class="training-programs">
                            <h3>برامجنا التدريبية</h3>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="training-card">
                                        <div class="training-icon">
                                            <i class="fas fa-code"></i>
                                        </div>
                                        <h5>تطوير البرمجيات</h5>
                                        <p>تعلم أساسيات ومتقدمات تطوير البرمجيات</p>
                                        <ul>
                                            <li>لغات البرمجة (Python, Java, C#)</li>
                                            <li>تطوير الويب (HTML, CSS, JavaScript)</li>
                                            <li>قواعد البيانات (MySQL, PostgreSQL)</li>
                                            <li>أطر العمل (React, Angular, Vue)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="training-card">
                                        <div class="training-icon">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div>
                                        <h5>تطوير التطبيقات الجوالة</h5>
                                        <p>تعلم تطوير التطبيقات للهواتف الذكية</p>
                                        <ul>
                                            <li>تطوير iOS (Swift)</li>
                                            <li>تطوير Android (Kotlin)</li>
                                            <li>التطوير المتقاطع (Flutter, React Native)</li>
                                            <li>تصميم واجهات المستخدم</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="training-card">
                                        <div class="training-icon">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <h5>الأمن السيبراني</h5>
                                        <p>تعلم حماية الأنظمة والشبكات من التهديدات</p>
                                        <ul>
                                            <li>أساسيات الأمن السيبراني</li>
                                            <li>تحليل التهديدات</li>
                                            <li>إدارة الهجمات الأمنية</li>
                                            <li>أدوات الحماية والمراقبة</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="training-card">
                                        <div class="training-icon">
                                            <i class="fas fa-cloud"></i>
                                        </div>
                                        <h5>الحوسبة السحابية</h5>
                                        <p>تعلم تقنيات الحوسبة السحابية وإدارتها</p>
                                        <ul>
                                            <li>Amazon Web Services (AWS)</li>
                                            <li>Microsoft Azure</li>
                                            <li>Google Cloud Platform</li>
                                            <li>إدارة الحاويات (Docker, Kubernetes)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="training-card">
                                        <div class="training-icon">
                                            <i class="fas fa-database"></i>
                                        </div>
                                        <h5>علوم البيانات</h5>
                                        <p>تعلم تحليل البيانات والذكاء الاصطناعي</p>
                                        <ul>
                                            <li>تحليل البيانات (Python, R)</li>
                                            <li>التعلم الآلي (Machine Learning)</li>
                                            <li>الذكاء الاصطناعي (AI)</li>
                                            <li>تصور البيانات</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="training-card">
                                        <div class="training-icon">
                                            <i class="fas fa-network-wired"></i>
                                        </div>
                                        <h5>إدارة الشبكات</h5>
                                        <p>تعلم إدارة وتصميم الشبكات الحاسوبية</p>
                                        <ul>
                                            <li>أساسيات الشبكات</li>
                                            <li>بروتوكولات الشبكة</li>
                                            <li>أجهزة الشبكة</li>
                                            <li>أمان الشبكات</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="training-methods">
                            <h3>طرق التدريب</h3>
                            <div class="methods-grid">
                                <div class="method-card">
                                    <div class="method-icon">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                    <h5>التدريب المباشر</h5>
                                    <p>جلسات تدريبية مباشرة مع مدربين متخصصين</p>
                                </div>
                                <div class="method-card">
                                    <div class="method-icon">
                                        <i class="fas fa-video"></i>
                                    </div>
                                    <h5>التدريب عن بُعد</h5>
                                    <p>جلسات تدريبية عبر الإنترنت مع تفاعل مباشر</p>
                                </div>
                                <div class="method-card">
                                    <div class="method-icon">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    <h5>التدريب الذاتي</h5>
                                    <p>دورات تدريبية مسجلة يمكن الوصول إليها في أي وقت</p>
                                </div>
                                <div class="method-card">
                                    <div class="method-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <h5>التدريب الجماعي</h5>
                                    <p>برامج تدريبية مخصصة للفرق والمؤسسات</p>
                                </div>
                            </div>
                        </div>

                        <div class="certification-section">
                            <h3>الشهادات المعتمدة</h3>
                            <div class="certification-info">
                                <p class="lead">
                                    نقدم شهادات معتمدة لجميع برامجنا التدريبية، معترف بها في سوق العمل وتمنح المتدربين 
                                    ميزة تنافسية في مجال التكنولوجيا.
                                </p>
                                <div class="certification-features">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="cert-feature">
                                                <i class="fas fa-certificate"></i>
                                                <h6>شهادات معتمدة</h6>
                                                <p>شهادات معترف بها دولياً</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="cert-feature">
                                                <i class="fas fa-award"></i>
                                                <h6>مستويات متعددة</h6>
                                                <p>من المبتدئ إلى المتقدم</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="cert-feature">
                                                <i class="fas fa-globe"></i>
                                                <h6>معترف بها عالمياً</h6>
                                                <p>معترف بها في سوق العمل</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="training-benefits">
                            <h3>فوائد التدريب معنا</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-user-tie"></i>
                                        <h6>مدربون متخصصون</h6>
                                        <p>فريق من الخبراء المتخصصين في مجالاتهم</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-book"></i>
                                        <h6>مناهج محدثة</h6>
                                        <p>مناهج تدريبية محدثة بأحدث التقنيات</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-hands-helping"></i>
                                        <h6>دعم مستمر</h6>
                                        <p>دعم فني ومتابعة مستمرة للمتدربين</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-briefcase"></i>
                                        <h6>فرص عمل</h6>
                                        <p>مساعدتك في العثور على فرص عمل مناسبة</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cta-section">
                            <div class="cta-card">
                                <h3>هل تريد تطوير مهاراتك التقنية؟</h3>
                                <p>انضم إلى برامجنا التدريبية المتخصصة وابدأ رحلتك نحو التميز التقني</p>
                                <a href="index.html#contact" class="btn btn-primary btn-lg">
                                    <i class="fas fa-graduation-cap me-2"></i>
                                    سجل الآن
                                </a>
                            </div>
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
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Software Makers Limited Company - SMLC Logo" class="footer-logo mb-2">
                        <span class="fw-bold">Software Makers Limited Company</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 All Rights Reserved</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('technical-training') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('technical-training-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('technical-training-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
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

