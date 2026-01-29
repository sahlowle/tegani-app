@extends('layouts.app')

@section('title', 'تصميم نماذج الأعمال | شركة صناع البرمجيات')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-lightbulb me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">تصميم نماذج الأعمال</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            ابتكار نماذج أعمال متكاملة ومستدامة تضمن الربحية والقيمة المضافة
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
                    <span class="service-badge">تصميم نماذج الأعمال</span>
                    <h2 class="section-title">نماذج أعمال <span class="text-gradient">مبتكرة</span></h2>
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
                            نبتكر نماذج أعمال متكاملة تحقق التوازن بين الابتكار، والربحية، والاستدامة.
                            نساعد المؤسسات على إعادة هيكلة نماذجها التشغيلية لتتلاءم مع المتغيرات الرقمية والسوقية.
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
                                        <i class="fas fa-mobile-alt fa-2x"></i>
                                    </div>
                                    <h5>نماذج قائمة على المرونة</h5>
                                    <p>والتوسع الرقمي (Digital Scalability)</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-sitemap fa-2x"></i>
                                    </div>
                                    <h5>تحليل سلاسل القيمة</h5>
                                    <p>لتحسين العمليات التشغيلية</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-dollar-sign fa-2x"></i>
                                    </div>
                                    <h5>صياغة نماذج توليد إيرادات</h5>
                                    <p>مبتكرة ومتنوعة</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-sync-alt fa-2x"></i>
                                    </div>
                                    <h5>مواءمة نموذج العمل</h5>
                                    <p>مع تجربة العميل والتحول الرقمي</p>
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
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>ابتكار نموذج اشتراك شهري</h5>
                                        <p class="card-text">لخدمات تقنية SaaS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>إعادة تصميم نموذج عمل</h5>
                                        <p class="card-text">لمؤسسة تعتمد على المنصات الرقمية</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>تطوير نموذج هجين</h5>
                                        <p class="card-text">يجمع بين الإيرادات الثابتة والمتغيرة</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quote Section -->
                    <div class="alert alert-light border-primary text-center p-4">
                        <i class="fas fa-quote-right fa-2x text-primary mb-3"></i>
                        <p class="h5 mb-0">في شركة صُنّاع البرمجيات، نبتكر نماذج أعمال ذكية تجمع بين الإبداع في الرؤية، والكفاءة في التنفيذ، والربحية المستدامة.</p>
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
