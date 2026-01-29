@extends('layouts.app')

@section('title', 'نظم إدارة المستشفيات HMS | شركة صناع البرمجيات')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-hospital me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">نظم إدارة المستشفيات (HMS)</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            نظام متكامل لإدارة المستشفى أو المركز الصحي بكفاءة عالية
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
                    <span class="service-badge">نظم إدارة المستشفيات HMS</span>
                    <h2 class="section-title">حلول متكاملة <span class="text-gradient">للرعاية الصحية</span></h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>المحتوى التفصيلي قيد الإعداد</strong>
                    </div>
                    <p class="lead mb-4">
                        نظام HMS (Hospital Management System) هو نظام متكامل يشمل جميع العمليات الإدارية والطبية في المستشفى أو المركز الصحي، مما يضمن كفاءة عالية في إدارة الموارد والخدمات الصحية.
                    </p>
                    
                    <div class="row mt-5">
                        <div class="col-md-6 mb-4">
                            <div class="card border-primary h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">
                                        <i class="fas fa-check-circle me-2"></i>المزايا الرئيسية
                                    </h5>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>إدارة شاملة للمستشفى</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>تكامل بين جميع الأقسام</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>تتبع دقيق للعمليات</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>تقارير مفصلة وشاملة</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card border-primary h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">
                                        <i class="fas fa-star me-2"></i>الفوائد
                                    </h5>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>تحسين كفاءة التشغيل</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>تقليل الأخطاء الطبية</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>توفير الوقت والجهد</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i>زيادة رضا المرضى</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

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
