<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظم المعلومات الصحية | شركة صناع البرمجيات</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                    <a href="{{ route('health-systems') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem; background: rgba(0,0,0,0.2);" title="Arabic">
                        <img src="https://flagcdn.com/w20/sa.png" alt="علم السعودية" width="20" height="15" style="border-radius: 3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('health-systems-en') }}" class="btn btn-outline-light btn-sm d-flex alignments-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="British Flag" width="20" height="15" style="border-radius: 3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('health-systems-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="Français">
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
                            <i class="fas fa-hospital me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">خدمات نظم المعلومات الصحية</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            حلول تقنية متكاملة للمستشفيات والمراكز الصحية
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
                            <h3 class="text-primary mb-3"><i class="fas fa-info-circle me-2"></i>نبذة عن خدمات نظم المعلومات الصحية</h3>
                            <p class="lead">
                                على مدى سنوات، فإن شركة صناع البرمجيات المحدودة تتميز بخبرة طويلة في تصميم وتنفيذ حلول تقنية المعلومات الصحية، مع سجل حافل في تقديم أنظمة مبتكرة وموثوقة للمستشفيات، العيادات، والمراكز الصحية. نحن نولي أهمية قصوى للجودة والدقة في جميع مراحل المشروع، بدءًا من التحليل والتخطيط، مرورًا بالتصميم والتطوير، وصولًا إلى التطبيق والدعم الفني المستمر.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-10 mx-auto">
                    <h3 class="mb-4"><i class="fas fa-star me-2 text-primary"></i>أبرز مميزات احترافية الشركة في التنفيذ:</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>الميثاقية ودقة التنفيذ وفق أفضل الممارسات الدولية</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>حلول مخصصة لكل مؤسسة صحية بشكل دقيق</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>معايير أمان صارمة (HIPAA و GDPR)</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>دعم فني مستمر على مدار الساعة</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>تجربة مثبتة مع مستشفيات وعيادات متنوعة</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>اعتمادية النظام بكفاءة عالية</span>
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
                    <h2 class="section-title">هيكل <span class="text-primary">نظم المعلومات الصحية</span></h2>
                    <p class="section-subtitle">رؤية شاملة لتكامل الأنظمة الصحية المتقدمة</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-xl-7 mx-auto" data-aos="zoom-in">
                    <div class="diagram-container shadow-lg rounded-4 overflow-hidden p-3 bg-white">
                        <img src="{{ asset('images/digram.jpeg') }}" alt="هيكل نظم المعلومات الصحية" class="img-fluid w-100" style="display: block; max-height: 600px; object-fit: contain;">
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
                    <h2 class="section-title">خدمات <span class="text-primary">نظم المعلومات الصحية</span></h2>
                    <p class="section-subtitle">حلول شاملة لتطوير وتنظيم القطاع الصحي</p>
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
                                <h4>نظم إدارة المستشفيات (HMS)</h4>
                                <p>نظام متكامل لإدارة المستشفى أو المركز الصحي بكفاءة عالية، يشمل جميع العمليات الإدارية والطبية</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-user-injured text-success"></i>
                                </div>
                                <h4>إدارة المرضى والمواعيد</h4>
                                <p>تسجيل المرضى، جدولة المواعيد، إدارة العيادات الخارجية، ومتابعة زيارات المرضى</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-file-medical text-danger"></i>
                                </div>
                                <h4>السجلات الطبية الإلكترونية (EMR)</h4>
                                <p>حفظ وتحديث السجلات الطبية لكل مريض بشكل رقمي، مع سهولة الوصول للبيانات من قبل الفريق الطبي</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-pills text-warning"></i>
                                </div>
                                <h4>إدارة الصيدلية والمخزون الطبي</h4>
                                <p>متابعة المخزون الطبي، صرف الأدوية، تنبيهات لنفاد الأدوية، وإصدار التقارير المخزنية</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-user-md text-info"></i>
                                </div>
                                <h4>إدارة العمليات الجراحية</h4>
                                <p>تسجيل العمليات، جدولة غرف العمليات، متابعة فرق الجراحة والمعدات اللازمة لكل عملية</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-user-nurse text-secondary"></i>
                                </div>
                                <h4>إدارة الموظفين والجداول الطبية</h4>
                                <p>تنظيم جداول الأطباء والممرضين، متابعة الحضور، وتوزيع المهام اليومية بشكل آلي</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-chart-bar text-primary"></i>
                                </div>
                                <h4>التقارير التحليلية والإدارية</h4>
                                <p>استخراج تقارير أداء المستشفى، مؤشرات الجودة، تقارير مالية وإدارية لدعم اتخاذ القرار</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-database text-success"></i>
                                </div>
                                <h4>نظام إدارة المعلومات الصحية (HIS)</h4>
                                <p>نظام متكامل لتجميع وإدارة البيانات الطبية والإدارية للمستشفى، يربط الأقسام المختلفة</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-clinic-medical text-danger"></i>
                                </div>
                                <h4>أنظمة العيادات والعيادات الخاصة</h4>
                                <p>حلول مخصصة للعيادات الخاصة لإدارة المواعيد، متابعة نتائج التحاليل، إدارة ملفات المرضى، المحاسبة</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-cloud text-info"></i>
                                </div>
                                <h4>الحلول السحابية للبيانات الصحية</h4>
                                <p>تخزين البيانات الطبية على السحابة بشكل آمن، نسخ احتياطية مشفرة، إمكانية استرجاع البيانات بسهولة</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-heartbeat text-warning"></i>
                                </div>
                                <h4>التكامل مع الأجهزة الطبية</h4>
                                <p>ربط الأنظمة بالمعدات التشخيصية والمخبرية لجمع البيانات تلقائيًا وتحويلها لتقارير دقيقة</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-brain text-secondary"></i>
                                </div>
                                <h4>التحليلات والذكاء الاصطناعي</h4>
                                <p>استخدام الذكاء الاصطناعي لتحليل البيانات الصحية، توفير مؤشرات الأداء، التنبؤ بحركة المرضى</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-video text-primary"></i>
                                </div>
                                <h4>التطبيب عن بعد (Telemedicine)</h4>
                                <p>تمكين المرضى من تلقي الاستشارات الطبية عبر الفيديو بشكل آمن، متابعة حالتهم الصحية عن بعد</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-mobile-alt text-success"></i>
                                </div>
                                <h4>التطبيقات الصحية الذكية</h4>
                                <p>تطبيقات للمرضى والأطباء لمتابعة المواعيد، نتائج التحاليل، تذكير الدواء، مراقبة المؤشرات الحيوية</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-shield-alt text-danger"></i>
                                </div>
                                <h4>الأمن السيبراني وحماية البيانات</h4>
                                <p>حماية البيانات الصحية من الاختراقات، تشفير المعلومات، التحكم في الوصول، الالتزام بالمعايير الدولية</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-chalkboard-teacher text-info"></i>
                                </div>
                                <h4>التدريب والدعم الفني</h4>
                                <p>برامج تدريبية لموظفي المستشفيات والعيادات، دعم فني 24/7، تحديثات دورية واستشارات تقنية</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-cogs text-secondary"></i>
                                </div>
                                <h4>حلول متخصصة إضافية</h4>
                                <p>إدارة المختبرات والتحاليل، إدارة الطوارئ، إدارة التأمين الصحي والفواتير الإلكترونية، نظم إدارة جودة الرعاية الصحية</p>
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
                            <h3 class="mb-3">هل تحتاج استشارة لحلول نظم المعلومات الصحية؟</h3>
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
                            <a href="{{ route('health-systems') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('health-systems-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('health-systems-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
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

