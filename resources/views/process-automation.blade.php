@extends('layouts.app')

@section('title', 'تحسين وأتمتة العمليات - صناع البرمجيات')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #fdbb2d 0%, #22c1c3 100%); padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff;">
                            تحسين وأتمتة <span style="color: #00d4ff;">العمليات</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; font-size: 1.2rem;">
                            نحوّل العمليات اليدوية إلى عمليات مؤتمتة ذكية تعتمد على الذكاء الاصطناعي والتحليل التنبؤي، مما يرفع كفاءة المؤسسة ويقلل من الهدر والتكاليف التشغيلية.
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
                        <i class="fas fa-robot" style="font-size: 8rem; color: rgba(255,255,255,0.3);"></i>
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
                            <h3>🤖 المفهوم</h3>
                            <p class="lead">
                                نحوّل العمليات اليدوية إلى عمليات مؤتمتة ذكية تعتمد على الذكاء الاصطناعي والتحليل التنبؤي، مما يرفع كفاءة المؤسسة ويقلل من الهدر والتكاليف التشغيلية.
                            </p>
                        </div>

                        <div class="benefits-section">
                            <h3>🎯 القيمة المضافة</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-tachometer-alt"></i>
                                        <span>تسريع الأداء بنسبة تصل إلى 60%</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>تقليل الأخطاء البشرية وتحسين جودة الخدمات</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-cogs"></i>
                                        <span>دمج تقنيات RPA (الأتمتة الروبوتية) وMachine Learning في بيئة العمل</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-chart-line"></i>
                                        <span>بناء أنظمة تقارير فورية تدعم اتخاذ القرار</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="examples-section">
                            <h3>💡 أمثلة تطبيقية</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-file-alt"></i>
                                        <h5>أتمتة معالجة الطلبات</h5>
                                        <p>أتمتة معالجة الطلبات والموافقات الإدارية</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-chart-bar"></i>
                                        <h5>تحليل البيانات التشغيلية</h5>
                                        <p>تحليل البيانات التشغيلية لتوقع الأعطال قبل وقوعها</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-bell"></i>
                                        <h5>نظام تنبيهات ذكي</h5>
                                        <p>بناء نظام تنبيهات ذكي للأداء التشغيلي</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="technologies-section">
                            <h3>🛠️ التقنيات المستخدمة</h3>
                            <div class="tech-tags">
                                <span class="tech-tag">RPA (Robotic Process Automation)</span>
                                <span class="tech-tag">Machine Learning</span>
                                <span class="tech-tag">Artificial Intelligence</span>
                                <span class="tech-tag">Workflow Automation</span>
                                <span class="tech-tag">Business Process Management</span>
                                <span class="tech-tag">Data Analytics</span>
                                <span class="tech-tag">Predictive Analytics</span>
                                <span class="tech-tag">Cloud Computing</span>
                            </div>
                        </div>

                        <div class="automation-benefits">
                            <h3>📊 فوائد الأتمتة</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="automation-benefit">
                                        <h5>تحسين الكفاءة</h5>
                                        <ul>
                                            <li>تقليل الوقت المطلوب لإنجاز المهام</li>
                                            <li>زيادة الإنتاجية بنسبة 60%</li>
                                            <li>تقليل التكاليف التشغيلية</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="automation-benefit">
                                        <h5>تحسين الجودة</h5>
                                        <ul>
                                            <li>تقليل الأخطاء البشرية</li>
                                            <li>ضمان الاتساق في العمليات</li>
                                            <li>تحسين جودة الخدمات المقدمة</li>
                                        </ul>
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
                            <p>نحن هنا لمساعدتك في أتمتة عملياتك وتحسين كفاءتها</p>
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
                <h3>هل تريد أتمتة عملياتك ورفع كفاءتها إلى 60%؟</h3>
                <p>تواصل معنا اليوم واحصل على استشارة مجانية لأتمتة عملياتك</p>
                <a href="index.html#contact" class="btn btn-light btn-lg me-3">احصل على استشارة مجانية</a>
                <a href="tel:+966555883492" class="btn btn-outline-light btn-lg">اتصل بنا الآن</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Bootstrap JS -->
@endsection
