@extends('layouts.app')

@section('title', 'خدمات Odoo - المحاسبة والمالية (Accounting) | شركة صناع البرمجيات المحدودة')

@section('content')
<section class="py-5" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="text-center mb-5">
                        <h1 class="display-4 fw-bold text-primary mb-3" style="font-size: 3rem; margin-bottom: 2rem;">المحاسبة والمالية</h1>
                    </div>
                    
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2 class="text-primary mb-4">💡 نظرتنا:</h2>
                                    <p class="lead mb-4">نعتبر وحدة Odoo Accounting العصب المالي للمؤسسة. نُصممها لتمنحك دقة رقمية فورية ورؤية مالية إستراتيجية لحظة بلحظة.</p>
                                    
                                    <h3 class="text-primary mb-3">⚙️ ما الذي نُنفّذه:</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>إعداد مخطط حسابات متكامل يتوافق مع المعايير الدولية IFRS</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>ربط كامل بين المحاسبة والمبيعات والمشتريات والرواتب</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>أتمتة القيود اليومية والإقفال المالي الشهري</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>بناء لوحات مالية تحليلية (Dashboards) توضح الإيرادات والمصروفات والسيولة</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <i class="fas fa-calculator text-primary" style="font-size: 8rem; opacity: 0.3;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-body p-5">
                            <h3 class="text-primary mb-4">🏆 لماذا صُنّاع البرمجيات الأفضل في التنفيذ:</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-link text-warning me-3 mt-1"></i>
                                        <div>
                                            <h5>ندمج الحلول المحاسبية مع أنظمة ZATCA لإصدار الفواتير الإلكترونية المعتمدة في السعودية</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-chart-line text-info me-3 mt-1"></i>
                                        <div>
                                            <h5>خبرة في تكوين تقارير مالية تنفيذية لجهات رقابية وحكومية</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-sync text-success me-3 mt-1"></i>
                                        <div>
                                            <h5>كفاءة عالية في التحول من الأنظمة التقليدية إلى Odoo دون تعطّل للعمليات</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <div class="alert alert-primary border-0 shadow-sm mb-4">
                            <h4 class="mb-0" style="font-size: 1.1rem;">مع شركة صُنّاع البرمجيات، تصبح المالية لغة الوضوح, كل رقم في مكانه، كل إجراء متوافق، وكل قرار جاهز للمستقبل.</h4>
                        </div>
                        <a href="index.html#contact" class="btn btn-primary btn-lg px-5 py-3">اطلب استشارة</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
