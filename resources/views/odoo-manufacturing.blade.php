@extends('layouts.app')

@section('title', 'خدمات Odoo - إدارة التصنيع (Manufacturing) | شركة صناع البرمجيات المحدودة')

@section('content')
<section class="py-5" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="text-center mb-5">
                        <h1 class="display-4 fw-bold text-primary mb-3" style="font-size: 3rem; margin-bottom: 2rem;">إدارة التصنيع</h1>
                    </div>
                    
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2 class="text-primary mb-4">💡 نظرتنا:</h2>
                                    <p class="lead mb-4">ندرك أن قطاع التصنيع هو القلب النابض للمنشآت الإنتاجية، وأن أي خلل بسيط في التخطيط أو المراقبة قد يسبب خسائر كبيرة. من هذا الوعي، طوّرت شركة صُنّاع البرمجيات خبرة استثنائية في تحويل وحدة التصنيع داخل Odoo إلى مركز ذكاء صناعي متكامل.</p>
                                    
                                    <h3 class="text-primary mb-3">⚙️ كيف نُنفّذها بكفاءة عالية:</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>نبدأ بتحليل خطوط الإنتاج وهيكل الموارد لتخصيص وحدات (Work Centers) دقيقة لكل عملية</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>نربط عمليات الإنتاج بالمخزون والمبيعات والشراء بحيث تعمل كل وحدة ضمن تدفق رقمي متزامن</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>نُفعّل أنظمة تتبع جودة الإنتاج والتوريد (Quality & Traceability) لرفع موثوقية المنتجات</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>نطوّر نماذج صيانة استباقية تعتمد على تحليل البيانات لتقليل الأعطال</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>نُدمج تقارير الإنتاج اللحظية في لوحة تحكم موحدة للإدارة العليا</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <i class="fas fa-industry text-primary" style="font-size: 8rem; opacity: 0.3;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-body p-5">
                            <h3 class="text-primary mb-4">🏆 تميّز صُنّاع البرمجيات:</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-cogs text-warning me-3 mt-1"></i>
                                        <div>
                                            <h5>تحويل Odoo Manufacturing إلى منظومة تصنيع ذكية قائمة على البيانات والتحليلات الدقيقة</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-link text-info me-3 mt-1"></i>
                                        <div>
                                            <h5>تكامل تام مع أنظمة الطاقة الإنتاجية وتخطيط الموارد</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-tools text-success me-3 mt-1"></i>
                                        <div>
                                            <h5>قدرة فنية عالية على تكييف النظام لأي نوع من خطوط الإنتاج (تصنيع خفيف، ثقيل، تجميعي)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-chart-bar text-primary me-3 mt-1"></i>
                                        <div>
                                            <h5>كفاءة تنفيذ تفوق 98% في تكامل البيانات بين التصنيع والمخزون والمبيعات</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <div class="alert alert-primary border-0 shadow-sm mb-4">
                            <h4 class="mb-0" style="font-size: 1.1rem;">مع شركة صُنّاع البرمجيات، يصبح  أودوو للتصنيع منظومة إنتاج متكاملة تعتمد على البيانات، وتجمع بين المرونة العالية والكفاءة التشغيلية لتحقيق أفضل أداء في كل مرحلة من مراحل التصنيع.</h4>
                        </div>
                        <a href="index.html#contact" class="btn btn-primary btn-lg px-5 py-3">اطلب استشارة</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
