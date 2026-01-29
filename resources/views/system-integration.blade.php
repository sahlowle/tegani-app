@extends('layouts.app')

@section('title', 'تكامل الأنظمة - صناع البرمجيات')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff;">
                            تكامل <span style="color: #00d4ff;">الأنظمة</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; font-size: 1.2rem;">
                            ربط الأنظمة المتعددة داخل المؤسسة أو بينها وبين جهات خارجية عبر حلول تكامل ذكية (API / ESB / Middleware)، مما يخلق بيئة رقمية موحدة تعمل بانسجام تام.
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
                        <i class="fas fa-link" style="font-size: 8rem; color: rgba(255,255,255,0.3);"></i>
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
                            <h3>🔗 المفهوم</h3>
                            <p class="lead">
                                نقوم بربط الأنظمة المتعددة داخل المؤسسة أو بينها وبين جهات خارجية عبر حلول تكامل ذكية (API / ESB / Middleware)، مما يخلق بيئة رقمية موحدة تعمل بانسجام تام.
                            </p>
                        </div>

                        <div class="benefits-section">
                            <h3>🎯 القيمة المضافة</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-ban"></i>
                                        <span>إلغاء الازدواجية وتحسين تدفق المعلومات في الزمن الحقيقي</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-chart-line"></i>
                                        <span>تعزيز كفاءة القرار عبر دمج مصادر البيانات المتفرقة في لوحة موحدة</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-sync-alt"></i>
                                        <span>تحقيق التكامل بين الأنظمة القديمة (Legacy) والأنظمة الحديثة (Cloud / SaaS)</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <span>رفع مستوى الأمان والتوافق مع سياسات الحوكمة الرقمية</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="examples-section">
                            <h3>💡 أمثلة تطبيقية</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-users"></i>
                                        <h5>ربط نظام الموارد البشرية</h5>
                                        <p>ربط نظام الموارد البشرية بنظام الحضور والانصراف</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-building"></i>
                                        <h5>تكامل منصات الخدمات الحكومية</h5>
                                        <p>تكامل منصات الخدمات الحكومية عبر واجهات برمجة تطبيقات API</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="example-card">
                                        <i class="fas fa-credit-card"></i>
                                        <h5>ربط أنظمة الدفع الإلكترونية</h5>
                                        <p>ربط أنظمة الدفع الإلكترونية مع المنصات المالية الداخلية</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="technologies-section">
                            <h3>🛠️ التقنيات المستخدمة</h3>
                            <div class="tech-tags">
                                <span class="tech-tag">RESTful APIs</span>
                                <span class="tech-tag">GraphQL</span>
                                <span class="tech-tag">Enterprise Service Bus (ESB)</span>
                                <span class="tech-tag">Message Queues</span>
                                <span class="tech-tag">Webhooks</span>
                                <span class="tech-tag">Microservices</span>
                                <span class="tech-tag">Docker</span>
                                <span class="tech-tag">Kubernetes</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="service-sidebar">
                        <div class="sidebar-card">
                            <h4>احصل على استشارة مجانية</h4>
                            <p>نحن هنا لمساعدتك في تحديد أفضل حلول التكامل لمؤسستك</p>
                            <a href="index.html#contact" class="btn btn-primary w-100">تواصل معنا</a>
                        </div>
                        
                        <div class="sidebar-card">
                            <h4>خدمات أخرى</h4>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('consulting-services') }}">الاستشارات التقنية</a></li>
                                <li><a href="{{ route('system-development') }}">تطوير الأنظمة</a></li>
                                <li><a href="{{ route('project-management') }}">إدارة المشاريع التقنية</a></li>
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
                <h3>هل أنت مستعد لتحويل أنظمتك إلى بيئة موحدة ومتكاملة؟</h3>
                <p>تواصل معنا اليوم واحصل على استشارة مجانية لتحديد أفضل حلول التكامل لمؤسستك</p>
                <a href="index.html#contact" class="btn btn-light btn-lg me-3">احصل على استشارة مجانية</a>
                <a href="tel:+966555883492" class="btn btn-outline-light btn-lg">اتصل بنا الآن</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Bootstrap JS -->
@endsection
