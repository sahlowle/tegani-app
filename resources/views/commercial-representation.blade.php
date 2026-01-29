@extends('layouts.app')

@section('title', 'التمثيل التجاري والتفاوض | شركة صناع البرمجيات')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-user-tie me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">التمثيل التجاري والتفاوض</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            تمثيل العملاء في المفاوضات والاجتماعات مع الشركاء والمستثمرين
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
                    <span class="service-badge">التمثيل التجاري والتفاوض</span>
                    <h2 class="section-title">تمثيل تجاري <span class="text-gradient">احترافي</span></h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up">
                    <!-- Idea Section -->
                    <div class="service-intro mb-5">
                        <div class="d-flex align-items-center mb-4">
                            <span class="display-3 me-3">💡</span>
                            <h2 class="mb-0">الفكرة</h2>
                        </div>
                        <p class="lead">
                            نقوم بتمثيل عملائنا في الاجتماعات والمفاوضات التجارية محليًا ودوليًا، بأسلوب احترافي يحافظ على المصالح الاستراتيجية ويحقق أفضل النتائج.
                            نُقدّم خدمات تمثيل تعزز حضور الشركة في الأسواق وتبني الثقة مع الشركاء والمستثمرين.
                        </p>
                    </div>

                    <!-- Value Added Section -->
                    <div class="service-features-section mb-5">
                        <div class="d-flex align-items-center mb-4">
                            <span class="display-3 me-3">🎯</span>
                            <h2 class="mb-0">القيمة المضافة</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-file-signature fa-2x"></i>
                                    </div>
                                    <h5>إعداد ملفات تفاوض احترافية</h5>
                                    <p>قائمة على تحليل دقيق للمواقف والمصالح</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-handshake fa-2x"></i>
                                    </div>
                                    <h5>التفاوض بالنيابة عن العملاء</h5>
                                    <p>وفق أساليب تفاوض متقدمة</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-building fa-2x"></i>
                                    </div>
                                    <h5>تمثيل المؤسسات</h5>
                                    <p>في المؤتمرات والعقود والمناقصات</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-network-wired fa-2x"></i>
                                    </div>
                                    <h5>بناء علاقات طويلة المدى</h5>
                                    <p>قائمة على الشفافية والمنفعة المتبادلة</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Examples Section -->
                    <div class="examples-section mb-5">
                        <div class="d-flex align-items-center mb-4">
                            <span class="display-3 me-3">💼</span>
                            <h2 class="mb-0">أمثلة تطبيقية</h2>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>التفاوض على عقود توزيع إقليمية</h5>
                                        <p class="card-text">لصالح عملاء في قطاع التجزئة</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>تمثيل شركة محلية في اتفاقية شراكة</h5>
                                        <p class="card-text">مع مستثمرين دوليين</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>المشاركة في مفاوضات شراء</h5>
                                        <p class="card-text">تقنيات أو تراخيص حصرية</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quote Section -->
                    <div class="alert alert-light border-primary text-center p-4">
                        <i class="fas fa-quote-right fa-2x text-primary mb-3"></i>
                        <p class="h5 mb-0">في شركة صُنّاع البرمجيات، نمثّل مصلحة شركتك بثقة ونزاهة، مستندين إلى استراتيجيات مدروسة وتأثير حقيقي يضمن تحقيق نتائج مثالية ومستدامة.</p>
                    </div>

                    <!-- CTA Section -->
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
    @endsection
