<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الأنظمة السيادية والتحول الرقمي | شركة صناع البرمجيات</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script>
        // التحقق من حالة تسجيل الدخول قبل تحميل الصفحة
        (function() {
            const isLoggedIn = localStorage.getItem('isLoggedIn');
            if (isLoggedIn !== 'true') {
                // توجيه المستخدم فوراً لصفحة تسجيل الدخول
                window.location.replace('login.html?redirect=sovereign-systems.html');
            }
        })();
    </script>
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
                    <a href="{{ route('sovereign-systems') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem; background: rgba(0,0,0,0.2);" title="Arabic">
                        <img src="https://flagcdn.com/w20/sa.png" alt="علم السعودية" width="20" height="15" style="border-radius: 3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('sovereign-systems-en') }}" class="btn btn-outline-light btn-sm d-flex alignments-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="British Flag" width="20" height="15" style="border-radius: 3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('sovereign-systems-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="Français">
                        <img src="https://flagcdn.com/w20/fr.png" alt="Drapeau de la France" width="20" height="15" style="border-radius: 3px;">
                        <span>FR</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px; position: relative; overflow: hidden; background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 50%, #2d3561 100%);">
        <!-- خلفية بيومترية -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: 
            radial-gradient(circle at 20% 30%, rgba(0, 212, 255, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(102, 126, 234, 0.15) 0%, transparent 50%),
            linear-gradient(45deg, transparent 30%, rgba(0, 212, 255, 0.05) 50%, transparent 70%),
            linear-gradient(rgba(0, 212, 255, 0.08) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 212, 255, 0.08) 1px, transparent 1px);
            background-size: 100% 100%, 100% 100%, 100% 100%, 60px 60px, 60px 60px;
            opacity: 0.6;
            z-index: 0;"></div>
        
        <!-- أيقونات بيومترية عائمة -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1; pointer-events: none;">
            <i class="fas fa-fingerprint" style="position: absolute; top: 15%; left: 10%; font-size: 120px; color: rgba(0, 212, 255, 0.1); animation: float 6s ease-in-out infinite;"></i>
            <i class="fas fa-eye" style="position: absolute; top: 25%; right: 15%; font-size: 100px; color: rgba(102, 126, 234, 0.1); animation: float 8s ease-in-out infinite 1s;"></i>
            <i class="fas fa-shield-alt" style="position: absolute; bottom: 20%; left: 20%; font-size: 110px; color: rgba(0, 212, 255, 0.08); animation: float 7s ease-in-out infinite 2s;"></i>
            <i class="fas fa-lock" style="position: absolute; bottom: 15%; right: 10%; font-size: 90px; color: rgba(102, 126, 234, 0.1); animation: float 9s ease-in-out infinite 0.5s;"></i>
        </div>
        
        <!-- طبقة داكنة -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(rgba(15,23,42,0.75), rgba(15,23,42,0.85)); z-index: 2;"></div>
        
        <div class="container" style="position: relative; z-index: 3;">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <!-- أيقونة بصمة كبيرة في الأعلى -->
                        <div style="margin-bottom: 2rem; display: inline-block; position: relative;">
                            <div style="width: 150px; height: 150px; margin: 0 auto; position: relative; display: flex; align-items: center; justify-content: center;">
                                <div style="position: absolute; width: 100%; height: 100%; border: 3px solid rgba(0, 212, 255, 0.4); border-radius: 50%; animation: scanRing 3s ease-in-out infinite;"></div>
                                <div style="position: absolute; width: 100%; height: 100%; border: 3px solid rgba(102, 126, 234, 0.4); border-radius: 50%; animation: scanRing 3s ease-in-out infinite 1s;"></div>
                                <i class="fas fa-fingerprint" style="font-size: 80px; color: #00d4ff; text-shadow: 0 0 30px rgba(0, 212, 255, 0.8); position: relative; z-index: 1; animation: fingerprintPulse 2s ease-in-out infinite;"></i>
                            </div>
                        </div>
                        
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-shield-alt me-3" style="color: #00d4ff;"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">الأنظمة البيومترية والسيادية</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            حلول أمنية متقدمة للتحقق البيومتري والأنظمة السيادية
                        </p>
                        <div style="display: inline-flex; align-items: center; gap: 1rem; margin-top: 1.5rem; flex-wrap: wrap; justify-content: center;">
                            <div style="display: flex; align-items: center; gap: 0.5rem; background: rgba(0, 212, 255, 0.1); padding: 0.5rem 1rem; border-radius: 20px; border: 1px solid rgba(0, 212, 255, 0.3);">
                                <i class="fas fa-fingerprint" style="color: #00d4ff;"></i>
                                <span style="color: #00d4ff; font-weight: 600;">التحقق البيومتري</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 0.5rem; background: rgba(102, 126, 234, 0.1); padding: 0.5rem 1rem; border-radius: 20px; border: 1px solid rgba(102, 126, 234, 0.3);">
                                <i class="fas fa-shield-alt" style="color: #667eea;"></i>
                                <span style="color: #667eea; font-weight: 600;">الأمن السيبراني</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 0.5rem; background: rgba(0, 212, 255, 0.1); padding: 0.5rem 1rem; border-radius: 20px; border: 1px solid rgba(0, 212, 255, 0.3);">
                                <i class="fas fa-lock" style="color: #00d4ff;"></i>
                                <span style="color: #00d4ff; font-weight: 600;">التشفير المتقدم</span>
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
                            <h3 class="text-primary mb-4"><i class="fas fa-info-circle me-2"></i>نبذة عامة</h3>
                            <p class="lead" style="line-height: 2;">
                                تتمتّع شركة صُنّاع البرمجيات المحدودة بقدرات راسخة وخبرة متقدمة في تطوير وتنفيذ وتشغيل الأنظمة الوطنية والسيادية، وفق أعلى المعايير التقنية والتنظيمية المعتمدة عالمياً. وقد رسخت الشركة مكانتها كجهة تنفيذية موثوقة في المشاريع الحكومية الكبرى، وذلك بفضل امتلاكها منظومة متكاملة من الخبرات والكفاءات والكوادر المتخصصة.
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
                            <h4>تشمل قدرات الشركة المحورية</h4>
                            <p>تصميم وتطوير الأنظمة السيادية والرقمية وفق المعايير العالمية.</p>
                            <div class="feature-highlight"></div>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <a href="#specialized-teams" class="text-decoration-none text-reset">
                        <div class="feature-card enhanced h-100">
                            <div class="feature-icon"><i class="fas fa-users-cog"></i></div>
                            <h4>فرق فنية وعملياتية متخصصة</h4>
                            <p>خبراء أمن سيبراني، تكامل حكومي، منصات سيادية، ومراكز تشغيل 24/7.</p>
                            <div class="feature-highlight"></div>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-12 col-lg-4">
                    <a href="#systems-services" class="text-decoration-none text-reset">
                        <div class="feature-card enhanced h-100">
                            <div class="feature-icon"><i class="fas fa-layer-group"></i></div>
                            <h4>الأنظمة والخدمات</h4>
                            <p>حزمة أنظمة سيادية تشمل الهوية الوطنية، الجواز الإلكتروني، الحدود، والضرائب.</p>
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
                    <h2 class="section-title text-center mb-5"><span class="text-primary">تشمل قدرات الشركة المحورية ما يلي:</span></h2>
                    
                    <div class="row mb-4" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body p-4">
                                    <h4 class="text-primary mb-3"><i class="fas fa-cogs me-2"></i>تصميم وتطوير الأنظمة السيادية والرقمية الوطنية بما فيها:</h4>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>أنظمة الهوية الوطنية والسجل المدني</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>الأنظمة البيومترية متعددة الطبقات</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>أنظمة الجوازات الإلكترونية والبوابات الحدودية الذكية</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>أنظمة الأمن والعدالة والتحقق الوطني</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>أنظمة الإيرادات والحكومة الرقمية وتكامل الجهات الحكومية</span>
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
                                    <h4 class="text-primary mb-3"><i class="fas fa-certificate me-2"></i>التزام كامل بالمعايير الدولية في:</h4>
                                    <div class="row g-3">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-shield-alt text-success me-2 mt-1"></i>
                                                <span>الأمن السيبراني</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-fingerprint text-success me-2 mt-1"></i>
                                                <span>البيومتري</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-database text-success me-2 mt-1"></i>
                                                <span>إدارة البيانات السيادية</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-building text-success me-2 mt-1"></i>
                                                <span>المعمارية الرقمية الحكومية</span>
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
                    <h2 class="section-title text-center mb-5"><span class="text-primary">فرق فنية وعملياتية متخصصة تشمل:</span></h2>
                    
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card border-primary h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="fas fa-user-shield fa-3x text-primary"></i>
                                    </div>
                                    <h5>خبراء الأمن السيبراني وحماية البيانات</h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="card border-primary h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="fas fa-server fa-3x text-primary"></i>
                                    </div>
                                    <h5>مهندسي منصات سيادية متقدمة</h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="card border-primary h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="fas fa-network-wired fa-3x text-primary"></i>
                                    </div>
                                    <h5>خبراء تكامل الأنظمة الحكومية (Gov-Integration)</h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="card border-primary h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="fas fa-headset fa-3x text-primary"></i>
                                    </div>
                                    <h5>مراكز تشغيل ومراقبة على مدار الساعة (NOC & SOC)</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="card border-0 shadow-sm bg-light">
                                <div class="card-body p-4">
                                    <h4 class="text-primary mb-3"><i class="fas fa-tasks me-2"></i>منهجيات تنفيذ راسخة تضمن أعلى مستويات الجودة والاستمرارية، تشمل:</h4>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>إدارة المشاريع الحكومية وفق منهجيات عالمية</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>خطط استمرارية الأعمال والتعافي من الكوارث (BCP/DR)</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>نقل المعرفة وبناء القدرات الوطنية</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                                <span>دعم وتشغيل طويل المدى وتطوير مستمر للأنظمة</span>
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
                    <h2 class="section-title text-center mb-5"><span class="text-primary">الأنظمة والخدمات:</span></h2>
                </div>
            </div>

            <!-- System 1 -->
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="card border-primary shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-fingerprint me-2"></i>1- خدمة التسجيل الوطني البيومتري</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">الهدف:</h5>
                            <p class="lead mb-4">إنشاء سجل مدني وطني موحد مدعوم بالبيومتري (بصمات + وجه) مع رقم هوية وطني فريد لكل مواطن ومقيم.</p>
                            
                            <h5 class="text-primary mb-3">الوظائف الأساسية:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-database text-primary me-2 mt-1"></i>
                                        <span>قاعدة بيانات مركزية للهوية البيومترية</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-ban text-primary me-2 mt-1"></i>
                                        <span>محرك منع الازدواجية 1:N</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-id-card text-primary me-2 mt-1"></i>
                                        <span>إصدار رقم هوية وطني تلقائي</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-check-double text-primary me-2 mt-1"></i>
                                        <span>تدقيق البيانات والتحقق قبل الإصدار</span>
                                    </div>
                                </div>
                            </div>
                            
                            <h5 class="text-primary mt-4 mb-3">بطاقات ذكية بمعايير:</h5>
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-qrcode text-success me-2 mt-1"></i>
                                        <span>منطقة قراءة آلية MRZ</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-wifi text-success me-2 mt-1"></i>
                                        <span>شريحة NFC</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-barcode text-success me-2 mt-1"></i>
                                        <span>باركود فريد</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-star text-success me-2 mt-1"></i>
                                        <span>طبقة هولوغرام أمني</span>
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
                            <h4 class="mb-0"><i class="fas fa-users me-2"></i>2- الأحوال المدنية – خدمات شاملة</h4>
                        </div>
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-user-circle text-primary me-2 mt-1"></i>
                                        <span>خدمة بياناتي</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-calendar-check text-primary me-2 mt-1"></i>
                                        <span>حجز المواعيد</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-baby text-primary me-2 mt-1"></i>
                                        <span>إضافة المواليد وربطها بالمستشفيات</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-id-badge text-primary me-2 mt-1"></i>
                                        <span>إصدار بطاقات الهوية</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-map-marker-alt text-primary me-2 mt-1"></i>
                                        <span>إدارة العناوين الوطنية</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-user-plus text-primary me-2 mt-1"></i>
                                        <span>إضافة التابعين</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-home text-primary me-2 mt-1"></i>
                                        <span>إصدار سجل الأسرة</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-heart text-primary me-2 mt-1"></i>
                                        <span>تسجيل الزواج والطلاق والوفاة</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-certificate text-primary me-2 mt-1"></i>
                                        <span>إصدار شهادات إلكترونية</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-star text-primary me-2 mt-1"></i>
                                        <span>خدمة تقييم الخدمات الحكومية</span>
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
                            <h4 class="mb-0"><i class="fas fa-passport me-2"></i>3- نظام جواز السفر الإلكتروني e-Passport</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">الوظائف الأساسية:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-file-alt text-primary me-2 mt-1"></i>
                                        <span>تقديم طلب إلكتروني</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-shield-alt text-primary me-2 mt-1"></i>
                                        <span>التحقق الأمني البيومتري</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-globe text-primary me-2 mt-1"></i>
                                        <span>الامتثال لمعايير ICAO الدولية</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-fingerprint text-primary me-2 mt-1"></i>
                                        <span>بصمة وجه + بصمات أصابع + توقيع إلكتروني</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-microchip text-primary me-2 mt-1"></i>
                                        <span>شريحة ذكية مشفّرة وتوقيع رقمي</span>
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
                            <h4 class="mb-0"><i class="fas fa-plane-departure me-2"></i>4- نظام الهجرة وإدارة الحدود</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">الوظائف الأساسية:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-stamp text-primary me-2 mt-1"></i>
                                        <span>إدارة التأشيرات والتصاريح</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-door-open text-primary me-2 mt-1"></i>
                                        <span>بوابات إلكترونية ذاتية ABC e-Gates</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-list-alt text-primary me-2 mt-1"></i>
                                        <span>التكامل مع قوائم المراقبة الوطنية والدولية</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-search text-primary me-2 mt-1"></i>
                                        <span>قراءة بيانات الركاب API/PNR وتحليلها</span>
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
                            <h4 class="mb-0"><i class="fas fa-gavel me-2"></i>5- نظام الأمن والطب الشرعي والسجل الجنائي</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">الوظائف الأساسية:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-database text-primary me-2 mt-1"></i>
                                        <span>قاعدة سجلات جنائية مركزية</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-fingerprint text-primary me-2 mt-1"></i>
                                        <span>نظام AFIS للتعرف على البصمات</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-folder-open text-primary me-2 mt-1"></i>
                                        <span>نظام إدارة القضايا والأدلة</span>
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
                            <h4 class="mb-0"><i class="fas fa-money-bill-wave me-2"></i>6- تكامل منظومة الضرائب والإيرادات</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">الوظائف الرئيسية:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-link text-primary me-2 mt-1"></i>
                                        <span>ربط الهوية الوطنية بمنظومة الضرائب</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                        <span>التحقق الآلي للهوية عبر NIN + بيانات بيومترية</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-sign-in-alt text-primary me-2 mt-1"></i>
                                        <span>تسجيل الدخول الموحّد للخدمات الضريبية</span>
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
                            <h4 class="mb-0"><i class="fas fa-gun me-2"></i>7- نظام الأسلحة والتراخيص</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">الوظائف الرئيسية:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-user-check text-primary me-2 mt-1"></i>
                                        <span>فحص الخلفية الأمنية</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-fingerprint text-primary me-2 mt-1"></i>
                                        <span>قاعدة بيانات للبصمة الباليستية</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-search-location text-primary me-2 mt-1"></i>
                                        <span>تتبع الأسلحة المفقودة والمضبوطة</span>
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
                            <h4 class="mb-0"><i class="fas fa-chart-line me-2"></i>8- وحدة التحليل والتدقيق والتقارير</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">الوظائف الرئيسية:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-tachometer-alt text-primary me-2 mt-1"></i>
                                        <span>لوحة مؤشرات لحظية SLA</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-robot text-primary me-2 mt-1"></i>
                                        <span>نظام كشف الاحتيال بالذكاء الاصطناعي</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-warehouse text-primary me-2 mt-1"></i>
                                        <span>مستودع بيانات + BI</span>
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
                            <h4 class="mb-0"><i class="fas fa-network-wired me-2"></i>9- بوابة التكامل الحكومي</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">الوظائف الرئيسية:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-plug text-primary me-2 mt-1"></i>
                                        <span>إدارة واجهات API مركزياً</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-file-contract text-primary me-2 mt-1"></i>
                                        <span>بروتوكولات موحّدة</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-code text-primary me-2 mt-1"></i>
                                        <span>بيئة مطورين + Sandbox</span>
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
                            <h4 class="mb-0"><i class="fas fa-store me-2"></i>10- وزارة التجارة</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">الوظائف الرئيسية:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-building text-primary me-2 mt-1"></i>
                                        <span>تسجيل الشركات والترخيص</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-file-signature text-primary me-2 mt-1"></i>
                                        <span>سجلات وتواقيع رقمية</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-eye text-primary me-2 mt-1"></i>
                                        <span>مراقبة الأسواق وربط المخالفات بالإيرادات</span>
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
                            <h4 class="mb-0"><i class="fas fa-coins me-2"></i>11- وزارة المالية</h4>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3">الوظائف الرئيسية:</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-wallet text-primary me-2 mt-1"></i>
                                        <span>نظام إدارة الميزانية والدفع الحكومي الموحد</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-university text-primary me-2 mt-1"></i>
                                        <span>التكامل المالي والمصرفي</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-chart-pie text-primary me-2 mt-1"></i>
                                        <span>شفافية مالية + تقارير لحظية + IPSAS</span>
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
                            <h3 class="mb-3">هل تحتاج استشارة حول الأنظمة السيادية والتحول الرقمي؟</h3>
                            <p class="lead mb-4">تواصل معنا اليوم للحصول على استشارة مجانية وتقييم احتياجاتك</p>
                            <a href="index.html#contact" class="btn btn-light btn-lg">
                                <i class="fas fa-phone me-2"></i>
                                تواصل معنا الآن
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
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="شعار شركة صناع البرمجيات المحدودة - SMLC" class="footer-logo mb-2">
                        <span class="fw-bold">شركة صناع البرمجيات المحدودة</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 جميع الحقوق محفوظة</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        // التحقق الإضافي من حالة تسجيل الدخول عند تحميل الصفحة بالكامل
        window.addEventListener('load', function() {
            const isLoggedIn = localStorage.getItem('isLoggedIn');
            
            // التحقق مرة أخرى عند تحميل الصفحة بالكامل
            if (isLoggedIn !== 'true') {
                // توجيه المستخدم لصفحة تسجيل الدخول
                window.location.replace('login.html?redirect=sovereign-systems.html');
            }
        });
        
        // التحقق عند تغيير حالة localStorage (في حالة تسجيل الخروج من نافذة أخرى)
        window.addEventListener('storage', function(e) {
            if (e.key === 'isLoggedIn' && e.newValue !== 'true') {
                window.location.replace('login.html?redirect=sovereign-systems.html');
            }
        });
    </script>
    
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

