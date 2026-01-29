@extends('layouts.app')

@section('title', 'إدارة وبناء الشراكات | شركة صناع البرمجيات')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-handshake me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">إدارة وبناء الشراكات</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            البحث عن فرص التعاون وبناء شراكات استراتيجية مع جهات محلية ودولية
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
                    <span class="service-badge">إدارة وبناء الشراكات</span>
                    <h2 class="section-title">شراكات استراتيجية <span class="text-gradient">مستدامة</span></h2>
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
                            نؤسس وندير شبكات شراكات استراتيجية محلية ودولية تحقق التكامل والتوسع المشترك بين المؤسسات.
                            نصمم العلاقات التعاونية على أساس القيمة المتبادلة والاستدامة التجارية.
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
                                        <i class="fas fa-search fa-2x"></i>
                                    </div>
                                    <h5>البحث والتحليل</h5>
                                    <p>لتحديد أفضل الشركاء الاستراتيجيين وفق أهداف المؤسسة</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-file-contract fa-2x"></i>
                                    </div>
                                    <h5>إعداد نماذج التعاون</h5>
                                    <p>مثل التحالفات التجارية، اتفاقيات التوزيع، والشراكات التقنية</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-tasks fa-2x"></i>
                                    </div>
                                    <h5>دعم مراحل التفاوض</h5>
                                    <p>توقيع الاتفاقيات، وإدارة العلاقات بعد التنفيذ</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon text-primary">
                                        <i class="fas fa-trophy fa-2x"></i>
                                    </div>
                                    <h5>تعزيز حضور العلامة التجارية</h5>
                                    <p>عبر شراكات ذات تأثير</p>
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
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>بناء شراكة استراتيجية</h5>
                                        <p class="card-text">بين جهة حكومية وشركة استشارية عالمية</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>تصميم تحالف تجاري</h5>
                                        <p class="card-text">بين مصنع محلي وموزع إقليمي</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-primary me-2"></i>تطوير شبكة شركاء</h5>
                                        <p class="card-text">في قطاع التقنية والخدمات اللوجستية</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quote Section -->
                    <div class="alert alert-light border-primary text-center p-4">
                        <i class="fas fa-quote-right fa-2x text-primary mb-3"></i>
                        <p class="h5 mb-0">نحن لا نكتفي ببناء الشراكات، بل نربط أصحاب الرؤى لخلق تحالفات مؤثرة تُلهم وتُثمر نجاحًا متبادلًا على المدى البعيد.</p>
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
