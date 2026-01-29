@extends('layouts.app')

@section('title', 'الأنظمة السيادية والتحول الرقمي | شركة صناع البرمجيات')

@section('content')
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

            <!-- NOTE: باقي الأنظمة (3 إلى 11) يمكن إضافتها هنا بنفس النمط عند الحاجة -->
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
                            <a href="{{ route('index') }}#contact" class="btn btn-light btn-lg">
                                <i class="fas fa-phone me-2"></i>
                                تواصل معنا الآن
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
