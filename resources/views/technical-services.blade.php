@extends('layouts.app')

@section('title', 'الخدمات التقنية | شركة صناع البرمجيات المحدودة')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-cogs me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">الخدمات التقنية</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            حلول تقنية شاملة ومتطورة لجميع احتياجاتك التقنية
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
                        <span class="service-badge">الخدمات التقنية</span>
                        <h2 class="section-title">حلول تقنية <span class="text-gradient">شاملة ومتطورة</span></h2>
                        <p class="section-subtitle">نقدم مجموعة واسعة من الخدمات التقنية المتخصصة لتلبية جميع احتياجاتك التقنية</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-grid">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-lightbulb"></i>
                                    </div>
                                    <h4>الاستشارات التقنية</h4>
                                    <p>استشارات متخصصة لمساعدتك في اتخاذ القرارات الصحيحة في عالم التكنولوجيا</p>
                                    <ul class="service-features">
                                        <li>تحليل الاحتياجات التقنية</li>
                                        <li>تقييم البنية التحتية</li>
                                        <li>خطط التحول الرقمي</li>
                                        <li>استشارات الأمن السيبراني</li>
                                    </ul>
                                    <a href="{{ route('consulting-services') }}" class="btn btn-outline-primary">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <h4>تطوير الأنظمة</h4>
                                    <p>تطوير أنظمة متكاملة تشمل المواقع والتطبيقات وأنظمة إدارة الموارد</p>
                                    <ul class="service-features">
                                        <li>المواقع الإلكترونية</li>
                                        <li>التطبيقات الجوالة</li>
                                        <li>أنظمة ERP</li>
                                        <li>أنظمة HIS</li>
                                    </ul>
                                    <a href="{{ route('system-development') }}" class="btn btn-outline-primary">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-tools"></i>
                                    </div>
                                    <h4>الصيانة والدعم</h4>
                                    <p>خدمات صيانة شاملة ودعم فني متخصص لضمان استمرارية عمل أنظمتك</p>
                                    <ul class="service-features">
                                        <li>الصيانة الوقائية</li>
                                        <li>الصيانة التصحيحية</li>
                                        <li>التحديثات والتطوير</li>
                                        <li>الدعم الفني 24/7</li>
                                    </ul>
                                    <a href="{{ route('maintenance-support') }}" class="btn btn-outline-primary">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <h4>التدريب التقني</h4>
                                    <p>برامج تدريبية متخصصة لتطوير مهاراتك التقنية وزيادة كفاءتك المهنية</p>
                                    <ul class="service-features">
                                        <li>تطوير البرمجيات</li>
                                        <li>تطوير التطبيقات الجوالة</li>
                                        <li>الأمن السيبراني</li>
                                        <li>الحوسبة السحابية</li>
                                    </ul>
                                    <a href="{{ route('technical-training') }}" class="btn btn-outline-primary">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <h4>الأمن السيبراني</h4>
                                    <p>حلول أمنية متطورة لحماية أنظمتك وبياناتك من التهديدات السيبرانية</p>
                                    <ul class="service-features">
                                        <li>تقييم الأمان</li>
                                        <li>حماية الشبكات</li>
                                        <li>إدارة الهجمات</li>
                                        <li>التدريب الأمني</li>
                                    </ul>
                                    <a href="index.html#contact" class="btn btn-outline-primary">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-cloud"></i>
                                    </div>
                                    <h4>الحلول السحابية</h4>
                                    <p>حلول سحابية متطورة لتحسين كفاءة أنظمتك وتقليل التكاليف</p>
                                    <ul class="service-features">
                                        <li>الهجرة السحابية</li>
                                        <li>إدارة البنية التحتية</li>
                                        <li>الحلول الهجينة</li>
                                        <li>النسخ الاحتياطية</li>
                                    </ul>
                                    <a href="index.html#contact" class="btn btn-outline-primary">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">لماذا تختار خدماتنا التقنية؟</h2>
                    <p class="section-subtitle">نتميز بتقديم حلول تقنية متطورة وخدمة عملاء متميزة</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h5>خبرة واسعة</h5>
                        <p>أكثر من 10 سنوات من الخبرة في مجال التكنولوجيا</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5>فريق متخصص</h5>
                        <p>فريق من الخبراء المتخصصين في مختلف المجالات التقنية</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>دعم مستمر</h5>
                        <p>دعم فني متاح على مدار الساعة لجميع عملائنا</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h5>ضمان الجودة</h5>
                        <p>نضمن جودة عالية في جميع خدماتنا مع ضمان استرداد المال</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <div class="cta-card">
                        <h3>هل تحتاج مساعدة في اختيار الخدمة المناسبة؟</h3>
                        <p>تواصل معنا اليوم للحصول على استشارة مجانية ومساعدتك في اختيار أفضل الحلول التقنية</p>
                        <a href="index.html#contact" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-phone me-2"></i>
                            احجز استشارة مجانية
                        </a>
                        <a href="tel:+966555883492" class="btn btn-outline-primary btn-lg">
                            اتصل بنا الآن
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Bootstrap JS -->
@endsection
