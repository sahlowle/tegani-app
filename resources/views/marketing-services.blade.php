@extends('layouts.app')

@section('title', 'خدمات التسويق - صناع البرمجيات')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-handshake me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">خدمات التسويق عبر العلاقات</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            شريكك للنجاح المحلي والدولي عبر شبكة علاقات قوية وشراكات استراتيجية تفتح فرصاً تجارية حقيقية.
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="#services" class="btn btn-primary btn-lg btn-interactive">
                                <i class="fas fa-rocket me-2"></i>
                                اكتشف خدماتنا
                            </a>
                            <a href="index.html#contact" class="btn btn-outline-light btn-lg btn-interactive">
                                <i class="fas fa-envelope me-2"></i>
                                تواصل معنا
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2 class="section-title">مقدمة عن خدماتنا</h2>
                    <p class="section-subtitle">
                        في عالم الأعمال الحديث، العلاقات والشراكات هي المفتاح الأساسي للنجاح. تقدم شركتنا خدمات تسويق عبر العلاقات المباشرة، مع استراتيجيات مخصصة لكل عميل وصناعة، تضمن الوصول للأشخاص المناسبين وتحويل العلاقات إلى فرص تجارية ملموسة.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services by Sectors Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">خدماتنا حسب <span class="text-gradient">القطاعات</span></h2>
                    <p class="section-subtitle">نقدم خدمات تسويق متخصصة لجميع القطاعات</p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Health Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="sector-card">
                        <div class="sector-icon health">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h4>المنتجات الصحية والطبية</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المستشفيات والعيادات الخاصة والعامة</li>
                            <li><i class="fas fa-check text-success me-2"></i> الترويج للأجهزة والمستلزمات الطبية</li>
                            <li><i class="fas fa-check text-success me-2"></i> السياحة العلاجية وجذب المرضى الدوليين</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Tech Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="sector-card">
                        <div class="sector-icon tech">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <h4>المنتجات التقنية</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق الأجهزة والبرمجيات وحلول التقنية المتقدمة</li>
                            <li><i class="fas fa-check text-success me-2"></i> إدارة إطلاق المنتجات الجديدة وفعاليات التعريف بها</li>
                            <li><i class="fas fa-check text-success me-2"></i> بناء شراكات استراتيجية مع المستثمرين والعملاء المحتملين</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Real Estate Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="sector-card">
                        <div class="sector-icon real-estate">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4>القطاع العقاري</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المشاريع السكنية والتجارية</li>
                            <li><i class="fas fa-check text-success me-2"></i> جذب المستثمرين المحليين والدوليين</li>
                            <li><i class="fas fa-check text-success me-2"></i> تنظيم المعارض والفعاليات العقارية</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Tourism Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="sector-card">
                        <div class="sector-icon tourism">
                            <i class="fas fa-plane"></i>
                        </div>
                        <h4>السياحة العلاجية</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق برامج السياحة العلاجية</li>
                            <li><i class="fas fa-check text-success me-2"></i> تنسيق الرحلات الطبية للعملاء الدوليين</li>
                            <li><i class="fas fa-check text-success me-2"></i> بناء شراكات مع شركات السياحة الصحية العالمية</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Consumer Goods Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="sector-card">
                        <div class="sector-icon consumer">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <h4>المنتجات الاستهلاكية والسلع الفاخرة</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المنتجات الغذائية والمشروبات</li>
                            <li><i class="fas fa-check text-success me-2"></i> العطور والملابس الفاخرة</li>
                            <li><i class="fas fa-check text-success me-2"></i> تعزيز وصول العلامة التجارية للأسواق المحلية والدولية</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Manufacturing Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="sector-card">
                        <div class="sector-icon manufacturing">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h4>الصناعات التحويلية والتجارية</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المعدات الصناعية والمواد الخام</li>
                            <li><i class="fas fa-check text-success me-2"></i> تسهيل الشراكات مع موزعين ومصنعين ومستثمرين</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Education Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="sector-card">
                        <div class="sector-icon education">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>التعليم والتدريب</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المؤسسات التعليمية والبرامج التدريبية</li>
                            <li><i class="fas fa-check text-success me-2"></i> بناء شراكات مع الجامعات والشركات</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Energy Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="sector-card">
                        <div class="sector-icon energy">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h4>الطاقة والبيئة</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق مشاريع الطاقة المتجددة والمبادرات البيئية</li>
                            <li><i class="fas fa-check text-success me-2"></i> تعزيز فرص التعاون مع المستثمرين والشركات الدولية</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Food Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="900">
                    <div class="sector-card">
                        <div class="sector-icon food">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h4>الصناعات الغذائية والمطاعم</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المطاعم والفنادق والمقاهي</li>
                            <li><i class="fas fa-check text-success me-2"></i> دعم إطلاق المنتجات الغذائية الجديدة</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Logistics Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1000">
                    <div class="sector-card">
                        <div class="sector-icon logistics">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h4>النقل والخدمات اللوجستية</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق شركات النقل والخدمات اللوجستية</li>
                            <li><i class="fas fa-check text-success me-2"></i> بناء شراكات مع شركات محلية ودولية</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Media Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1100">
                    <div class="sector-card">
                        <div class="sector-icon media">
                            <i class="fas fa-video"></i>
                        </div>
                        <h4>الإعلام والإعلان</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق الشركات الإعلامية وشركات الإعلان</li>
                            <li><i class="fas fa-check text-success me-2"></i> ربط العملاء بشركاء إعلاميين واستراتيجيين</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Sports Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1200">
                    <div class="sector-card">
                        <div class="sector-icon sports">
                            <i class="fas fa-futbol"></i>
                        </div>
                        <h4>القطاع الرياضي والترفيهي</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق الأندية الرياضية والفعاليات الترفيهية</li>
                            <li><i class="fas fa-check text-success me-2"></i> جذب الرعاة والمستثمرين المحليين والدوليين</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Government Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1300">
                    <div class="sector-card">
                        <div class="sector-icon government">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <h4>الخدمات الحكومية والاستشارية</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> تسويق المشاريع الحكومية والشراكات مع القطاع الخاص</li>
                            <li><i class="fas fa-check text-success me-2"></i> تقديم استشارات في إدارة العلاقات والشراكات الاستراتيجية</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Marketing Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">خدماتنا التسويقية <span class="text-gradient">الأساسية</span></h2>
                    <p class="section-subtitle">خدمات متكاملة عبر جميع القطاعات</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-feature">
                        <i class="fas fa-network-wired"></i>
                        <h4>شبكة علاقات قوية</h4>
                        <p>الوصول المباشر للأشخاص والشركات المؤثرة محليًا ودوليًا</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-feature">
                        <i class="fas fa-bullhorn"></i>
                        <h4>إدارة الحملات التسويقية</h4>
                        <p>تصميم وتنفيذ حملات مخصصة لكل عميل وقطاع</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-feature">
                        <i class="fas fa-handshake"></i>
                        <h4>بناء الشراكات الاستراتيجية</h4>
                        <p>تحويل العلاقات إلى اتفاقيات ومشاريع مربحة</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-feature">
                        <i class="fas fa-chart-line"></i>
                        <h4>متابعة النتائج وقياس الأداء</h4>
                        <p>تقديم تقارير دورية لتقييم نجاح الحملات وعائد الاستثمار</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KPIs Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">مؤشرات الأداء <span class="text-gradient">لكل قطاع</span></h2>
                    <p class="section-subtitle">نقيس نجاحنا بأرقام ملموسة</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="kpi-card">
                        <div class="kpi-number">25+</div>
                        <div class="kpi-label">شراكة جديدة شهرياً</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="kpi-card">
                        <div class="kpi-number">150%</div>
                        <div class="kpi-label">زيادة في المبيعات</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="kpi-card">
                        <div class="kpi-number">500+</div>
                        <div class="kpi-label">عميل ومستثمر جديد</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="kpi-card">
                        <div class="kpi-number">95%</div>
                        <div class="kpi-label">تحسن في سمعة العلامة التجارية</div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">قصص <span class="text-gradient">النجاح العملية</span></h2>
                    <p class="section-subtitle">نتائج حقيقية لعملائنا</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="success-story">
                        <h5><i class="fas fa-hospital me-2"></i>القطاع الصحي</h5>
                        <p>مساعدة مستشفى في جذب المرضى الدوليين وزيادة نسبة الإشغال بنسبة <strong>40%</strong> خلال 6 أشهر من خلال شبكة علاقاتنا الدولية في مجال السياحة العلاجية.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="success-story">
                        <h5><i class="fas fa-building me-2"></i>القطاع العقاري</h5>
                        <p>دعم مطور عقاري في جذب مستثمرين دوليين من خلال معرض دولي، وزيادة المبيعات بنسبة <strong>60%</strong> في الربع الأول من العام.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="success-story">
                        <h5><i class="fas fa-laptop-code me-2"></i>القطاع التقني</h5>
                        <p>إطلاق برنامج برمجيات جديد بالتعاون مع شركاء استراتيجيين، وتحقيق تغطية سوقية واسعة في <strong>15 دولة</strong> خلال السنة الأولى.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="success-story">
                        <h5><i class="fas fa-utensils me-2"></i>القطاع الغذائي</h5>
                        <p>مساعدة شركة أغذية في الوصول لموزعين دوليين جدد وتوسيع نطاق التوزيع إلى <strong>8 دول جديدة</strong> مع زيادة الإيرادات بنسبة <strong>80%</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">مقارنة <span class="text-gradient">القطاعات</span></h2>
                    <p class="section-subtitle">نظرة شاملة على خدماتنا حسب القطاعات</p>
                </div>
            </div>
            
            <div class="comparison-table" data-aos="fade-up">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>القطاع</th>
                            <th>خدماتنا الأساسية</th>
                            <th>نوع العلاقات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>المنتجات الصحية والطبية</strong></td>
                            <td>المستشفيات والعيادات، الأجهزة والمستلزمات، السياحة العلاجية</td>
                            <td>محلية ودولية، مستثمرين، موزعين، عملاء دوليين</td>
                        </tr>
                        <tr>
                            <td><strong>المنتجات التقنية</strong></td>
                            <td>الأجهزة، البرمجيات، إطلاق المنتجات، شراكات استراتيجية</td>
                            <td>شركات، مستثمرين، عملاء محتملين</td>
                        </tr>
                        <tr>
                            <td><strong>القطاع العقاري</strong></td>
                            <td>المشاريع السكنية والتجارية، جذب المستثمرين، تنظيم المعارض</td>
                            <td>مستثمرون محليون ودوليون</td>
                        </tr>
                        <tr>
                            <td><strong>السلع الفاخرة والمنتجات الاستهلاكية</strong></td>
                            <td>الملابس، العطور، الأغذية والمشروبات</td>
                            <td>موزعون، تجار، عملاء رئيسيون</td>
                        </tr>
                        <tr>
                            <td><strong>التعليم والتدريب</strong></td>
                            <td>الجامعات، البرامج التدريبية، الشهادات الدولية</td>
                            <td>مؤسسات تعليمية، شركات، جهات اعتماد</td>
                        </tr>
                        <tr>
                            <td><strong>الطاقة والبيئة</strong></td>
                            <td>مشاريع الطاقة المتجددة، الخدمات البيئية</td>
                            <td>مستثمرون، شركات، مؤسسات بيئية</td>
                        </tr>
                        <tr>
                            <td><strong>النقل والخدمات اللوجستية</strong></td>
                            <td>النقل، التخزين، الشحن</td>
                            <td>شركات لوجستية، موزعون، مستثمرون</td>
                        </tr>
                        <tr>
                            <td><strong>الإعلام والإعلان</strong></td>
                            <td>الإنتاج الفني، شركات الإعلان</td>
                            <td>شركاء إعلاميين واستراتيجيين</td>
                        </tr>
                        <tr>
                            <td><strong>القطاع الرياضي والترفيهي</strong></td>
                            <td>الأندية، الفعاليات</td>
                            <td>رعاة، مستثمرون محليون ودوليون</td>
                        </tr>
                        <tr>
                            <td><strong>الخدمات الحكومية والاستشارية</strong></td>
                            <td>المشاريع الحكومية، الشراكات مع القطاع الخاص</td>
                            <td>جهات حكومية، شركات خاصة</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2>ابدأ الآن!</h2>
                    <p class="lead">النجاح الحقيقي لا يأتي بالصدفة، بل عبر شبكة علاقات قوية، شراكات استراتيجية، وحملات تسويقية مخصصة. دعنا نكون شريكك في بناء مستقبل أعمالك وتحويل الفرص التجارية إلى نتائج ملموسة.</p>
                    <p class="lead">تواصل معنا اليوم وابدأ رحلتك نحو التوسع والنمو في جميع القطاعات.</p>
                    <a href="index.html#contact" class="btn-marketing">
                        <i class="fas fa-phone me-2"></i>
                        تواصل معنا اليوم
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
