@extends('layouts.app')

@section('title', 'شركة صناع البرمجيات المحدودة | تطوير البرمجيات والحلول التقنية | شريك Odoo معتمد')

@section('description', 'شركة صناع البرمجيات المحدودة - شركة سعودية رائدة في تطوير البرمجيات والحلول التقنية المتطورة باستخدام الذكاء الاصطناعي. شريك Odoo معتمد. نقدم خدمات تطوير الأنظمة، الاستشارات التقنية، تكامل الأنظمة، وإدارة المشاريع.')

@section('content')
<section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <span data-i18n="heroTitle1">نحن</span> <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);" data-i18n="heroTitle2">صناع البرمجيات</span>
                            <br><span data-i18n="heroTitle3">نبني المستقبل الرقمي</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;" data-i18n="heroSubtitle">
                            شركة سعودية رائدة في تطوير البرمجيات والحلول التقنية المتطورة
                            باستخدام الذكاء الاصطناعي والتقنيات الحديثة
                        </p>
                        <div class="partner-badges mb-4" style="background: rgba(0, 212, 255, 0.15); padding: 1rem; border-radius: 10px; border: 1px solid rgba(0, 212, 255, 0.3); display: flex; align-items: center; gap: 12px;">
                            <img class="odoo-badge" alt="Odoo Partner" src="{{ asset('images/odoo_logo.png') }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; filter: brightness(1.3);" />
                            <span style="color: #ffffff; font-weight: bold; text-shadow: 1px 1px 2px rgba(0,0,0,0.8);" data-i18n="heroOdooPartner">شريك Odoo معتمد</span>
                        </div>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#about" class="btn btn-primary btn-lg btn-interactive">
                                <i class="fas fa-rocket me-2"></i>
                                <span data-i18n="heroDiscover">اكتشف خدماتنا</span>
                            </a>
                            <a href="#contact" class="btn btn-outline-light btn-lg btn-interactive">
                                <i class="fas fa-phone me-2"></i>
                                <span data-i18n="heroContact">تواصل معنا</span>
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

    <section id="about" class="py-5 position-relative overflow-hidden">
        
        <div class="about-bg-pattern"></div>
        
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <div class="about-header">
                        <span class="about-badge" data-i18n="aboutBadge">من نحن</span>
                        <h2 class="section-title"><span data-i18n="aboutTitle">شركة</span> <span class="text-gradient" data-i18n="aboutTitle2">صناع البرمجيات</span></h2>
                        <p class="section-subtitle" data-i18n="aboutSubtitle">رائدون في حلول تقنية المعلومات والتحول الرقمي</p>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-content">
                        <div class="about-intro">
                            <div class="intro-badge">
                                <i class="fas fa-crown"></i>
                                <span data-i18n="aboutLeading">شركة سعودية رائدة</span>
                            </div>
                            <h3 class="about-title" data-i18n="aboutTitle3">
                                نحن رواد الابتكار التقني في المملكة
                            </h3>
                            <p class="about-description" data-i18n="aboutDesc1">
                                شركة صناع البرمجيات لحلول تقنية المعلومات هي شركة سعودية رائدة تعمل على صناعة وتطوير البرمجيات 
                                باستخدام أحدث التقنيات مثل الذكاء الاصطناعي، الأمن السيبراني، الواقع الافتراضي، وإنترنت الأشياء.
                            </p>
                            <p class="about-description" data-i18n="aboutDesc2">
                                نعمل على تطوير الأنظمة المؤسسية مثل أنظمة إدارة الموارد المؤسسية (ERP) وأنظمة إدارة المستشفيات (HIS)، 
                                وحلول Odoo المخصصة كشريك رسمي ومعتمد لشركة Odoo.
                            </p>
                        </div>
                        
                        <div class="about-stats d-flex flex-wrap justify-content-between">
                            <div class="stat-item">
                                <div class="stat-number">169</div>
                                <div class="stat-label" data-i18n="statProjects">مشروع مكتمل</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">1382</div>
                                <div class="stat-label" data-i18n="statClients">عدد العملاء الراضين</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">1214</div>
                                <div class="stat-label" data-i18n="statConsultations">استشارات تم تقديمها</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">7</div>
                                <div class="stat-label" data-i18n="statExperience">سنوات الخبرة</div>
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
                                        
                                        <path d="M18 46l8-28 8 28M21 36h10M44 18v28"/>
                                    </svg>
                                </div>
                                <div class="tech-content">
                                    <h5 data-i18n="techAI">الذكاء الاصطناعي</h5>
                                    <p data-i18n="techAIDesc">حلول ذكية متطورة</p>
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
                                    <h5 data-i18n="techCyber">الأمن السيبراني</h5>
                                    <p data-i18n="techCyberDesc">حماية شاملة للبيانات</p>
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
                                    <h5 data-i18n="techVR">الواقع الافتراضي</h5>
                                    <p data-i18n="techVRDesc">تجارب تفاعلية متقدمة</p>
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
                                    <h5 data-i18n="techIoT">إنترنت الأشياء</h5>
                                    <p data-i18n="techIoTDesc">ربط ذكي للأجهزة</p>
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
                        <h4 data-i18n="featureGlobal">خبرات عالمية</h4>
                        <p data-i18n="featureGlobalDesc">نستفيد من الخبرات الأمريكية والأوروبية وتوطينها بما يتوافق مع متطلبات السوق المحلي</p>
                        <div class="feature-highlight"></div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card enhanced">
                        <div class="feature-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4 data-i18n="featureVision">رؤية 2030</h4>
                        <p data-i18n="featureVisionDesc">نساهم في تحقيق رؤية المملكة العربية السعودية 2030 من خلال الحلول التقنية المبتكرة</p>
                        <div class="feature-highlight"></div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card enhanced">
                        <div class="feature-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4 data-i18n="featureDigital">التحول الرقمي</h4>
                        <p data-i18n="featureDigitalDesc">ندعم عملاءنا في رحلتهم نحو التطوير والنجاح المستدام إلى أبعد الأفاق</p>
                        <div class="feature-highlight"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vision-mission" class="py-5 bg-light position-relative overflow-hidden">
        
        <div class="vm-bg-pattern"></div>
        
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <div class="vm-header">
                        <span class="vm-badge" data-i18n="vmBadge">رؤيتنا ورسالتنا</span>
                        <h2 class="section-title"><span data-i18n="vmTitle">نحو مستقبلٍ</span> <span class="text-gradient" data-i18n="vmTitle2">رقمي أكثر كفاءة</span></h2>
                        <p class="section-subtitle" data-i18n="vmSubtitle">نحن نؤمن بقوة التكنولوجيا في بناء مستقبل أفضل</p>
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
                            <h3 class="vm-title" data-i18n="visionTitle">رؤيتـــنــا</h3>
                            <p class="vm-text" data-i18n="visionText">
                                ان تكون شركة صناع البرمجيات المحدودة الشركة الرائدة في مجال الاستشارات والتسويق وحلول تقنيات المعلومات، حيث أنها توفر حلولًا مستدامة ومبتكرة لمواجهة التحديات في المملكة العربية السعودية وخارجها.
                            </p>
                            <div class="vm-features">
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span data-i18n="vision1">الريادة في الاستشارات</span>
                                </div>
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span data-i18n="vision2">حلول مستدامة ومبتكرة</span>
                                </div>
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span data-i18n="vision3">الوصول للمنطقة والعالم</span>
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
                            <h3 class="vm-title" data-i18n="missionTitle">رسالتنا</h3>
                            <p class="vm-text" data-i18n="missionText">
                                تمكين المؤسسات الحكومية والخاصة من التحول الرقمي وتوسيع حضورها في السوقين المحلي والدولي عبر حلول ابتكارية تدعم الاستثمار والتشغيل. نلتزم أن نكون شريكًا موثوقًا يحول التحديات إلى فرص، وأن نكون مساهمين في بناء مستقبل أكثر كفاءة واستدامة بما يتوافق مع رؤية المملكة 2030.
                            </p>
                            <div class="vm-features">
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span data-i18n="mission1">تمكين التحول الرقمي</span>
                                </div>
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span data-i18n="mission2">حلول ابتكارية</span>
                                </div>
                                <div class="vm-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span data-i18n="mission3">دعم رؤية 2030</span>
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

    <section id="why-us" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title"><span data-i18n="whyTitle">لماذا</span> <span class="text-primary" data-i18n="whyTitle2">صناع البرمجيات</span><span data-i18n="whyTitle3">؟</span></h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <div class="why-content">
                            <h4 data-i18n="why1">نظام موحّد</h4>
                            <p data-i18n="why1Desc">يدمج كافة عمليات الشركة في منصة واحدة متكاملة</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                        <div class="why-content">
                            <h4 data-i18n="why2">سهولة التوسع</h4>
                            <p data-i18n="why2Desc">إمكانية إضافة وحدات جديدة مستقبلاً بسهولة</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <div class="why-content">
                            <h4 data-i18n="why3">تحسين الكفاءة</h4>
                            <p data-i18n="why3Desc">رفع الكفاءة التشغيلية وتقليل الأخطاء البشرية</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <div class="why-content">
                            <h4 data-i18n="why4">تقارير آنية</h4>
                            <p data-i18n="why4Desc">تقارير وتحليلات فورية تدعم اتخاذ القرار</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tech-services" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title"><span data-i18n="servicesTitle">الخدمات</span> <span class="text-primary" data-i18n="servicesTitle2">التقنية والاستشارية</span></h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-lightbulb">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 data-i18n="serviceConsulting">الاستشارات التقنية</h4>
                        <p data-i18n="serviceConsultingDesc">نقدّم استشارات استراتيجية وتقنية شاملة تمكّن المؤسسات من اتخاذ قرارات دقيقة في رحلة التحول الرقمي</p>
                        <a href="{{ route('consulting-services') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left me-2"></i>
                            <span data-i18n="readMore">اقرأ المزيد</span>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-cogs">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4 data-i18n="serviceDev">تطوير الأنظمة</h4>
                        <p data-i18n="serviceDevDesc">تصميم وتطوير أنظمة متكاملة تلائم طبيعة العميل، تشمل الأنظمة المؤسسية والمواقع والتطبيقات الذكية</p>
                        <a href="{{ route('system-development') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left me-2"></i>
                            <span data-i18n="readMore">اقرأ المزيد</span>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-link">
                            <i class="fas fa-link"></i>
                        </div>
                        <h4 data-i18n="serviceInt">تكامل الأنظمة</h4>
                        <p data-i18n="serviceIntDesc">ربط الأنظمة المتعددة داخل المؤسسة أو بينها وبين جهات خارجية عبر حلول تكامل ذكية</p>
                        <a href="{{ route('system-integration') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left me-2"></i>
                            <span data-i18n="readMore">اقرأ المزيد</span>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-diagram">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h4 data-i18n="servicePM">إدارة المشاريع التقنية</h4>
                        <p data-i18n="servicePMDesc">إدارة متكاملة للمشروعات التقنية تشمل التخطيط، التنفيذ، المراقبة، وضمان الجودة</p>
                        <a href="{{ route('project-management') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left me-2"></i>
                            <span data-i18n="readMore">اقرأ المزيد</span>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-robot">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h4 data-i18n="serviceAuto">تحسين وأتمتة العمليات</h4>
                        <p data-i18n="serviceAutoDesc">تحويل العمليات اليدوية إلى عمليات مؤتمتة ذكية تعتمد على الذكاء الاصطناعي والتحليل التنبؤي</p>
                        <a href="{{ route('process-automation') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left me-2"></i>
                            <span data-i18n="readMore">اقرأ المزيد</span>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-palette">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4 data-i18n="serviceUIUX">تصميم واجهات وتجربة المستخدم</h4>
                        <p data-i18n="serviceUIUXDesc">تصميم واجهات تفاعلية عصرية تسهّل على المستخدم الوصول للخدمات بوضوح وسلاسة</p>
                        <a href="{{ route('ui-ux-design') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left me-2"></i>
                            <span data-i18n="readMore">اقرأ المزيد</span>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-card interactive-element">
                        <div class="service-icon icon-tools">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4 data-i18n="serviceSupport">خدمات الدعم الفني والصيانة</h4>
                        <p data-i18n="serviceSupportDesc">دعم فني متكامل يضمن استمرارية الأنظمة الرقمية دون توقف عبر فرق متخصصة</p>
                        <a href="{{ route('maintenance-support') }}" class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left me-2"></i>
                            <span data-i18n="readMore">اقرأ المزيد</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="business-development-services" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <span class="service-badge" data-i18n="businessBadge">خدمات تطوير الأعمال</span>
                    <h2 class="section-title"><span data-i18n="businessTitle">خدمات تطوير</span> <span class="text-primary" data-i18n="businessTitle2">الأعمال</span></h2>
                    <p class="section-subtitle" data-i18n="businessSubtitle">خدمات شاملة لدعم نمو وتطوير أعمالك</p>
                </div>
            </div>
            
            <div class="row">
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('growth-strategy') }}" class="text-decoration-none text-reset">
                        <div class="service-card interactive-element">
                            <div class="service-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4 data-i18n="businessGrowth">صياغة استراتيجيات النمو</h4>
                            <p data-i18n="businessGrowthDesc">إعداد خطط استراتيجية مبتكرة لزيادة الحصة السوقية وتعزيز القدرة التنافسية محلياً ودولياً</p>
                            <span class="btn btn-primary btn-sm mt-3">
                                <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                            </span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('partnership-management') }}" class="text-decoration-none text-reset">
                        <div class="service-card interactive-element">
                            <div class="service-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h4 data-i18n="businessPartnership">إدارة وبناء الشراكات</h4>
                            <p data-i18n="businessPartnershipDesc">البحث عن فرص التعاون وبناء شراكات استراتيجية مع جهات محلية ودولية</p>
                            <span class="btn btn-primary btn-sm mt-3">
                                <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                            </span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('market-analysis') }}" class="text-decoration-none text-reset">
                        <div class="service-card interactive-element">
                            <div class="service-icon">
                                <i class="fas fa-search-dollar"></i>
                            </div>
                            <h4 data-i18n="businessMarket">تحليل الأسواق والفرص الاستثمارية</h4>
                            <p data-i18n="businessMarketDesc">دراسة الأسواق المستهدفة وتحليل الاتجاهات والتحديات لاختيار أفضل الفرص</p>
                            <span class="btn btn-primary btn-sm mt-3">
                                <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                            </span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <a href="{{ route('business-model-design') }}" class="text-decoration-none text-reset">
                        <div class="service-card interactive-element">
                            <div class="service-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h4 data-i18n="businessModel">تصميم نماذج الأعمال</h4>
                            <p data-i18n="businessModelDesc">ابتكار نماذج أعمال متكاملة ومستدامة تضمن الربحية والقيمة المضافة</p>
                            <span class="btn btn-primary btn-sm mt-3">
                                <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                            </span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <a href="{{ route('development-projects') }}" class="text-decoration-none text-reset">
                        <div class="service-card interactive-element">
                            <div class="service-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h4 data-i18n="businessProjects">إدارة المشاريع التطويرية</h4>
                            <p data-i18n="businessProjectsDesc">قيادة وتنفيذ مشاريع تطوير الأعمال من الفكرة حتى النتائج الملموسة</p>
                            <span class="btn btn-primary btn-sm mt-3">
                                <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                            </span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <a href="{{ route('commercial-representation') }}" class="text-decoration-none text-reset">
                        <div class="service-card interactive-element">
                            <div class="service-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h4 data-i18n="businessCommercial">التمثيل التجاري والتفاوض</h4>
                            <p data-i18n="businessCommercialDesc">تمثيل العملاء في المفاوضات والاجتماعات مع الشركاء والمستثمرين لتحقيق أفضل النتائج</p>
                            <span class="btn btn-primary btn-sm mt-3">
                                <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="odoo-partner-banner" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-5 text-center" data-aos="fade-right">
                    <img src="{{ asset('images/smlc-odoo.png') }}" data-i18n-alt="odooTitle" alt="شركة صناع البرمجيات - شريك Odoo الرسمي المعتمد في السعودية" class="img-fluid" style="max-height: 260px;">
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <h2 class="mb-3" data-i18n="odooTitle">شركاء رسميون لـ Odoo</h2>
                    <p class="lead mb-3" data-i18n="odooDesc">
                        نفخر بثقة Odoo بنا كشريك رسمي لتقديم حلول ERP شاملة تُبسط إدارة الأعمال
                        وتربط الفرق والعمليات في منصة واحدة ذكية وسهلة الاستخدام.
                    </p>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary ms-2"></i> <span data-i18n="odoo1">تنفيذ احترافي وتخصيص يتوافق مع طبيعة أعمالكم</span></li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary ms-2"></i> <span data-i18n="odoo2">تدريب ودعم فني مستمر لضمان نجاح التحول الرقمي</span></li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary ms-2"></i> <span data-i18n="odoo3">تكامل مرن مع الأنظمة والخدمات الحالية</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="odoo-services" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title"><span data-i18n="odooServicesTitle">خدمات</span> <span class="text-primary" data-i18n="odooServicesTitle2">Odoo ERP</span></h2>
                    <p class="section-subtitle" data-i18n="odooServicesSubtitle">شريك رسمي ومعتمد لشركة Odoo</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-sales') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Sales" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/sale/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5 data-i18n="odooSales">إدارة المبيعات</h5>
                        <p data-i18n="odooSalesDesc">متابعة عروض الأسعار وأوامر البيع والفواتير</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-purchase') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Purchase" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/purchase/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5 data-i18n="odooPurchase">إدارة المشتريات</h5>
                        <p data-i18n="odooPurchaseDesc">تنظيم أوامر الشراء وإدارة الموردين</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-inventory') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Inventory" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/stock/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5 data-i18n="odooInventory">إدارة المخزون</h5>
                        <p data-i18n="odooInventoryDesc">التحكم الكامل في المخزون وتتبع البضائع</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-hr') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo HR" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/hr/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5 data-i18n="odooHR">الموارد البشرية</h5>
                        <p data-i18n="odooHRDesc">إدارة التوظيف والحضور والرواتب</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-accounting') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Accounting" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/account/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5 data-i18n="odooAccounting">المحاسبة والمالية</h5>
                        <p data-i18n="odooAccountingDesc">إدارة الحسابات والضرائب والتقارير المالية</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-crm') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo CRM" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/crm/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5 data-i18n="odooCRM">إدارة العملاء CRM</h5>
                        <p data-i18n="odooCRMDesc">تتبع العملاء وفرص المبيعات والحملات</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-project') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Project" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/project/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5 data-i18n="odooProject">إدارة المشاريع</h5>
                        <p data-i18n="odooProjectDesc">تخطيط وتنظيم وتتبع تقدم المشاريع</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                        </span>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                    <a class="text-reset text-decoration-none" href="{{ route('odoo-manufacturing') }}">
                    <div class="odoo-card">
                        <div class="odoo-icon">
                            <img alt="Odoo Manufacturing" src="https://raw.githubusercontent.com/odoo/odoo/17.0/addons/mrp/static/description/icon.png" style="height:48px;width:48px;object-fit:contain;"/>
                        </div>
                        <h5 data-i18n="odooManufacturing">إدارة التصنيع</h5>
                        <p data-i18n="odooManufacturingDesc">تخطيط وتتبع عمليات الإنتاج بكفاءة</p>
                        <span class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-arrow-left ms-1"></i> قراءة المزيد
                        </span>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="health-information-systems" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <span class="service-badge" data-i18n="healthBadge">نظم المعلومات الصحية</span>
                    <h2 class="section-title"><span data-i18n="healthTitle">خدمات</span> <span class="text-primary" data-i18n="healthTitle2">نظم المعلومات الصحية</span></h2>
                    <p class="section-subtitle" data-i18n="healthSubtitle">حلول تقنية متكاملة للمستشفيات والمراكز الصحية</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <div class="card border-primary">
                        <div class="card-body p-5">
                            <i class="fas fa-hospital fa-3x text-primary mb-4"></i>
                            <h4 class="mb-3" data-i18n="healthCardTitle">حلول شاملة لنظم المعلومات الصحية</h4>
                            <p class="lead mb-4" data-i18n="healthCardDesc">
                                نقدم حلولاً تقنية متكاملة للمستشفيات والمراكز الصحية تشمل إدارة المرضى، السجلات الطبية الإلكترونية، إدارة الصيدلية، العمليات الجراحية، والتحليلات الصحية باستخدام الذكاء الاصطناعي.
                            </p>
                            <a href="{{ route('health-systems') }}" class="btn btn-primary btn-lg">
                                <i class="fas fa-arrow-left me-2"></i>
                                <span data-i18n="healthReadMore">اقرأ المزيد عن خدمات نظم المعلومات الصحية</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sovereign-systems" class="py-5 bg-light position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <span class="service-badge" data-i18n="sovereignBadge">الأنظمة السيادية والتحول الرقمي</span>
                    <h2 class="section-title"><span data-i18n="sovereignTitle">شركة صُنّاع البرمجيات…</span> <span class="text-primary" data-i18n="sovereignTitle2">خبرة متكاملة في بناء الأنظمة السيادية والتحول الرقمي الشامل</span></h2>
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
                                    <p class="lead mb-4" style="line-height: 2; font-size: 1.1rem; color: #333;" data-i18n="sovereignDesc">
                                        تتمتّع شركة صُنّاع البرمجيات المحدودة بقدرات راسخة وخبرة متقدمة في تطوير وتنفيذ وتشغيل الأنظمة الوطنية والسيادية، وفق أعلى المعايير التقنية والتنظيمية المعتمدة عالمياً. وقد رسخت الشركة مكانتها كجهة تنفيذية موثوقة في المشاريع الحكومية الكبرى، وذلك بفضل امتلاكها منظومة متكاملة من الخبرات والكفاءات والكوادر المتخصصة.
                                    </p>
                                    <a href="login.html?redirect=sovereign-systems.html" class="btn btn-primary btn-lg">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        <span data-i18n="sovereignReadMore">اقرأ المزيد عن قدراتنا في الأنظمة السيادية</span>
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
                        <span>خدمات التسويق عبر العلاقات</span>
                    </h2>
                    <p class="lead mb-4">
                        نقدم خدمات تسويقية متكاملة تركز على بناء علاقات قوية مع العملاء والشركاء، من خلال استراتيجيات تسويقية مبتكرة وحلول مخصصة تساعدك على توسيع نطاق أعمالك وزيادة حضورك في السوق.
                    </p>
                    <a href="{{ route('marketing-services') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-arrow-left ms-2"></i>
                        اكتشف خدماتنا التسويقية
                    </a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="feature-card enhanced h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h5>إدارة العلاقات</h5>
                                <p>بناء علاقات قوية مع العملاء والشركاء</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card enhanced h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h5>استراتيجيات تسويقية</h5>
                                <p>حلول تسويقية مبتكرة ومخصصة</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card enhanced h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <h5>حملات تسويقية</h5>
                                <p>حملات فعالة لزيادة الحضور في السوق</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card enhanced h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <h5>شبكة العلاقات</h5>
                                <p>توسيع شبكة علاقاتك التجارية</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ai-support" class="py-5 text-white" style="background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="mb-4" style="font-size: 2.5rem;">
                        <i class="fas fa-microchip me-3" style="font-size: 2rem; background: linear-gradient(135deg, #00d4ff, #22e1ff, #4bffa5); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent;"></i>
                        <span data-i18n="aiTitle">نظام الدعم الفني الذكي</span>
                        <span class="d-block h4 mt-2" data-i18n="aiSubtitle">ResolvePro AI</span>
                    </h2>
                    <p class="lead mb-4" data-i18n="aiDesc">
                        أتمتة ذكية لنظام الدعم الفني وتحويل كل استفسار إلى حل سريع ودقيق
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-2"></i>
                                <span data-i18n="ai1">تكامل فوري دون تعقيد</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-2"></i>
                                <span data-i18n="ai2">ردود ذكية وواعية بالسياق</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-2"></i>
                                <span data-i18n="ai3">واجهة مرشدة للوكيل</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-2"></i>
                                <span data-i18n="ai4">قابلية توسع تلقائية</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="ai-features">
                        <div class="feature-item">
                            <i class="fas fa-brain"></i>
                            <div>
                                <h5 data-i18n="aiFeature1">محرك قرارات متعدد المراحل</h5>
                                <p data-i18n="aiFeature1Desc">من الفرز الأولي إلى التشخيص وصياغة الحلول</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-chart-bar"></i>
                            <div>
                                <h5 data-i18n="aiFeature2">حلقة تحسين مستمرة</h5>
                                <p data-i18n="aiFeature2Desc">تحليلات لقياس زمن الحل ورضا العملاء</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-rocket"></i>
                            <div>
                                <h5 data-i18n="aiFeature3">إطلاق سريع</h5>
                                <p data-i18n="aiFeature3Desc">من إثبات المفهوم إلى التشغيل الكامل في أسابيع</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="py-5" style="display: none !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">فريق <span class="text-primary">العمل</span></h2>
                    <p class="section-subtitle">نؤمن بالشغف في صناعة البرمجيات والابتكار وتجارب المستخدم المميزة.</p>
                </div>
            </div>

            <div class="row g-4">
                
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

    <section id="partners" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title"><span data-i18n="partnersTitle">الاعتمادات -</span> <span class="text-primary" data-i18n="partnersTitle2">الشراكات</span></h2>
                    <p class="section-subtitle" data-i18n="partnersSubtitle">جهات نعتمد عليها ونفخر بالتعاون معها</p>
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

    <section id="testimonials" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title"><span data-i18n="testimonialsTitle">ماذا</span> <span class="text-primary" data-i18n="testimonialsTitle2">قالوا عنا</span></h2>
                    <p class="section-subtitle" data-i18n="testimonialsSubtitle">آراء عملائنا وشركائنا عن جودة خدماتنا</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="testimonial-card">
                        <div class="testimonial-rating" aria-label="5 نجوم">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text" data-i18n="testimonial1">خدمة احترافية ودعم سريع. ساعدونا على تسريع التحول الرقمي لدينا بكفاءة عالية.</p>
                        <div class="testimonial-author">
                            <img class="avatar" alt="عميل" src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" style="width: 50px; height: 50px; border-radius: 50%;"/>
                            <div>
                                <h6 class="mb-0" data-i18n="client1">أحمد السبيعي</h6>
                                <small class="text-muted" data-i18n="client1Role">مدير تقنية المعلومات</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <div class="testimonial-rating" aria-label="5 نجوم">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text" data-i18n="testimonial2">حلول مبتكرة وتنفيذ متقن. فريق متعاون ويقدم قيمة مضافة حقيقية.</p>
                        <div class="testimonial-author">
                            <img class="avatar" alt="عميل" src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" style="width: 50px; height: 50px; border-radius: 50%;"/>
                            <div>
                                <h6 class="mb-0" data-i18n="client2">نورة القحطاني</h6>
                                <small class="text-muted" data-i18n="client2Role">مديرة مشاريع</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <div class="testimonial-rating" aria-label="5 نجوم">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text" data-i18n="testimonial3">أفضل شريك تقني تعاملنا معه في السنوات الأخيرة. نوصي بهم بشدة.</p>
                        <div class="testimonial-author">
                            <img class="avatar" alt="عميل" src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" style="width: 50px; height: 50px; border-radius: 50%;"/>
                            <div>
                                <h6 class="mb-0" data-i18n="client3">سالم الشهري</h6>
                                <small class="text-muted" data-i18n="client3Role">رئيس قطاع الأعمال</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="presence" class="py-5 bg-light position-relative overflow-hidden">
        
        <div class="presence-bg-pattern"></div>
        
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <div class="presence-header">
                        <span class="presence-badge" data-i18n="presenceBadge">تواجدنا</span>
                        <h2 class="section-title"><span data-i18n="presenceTitle">حضورنا</span> <span class="text-gradient" data-i18n="presenceTitle2">العالمي</span></h2>
                        <p class="section-subtitle" data-i18n="presenceSubtitle">تتواجد الشركة في أربع مواقع رئيسية هي:</p>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="presence-map-container">
                        <div class="world-map-image">
                            <img src="{{ asset('images/world.png') }}" 
                                 data-i18n-alt="presenceTitle" alt="خريطة تواجد شركة صناع البرمجيات في السعودية وأمريكا ومصر والبحرين والسنغال" 
                                 class="world-map-img">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="presence-locations">
                        <div class="location-item" data-country="saudi">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/sa.png" alt="علم السعودية" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5 data-i18n="locationSA">المملكة العربية السعودية</h5>
                                <p data-i18n="locationSACity">مكة المكرمة</p>
                            </div>
                        </div>
                        
                        <div class="location-item" data-country="usa">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/us.png" alt="علم أمريكا" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5 data-i18n="locationUSA">الولايات المتحدة الأمريكية</h5>
                                <p data-i18n="locationUSACity">شيكاغو</p>
                            </div>
                        </div>
                        
                        <div class="location-item" data-country="egypt">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/eg.png" alt="علم مصر" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5 data-i18n="locationEgypt">مصر</h5>
                                <p data-i18n="locationEgyptCity">القاهرة</p>
                            </div>
                        </div>
                        
                        <div class="location-item" data-country="bahrain">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/bh.png" alt="علم البحرين" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5 data-i18n="locationBahrain">البحرين</h5>
                                <p data-i18n="locationBahrainCity">المنامة</p>
                            </div>
                        </div>
                        
                        <div class="location-item coming-soon" data-country="senegal">
                            <div class="location-flag">
                                <img src="https://flagcdn.com/w40/sn.png" alt="علم السنغال" class="flag-img">
                            </div>
                            <div class="location-info">
                                <h5 data-i18n="locationSenegal">السنغال</h5>
                                <p><span data-i18n="locationSenegalCity">داكار</span> <span class="coming-soon-badge" data-i18n="comingSoon">(قريباً)</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-12" data-aos="fade-up">
                    <div class="presence-description">
                        <p class="text-center lead" data-i18n="presenceDesc">
                            مما يسمح بالتعاون مع الخبراء العالميين والاستفادة من الخبرات الدولية ونماذج الاعمال التجارية التي تمثل أفضل الممارسات، وبفضل ذلك، يتم تقديم خدمات مميزة وعالية الجودة التي تلبي احتياجات ومتطلبات العملاء.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title text-white"><span data-i18n="contactTitle">تواصل</span> <span class="text-primary" data-i18n="contactTitle2">معنا</span></h2>
                    <p class="section-subtitle text-light" data-i18n="contactSubtitle">نحن هنا لمساعدتك في تحقيق أهدافك التقنية</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    
                    <form id="contact-form" class="contact-form" action="{{ route('contact-form-email') }}" method="POST" data-aos="fade-up">
                        @csrf

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="name" class="form-label" data-i18n="contactName">الاسم الكامل</label>
                                    <input type="text" class="form-control" id="name" name="name" data-i18n="contactName" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="email" class="form-label" data-i18n="contactEmail">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" id="email" name="email" data-i18n="contactEmail" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="phone" class="form-label" data-i18n="contactPhone">رقم الهاتف</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" data-i18n="contactPhone">
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="message" class="form-label" data-i18n="contactMessage">نص الرسالة</label>
                                <textarea class="form-control" id="message" name="message" rows="5" data-i18n="contactMessage" required></textarea>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>
                                <span data-i18n="contactSend">إرسال الرسالة</span>
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
                        <h5 data-i18n="contactCall">اتصل بنا</h5>
                        <p>966555883492+</p>
                    </div>
                </div>
                
                <div class="col-lg-6 text-center mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5 data-i18n="contactEmailUs">راسلنا</h5>
                        <p>info@smlc.com</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-3 justify-content-center">
                <div class="col-12 text-center">
                    <h6 class="text-light mb-3" data-i18n="contactFollow">تابعنا على الشبكات</h6>
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
