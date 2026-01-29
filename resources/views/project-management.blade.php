@extends('layouts.app')

@section('title', 'إدارة المشاريع التقنية - صناع البرمجيات')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff;">
                            إدارة <span style="color: #00d4ff;">المشاريع التقنية</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; font-size: 1.2rem;">
                            نقدّم إدارة متكاملة للمشروعات التقنية تشمل التخطيط، التنفيذ، المراقبة، وضمان الجودة باستخدام أرقى منهجيات الإدارة العالمية مثل PMI، PRINCE2، Agile.
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
                        <i class="fas fa-project-diagram" style="font-size: 8rem; color: rgba(255,255,255,0.3);"></i>
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
                            <h3>🧩 المفهوم</h3>
                            <p class="lead">
                                نقدّم إدارة متكاملة للمشروعات التقنية تشمل التخطيط، التنفيذ، المراقبة، وضمان الجودة باستخدام أرقى منهجيات الإدارة العالمية مثل PMI، PRINCE2، Agile.
                            </p>
                        </div>

                        <div class="benefits-section">
                            <h3>🎯 القيمة المضافة</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-clock"></i>
                                        <span>ضمان التنفيذ وفق المعايير الزمنية والمالية المتفق عليها</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <span>إدارة المخاطر وتحديد أولويات المشروع لتحقيق أقصى فاعلية</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-chart-bar"></i>
                                        <span>مراقبة الأداء عبر لوحات تحكم رقمية تفاعلية Dashboard</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-users"></i>
                                        <span>بناء فرق عمل متكاملة وتنسيق فعال بين الموردين والشركاء</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="examples-section">
                            <h3>💡 أمثلة تطبيقية</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-globe"></i>
                                        <h5>إدارة مشروع بناء منصة وطنية رقمية</h5>
                                        <p>تطوير منصة حكومية شاملة للخدمات الإلكترونية</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-cogs"></i>
                                        <h5>تطوير نظام ERP</h5>
                                        <p>إدارة مشروع تطوير نظام ERP في مؤسسة متعددة الفروع</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-cloud"></i>
                                        <h5>إشراف على مشاريع التحول السحابي</h5>
                                        <p>إشراف على مشاريع التحول السحابي أو البنية التحتية التقنية</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="methodologies-section">
                            <h3>📋 المنهجيات المستخدمة</h3>
                            <div class="methodology-tags">
                                <span class="methodology-tag">PMI</span>
                                <span class="methodology-tag">PRINCE2</span>
                                <span class="methodology-tag">Agile</span>
                                <span class="methodology-tag">Scrum</span>
                                <span class="methodology-tag">Kanban</span>
                                <span class="methodology-tag">Lean</span>
                                <span class="methodology-tag">Six Sigma</span>
                            </div>
                        </div>

                        <div class="process-section">
                            <h3>🔄 مراحل إدارة المشروع</h3>
                            <div class="process-steps">
                                <div class="process-step">
                                    <div class="step-number">1</div>
                                    <div class="step-content">
                                        <h5>التخطيط</h5>
                                        <p>وضع خطة شاملة للمشروع وتحديد الموارد المطلوبة</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">2</div>
                                    <div class="step-content">
                                        <h5>التنفيذ</h5>
                                        <p>تنفيذ المشروع وفق الخطة الموضوعة</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">3</div>
                                    <div class="step-content">
                                        <h5>المراقبة</h5>
                                        <p>مراقبة التقدم وضمان الجودة</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">4</div>
                                    <div class="step-content">
                                        <h5>التسليم</h5>
                                        <p>تسليم المشروع النهائي للعميل</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="service-sidebar">
                        <div class="sidebar-card">
                            <h4>احصل على استشارة مجانية</h4>
                            <p>نحن هنا لمساعدتك في إدارة مشاريعك التقنية بكفاءة عالية</p>
                            <a href="index.html#contact" class="btn btn-primary w-100">تواصل معنا</a>
                        </div>
                        
                        <div class="sidebar-card">
                            <h4>خدمات أخرى</h4>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('consulting-services') }}">الاستشارات التقنية</a></li>
                                <li><a href="{{ route('system-development') }}">تطوير الأنظمة</a></li>
                                <li><a href="{{ route('system-integration') }}">تكامل الأنظمة</a></li>
                                <li><a href="{{ route('process-automation') }}">تحسين وأتمتة العمليات</a></li>
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
                <h3>هل تريد إدارة مشاريعك التقنية بأعلى معايير الجودة؟</h3>
                <p>تواصل معنا اليوم واحصل على استشارة مجانية لإدارة مشاريعك التقنية</p>
                <a href="index.html#contact" class="btn btn-light btn-lg me-3">احصل على استشارة مجانية</a>
                <a href="tel:+966555883492" class="btn btn-outline-light btn-lg">اتصل بنا الآن</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Bootstrap JS -->
@endsection
