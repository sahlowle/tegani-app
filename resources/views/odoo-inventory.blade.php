@extends('layouts.app')

@section('title', 'خدمات Odoo - إدارة المخزون (Inventory) | شركة صناع البرمجيات المحدودة')

@section('content')
<section class="py-5" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="text-center mb-5">
                        <h1 class="display-4 fw-bold text-primary mb-3" style="font-size: 3rem; margin-bottom: 2rem;">إدارة المخزون</h1>
                    </div>
                    
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2 class="text-primary mb-4">💡 نظرتنا:</h2>
                                    <p class="lead mb-4">ندرك أن دقة المخزون تعني كفاءة التشغيل وربحية الأعمال. لذلك نبني نظام Odoo Inventory بحيث يعمل كعينٍ رقمية لا تنام.</p>
                                    
                                    <h3 class="text-primary mb-3">⚙️ ما الذي نُنفّذه:</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>تتبّع كامل للمخزون عبر barcode و QR وإشعارات تلقائية للحركة</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>إدارة مستويات الصنف ونقاط إعادة الطلب (Reorder Points)</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>ربط مباشر بين المخزون والمبيعات والتصنيع والمشتريات</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>تقارير فورية عن القيمة والمواقع ومستوى الأداء</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <i class="fas fa-warehouse text-primary" style="font-size: 8rem; opacity: 0.3;"></i>
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
                                        <i class="fas fa-building text-warning me-3 mt-1"></i>
                                        <div>
                                            <h5>خبرة في إدارة مستودعات ضخمة متعددة الفروع على Odoo</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-chart-bar text-info me-3 mt-1"></i>
                                        <div>
                                            <h5>بناء أنظمة تحقق دقة تتجاوز 99.8 ٪ في الجرد والتحليل</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-brain text-success me-3 mt-1"></i>
                                        <div>
                                            <h5>استخدام الذكاء الاصطناعي لتوقّع النقص والاحتياجات المستقبلية</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <div class="alert alert-primary border-0 shadow-sm mb-4">
                            <h4 class="mb-0" style="font-size: 1.1rem;">تبني شركة صُنّاع البرمجيات مستودعات ذكية تُدار بالبيانات، حيث تُعدّ وتُتبع وتُحسَّن كل وحدة في الوقت الفعلي لتحقيق أقصى كفاءة تشغيلية</h4>
                        </div>
                        <a href="index.html#contact" class="btn btn-primary btn-lg px-5 py-3">اطلب استشارة</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
