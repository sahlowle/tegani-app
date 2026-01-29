<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تطوير الأنظمة | شركة صناع البرمجيات المحدودة</title>
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
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.html#home" style="display: flex; align-items: center; text-decoration: none; direction: rtl;">
                <div class="logo-container" style="position: relative; margin-left: 15px;">
                    <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="شعار شركة صناع البرمجيات" class="img-fluid" style="width: 64px; height: 64px; filter: brightness(1.1) contrast(1.1);">
                </div>
                <div class="brand-text" style="display: flex; flex-direction: column; align-items: flex-start; direction: rtl;">
                    <span class="fw-bold" style="font-size: 1.05rem; color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">شركة صناع البرمجيات المحدودة</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="تبديل القائمة">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto align-items-center" style="gap: 0.15rem; flex-wrap: nowrap;">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index.html#home" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-home ms-1"></i>
                            الرئيسية
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index.html#about" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-info-circle ms-1"></i>
                            من نحن
                        </a>
                    </li>
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle position-relative" href="index.html#services" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-briefcase ms-1"></i>
                            خدماتنا
                        </a>
                        <ul class="dropdown-menu dropdown-menu-mega shadow-lg" style="border: none; border-radius: 12px; padding: 1rem; min-width: 280px; max-width: 100%; margin-top: 0.5rem;">
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-cogs ms-2"></i>
                                الخدمات التقنية
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('consulting-services') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-lightbulb ms-2 text-warning"></i>
                                الاستشارات التقنية
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded active" href="{{ route('system-development') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-code ms-2 text-info"></i>
                                تطوير الأنظمة
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-integration') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-link ms-2 text-success"></i>
                                تكامل الأنظمة
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('project-management') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-project-diagram ms-2 text-primary"></i>
                                إدارة المشاريع التقنية
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('process-automation') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-robot ms-2 text-danger"></i>
                                تحسين وأتمتة العمليات
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('ui-ux-design') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-palette ms-2" style="color: #e91e63;"></i>
                                تصميم واجهات وتجربة المستخدم
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('maintenance-support') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-tools ms-2 text-secondary"></i>
                                خدمات الدعم الفني والصيانة
                            </a></li>
                            <li><hr class="dropdown-divider my-3" style="opacity: 0.2;"></li>
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-chart-line ms-2"></i>
                                خدمات الأعمال
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('marketing-services') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-bullhorn ms-2 text-warning"></i>
                                خدمات التسويق
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index.html#odoo-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-cube ms-2 text-info"></i>
                                خدمات Odoo ERP
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index.html#ai-support" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-brain ms-2" style="color: #9c27b0;"></i>
                                نظام الدعم الذكي
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index.html#presence" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-globe ms-1"></i>
                            تواجدنا
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('careers') }}" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-user-tie ms-1"></i>
                            الوظائف
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index.html#contact" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-envelope ms-1"></i>
                            اتصل بنا
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center ms-2 gap-1 flex-wrap" style="flex-shrink: 0;">
                    <a href="{{ route('system-development') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem; background: rgba(0,0,0,0.2);" title="Arabic">
                        <img src="https://flagcdn.com/w20/sa.png" alt="علم السعودية" width="20" height="15" style="border-radius: 3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('system-development-en') }}" class="btn btn-outline-light btn-sm d-flex alignments-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="British Flag" width="20" height="15" style="border-radius: 3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('system-development-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="Français">
                        <img src="https://flagcdn.com/w20/fr.png" alt="Drapeau de la France" width="20" height="15" style="border-radius: 3px;">
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
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">تطوير الأنظمة</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            نطور أنظمة متكاملة وشاملة تشمل المواقع الإلكترونية والتطبيقات الجوالة وأنظمة إدارة الموارد المؤسسية
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
                        <span class="service-badge">تطوير الأنظمة</span>
                        <h2 class="section-title">حلول تقنية <span class="text-gradient">متطورة ومتكاملة</span></h2>
                        <p class="section-subtitle">نستخدم أحدث التقنيات وأفضل الممارسات لضمان جودة عالية وأداء ممتاز</p>
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
                            <h3>ما هو تطوير الأنظمة؟</h3>
                            <p class="lead">
                                تطوير الأنظمة هو عملية إنشاء وتطوير البرمجيات والتطبيقات التي تلبي احتياجات المؤسسات والأفراد. 
                                نحن نطور أنظمة متكاملة تشمل المواقع الإلكترونية وتطبيقات الجوال وأنظمة إدارة الموارد المؤسسية (ERP) 
                                وأنظمة إدارة المستشفيات (HIS) باستخدام أحدث التقنيات وأفضل الممارسات.
                            </p>
                        </div>

                        <div class="development-types">
                            <h3>أنواع الأنظمة التي نطورها</h3>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="development-card">
                                        <div class="dev-icon">
                                            <i class="fas fa-globe"></i>
                                        </div>
                                        <h5>المواقع الإلكترونية</h5>
                                        <p>مواقع تفاعلية متجاوبة مع جميع الأجهزة ومحسنة لمحركات البحث</p>
                                        <ul>
                                            <li>مواقع الشركات</li>
                                            <li>المتاجر الإلكترونية</li>
                                            <li>المواقع التعليمية</li>
                                            <li>المنصات التفاعلية</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="development-card">
                                        <div class="dev-icon">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div>
                                        <h5> تطبيقات الجوال</h5>
                                        <p>تطبيقات جوالة متطورة لـ iOS و Android مع واجهات سهلة الاستخدام</p>
                                        <ul>
                                            <li>تطبيقات الأعمال</li>
                                            <li>تطبيقات الخدمات</li>
                                            <li>تطبيقات التعليم</li>
                                            <li>تطبيقات الترفيه</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="development-card">
                                        <div class="dev-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <h5>أنظمة ERP</h5>
                                        <p>أنظمة إدارة الموارد المؤسسية الشاملة لإدارة جميع عمليات الشركة</p>
                                        <ul>
                                            <li>إدارة المبيعات</li>
                                            <li>إدارة المشتريات</li>
                                            <li>إدارة الموارد البشرية</li>
                                            <li>إدارة المحاسبة</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="development-card">
                                        <div class="dev-icon">
                                            <i class="fas fa-hospital"></i>
                                        </div>
                                        <h5>أنظمة HIS</h5>
                                        <p>أنظمة إدارة المستشفيات المتخصصة لإدارة العمليات الطبية</p>
                                        <ul>
                                            <li>إدارة المرضى</li>
                                            <li>إدارة المواعيد</li>
                                            <li>إدارة السجلات الطبية</li>
                                            <li>إدارة الصيدلية</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="technologies-section">
                            <h3>التقنيات المستخدمة</h3>
                            <div class="tech-categories">
                                <div class="tech-category">
                                    <h5>Frontend Development</h5>
                                    <div class="tech-tags">
                                        <span class="tech-tag">React</span>
                                        <span class="tech-tag">Vue.js</span>
                                        <span class="tech-tag">Angular</span>
                                        <span class="tech-tag">HTML5</span>
                                        <span class="tech-tag">CSS3</span>
                                        <span class="tech-tag">JavaScript</span>
                                    </div>
                                </div>
                                <div class="tech-category">
                                    <h5>Backend Development</h5>
                                    <div class="tech-tags">
                                        <span class="tech-tag">Node.js</span>
                                        <span class="tech-tag">Python</span>
                                        <span class="tech-tag">PHP</span>
                                        <span class="tech-tag">Java</span>
                                        <span class="tech-tag">C#</span>
                                        <span class="tech-tag">Go</span>
                                    </div>
                                </div>
                                <div class="tech-category">
                                    <h5>Databases</h5>
                                    <div class="tech-tags">
                                        <span class="tech-tag">MySQL</span>
                                        <span class="tech-tag">PostgreSQL</span>
                                        <span class="tech-tag">MongoDB</span>
                                        <span class="tech-tag">Redis</span>
                                        <span class="tech-tag">Oracle</span>
                                        <span class="tech-tag">SQL Server</span>
                                    </div>
                                </div>
                                <div class="tech-category">
                                    <h5>Cloud & DevOps</h5>
                                    <div class="tech-tags">
                                        <span class="tech-tag">AWS</span>
                                        <span class="tech-tag">Azure</span>
                                        <span class="tech-tag">Google Cloud</span>
                                        <span class="tech-tag">Docker</span>
                                        <span class="tech-tag">Kubernetes</span>
                                        <span class="tech-tag">CI/CD</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="development-process">
                            <h3>عملية التطوير</h3>
                            <div class="process-steps">
                                <div class="process-step">
                                    <div class="step-number">1</div>
                                    <div class="step-content">
                                        <h5>التحليل والتخطيط</h5>
                                        <p>فهم المتطلبات وتحليل الاحتياجات وتصميم هيكل النظام</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">2</div>
                                    <div class="step-content">
                                        <h5>التصميم</h5>
                                        <p>تصميم واجهات المستخدم وتصميم قاعدة البيانات</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">3</div>
                                    <div class="step-content">
                                        <h5>التطوير</h5>
                                        <p>كتابة الكود وتطوير الوحدات المختلفة للنظام</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">4</div>
                                    <div class="step-content">
                                        <h5>الاختبار</h5>
                                        <p>اختبار النظام والتأكد من جودة الأداء والأمان</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">5</div>
                                    <div class="step-content">
                                        <h5>النشر والدعم</h5>
                                        <p>نشر النظام وتقديم الدعم والتدريب المستمر</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cta-section">
                            <div class="cta-card">
                                <h3>هل تحتاج تطوير نظام جديد؟</h3>
                                <p>تواصل معنا اليوم لمناقشة متطلباتك والحصول على عرض سعر مجاني</p>
                                <a href="index.html#contact" class="btn btn-primary btn-lg">
                                    <i class="fas fa-code me-2"></i>
                                    ابدأ مشروعك الآن
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
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="شعار شركة صناع البرمجيات المحدودة - SMLC" class="footer-logo mb-2">
                        <span class="fw-bold">شركة صناع البرمجيات المحدودة</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 جميع الحقوق محفوظة</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('system-development') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('system-development-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('system-development-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
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
    
    <!-- حماية منع النسخ -->
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
