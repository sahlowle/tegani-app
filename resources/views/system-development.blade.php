@extends('layouts.app')

@section('title', 'تطوير الأنظمة | شركة صناع البرمجيات المحدودة')

@section('content')
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
    <!-- Bootstrap JS -->
@endsection
