@extends('layouts.app')

@section('title', 'الصيانة والدعم | شركة صناع البرمجيات المحدودة')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-tools me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">الصيانة والدعم</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            نقدم خدمات صيانة شاملة ودعم فني متخصص لضمان استمرارية عمل أنظمتك بكفاءة عالية
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
                        <span class="service-badge">الصيانة والدعم</span>
                        <h2 class="section-title">دعم فني <span class="text-gradient">مستمر وموثوق</span></h2>
                        <p class="section-subtitle">نضمن استمرارية عمل أنظمتك مع خدمات صيانة شاملة ودعم فني متاح على مدار الساعة</p>
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
                            <h3>ما هي خدمات الصيانة والدعم؟</h3>
                            <p class="lead">
                                خدمات الصيانة والدعم هي مجموعة من الخدمات التقنية المستمرة التي نقدمها لضمان استمرارية عمل أنظمتك 
                                بكفاءة عالية. تشمل هذه الخدمات الصيانة الوقائية والتحديثات الدورية وإصلاح الأعطال والدعم الفني 
                                المتخصص لجميع أنواع الأنظمة والبرمجيات.
                            </p>
                        </div>

                        <div class="maintenance-types">
                            <h3>أنواع خدمات الصيانة</h3>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="maintenance-card">
                                        <div class="maintenance-icon">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <h5>الصيانة الوقائية</h5>
                                        <p>فحص دوري شامل لجميع مكونات النظام لتجنب الأعطال قبل حدوثها</p>
                                        <ul>
                                            <li>فحص الأمان والحماية</li>
                                            <li>تحديث البرمجيات</li>
                                            <li>فحص الأداء والسرعة</li>
                                            <li>نسخ احتياطية دورية</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="maintenance-card">
                                        <div class="maintenance-icon">
                                            <i class="fas fa-wrench"></i>
                                        </div>
                                        <h5>الصيانة التصحيحية</h5>
                                        <p>إصلاح الأعطال والمشاكل التقنية فور اكتشافها</p>
                                        <ul>
                                            <li>تشخيص المشاكل</li>
                                            <li>إصلاح الأخطاء</li>
                                            <li>استعادة البيانات</li>
                                            <li>تحسين الأداء</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="maintenance-card">
                                        <div class="maintenance-icon">
                                            <i class="fas fa-sync-alt"></i>
                                        </div>
                                        <h5>التحديثات والتطوير</h5>
                                        <p>تحديث الأنظمة وإضافة ميزات جديدة لتحسين الأداء</p>
                                        <ul>
                                            <li>تحديث البرمجيات</li>
                                            <li>إضافة ميزات جديدة</li>
                                            <li>تحسين الواجهات</li>
                                            <li>تطوير الوظائف</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="maintenance-card">
                                        <div class="maintenance-icon">
                                            <i class="fas fa-headset"></i>
                                        </div>
                                        <h5>الدعم الفني</h5>
                                        <p>دعم فني متخصص متاح على مدار الساعة لحل المشاكل</p>
                                        <ul>
                                            <li>دعم فوري</li>
                                            <li>حل المشاكل عن بُعد</li>
                                            <li>تدريب المستخدمين</li>
                                            <li>استشارات تقنية</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="support-levels">
                            <h3>مستويات الدعم</h3>
                            <div class="support-tiers">
                                <div class="support-tier">
                                    <div class="tier-header">
                                        <h5>الدعم الأساسي</h5>
                                        <span class="tier-badge">24/7</span>
                                    </div>
                                    <div class="tier-features">
                                        <ul>
                                            <li>دعم فني عبر الهاتف والبريد الإلكتروني</li>
                                            <li>إصلاح الأعطال خلال 24 ساعة</li>
                                            <li>تحديثات أمنية دورية</li>
                                            <li>نسخ احتياطية أسبوعية</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="support-tier premium">
                                    <div class="tier-header">
                                        <h5>الدعم المتقدم</h5>
                                        <span class="tier-badge premium">VIP</span>
                                    </div>
                                    <div class="tier-features">
                                        <ul>
                                            <li>دعم فوري عبر الهاتف والفيديو</li>
                                            <li>إصلاح الأعطال خلال 4 ساعات</li>
                                            <li>تحديثات يومية وميزات جديدة</li>
                                            <li>نسخ احتياطية يومية</li>
                                            <li>مدير حساب مخصص</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="support-tier">
                                    <div class="tier-header">
                                        <h5>الدعم المؤسسي</h5>
                                        <span class="tier-badge">Enterprise</span>
                                    </div>
                                    <div class="tier-features">
                                        <ul>
                                            <li>دعم مخصص 24/7 مع فريق مخصص</li>
                                            <li>إصلاح فوري للأعطال الحرجة</li>
                                            <li>تطوير مخصص حسب الطلب</li>
                                            <li>نسخ احتياطية متعددة</li>
                                            <li>تدريب شامل للمستخدمين</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="maintenance-process">
                            <h3>عملية الصيانة</h3>
                            <div class="maintenance-timeline">
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>التشخيص والفحص</h5>
                                        <p>فحص شامل للنظام وتشخيص أي مشاكل محتملة</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>تقرير الحالة</h5>
                                        <p>إعداد تقرير مفصل عن حالة النظام والتوصيات</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="fas fa-tools"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>التطبيق والإصلاح</h5>
                                        <p>تطبيق التحديثات والإصلاحات المطلوبة</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h5>الاختبار والتحقق</h5>
                                        <p>اختبار النظام والتأكد من عمل جميع الوظائف</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="benefits-section">
                            <h3>فوائد خدمات الصيانة والدعم</h3>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-clock"></i>
                                        <h6>استمرارية العمل</h6>
                                        <p>ضمان عمل الأنظمة على مدار الساعة دون انقطاع</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <h6>الأمان والحماية</h6>
                                        <p>حماية الأنظمة من التهديدات الأمنية والاختراقات</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-chart-line"></i>
                                        <h6>تحسين الأداء</h6>
                                        <p>تحسين أداء الأنظمة وزيادة الكفاءة التشغيلية</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cta-section">
                            <div class="cta-card">
                                <h3>هل تحتاج خدمات صيانة ودعم؟</h3>
                                <p>تواصل معنا اليوم للحصول على خطة صيانة مخصصة لاحتياجاتك</p>
                                <a href="index.html#contact" class="btn btn-primary btn-lg">
                                    <i class="fas fa-headset me-2"></i>
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
