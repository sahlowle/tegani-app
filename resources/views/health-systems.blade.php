@extends('layouts.app')

@section('title', 'نظم المعلومات الصحية | شركة صناع البرمجيات')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-hospital me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">خدمات نظم المعلومات الصحية</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            حلول تقنية متكاملة للمستشفيات والمراكز الصحية
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-10 mx-auto">
                    <div class="card border-primary">
                        <div class="card-body p-4">
                            <h3 class="text-primary mb-3"><i class="fas fa-info-circle me-2"></i>نبذة عن خدمات نظم المعلومات الصحية</h3>
                            <p class="lead">
                                على مدى سنوات، فإن شركة صناع البرمجيات المحدودة تتميز بخبرة طويلة في تصميم وتنفيذ حلول تقنية المعلومات الصحية، مع سجل حافل في تقديم أنظمة مبتكرة وموثوقة للمستشفيات، العيادات، والمراكز الصحية. نحن نولي أهمية قصوى للجودة والدقة في جميع مراحل المشروع، بدءًا من التحليل والتخطيط، مرورًا بالتصميم والتطوير، وصولًا إلى التطبيق والدعم الفني المستمر.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-10 mx-auto">
                    <h3 class="mb-4"><i class="fas fa-star me-2 text-primary"></i>أبرز مميزات احترافية الشركة في التنفيذ:</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>الميثاقية ودقة التنفيذ وفق أفضل الممارسات الدولية</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>حلول مخصصة لكل مؤسسة صحية بشكل دقيق</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>معايير أمان صارمة (HIPAA و GDPR)</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>دعم فني مستمر على مدار الساعة</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>تجربة مثبتة مع مستشفيات وعيادات متنوعة</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                <span>اعتمادية النظام بكفاءة عالية</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Diagram Section -->
    <section class="py-5">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 text-center mb-4">
                    <h2 class="section-title">هيكل <span class="text-primary">نظم المعلومات الصحية</span></h2>
                    <p class="section-subtitle">رؤية شاملة لتكامل الأنظمة الصحية المتقدمة</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-xl-7 mx-auto" data-aos="zoom-in">
                    <div class="diagram-container shadow-lg rounded-4 overflow-hidden p-3 bg-white">
                        <img src="{{ asset('images/digram.jpeg') }}" alt="هيكل نظم المعلومات الصحية" class="img-fluid w-100" style="display: block; max-height: 600px; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services List -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">خدمات <span class="text-primary">نظم المعلومات الصحية</span></h2>
                    <p class="section-subtitle">حلول شاملة لتطوير وتنظيم القطاع الصحي</p>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-hospital text-primary"></i>
                                </div>
                                <h4>نظم إدارة المستشفيات (HMS)</h4>
                                <p>نظام متكامل لإدارة المستشفى أو المركز الصحي بكفاءة عالية، يشمل جميع العمليات الإدارية والطبية</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-user-injured text-success"></i>
                                </div>
                                <h4>إدارة المرضى والمواعيد</h4>
                                <p>تسجيل المرضى، جدولة المواعيد، إدارة العيادات الخارجية، ومتابعة زيارات المرضى</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-file-medical text-danger"></i>
                                </div>
                                <h4>السجلات الطبية الإلكترونية (EMR)</h4>
                                <p>حفظ وتحديث السجلات الطبية لكل مريض بشكل رقمي، مع سهولة الوصول للبيانات من قبل الفريق الطبي</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-pills text-warning"></i>
                                </div>
                                <h4>إدارة الصيدلية والمخزون الطبي</h4>
                                <p>متابعة المخزون الطبي، صرف الأدوية، تنبيهات لنفاد الأدوية، وإصدار التقارير المخزنية</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-user-md text-info"></i>
                                </div>
                                <h4>إدارة العمليات الجراحية</h4>
                                <p>تسجيل العمليات، جدولة غرف العمليات، متابعة فرق الجراحة والمعدات اللازمة لكل عملية</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-user-nurse text-secondary"></i>
                                </div>
                                <h4>إدارة الموظفين والجداول الطبية</h4>
                                <p>تنظيم جداول الأطباء والممرضين، متابعة الحضور، وتوزيع المهام اليومية بشكل آلي</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-chart-bar text-primary"></i>
                                </div>
                                <h4>التقارير التحليلية والإدارية</h4>
                                <p>استخراج تقارير أداء المستشفى، مؤشرات الجودة، تقارير مالية وإدارية لدعم اتخاذ القرار</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-database text-success"></i>
                                </div>
                                <h4>نظام إدارة المعلومات الصحية (HIS)</h4>
                                <p>نظام متكامل لتجميع وإدارة البيانات الطبية والإدارية للمستشفى، يربط الأقسام المختلفة</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-clinic-medical text-danger"></i>
                                </div>
                                <h4>أنظمة العيادات والعيادات الخاصة</h4>
                                <p>حلول مخصصة للعيادات الخاصة لإدارة المواعيد، متابعة نتائج التحاليل، إدارة ملفات المرضى، المحاسبة</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-cloud text-info"></i>
                                </div>
                                <h4>الحلول السحابية للبيانات الصحية</h4>
                                <p>تخزين البيانات الطبية على السحابة بشكل آمن، نسخ احتياطية مشفرة، إمكانية استرجاع البيانات بسهولة</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-heartbeat text-warning"></i>
                                </div>
                                <h4>التكامل مع الأجهزة الطبية</h4>
                                <p>ربط الأنظمة بالمعدات التشخيصية والمخبرية لجمع البيانات تلقائيًا وتحويلها لتقارير دقيقة</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-brain text-secondary"></i>
                                </div>
                                <h4>التحليلات والذكاء الاصطناعي</h4>
                                <p>استخدام الذكاء الاصطناعي لتحليل البيانات الصحية، توفير مؤشرات الأداء، التنبؤ بحركة المرضى</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-video text-primary"></i>
                                </div>
                                <h4>التطبيب عن بعد (Telemedicine)</h4>
                                <p>تمكين المرضى من تلقي الاستشارات الطبية عبر الفيديو بشكل آمن، متابعة حالتهم الصحية عن بعد</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-mobile-alt text-success"></i>
                                </div>
                                <h4>التطبيقات الصحية الذكية</h4>
                                <p>تطبيقات للمرضى والأطباء لمتابعة المواعيد، نتائج التحاليل، تذكير الدواء، مراقبة المؤشرات الحيوية</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-shield-alt text-danger"></i>
                                </div>
                                <h4>الأمن السيبراني وحماية البيانات</h4>
                                <p>حماية البيانات الصحية من الاختراقات، تشفير المعلومات، التحكم في الوصول، الالتزام بالمعايير الدولية</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-chalkboard-teacher text-info"></i>
                                </div>
                                <h4>التدريب والدعم الفني</h4>
                                <p>برامج تدريبية لموظفي المستشفيات والعيادات، دعم فني 24/7، تحديثات دورية واستشارات تقنية</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="service-card interactive-element h-100">
                                <div class="service-icon">
                                    <i class="fas fa-cogs text-secondary"></i>
                                </div>
                                <h4>حلول متخصصة إضافية</h4>
                                <p>إدارة المختبرات والتحاليل، إدارة الطوارئ، إدارة التأمين الصحي والفواتير الإلكترونية، نظم إدارة جودة الرعاية الصحية</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="row mt-5" data-aos="fade-up">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="card bg-primary text-white">
                        <div class="card-body p-5">
                            <h3 class="mb-3">هل تحتاج استشارة لحلول نظم المعلومات الصحية؟</h3>
                            <p class="lead mb-4">تواصل معنا اليوم للحصول على استشارة مجانية وتقييم احتياجاتك</p>
                            <a href="index.html#contact" class="btn btn-light btn-lg">
                                <i class="fas fa-phone me-2"></i>
                                تواصل معنا الآن
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @endsection
