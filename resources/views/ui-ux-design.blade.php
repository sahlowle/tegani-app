@extends('layouts.app')

@section('title', 'تصميم واجهات وتجربة المستخدم - صناع البرمجيات')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%); padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff;">
                            تصميم واجهات وتجربة <span style="color: #00d4ff;">المستخدم</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; font-size: 1.2rem;">
                            نؤمن أن نجاح أي نظام يبدأ من تجربة المستخدم. نصمم واجهات تفاعلية عصرية تسهّل على المستخدم الوصول للخدمات بوضوح وسلاسة، مما يرفع رضا العملاء ويزيد ولاءهم للمنتج.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#contact" class="btn btn-primary btn-lg btn-interactive">
                                <i class="fas fa-rocket me-2"></i>
                                احصل على استشارة مجانية
                            </a>
                            <a href="#benefits" class="btn btn-outline-light btn-lg btn-interactive">
                                <i class="fas fa-info-circle me-2"></i>
                                اكتشف الفوائد
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="text-center">
                        <i class="fas fa-palette" style="font-size: 8rem; color: rgba(255,255,255,0.3);"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Details -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-detail-content">
                        <div class="service-intro">
                            <h3>🖥️ المفهوم</h3>
                            <p class="lead">
                                نؤمن أن نجاح أي نظام يبدأ من تجربة المستخدم. نصمم واجهات تفاعلية عصرية تسهّل على المستخدم الوصول للخدمات بوضوح وسلاسة، مما يرفع رضا العملاء ويزيد ولاءهم للمنتج.
                            </p>
                        </div>

                        <div class="benefits-section">
                            <h3>🎯 القيمة المضافة</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-user-check"></i>
                                        <span>تحليل سلوك المستخدم وتصميم رحلة تجربة مثالية (User Journey)</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-mobile-alt"></i>
                                        <span>تطبيق أحدث معايير التصميم العالمية (Material Design / Human Interface)</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-desktop"></i>
                                        <span>تصميم متجاوب لجميع الأجهزة والمنصات</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-chart-line"></i>
                                        <span>تحسين تجربة الاستخدام من خلال اختبارات A/B وتحليل الأداء</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="examples-section">
                            <h3>💡 أمثلة تطبيقية</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-building"></i>
                                        <h5>تصميم واجهات أنظمة حكومية</h5>
                                        <p>تصميم واجهات أنظمة حكومية تفاعلية</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-shopping-cart"></i>
                                        <h5>تطوير تجربة مستخدم للتجارة الإلكترونية</h5>
                                        <p>تطوير تجربة مستخدم لمنصة تجارة إلكترونية</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-cogs"></i>
                                        <h5>إعادة تصميم واجهات أنظمة ERP</h5>
                                        <p>إعادة تصميم واجهات نظام ERP أو CRM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="design-process">
                            <h3>🎨 عملية التصميم</h3>
                            <div class="process-steps">
                                <div class="process-step">
                                    <div class="step-number">1</div>
                                    <div class="step-content">
                                        <h5>البحث والتحليل</h5>
                                        <p>فهم احتياجات المستخدمين وتحليل المنافسين</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">2</div>
                                    <div class="step-content">
                                        <h5>التصميم الأولي</h5>
                                        <p>إنشاء نماذج أولية وتصاميم سريعة</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">3</div>
                                    <div class="step-content">
                                        <h5>الاختبار والتحسين</h5>
                                        <p>اختبار التصاميم مع المستخدمين وتحسينها</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">4</div>
                                    <div class="step-content">
                                        <h5>التطوير والتنفيذ</h5>
                                        <p>تحويل التصاميم إلى واجهات تفاعلية</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="technologies-section">
                            <h3>🛠️ الأدوات والتقنيات</h3>
                            <div class="tech-tags">
                                <span class="tech-tag">Figma</span>
                                <span class="tech-tag">Adobe XD</span>
                                <span class="tech-tag">Sketch</span>
                                <span class="tech-tag">InVision</span>
                                <span class="tech-tag">Material Design</span>
                                <span class="tech-tag">Human Interface Guidelines</span>
                                <span class="tech-tag">Responsive Design</span>
                                <span class="tech-tag">A/B Testing</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="service-sidebar">
                        <div class="sidebar-card">
                            <h4>احصل على استشارة مجانية</h4>
                            <p>نحن هنا لمساعدتك في تصميم واجهات متميزة لمستخدميك</p>
                            <a href="index.html#contact" class="btn btn-primary w-100">تواصل معنا</a>
                        </div>
                        
                        <div class="sidebar-card">
                            <h4>خدمات أخرى</h4>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('consulting-services') }}">الاستشارات التقنية</a></li>
                                <li><a href="{{ route('system-development') }}">تطوير الأنظمة</a></li>
                                <li><a href="{{ route('system-integration') }}">تكامل الأنظمة</a></li>
                                <li><a href="{{ route('project-management') }}">إدارة المشاريع التقنية</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-card">
                <h3>هل تريد تصميم واجهات متميزة تجذب مستخدميك؟</h3>
                <p>تواصل معنا اليوم واحصل على استشارة مجانية لتصميم واجهاتك</p>
                <a href="index.html#contact" class="btn btn-light btn-lg me-3">احصل على استشارة مجانية</a>
                <a href="tel:+966555883492" class="btn btn-outline-light btn-lg">اتصل بنا الآن</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Bootstrap JS -->
@endsection
