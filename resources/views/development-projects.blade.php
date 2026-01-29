@extends('layouts.app')

@section('title', 'إدارة المشاريع التطويرية | شركة صناع البرمجيات')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-project-diagram me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">إدارة المشاريع التطويرية</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            قيادة وتنفيذ مشاريع تطوير الأعمال من الفكرة حتى النتائج الملموسة
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
                    <span class="service-badge">إدارة المشاريع التطويرية</span>
                    <h2 class="section-title">مشاريع تطويرية <span class="text-gradient">ناجحة</span></h2>
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
                            نقود المشاريع التطويرية من الفكرة إلى التنفيذ الفعلي عبر إدارة شاملة تغطي التخطيط، التنفيذ، المراقبة، وضمان الجودة.
                            نطبق منهجيات عالمية لضمان التوازن بين الوقت والجودة والتكلفة.
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
                                        <i class="fas fa-clipboard-check fa-2x"></i>
                                    </div>
                                    <h5>إعداد خطط مشاريع دقيقة</h5>
                                    <p>وفق منهجيات PMI وAgile</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-users fa-2x"></i>
                                    </div>
                                    <h5>إدارة الموارد</h5>
                                    <p>البشرية والتقنية والمالية بكفاءة عالية</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-exclamation-triangle fa-2x"></i>
                                    </div>
                                    <h5>تحليل المخاطر</h5>
                                    <p>وتقديم حلول استباقية</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-tachometer-alt fa-2x"></i>
                                    </div>
                                    <h5>تقارير أداء ولوحات متابعة</h5>
                                    <p>ذكية</p>
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
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>إدارة مشروع رقمي</h5>
                                        <p class="card-text">في قطاع الخدمات الحكومية</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>قيادة تطوير منصة تجارة إلكترونية</h5>
                                        <p class="card-text">وطنية</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>إدارة مشروع شراكة استثمارية</h5>
                                        <p class="card-text">بين شركات متعددة</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quote Section -->
                    <div class="alert alert-light border-primary text-center p-4">
                        <i class="fas fa-quote-right fa-2x text-primary mb-3"></i>
                        <p class="h5 mb-0">في شركة صُنّاع البرمجيات، ندير المشروعات التطويرية المعقدة بكفاءة عالية، نُوازن بين الدقة في التنفيذ والمرونة في التكيّف، لنقدّم نتائج ملموسة قابلة للقياس.</p>
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
