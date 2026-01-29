@extends('layouts.app')

@section('title', 'الاستشارات التقنية | شركة صناع البرمجيات المحدودة')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-lightbulb me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">الاستشارات التقنية</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            استشارات تقنية متخصصة لمساعدتك في اتخاذ القرارات الصحيحة في عالم التكنولوجيا المتطور
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
                        <span class="service-badge">الاستشارات التقنية</span>
                        <h2 class="section-title">حلول استشارية <span class="text-gradient">متخصصة ومتطورة</span></h2>
                        <p class="section-subtitle">نقدم استشارات تقنية شاملة لمساعدتك في اختيار وتطبيق أفضل الحلول التقنية</p>
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
                            <h3>ما هي الاستشارات التقنية؟</h3>
                            <p class="lead">
                                الاستشارات التقنية هي عملية تقديم المشورة المتخصصة في مجال التكنولوجيا لمساعدة المؤسسات 
                                في اتخاذ القرارات الصحيحة المتعلقة بالحلول التقنية. نحن نقدم تحليلاً شاملاً لاحتياجاتك التقنية 
                                ونوصي بأفضل الحلول التي تناسب أهدافك وميزانيتك.
                            </p>
                        </div>

                        <div class="service-features-section">
                            <h3>خدماتنا الاستشارية</h3>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="feature-card">
                                        <div class="feature-icon">
                                            <i class="fas fa-search"></i>
                                        </div>
                                        <h5>تحليل الاحتياجات التقنية</h5>
                                        <p>نقوم بتحليل شامل لاحتياجاتك التقنية الحالية والمستقبلية لتحديد أفضل الحلول المناسبة.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="feature-card">
                                        <div class="feature-icon">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <h5>تقييم البنية التحتية</h5>
                                        <p>نقيم البنية التحتية التقنية الموجودة ونحدد نقاط القوة والضعف لتحسين الأداء.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="feature-card">
                                        <div class="feature-icon">
                                            <i class="fas fa-route"></i>
                                        </div>
                                        <h5>خطط التحول الرقمي</h5>
                                        <p>نضع خطط شاملة للتحول الرقمي تتضمن مراحل واضحة وجدول زمني واقعي.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="feature-card">
                                        <div class="feature-icon">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <h5>استشارات الأمن السيبراني</h5>
                                        <p>نقدم استشارات متخصصة في الأمن السيبراني لحماية بياناتك وأنظمتك من التهديدات.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="consultation-process">
                            <h3>عملية الاستشارة</h3>
                            <div class="process-timeline">
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <span class="marker-number">1</span>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>الاستكشاف والتحليل</h5>
                                        <p>نبدأ بفهم عملك واحتياجاتك التقنية من خلال جلسات استكشافية شاملة.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <span class="marker-number">2</span>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>التقييم التقني</h5>
                                        <p>نقوم بتقييم شامل للوضع التقني الحالي ونحدد الفرص والتحسينات المطلوبة.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <span class="marker-number">3</span>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>التوصيات والحلول</h5>
                                        <p>نقدم توصيات مفصلة مع خيارات متعددة وتقييم التكلفة والعائد على الاستثمار.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <span class="marker-number">4</span>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>التنفيذ والدعم</h5>
                                        <p>نساعدك في تنفيذ التوصيات ونقدم الدعم المستمر لضمان نجاح التحول.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="benefits-section">
                            <h3>فوائد الاستشارات التقنية</h3>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-dollar-sign"></i>
                                        <h6>توفير التكاليف</h6>
                                        <p>تجنب الاستثمارات الخاطئة وتوفير المال على المدى الطويل</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-tachometer-alt"></i>
                                        <h6>تحسين الكفاءة</h6>
                                        <p>زيادة الإنتاجية وتحسين العمليات التشغيلية</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <h6>تقليل المخاطر</h6>
                                        <p>تجنب المخاطر التقنية والاستثمارات غير المناسبة</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cta-section">
                            <div class="cta-card">
                                <h3>هل تحتاج استشارة تقنية؟</h3>
                                <p>تواصل معنا اليوم للحصول على استشارة مجانية وتقييم احتياجاتك التقنية</p>
                                <a href="index.html#contact" class="btn btn-primary btn-lg">
                                    <i class="fas fa-phone me-2"></i>
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
    <!-- Bootstrap JS -->
@endsection
