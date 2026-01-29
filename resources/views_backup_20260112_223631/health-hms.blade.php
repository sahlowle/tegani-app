<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظم إدارة المستشفيات HMS | شركة صناع البرمجيات</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.html#home" style="display: flex; align-items: center; text-decoration: none;">
                <div class="logo-container" style="position: relative; margin-left: 15px;">
                    <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="شعار شركة صناع البرمجيات" class="img-fluid" style="width: 80px; height: 80px; filter: brightness(1.1) contrast(1.1);">
                    
                </div>
                <div class="brand-text" style="display: flex; flex-direction: column; align-items: flex-start;">
                    <span class="fw-bold" style="font-size: 1.2rem; color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">شركة صناع البرمجيات المحدودة</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="تبديل القائمة">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#home">
                            <i class="fas fa-home me-1"></i>
                            الرئيسية
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#about">
                            <i class="fas fa-info-circle me-1"></i>
                            من نحن
                        </a>
                    </li>
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle active" href="index.html#services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-briefcase me-1"></i>
                            خدماتنا
                        </a>
                        <ul class="dropdown-menu dropdown-menu-mega">
                            <li class="dropdown-header">
                                <i class="fas fa-cogs me-2"></i>
                                الخدمات التقنية
                            </li>
                            <li><a class="dropdown-item" href="{{ route('consulting-services') }}">
                                <i class="fas fa-lightbulb me-2"></i>
                                الاستشارات التقنية
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('system-development') }}">
                                <i class="fas fa-code me-2"></i>
                                تطوير الأنظمة
                           	</a></li>
                            <li><a class="dropdown-item" href="{{ route('system-integration') }}">
                                <i class="fas fa-link me-2"></i>
                                تكامل الأنظمة
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('project-management') }}">
                                <i class="fas fa-project-diagram me-2"></i>
                                إدارة المشاريع التقنية
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('process-automation') }}">
                                <i class="fas fa-robot me-2"></i>
                                تحسين وأتمتة العمليات
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('ui-ux-design') }}">
                                <i class="fas fa-palette me-2"></i>
                                تصميم واجهات وتجربة المستخدم
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('maintenance-support') }}">
                                <i class="fas fa-tools me-2"></i>
                                خدمات الدعم الفني والصيانة
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="dropdown-header">
                                <i class="fas fa-chart-line me-2"></i>
                                خدمات الأعمال
                            </li>
                            <li><a class="dropdown-item" href="{{ route('marketing-services') }}">
                                <i class="fas fa-bullhorn me-2"></i>
                                خدمات التسويق
                            </a></li>
                            <li><a class="dropdown-item" href="index.html#odoo-services">
                                <i class="fas fa-cube me-2"></i>
                                خدمات Odoo ERP
                            </a></li>
                            <li><a class="dropdown-item" href="index.html#ai-support">
                                <i class="fas fa-brain me-2"></i>
                                نظام الدعم الذكي
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#presence">
                            <i class="fas fa-globe me-1"></i>
                            تواجدنا
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('careers') }}">
                            <i class="fas fa-user-tie me-1"></i>
                            الوظائف
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#contact">
                            <i class="fas fa-envelope me-1"></i>
                            اتصل بنا
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center ms-3 gap-2">
                    <a href="tel:+966555883492" class="btn btn-outline-light btn-sm d-none d-lg-inline-flex align-items-center">
                        <i class="fas fa-phone me-1"></i>
                        اتصال سريع
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
                            <i class="fas fa-hospital me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">نظم إدارة المستشفيات (HMS)</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            نظام متكامل لإدارة المستشفى أو المركز الصحي بكفاءة عالية
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Content -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <span class="service-badge">نظم إدارة المستشفيات HMS</span>
                    <h2 class="section-title">حلول متكاملة <span class="text-gradient">للرعاية الصحية</span></h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>المحتوى التفصيلي قيد الإعداد</strong>
                    </div>
                    <p class="lead mb-4">
                        نظام HMS (Hospital Management System) هو نظام متكامل يشمل جميع العمليات الإدارية والطبية في المستشفى أو المركز الصحي، مما يضمن كفاءة عالية في إدارة الموارد والخدمات الصحية.
                    </p>
                    
                    <div class="row mt-5">
                        <div class="col-md-6 mb-4">
                            <div class="card border-primary h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">
                                        <i class="fas fa-check-circle me-2"></i>المزايا الرئيسية
                                    </h5>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>إدارة شاملة للمستشفى</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>تكامل بين جميع الأقسام</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>تتبع دقيق للعمليات</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>تقارير مفصلة وشاملة</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card border-primary h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">
                                        <i class="fas fa-star me-2"></i>الفوائد
                                    </h5>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>تحسين كفاءة التشغيل</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>تقليل الأخطاء الطبية</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>توفير الوقت والجهد</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>زيادة رضا المرضى</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-5">
                        <a href="index.html#contact" class="btn btn-primary btn-lg">
                            <i class="fas fa-phone me-2"></i>تواصل معنا للاستفسار
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
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="شعار شركة صناع البرمجيات المحدودة - SMLC" class="footer-logo mb-2">
                        <span class="fw-bold">شركة صناع البرمجيات المحدودة</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 جميع الحقوق محفوظة</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('health-hms') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('health-hms-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('health-hms-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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

