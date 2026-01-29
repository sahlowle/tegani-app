@extends('layouts.app')

@section('title', 'خدمات Odoo - إدارة المبيعات (Sales) | شركة صناع البرمجيات المحدودة')

@section('content')
<section class="py-5" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="text-center mb-5">
                        <h1 class="display-4 fw-bold text-primary mb-3" style="font-size: 3rem; margin-bottom: 2rem;">إدارة المبيعات</h1>
                    </div>
                    
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2 class="text-primary mb-4">💡 نظرتنا:</h2>
                                    <p class="lead mb-4">نحوّل وحدة المبيعات في Odoo إلى منظومة ذكية تدير دورة البيع من الفرصة حتى التحصيل. بفريقنا المتخصص، نجعل النظام يتحدث بلغة أهدافك ويعمل وفق أسلوبك.</p>
                                    
                                    <h3 class="text-primary mb-3">⚙️ ما الذي نُقدّمه فعليًا:</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>تخصيص هيكل المبيعات وفق دورة العميل الفعلية (من التسعير إلى الفواتير)</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>ربط المبيعات بالمخزون والمحاسبة لتحديث آلي فوري</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>بناء تقارير أداء لحظية توضح نسب الإنجاز، العملاء النشطين، وحجم الإيرادات</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>أتمتة العروض والمتابعات لتسريع الإغلاق وتحسين الكفاءة البيعية</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <i class="fas fa-chart-line text-primary" style="font-size: 8rem; opacity: 0.3;"></i>
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
                                        <i class="fas fa-rocket text-warning me-3 mt-1"></i>
                                        <div>
                                            <h5>نُحوّل نظام Odoo إلى أداة نمو حقيقية لا مجرّد نظام إدخال بيانات</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-industry text-info me-3 mt-1"></i>
                                        <div>
                                            <h5>لدينا سجل ناجح في تصميم أنظمة مبيعات متقدمة تخدم قطاعات متعددة (صناعي، طبي، حكومي)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-brain text-success me-3 mt-1"></i>
                                        <div>
                                            <h5>نُطبّق حلول AI لتحليل سلوك العملاء والتنبؤ بالمبيعات المستقبلية</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <div class="alert alert-primary border-0 shadow-sm mb-4">
                            <h4 class="mb-0" style="font-size: 1.1rem;">شركة صُنّاع البرمجيات تجعل من أودوو للمبيعات محركًا ذكيًا للنمو، يقوده التحليل الدقيق والأتمتة الفعّالة.</h4>
                        </div>
                        <a href="index.html#contact" class="btn btn-primary btn-lg px-5 py-3">اطلب استشارة</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
