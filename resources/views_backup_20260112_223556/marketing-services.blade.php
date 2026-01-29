<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات التسويق - صناع البرمجيات</title>
    <link rel="icon" type="image/png" href="{{ asset('images/fiv2.png') }}">
    
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
    
    <style>
        .marketing-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .marketing-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="rgba(255,255,255,0.1)"/><stop offset="100%" stop-color="rgba(255,255,255,0)"/></radialGradient></defs><circle cx="200" cy="200" r="100" fill="url(%23a)"/><circle cx="800" cy="300" r="150" fill="url(%23a)"/><circle cx="400" cy="700" r="120" fill="url(%23a)"/></svg>') no-repeat center center;
            background-size: cover;
        }
        
        .marketing-hero-content {
            position: relative;
            z-index: 2;
            color: white;
        }
        
        .marketing-hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .marketing-hero .lead {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }
        
        .sector-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
            height: 100%;
        }
        
        .sector-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .sector-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: white;
        }
        
        .sector-icon.health { background: linear-gradient(135deg, #ff6b6b, #ee5a24); }
        .sector-icon.tech { background: linear-gradient(135deg, #4ecdc4, #44a08d); }
        .sector-icon.real-estate { background: linear-gradient(135deg, #feca57, #ff9ff3); }
        .sector-icon.tourism { background: linear-gradient(135deg, #48cae4, #0077b6); }
        .sector-icon.consumer { background: linear-gradient(135deg, #a8e6cf, #88d8a3); }
        .sector-icon.manufacturing { background: linear-gradient(135deg, #ffd93d, #6bcf7f); }
        .sector-icon.education { background: linear-gradient(135deg, #ff8a80, #ff5722); }
        .sector-icon.energy { background: linear-gradient(135deg, #81c784, #4caf50); }
        .sector-icon.food { background: linear-gradient(135deg, #ffb74d, #ff9800); }
        .sector-icon.logistics { background: linear-gradient(135deg, #90caf9, #2196f3); }
        .sector-icon.media { background: linear-gradient(135deg, #ce93d8, #9c27b0); }
        .sector-icon.sports { background: linear-gradient(135deg, #f48fb1, #e91e63); }
        .sector-icon.government { background: linear-gradient(135deg, #b39ddb, #673ab7); }
        
        .kpi-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .kpi-number {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
        }
        
        .kpi-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .success-story {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            border-left: 5px solid #667eea;
        }
        
        .success-story h5 {
            color: #667eea;
            margin-bottom: 1rem;
        }
        
        .comparison-table {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .comparison-table table {
            margin: 0;
        }
        
        .comparison-table th {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 1.5rem;
            font-weight: 600;
        }
        
        .comparison-table td {
            padding: 1.2rem 1.5rem;
            border-bottom: 1px solid #f0f0f0;
            vertical-align: middle;
        }
        
        .comparison-table tbody tr:hover {
            background: #f8f9fa;
        }
        
        .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }
        
        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .cta-section .lead {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .btn-marketing {
            background: white;
            color: #667eea;
            border: none;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-marketing:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            color: #667eea;
        }
        
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #333;
        }
        
        .section-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 3rem;
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }
        
        .floating-element {
            position: absolute;
            width: 20px;
            height: 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-element:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; }
        .floating-element:nth-child(2) { top: 60%; right: 15%; animation-delay: 2s; }
        .floating-element:nth-child(3) { bottom: 30%; left: 20%; animation-delay: 4s; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .service-feature {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .service-feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        
        .service-feature i {
            font-size: 3rem;
            color: #667eea;
            margin-bottom: 1.5rem;
        }
        
        .service-feature h4 {
            color: #333;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .service-feature p {
            color: #666;
            line-height: 1.6;
        }
    </style>
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
                <div class="mobile-lang-switcher d-lg-none">
                    <a href="{{ route('marketing-services') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 44px; height: 44px; border: 2px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);" title="العربية">
                        <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                    </a>
                    <a href="{{ route('marketing-services-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 44px; height: 44px; border: 2px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                    </a>
                    <a href="{{ route('marketing-services-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 44px; height: 44px; border: 2px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);" title="Français">
                        <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                    </a>
                </div>
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
                            <li><a class="dropdown-item active" href="{{ route('marketing-services') }}">
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
                <div class="d-flex align-items-center ms-2 gap-1 flex-wrap" style="flex-shrink: 0;">
                    <a href="{{ route('marketing-services') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem; background: rgba(0,0,0,0.2);" title="Arabic">
                        <img src="https://flagcdn.com/w20/sa.png" alt="علم السعودية" width="20" height="15" style="border-radius: 3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('marketing-services-en') }}" class="btn btn-outline-light btn-sm d-flex alignments-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="British Flag" width="20" height="15" style="border-radius: 3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('marketing-services-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="Français">
                        <img src="https://flagcdn.com/w20/fr.png" alt="Drapeau de la France" width="20" height="15" style="border-radius: 3px;">
                        <span>FR</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="marketing-hero">
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="marketing-hero-content" data-aos="fade-up">
                        <h1>خدمات التسويق عبر العلاقات</h1>
                        <p class="lead">شريكك للنجاح المحلي والدولي عبر شبكة علاقات قوية وشراكات استراتيجية</p>
                        <p class="lead">نحن في <strong>صناع البرمجيات</strong> نقدم خدمات تسويق مبتكرة تعتمد على شبكة علاقاتنا الواسعة محليًا ودوليًا، لمساعدة الشركات على الوصول للعملاء والشركاء المناسبين، وفتح فرص تجارية حقيقية تعزز نمو الأعمال وتوسع تأثير علامتك التجارية.</p>
                        <a href="#services" class="btn-marketing">
                            <i class="fas fa-rocket me-2"></i>
                            اكتشف خدماتنا
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2 class="section-title">مقدمة عن خدماتنا</h2>
                    <p class="section-subtitle">
                        في عالم الأعمال الحديث، العلاقات والشراكات هي المفتاح الأساسي للنجاح. تقدم شركتنا خدمات تسويق عبر العلاقات المباشرة، مع استراتيجيات مخصصة لكل عميل وصناعة، تضمن الوصول للأشخاص المناسبين وتحويل العلاقات إلى فرص تجارية ملموسة.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services by Sectors Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">خدماتنا حسب <span class="text-gradient">القطاعات</span></h2>
                    <p class="section-subtitle">نقدم خدمات تسويق متخصصة لجميع القطاعات</p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Health Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="sector-card">
                        <div class="sector-icon health">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h4>المنتجات الصحية والطبية</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المستشفيات والعيادات الخاصة والعامة</li>
                            <li><i class="fas fa-check text-success me-2"></i> الترويج للأجهزة والمستلزمات الطبية</li>
                            <li><i class="fas fa-check text-success me-2"></i> السياحة العلاجية وجذب المرضى الدوليين</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Tech Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="sector-card">
                        <div class="sector-icon tech">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <h4>المنتجات التقنية</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق الأجهزة والبرمجيات وحلول التقنية المتقدمة</li>
                            <li><i class="fas fa-check text-success me-2"></i> إدارة إطلاق المنتجات الجديدة وفعاليات التعريف بها</li>
                            <li><i class="fas fa-check text-success me-2"></i> بناء شراكات استراتيجية مع المستثمرين والعملاء المحتملين</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Real Estate Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="sector-card">
                        <div class="sector-icon real-estate">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4>القطاع العقاري</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المشاريع السكنية والتجارية</li>
                            <li><i class="fas fa-check text-success me-2"></i> جذب المستثمرين المحليين والدوليين</li>
                            <li><i class="fas fa-check text-success me-2"></i> تنظيم المعارض والفعاليات العقارية</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Tourism Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="sector-card">
                        <div class="sector-icon tourism">
                            <i class="fas fa-plane"></i>
                        </div>
                        <h4>السياحة العلاجية</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق برامج السياحة العلاجية</li>
                            <li><i class="fas fa-check text-success me-2"></i> تنسيق الرحلات الطبية للعملاء الدوليين</li>
                            <li><i class="fas fa-check text-success me-2"></i> بناء شراكات مع شركات السياحة الصحية العالمية</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Consumer Goods Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="sector-card">
                        <div class="sector-icon consumer">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <h4>المنتجات الاستهلاكية والسلع الفاخرة</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المنتجات الغذائية والمشروبات</li>
                            <li><i class="fas fa-check text-success me-2"></i> العطور والملابس الفاخرة</li>
                            <li><i class="fas fa-check text-success me-2"></i> تعزيز وصول العلامة التجارية للأسواق المحلية والدولية</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Manufacturing Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="sector-card">
                        <div class="sector-icon manufacturing">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h4>الصناعات التحويلية والتجارية</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المعدات الصناعية والمواد الخام</li>
                            <li><i class="fas fa-check text-success me-2"></i> تسهيل الشراكات مع موزعين ومصنعين ومستثمرين</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Education Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="sector-card">
                        <div class="sector-icon education">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>التعليم والتدريب</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المؤسسات التعليمية والبرامج التدريبية</li>
                            <li><i class="fas fa-check text-success me-2"></i> بناء شراكات مع الجامعات والشركات</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Energy Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="sector-card">
                        <div class="sector-icon energy">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h4>الطاقة والبيئة</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق مشاريع الطاقة المتجددة والمبادرات البيئية</li>
                            <li><i class="fas fa-check text-success me-2"></i> تعزيز فرص التعاون مع المستثمرين والشركات الدولية</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Food Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="900">
                    <div class="sector-card">
                        <div class="sector-icon food">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h4>الصناعات الغذائية والمطاعم</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المطاعم والفنادق والمقاهي</li>
                            <li><i class="fas fa-check text-success me-2"></i> دعم إطلاق المنتجات الغذائية الجديدة</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Logistics Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1000">
                    <div class="sector-card">
                        <div class="sector-icon logistics">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h4>النقل والخدمات اللوجستية</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق شركات النقل والخدمات اللوجستية</li>
                            <li><i class="fas fa-check text-success me-2"></i> بناء شراكات مع شركات محلية ودولية</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Media Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1100">
                    <div class="sector-card">
                        <div class="sector-icon media">
                            <i class="fas fa-video"></i>
                        </div>
                        <h4>الإعلام والإعلان</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق الشركات الإعلامية وشركات الإعلان</li>
                            <li><i class="fas fa-check text-success me-2"></i> ربط العملاء بشركاء إعلاميين واستراتيجيين</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Sports Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1200">
                    <div class="sector-card">
                        <div class="sector-icon sports">
                            <i class="fas fa-futbol"></i>
                        </div>
                        <h4>القطاع الرياضي والترفيهي</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق الأندية الرياضية والفعاليات الترفيهية</li>
                            <li><i class="fas fa-check text-success me-2"></i> جذب الرعاة والمستثمرين المحليين والدوليين</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Government Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1300">
                    <div class="sector-card">
                        <div class="sector-icon government">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <h4>الخدمات الحكومية والاستشارية</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المشاريع الحكومية والشراكات مع القطاع الخاص</li>
                            <li><i class="fas fa-check text-success me-2"></i> تقديم استشارات في إدارة العلاقات والشراكات الاستراتيجية</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Marketing Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">خدماتنا التسويقية <span class="text-gradient">الأساسية</span></h2>
                    <p class="section-subtitle">خدمات متكاملة عبر جميع القطاعات</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-feature">
                        <i class="fas fa-network-wired"></i>
                        <h4>شبكة علاقات قوية</h4>
                        <p>الوصول المباشر للأشخاص والشركات المؤثرة محليًا ودوليًا</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-feature">
                        <i class="fas fa-bullhorn"></i>
                        <h4>إدارة الحملات التسويقية</h4>
                        <p>تصميم وتنفيذ حملات مخصصة لكل عميل وقطاع</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-feature">
                        <i class="fas fa-handshake"></i>
                        <h4>بناء الشراكات الاستراتيجية</h4>
                        <p>تحويل العلاقات إلى اتفاقيات ومشاريع مربحة</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-feature">
                        <i class="fas fa-chart-line"></i>
                        <h4>متابعة النتائج وقياس الأداء</h4>
                        <p>تقديم تقارير دورية لتقييم نجاح الحملات وعائد الاستثمار</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KPIs Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">مؤشرات الأداء <span class="text-gradient">لكل قطاع</span></h2>
                    <p class="section-subtitle">نقيس نجاحنا بأرقام ملموسة</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="kpi-card">
                        <div class="kpi-number">25+</div>
                        <div class="kpi-label">شراكة جديدة شهرياً</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="kpi-card">
                        <div class="kpi-number">150%</div>
                        <div class="kpi-label">زيادة في المبيعات</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="kpi-card">
                        <div class="kpi-number">500+</div>
                        <div class="kpi-label">عميل ومستثمر جديد</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="kpi-card">
                        <div class="kpi-number">95%</div>
                        <div class="kpi-label">تحسن في سمعة العلامة التجارية</div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">قصص <span class="text-gradient">النجاح العملية</span></h2>
                    <p class="section-subtitle">نتائج حقيقية لعملائنا</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="success-story">
                        <h5><i class="fas fa-hospital me-2"></i>القطاع الصحي</h5>
                        <p>مساعدة مستشفى في جذب المرضى الدوليين وزيادة نسبة الإشغال بنسبة <strong>40%</strong> خلال 6 أشهر من خلال شبكة علاقاتنا الدولية في مجال السياحة العلاجية.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="success-story">
                        <h5><i class="fas fa-building me-2"></i>القطاع العقاري</h5>
                        <p>دعم مطور عقاري في جذب مستثمرين دوليين من خلال معرض دولي، وزيادة المبيعات بنسبة <strong>60%</strong> في الربع الأول من العام.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="success-story">
                        <h5><i class="fas fa-laptop-code me-2"></i>القطاع التقني</h5>
                        <p>إطلاق برنامج برمجيات جديد بالتعاون مع شركاء استراتيجيين، وتحقيق تغطية سوقية واسعة في <strong>15 دولة</strong> خلال السنة الأولى.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="success-story">
                        <h5><i class="fas fa-utensils me-2"></i>القطاع الغذائي</h5>
                        <p>مساعدة شركة أغذية في الوصول لموزعين دوليين جدد وتوسيع نطاق التوزيع إلى <strong>8 دول جديدة</strong> مع زيادة الإيرادات بنسبة <strong>80%</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">مقارنة <span class="text-gradient">القطاعات</span></h2>
                    <p class="section-subtitle">نظرة شاملة على خدماتنا حسب القطاعات</p>
                </div>
            </div>
            
            <div class="comparison-table" data-aos="fade-up">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>القطاع</th>
                            <th>خدماتنا الأساسية</th>
                            <th>نوع العلاقات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>المنتجات الصحية والطبية</strong></td>
                            <td>المستشفيات والعيادات، الأجهزة والمستلزمات، السياحة العلاجية</td>
                            <td>محلية ودولية، مستثمرين، موزعين، عملاء دوليين</td>
                        </tr>
                        <tr>
                            <td><strong>المنتجات التقنية</strong></td>
                            <td>الأجهزة، البرمجيات، إطلاق المنتجات، شراكات استراتيجية</td>
                            <td>شركات، مستثمرين، عملاء محتملين</td>
                        </tr>
                        <tr>
                            <td><strong>القطاع العقاري</strong></td>
                            <td>المشاريع السكنية والتجارية، جذب المستثمرين، تنظيم المعارض</td>
                            <td>مستثمرون محليون ودوليون</td>
                        </tr>
                        <tr>
                            <td><strong>السلع الفاخرة والمنتجات الاستهلاكية</strong></td>
                            <td>الملابس، العطور، الأغذية والمشروبات</td>
                            <td>موزعون، تجار، عملاء رئيسيون</td>
                        </tr>
                        <tr>
                            <td><strong>التعليم والتدريب</strong></td>
                            <td>الجامعات، البرامج التدريبية، الشهادات الدولية</td>
                            <td>مؤسسات تعليمية، شركات، جهات اعتماد</td>
                        </tr>
                        <tr>
                            <td><strong>الطاقة والبيئة</strong></td>
                            <td>مشاريع الطاقة المتجددة، الخدمات البيئية</td>
                            <td>مستثمرون، شركات، مؤسسات بيئية</td>
                        </tr>
                        <tr>
                            <td><strong>النقل والخدمات اللوجستية</strong></td>
                            <td>النقل، التخزين، الشحن</td>
                            <td>شركات لوجستية، موزعون، مستثمرون</td>
                        </tr>
                        <tr>
                            <td><strong>الإعلام والإعلان</strong></td>
                            <td>الإنتاج الفني، شركات الإعلان</td>
                            <td>شركاء إعلاميين واستراتيجيين</td>
                        </tr>
                        <tr>
                            <td><strong>القطاع الرياضي والترفيهي</strong></td>
                            <td>الأندية، الفعاليات</td>
                            <td>رعاة، مستثمرون محليون ودوليون</td>
                        </tr>
                        <tr>
                            <td><strong>الخدمات الحكومية والاستشارية</strong></td>
                            <td>المشاريع الحكومية، الشراكات مع القطاع الخاص</td>
                            <td>جهات حكومية، شركات خاصة</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2>ابدأ الآن!</h2>
                    <p class="lead">النجاح الحقيقي لا يأتي بالصدفة، بل عبر شبكة علاقات قوية، شراكات استراتيجية، وحملات تسويقية مخصصة. دعنا نكون شريكك في بناء مستقبل أعمالك وتحويل الفرص التجارية إلى نتائج ملموسة.</p>
                    <p class="lead">تواصل معنا اليوم وابدأ رحلتك نحو التوسع والنمو في جميع القطاعات.</p>
                    <a href="index.html#contact" class="btn-marketing">
                        <i class="fas fa-phone me-2"></i>
                        تواصل معنا اليوم
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
        .footer-logo { height: 92px; width: auto; object-fit: contain; filter: drop-shadow(0 4px 10px rgba(0,0,0,0.15)) brightness(1.05) contrast(1.05); animation: footerFloat 6s ease-in-out infinite; }
        @keyframes footerFloat { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-6px); } }
        /* Brand colors and styling for social icons */
        .social-links { display: inline-flex; gap: 10px; }
        .social-links a { font-size: 1.25rem; display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 50%; background: rgba(255,255,255,0.08); color: inherit; transition: transform .2s ease, box-shadow .2s ease, opacity .2s ease; }
        .social-links a:hover { transform: translateY(-2px); box-shadow: 0 6px 14px rgba(0,0,0,0.25); opacity: 1; }
        .social-links a.instagram { color: #E1306C; }
        .social-links a.linkedin { color: #0A66C2; }
        .social-links a.facebook { color: #1877F2; }
        .social-links a i.fa-x-twitter { color: #ffffff; }
        .social-links a.x { background: #000000; color: #ffffff; }
        .social-links a.x svg { color: #ffffff; }
    </style>
    
    <footer class="bg-white text-dark py-4">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="شعار شركة صناع البرمجيات المحدودة - SMLC" class="footer-logo mb-2">
                        <span class="fw-bold">شركة صناع البرمجيات المحدودة</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 جميع الحقوق محفوظة</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('index') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('index-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('index-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
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
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });


        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
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
