@extends('layouts.app')

@section('title', 'تحليل الأسواق والفرص الاستثمارية | شركة صناع البرمجيات')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-search-dollar me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">تحليل الأسواق والفرص الاستثمارية</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            دراسة الأسواق المستهدفة وتحليل الاتجاهات والتحديات
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
                    <span class="service-badge">تحليل الأسواق والفرص الاستثمارية</span>
                    <h2 class="section-title">تحليل شامل <span class="text-gradient">للأسواق</span></h2>
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
                            نُجري دراسات متقدمة للسوق والمنافسة باستخدام أدوات تحليل البيانات والذكاء السوقي (Market Intelligence) لتحديد أفضل الفرص الاستثمارية.
                            نركّز على تحليل الاتجاهات المستقبلية وسلوك العملاء ومؤشرات الطلب.
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
                                        <i class="fas fa-chart-pie fa-2x"></i>
                                    </div>
                                    <h5>تحليل مفصل للقطاعات</h5>
                                    <p>المستهدفة والعوامل الاقتصادية المؤثرة</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-trending-up fa-2x"></i>
                                    </div>
                                    <h5>دراسة حجم السوق</h5>
                                    <p>ومعدلات النمو المتوقعة والمخاطر المحتملة</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-compass fa-2x"></i>
                                    </div>
                                    <h5>تحديد الفجوات الاستثمارية</h5>
                                    <p>والفرص ذات العائد العالي</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-file-alt fa-2x"></i>
                                    </div>
                                    <h5>تقارير شاملة</h5>
                                    <p>تساعد في اتخاذ قرارات مبنية على بيانات دقيقة</p>
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
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>دراسة سوق الخدمات الصحية الرقمية</h5>
                                        <p class="card-text">في السعودية والخليج</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>تحليل جدوى التوسع</h5>
                                        <p class="card-text">في أسواق شمال أفريقيا لمنتج صناعي</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>تحديد فرص الاستثمار</h5>
                                        <p class="card-text">في قطاع الطاقة المتجددة</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quote Section -->
                    <div class="alert alert-light border-primary text-center p-4">
                        <i class="fas fa-quote-right fa-2x text-primary mb-3"></i>
                        <p class="h5 mb-0">نكشف فرص النموّ المخفية داخل البيانات، مما يمكّن من اتخاذ قرارات استثمارية أكثر ذكاءً.</p>
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
