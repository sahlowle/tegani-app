<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصيانة والدعم | شركة صناع البرمجيات المحدودة</title>
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
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-development') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
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
                            <li><a class="dropdown-item px-3 py-2 rounded active" href="{{ route('maintenance-support') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-tools ms-2 text-secondary"></i>
                                خدمات الدعم الفني والصيانة
                            </a></li>
                            <li><hr class="dropdown-divider my-3" style="opacity: 0.2%;"></li>
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
                <div class="d-flex align-items-center ms-2 gap-1 flex-wrap" style="flex-shrink: 0%;">
                    <a href="{{ route('maintenance-support') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem; background: rgba(0,0,0,0.2);" title="Arabic">
                        <img src="https://flagcdn.com/w20/sa.png" alt="علم السعودية" width="20" height="15" style="border-radius: 3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('maintenance-support-en') }}" class="btn btn-outline-light btn-sm d-flex alignments-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="British Flag" width="20" height="15" style="border-radius: 3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('maintenance-support-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="Français">
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
                            <i class="fas fa-tools me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">الصيانة والدعم</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            نقدم خدمات صيانة شاملة ودعم فني متخصص لضمان استمرارية عمل أنظمتك بكفاءة عالية
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
                        <span class="service-badge">الصيانة والدعم</span>
                        <h2 class="section-title">دعم فني <span class="text-gradient">مستمر وموثوق</span></h2>
                        <p class="section-subtitle">نضمن استمرارية عمل أنظمتك مع خدمات صيانة شاملة ودعم فني متاح على مدار الساعة</p>
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
                            <h3>ما هي خدمات الصيانة والدعم؟</h3>
                            <p class="lead">
                                خدمات الصيانة والدعم هي مجموعة من الخدمات التقنية المستمرة التي نقدمها لضمان استمرارية عمل أنظمتك 
                                بكفاءة عالية. تشمل هذه الخدمات الصيانة الوقائية والتحديثات الدورية وإصلاح الأعطال والدعم الفني 
                                المتخصص لجميع أنواع الأنظمة والبرمجيات.
                            </p>
                        </div>

                        <div class="maintenance-types">
                            <h3>أنواع خدمات الصيانة</h3>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="maintenance-card">
                                        <div class="maintenance-icon">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <h5>الصيانة الوقائية</h5>
                                        <p>فحص دوري شامل لجميع مكونات النظام لتجنب الأعطال قبل حدوثها</p>
                                        <ul>
                                            <li>فحص الأمان والحماية</li>
                                            <li>تحديث البرمجيات</li>
                                            <li>فحص الأداء والسرعة</li>
                                            <li>نسخ احتياطية دورية</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="maintenance-card">
                                        <div class="maintenance-icon">
                                            <i class="fas fa-wrench"></i>
                                        </div>
                                        <h5>الصيانة التصحيحية</h5>
                                        <p>إصلاح الأعطال والمشاكل التقنية فور اكتشافها</p>
                                        <ul>
                                            <li>تشخيص المشاكل</li>
                                            <li>إصلاح الأخطاء</li>
                                            <li>استعادة البيانات</li>
                                            <li>تحسين الأداء</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="maintenance-card">
                                        <div class="maintenance-icon">
                                            <i class="fas fa-sync-alt"></i>
                                        </div>
                                        <h5>التحديثات والتطوير</h5>
                                        <p>تحديث الأنظمة وإضافة ميزات جديدة لتحسين الأداء</p>
                                        <ul>
                                            <li>تحديث البرمجيات</li>
                                            <li>إضافة ميزات جديدة</li>
                                            <li>تحسين الواجهات</li>
                                            <li>تطوير الوظائف</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="maintenance-card">
                                        <div class="maintenance-icon">
                                            <i class="fas fa-headset"></i>
                                        </div>
                                        <h5>الدعم الفني</h5>
                                        <p>دعم فني متخصص متاح على مدار الساعة لحل المشاكل</p>
                                        <ul>
                                            <li>دعم فوري</li>
                                            <li>حل المشاكل عن بُعد</li>
                                            <li>تدريب المستخدمين</li>
                                            <li>استشارات تقنية</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="support-levels">
                            <h3>مستويات الدعم</h3>
                            <div class="support-tiers">
                                <div class="support-tier">
                                    <div class="tier-header">
                                        <h5>الدعم الأساسي</h5>
                                        <span class="tier-badge">24/7</span>
                                    </div>
                                    <div class="tier-features">
                                        <ul>
                                            <li>دعم فني عبر الهاتف والبريد الإلكتروني</li>
                                            <li>إصلاح الأعطال خلال 24 ساعة</li>
                                            <li>تحديثات أمنية دورية</li>
                                            <li>نسخ احتياطية أسبوعية</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="support-tier premium">
                                    <div class="tier-header">
                                        <h5>الدعم المتقدم</h5>
                                        <span class="tier-badge premium">VIP</span>
                                    </div>
                                    <div class="tier-features">
                                        <ul>
                                            <li>دعم فوري عبر الهاتف والفيديو</li>
                                            <li>إصلاح الأعطال خلال 4 ساعات</li>
                                            <li>تحديثات يومية وميزات جديدة</li>
                                            <li>نسخ احتياطية يومية</li>
                                            <li>مدير حساب مخصص</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="support-tier">
                                    <div class="tier-header">
                                        <h5>الدعم المؤسسي</h5>
                                        <span class="tier-badge">Enterprise</span>
                                    </div>
                                    <div class="tier-features">
                                        <ul>
                                            <li>دعم مخصص 24/7 مع فريق مخصص</li>
                                            <li>إصلاح فوري للأعطال الحرجة</li>
                                            <li>تطوير مخصص حسب الطلب</li>
                                            <li>نسخ احتياطية متعددة</li>
                                            <li>تدريب شامل للمستخدمين</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="maintenance-process">
                            <h3>عملية الصيانة</h3>
                            <div class="maintenance-timeline">
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>التشخيص والفحص</h5>
                                        <p>فحص شامل للنظام وتشخيص أي مشاكل محتملة</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>تقرير الحالة</h5>
                                        <p>إعداد تقرير مفصل عن حالة النظام والتوصيات</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="fas fa-tools"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>التطبيق والإصلاح</h5>
                                        <p>تطبيق التحديثات والإصلاحات المطلوبة</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>الاختبار والتحقق</h5>
                                        <p>اختبار النظام والتأكد من عمل جميع الوظائف</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="benefits-section">
                            <h3>فوائد خدمات الصيانة والدعم</h3>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-clock"></i>
                                        <h6>استمرارية العمل</h6>
                                        <p>ضمان عمل الأنظمة على مدار الساعة دون انقطاع</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <h6>الأمان والحماية</h6>
                                        <p>حماية الأنظمة من التهديدات الأمنية والاختراقات</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-chart-line"></i>
                                        <h6>تحسين الأداء</h6>
                                        <p>تحسين أداء الأنظمة وزيادة الكفاءة التشغيلية</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cta-section">
                            <div class="cta-card">
                                <h3>هل تحتاج خدمات صيانة ودعم؟</h3>
                                <p>تواصل معنا اليوم للحصول على خطة صيانة مخصصة لاحتياجاتك</p>
                                <a href="index.html#contact" class="btn btn-primary btn-lg">
                                    <i class="fas fa-headset me-2"></i>
                                    احجز استشارة مجانية
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
                            <a href="{{ route('maintenance-support') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('maintenance-support-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('maintenance-support-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
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
