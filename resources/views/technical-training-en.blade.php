@extends('layouts.app')

@section('title', 'التدريب التقني | شركة صناع البرمجيات المحدودة')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-graduation-cap me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">التدريب التقني</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            برامج تدريبية متخصصة لتطوير مهاراتك التقنية وزيادة كفاءتك المهنية
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
                        <span class="service-badge">التدريب التقني</span>
                        <h2 class="section-title">برامج تدريبية <span class="text-gradient">متخصصة ومتطورة</span></h2>
                        <p class="section-subtitle">نقدم برامج تدريبية شاملة تغطي أحدث التقنيات وأفضل الممارسات في مجال التكنولوجيا</p>
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
                            <h3>ما هو التدريب التقني؟</h3>
                            <p class="lead">
                                التدريب التقني هو عملية تعليمية متخصصة تهدف إلى تطوير المهارات التقنية للموظفين والمهنيين 
                                في مجال التكنولوجيا. نحن نقدم برامج تدريبية شاملة تغطي أحدث التقنيات وأفضل الممارسات 
                                لضمان حصول المتدربين على المعرفة والمهارات اللازمة للنجاح في عالم التكنولوجيا المتطور.
                            </p>
                        </div>

                        <div class="training-programs">
                            <h3>برامجنا التدريبية</h3>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="training-card">
                                        <div class="training-icon">
                                            <i class="fas fa-code"></i>
                                        </div>
                                        <h5>تطوير البرمجيات</h5>
                                        <p>تعلم أساسيات ومتقدمات تطوير البرمجيات</p>
                                        <ul>
                                            <li>لغات البرمجة (Python, Java, C#)</li>
                                            <li>تطوير الويب (HTML, CSS, JavaScript)</li>
                                            <li>قواعد البيانات (MySQL, PostgreSQL)</li>
                                            <li>أطر العمل (React, Angular, Vue)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="training-card">
                                        <div class="training-icon">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div>
                                        <h5>تطوير التطبيقات الجوالة</h5>
                                        <p>تعلم تطوير التطبيقات للهواتف الذكية</p>
                                        <ul>
                                            <li>تطوير iOS (Swift)</li>
                                            <li>تطوير Android (Kotlin)</li>
                                            <li>التطوير المتقاطع (Flutter, React Native)</li>
                                            <li>تصميم واجهات المستخدم</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="training-card">
                                        <div class="training-icon">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <h5>الأمن السيبراني</h5>
                                        <p>تعلم حماية الأنظمة والشبكات من التهديدات</p>
                                        <ul>
                                            <li>أساسيات الأمن السيبراني</li>
                                            <li>تحليل التهديدات</li>
                                            <li>إدارة الهجمات الأمنية</li>
                                            <li>أدوات الحماية والمراقبة</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="training-card">
                                        <div class="training-icon">
                                            <i class="fas fa-cloud"></i>
                                        </div>
                                        <h5>الحوسبة السحابية</h5>
                                        <p>تعلم تقنيات الحوسبة السحابية وإدارتها</p>
                                        <ul>
                                            <li>Amazon Web Services (AWS)</li>
                                            <li>Microsoft Azure</li>
                                            <li>Google Cloud Platform</li>
                                            <li>إدارة الحاويات (Docker, Kubernetes)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="training-card">
                                        <div class="training-icon">
                                            <i class="fas fa-database"></i>
                                        </div>
                                        <h5>علوم البيانات</h5>
                                        <p>تعلم تحليل البيانات والذكاء الاصطناعي</p>
                                        <ul>
                                            <li>تحليل البيانات (Python, R)</li>
                                            <li>التعلم الآلي (Machine Learning)</li>
                                            <li>الذكاء الاصطناعي (AI)</li>
                                            <li>تصور البيانات</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="training-card">
                                        <div class="training-icon">
                                            <i class="fas fa-network-wired"></i>
                                        </div>
                                        <h5>إدارة الشبكات</h5>
                                        <p>تعلم إدارة وتصميم الشبكات الحاسوبية</p>
                                        <ul>
                                            <li>أساسيات الشبكات</li>
                                            <li>بروتوكولات الشبكة</li>
                                            <li>أجهزة الشبكة</li>
                                            <li>أمان الشبكات</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="training-methods">
                            <h3>طرق التدريب</h3>
                            <div class="methods-grid">
                                <div class="method-card">
                                    <div class="method-icon">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                    <h5>التدريب المباشر</h5>
                                    <p>جلسات تدريبية مباشرة مع مدربين متخصصين</p>
                                </div>
                                <div class="method-card">
                                    <div class="method-icon">
                                        <i class="fas fa-video"></i>
                                    </div>
                                    <h5>التدريب عن بُعد</h5>
                                    <p>جلسات تدريبية عبر الإنترنت مع تفاعل مباشر</p>
                                </div>
                                <div class="method-card">
                                    <div class="method-icon">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    <h5>التدريب الذاتي</h5>
                                    <p>دورات تدريبية مسجلة يمكن الوصول إليها في أي وقت</p>
                                </div>
                                <div class="method-card">
                                    <div class="method-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <h5>التدريب الجماعي</h5>
                                    <p>برامج تدريبية مخصصة للفرق والمؤسسات</p>
                                </div>
                            </div>
                        </div>

                        <div class="certification-section">
                            <h3>الشهادات المعتمدة</h3>
                            <div class="certification-info">
                                <p class="lead">
                                    نقدم شهادات معتمدة لجميع برامجنا التدريبية، معترف بها في سوق العمل وتمنح المتدربين 
                                    ميزة تنافسية في مجال التكنولوجيا.
                                </p>
                                <div class="certification-features">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="cert-feature">
                                                <i class="fas fa-certificate"></i>
                                                <h6>شهادات معتمدة</h6>
                                                <p>شهادات معترف بها دولياً</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="cert-feature">
                                                <i class="fas fa-award"></i>
                                                <h6>مستويات متعددة</h6>
                                                <p>من المبتدئ إلى المتقدم</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="cert-feature">
                                                <i class="fas fa-globe"></i>
                                                <h6>معترف بها عالمياً</h6>
                                                <p>معترف بها في سوق العمل</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="training-benefits">
                            <h3>فوائد التدريب معنا</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-user-tie"></i>
                                        <h6>مدربون متخصصون</h6>
                                        <p>فريق من الخبراء المتخصصين في مجالاتهم</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-book"></i>
                                        <h6>مناهج محدثة</h6>
                                        <p>مناهج تدريبية محدثة بأحدث التقنيات</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-hands-helping"></i>
                                        <h6>دعم مستمر</h6>
                                        <p>دعم فني ومتابعة مستمرة للمتدربين</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="benefit-item">
                                        <i class="fas fa-briefcase"></i>
                                        <h6>فرص عمل</h6>
                                        <p>مساعدتك في العثور على فرص عمل مناسبة</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cta-section">
                            <div class="cta-card">
                                <h3>هل تريد تطوير مهاراتك التقنية؟</h3>
                                <p>انضم إلى برامجنا التدريبية المتخصصة وابدأ رحلتك نحو التميز التقني</p>
                                <a href="index.html#contact" class="btn btn-primary btn-lg">
                                    <i class="fas fa-graduation-cap me-2"></i>
                                    سجل الآن
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
