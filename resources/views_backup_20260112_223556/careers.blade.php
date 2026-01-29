<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الوظائف المتاحة | شركة صناع البرمجيات المحدودة</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">

    <!-- Bootstrap RTL CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Fix for modal form labels visibility -->
    <style>
        /* Force modal form labels to be visible */
        #applyModal .form-label,
        #applyModal label.form-label,
        .modal-body .form-label,
        .modal-body label.form-label,
        .modal-content .form-label,
        .modal-content label.form-label {
            color: #2c3e50 !important;
            font-weight: 600 !important;
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
            margin-bottom: 8px !important;
            font-size: 0.95rem !important;
        }
    </style>
</head>
<body>
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.html#home" style="display: flex; align-items: center; text-decoration: none; direction: rtl;">
                <div class="logo-container" style="position: relative; margin-left: 15px;">
                    <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="شعار شركة صناع البرمجيات" class="img-fluid" style="width: 64px; height: 64px; filter: brightness(1.1) contrast(1.1);">
                </div>
                <div class="brand-text" style="display: flex; flex-direction: column; align-items: flex-start; direction: rtl;">
                    <span class="fw-bold" style="font-size: 1.05rem; color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">شركة صناع البرمجيات المحدودة</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="تبديل القائمة">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto align-items-center" style="gap: 0.15rem; flex-wrap: nowrap;">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index.html#home" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-home ms-1"></i>
                            الرئيسية
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index.html#about" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-info-circle ms-1"></i>
                            من نحن
                        </a>
                    </li>
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle position-relative" href="index.html#services" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-briefcase ms-1"></i>
                            خدماتنا
                        </a>
                        <ul class="dropdown-menu dropdown-menu-mega shadow-lg" style="border: none; border-radius: 12px; padding: 1rem; min-width: 280px; max-width: 100%; margin-top: 0.5rem;">
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-cogs ms-2"></i>
                                الخدمات التقنية
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('consulting-services') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-lightbulb ms-2 text-warning"></i>
                                الاستشارات التقنية
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-development') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-code ms-2 text-info"></i>
                                تطوير الأنظمة
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-integration') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-link ms-2 text-success"></i>
                                تكامل الأنظمة
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('project-management') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-project-diagram ms-2 text-primary"></i>
                                إدارة المشاريع التقنية
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('process-automation') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-robot ms-2 text-danger"></i>
                                تحسين وأتمتة العمليات
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('ui-ux-design') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-palette ms-2" style="color: #e91e63;"></i>
                                تصميم واجهات وتجربة المستخدم
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('maintenance-support') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-tools ms-2 text-secondary"></i>
                                خدمات الدعم الفني والصيانة
                            </a></li>
                            <li><hr class="dropdown-divider my-3" style="opacity: 0.2;"></li>
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-chart-line ms-2"></i>
                                خدمات الأعمال
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('marketing-services') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-bullhorn ms-2 text-warning"></i>
                                خدمات التسويق
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index.html#odoo-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-cube ms-2 text-info"></i>
                                خدمات Odoo ERP
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index.html#ai-support" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-brain ms-2" style="color: #9c27b0;"></i>
                                نظام الدعم الذكي
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index.html#presence" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-globe ms-1"></i>
                            تواجدنا
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative active" href="{{ route('careers') }}" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-user-tie ms-1"></i>
                            الوظائف
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index.html#contact" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-envelope ms-1"></i>
                            اتصل بنا
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center ms-2 gap-1 flex-wrap" style="flex-shrink: 0;">
                    <a href="{{ route('careers') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem; background: rgba(0,0,0,0.2);" title="Arabic">
                        <img src="https://flagcdn.com/w20/sa.png" alt="علم السعودية" width="20" height="15" style="border-radius: 3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('careers-en') }}" class="btn btn-outline-light btn-sm d-flex alignments-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="British Flag" width="20" height="15" style="border-radius: 3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('careers-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="Français">
                        <img src="https://flagcdn.com/w20/fr.png" alt="Drapeau de la France" width="20" height="15" style="border-radius: 3px;">
                        <span>FR</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="careers-hero">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                        انضم إلى <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">فريقنا المتميز</span>
                    </h1>
                    <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                        اكتشف الفرص الوظيفية المتاحة وكن جزءاً من مستقبل التكنولوجيا
                    </p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">2</span>
                            <span class="stat-label">وظيفة متاحة</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">موظف</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">رضا الموظفين</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Available Jobs -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">الوظائف <span class="text-primary">المتاحة</span></h2>
                    <p class="section-subtitle">اختر من بين الوظائف المتاحة وانضم إلى فريقنا</p>
                    <button id="refreshJobsBtn" class="btn btn-outline-primary btn-sm mt-3">
                        <i class="fas fa-sync-alt me-2"></i>تحديث الوظائف
                    </button>
                </div>
            </div>
            
            <div class="row g-4" id="jobsContainer">
                <!-- Jobs will be loaded here dynamically -->
            </div>

        </div>
    </section>

    <!-- Why Work With Us -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up">
                    <div class="why-work-section">
                        <h3 class="text-center mb-5">لماذا تعمل معنا؟</h3>
                        <div class="row g-4">
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-rocket"></i>
                                    <h5>نمو سريع</h5>
                                    <p>انضم إلى شركة ناشئة سريعة النمو في مجال التكنولوجيا</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-users"></i>
                                    <h5>فريق متميز</h5>
                                    <p>اعمل مع نخبة من الخبراء في مجال التكنولوجيا</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-graduation-cap"></i>
                                    <h5>تطوير مستمر</h5>
                                    <p>فرص تعلم وتطوير مهاراتك باستمرار</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-balance-scale"></i>
                                    <h5>توازن العمل والحياة</h5>
                                    <p>ساعات عمل مرنة وبيئة عمل مريحة</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-medal"></i>
                                    <h5>مكافآت وتقدير</h5>
                                    <p>نظام مكافآت عادل وتقدير للإنجازات</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-globe"></i>
                                    <h5>فرص دولية</h5>
                                    <p>إمكانية العمل مع عملاء دوليين ومشاريع عالمية</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Job Application Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">التقدم للوظيفة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="jobApplicationForm" action="sendmail.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="jobPosition" name="job_position" value="">
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="applicantName" class="form-label">الاسم الكامل *</label>
                                <input type="text" class="form-control" id="applicantName" name="applicant_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="applicantEmail" class="form-label">البريد الإلكتروني *</label>
                                <input type="email" class="form-control" id="applicantEmail" name="applicant_email" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="applicantPhone" class="form-label">رقم الهاتف *</label>
                                <input type="tel" class="form-control" id="applicantPhone" name="applicant_phone" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="applicantExperience" class="form-label">سنوات الخبرة *</label>
                                <select class="form-select" id="applicantExperience" name="applicant_experience" required>
                                    <option value="">اختر سنوات الخبرة</option>
                                    <option value="0-1">0-1 سنة</option>
                                    <option value="1-3">1-3 سنوات</option>
                                    <option value="3-5">3-5 سنوات</option>
                                    <option value="5+">أكثر من 5 سنوات</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="applicantCoverLetter" class="form-label">Summary</label>
                            <textarea class="form-control" id="applicantCoverLetter" name="applicant_cover_letter" rows="4" placeholder="اكتب رسالة مختصرة عن نفسك وخبراتك..."></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="applicantCV" class="form-label">السيرة الذاتية (PDF) *</label>
                            <input type="file" class="form-control" id="applicantCV" name="applicant_cv" accept=".pdf" required>
                            <div class="form-text">يرجى رفع السيرة الذاتية بصيغة PDF فقط</div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>
                                إرسال الطلب
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white text-dark py-4">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="شعار شركة صناع البرمجيات المحدودة - SMLC" class="footer-logo mb-2">
                        <span class="fw-bold">شركة صناع البرمجيات المحدودة</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 جميع الحقوق محفوظة</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('careers') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('careers-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('careers-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Careers Page Script -->
    <script>
        // Global variables
        let allJobs = [];

        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Job Management Functions
        function createJobCard(job) {
            // Check if this is a custom job (has description but no requirements/benefits, or empty requirements/benefits)
            const isCustomJob = job.description && (!job.requirements || job.requirements === '') && (!job.benefits || job.benefits === '');
            
            console.log('Creating card for job:', job.name, 'isCustomJob:', isCustomJob);
            
            // Escape HTML to prevent XSS
            const escapeHtml = (text) => {
                const div = document.createElement('div');
                div.textContent = text;
                return div.innerHTML;
            };
            
            return `
                <div class="col-lg-6 job-item" data-keywords="${escapeHtml(job.name)} ${escapeHtml(job.description || '')}">
                    <div class="job-card">
                        <div class="job-header">
                            <div class="job-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="job-title-section">
                                <h4 class="job-title">${escapeHtml(job.name)}</h4>
                            </div>
                        </div>
                        
                        <div class="job-content">
                            ${isCustomJob ? `
                                <div class="job-description">
                                    <h5>بيانات الوظيفة:</h5>
                                    <div style="white-space: pre-wrap; line-height: 1.8;">${escapeHtml(job.description || '')}</div>
                                </div>
                            ` : `
                                <div class="job-description">
                                    <h5>وصف الوظيفة:</h5>
                                    <p>${escapeHtml(job.description || 'لا يوجد وصف متاح')}</p>
                                </div>
                                
                                <div class="job-requirements">
                                    <h5>المتطلبات:</h5>
                                    <ul>
                                        ${job.requirements ? job.requirements.split('\n').map(req => `<li>${escapeHtml(req)}</li>`).join('') : '<li>لا توجد متطلبات محددة</li>'}
                                    </ul>
                                </div>
                                
                                <div class="job-benefits">
                                    <h5>المزايا:</h5>
                                    <ul>
                                        ${job.benefits ? job.benefits.split('\n').map(benefit => `<li>${escapeHtml(benefit)}</li>`).join('') : '<li>مزايا تنافسية</li>'}
                                    </ul>
                                </div>
                            `}
                        </div>
                        
                        <div class="job-footer">
                            <button class="btn btn-primary btn-apply" data-bs-toggle="modal" data-bs-target="#applyModal" data-job="${escapeHtml(job.name)}">
                                <i class="fas fa-paper-plane me-2"></i>
                                تقدم للوظيفة
                            </button>
                        </div>
                    </div>
                </div>
            `;
        }

        function displayJobs(jobs) {
            const container = document.getElementById('jobsContainer');
            console.log('=== displayJobs called ===');
            console.log('Jobs to display:', jobs);
            console.log('Jobs count:', jobs.length);
            console.log('Container element:', container);
            
            if (!container) {
                console.error('❌ Jobs container not found!');
                return;
            }
            
            if (!jobs || jobs.length === 0) {
                console.log('No jobs to display, showing empty state');
                container.innerHTML = `
                    <div class="col-lg-12 text-center">
                        <div class="no-results">
                            <i class="fas fa-search fa-3x text-muted mb-3"></i>
                            <h4>لا توجد وظائف متاحة حالياً</h4>
                            <p class="text-muted">يرجى المحاولة مرة أخرى لاحقاً</p>
                        </div>
                    </div>
                `;
                return;
            }

            console.log('Creating job cards...');
            const jobsHTML = jobs.map((job, index) => {
                console.log(`Job ${index + 1}:`, job);
                const card = createJobCard(job);
                console.log(`Card ${index + 1} created, length:`, card.length);
                return card;
            }).join('');
            
            console.log('All cards created, total HTML length:', jobsHTML.length);
            console.log('Setting container innerHTML...');
            container.innerHTML = jobsHTML;
            console.log('✅ Jobs displayed successfully');
            console.log('Container now has', container.children.length, 'children');
            
            // Re-initialize event listeners for new buttons
            initializeJobApplicationModal();
        }

        function showLoadingState() {
            const container = document.getElementById('jobsContainer');
            container.innerHTML = `
                <div class="col-lg-12 text-center">
                    <div class="loading-state">
                        <div class="spinner-border text-primary mb-3" role="status">
                            <span class="visually-hidden">جاري التحميل...</span>
                        </div>
                        <h5>جاري تحميل الوظائف...</h5>
                        <p class="text-muted">يرجى الانتظار</p>
                    </div>
                </div>
            `;
        }

        function showErrorState(message) {
            const container = document.getElementById('jobsContainer');
            container.innerHTML = `
                <div class="col-lg-12 text-center">
                    <div class="error-state">
                        <i class="fas fa-exclamation-triangle fa-3x text-warning mb-3"></i>
                        <h4>حدث خطأ في تحميل الوظائف</h4>
                        <p class="text-muted">${message}</p>
                        <button class="btn btn-primary" onclick="loadJobs()">إعادة المحاولة</button>
                    </div>
                </div>
            `;
        }

        // API endpoint
        const JOBS_API_URL = 'jobs_db.php';

        // Load custom jobs from server database
        async function loadCustomJobs() {
            try {
                console.log('Fetching jobs from:', JOBS_API_URL);
                const response = await fetch(JOBS_API_URL);
                console.log('Response status:', response.status, response.statusText);
                
                if (!response.ok) {
                    const errorText = await response.text();
                    console.error('Response error:', errorText);
                    throw new Error(`Failed to fetch jobs: ${response.status} ${response.statusText}`);
                }
                
                const contentType = response.headers.get('content-type');
                if (!contentType || !contentType.includes('application/json')) {
                    const text = await response.text();
                    console.error('Unexpected response type:', contentType, 'Response:', text);
                    throw new Error('Invalid response format from server');
                }
                
                const jobs = await response.json();
                console.log('Jobs loaded from server:', jobs);
                console.log('Number of jobs:', Array.isArray(jobs) ? jobs.length : 0);
                
                // Handle case where response might be an error object
                if (jobs && jobs.error) {
                    console.error('Server returned error:', jobs.error);
                    return [];
                }
                
                return Array.isArray(jobs) ? jobs : [];
            } catch (error) {
                console.error('Error loading custom jobs:', error);
                console.error('Error details:', error.message, error.stack);
                return [];
            }
        }
        
        // Convert custom job to standard format
        function convertCustomJob(customJob) {
            return {
                id: customJob.id,
                name: customJob.name,
                description: customJob.description,
                requirements: '',
                benefits: '',
                state: 'recruit'
            };
        }

        async function loadJobs() {
            showLoadingState();
            
            try {
                // Load custom jobs from server database
                const customJobs = await loadCustomJobs();
                console.log('Custom jobs loaded:', customJobs);
                const convertedCustomJobs = customJobs.map(convertCustomJob);
                console.log('Converted custom jobs:', convertedCustomJobs);
                
                allJobs = convertedCustomJobs;
                console.log('All jobs:', allJobs);
                console.log('Total jobs:', allJobs.length);
                displayJobs(allJobs);
                updateJobCounts();
            } catch (error) {
                console.error('Error loading jobs:', error);
                showErrorState('فشل في تحميل الوظائف من قاعدة البيانات');
            }
        }

        function updateJobCounts() {
            const totalJobs = allJobs.length;
            const activeJobs = allJobs.filter(job => job.state === 'recruit').length;
            
            // Update hero stats if elements exist
            const statNumbers = document.querySelectorAll('.stat-number');
            if (statNumbers.length >= 2) {
                statNumbers[0].textContent = `${activeJobs}`;
                statNumbers[1].textContent = `${totalJobs}`;
            }
        }


        // Job Application Modal functionality
        function initializeJobApplicationModal() {
            const applyButtons = document.querySelectorAll('.btn-apply');
            const jobPositionInput = document.getElementById('jobPosition');
            const applyModal = document.getElementById('applyModal');
            
            applyButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const jobTitle = this.getAttribute('data-job');
                    jobPositionInput.value = jobTitle;
                });
            });
            
            // Reset form when modal is closed
            applyModal.addEventListener('hidden.bs.modal', function() {
                document.getElementById('jobApplicationForm').reset();
            });
        }

        // Listen for custom event (when jobs are added/removed in admin panel)
        window.addEventListener('customJobsUpdated', function() {
            loadJobs();
        });
        
        // Listen for storage events (cross-tab communication)
        window.addEventListener('storage', function(e) {
            if (e.key === 'jobsUpdated') {
                loadJobs();
            }
        });
        
        // Poll for database changes (check every 3 seconds)
        let lastJobCount = 0;
        setInterval(async function() {
            try {
                const jobs = await loadCustomJobs();
                if (jobs.length !== lastJobCount) {
                    lastJobCount = jobs.length;
                    loadJobs();
                }
            } catch (error) {
                // Silent fail
            }
        }, 3000);

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            // Load jobs from server database
            loadJobs();
            
            // Initialize job application modal
            initializeJobApplicationModal();
            
            // Add manual refresh button functionality
            const refreshBtn = document.getElementById('refreshJobsBtn');
            if (refreshBtn) {
                refreshBtn.style.display = 'inline-block';
                refreshBtn.addEventListener('click', function() {
                    this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>جاري التحديث...';
                    this.disabled = true;
                    loadJobs();
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-sync-alt me-2"></i>تحديث الوظائف';
                        this.disabled = false;
                    }, 2000);
                });
            }
        });
    </script>
    
    <!-- حماية منع النسخ -->
    <script>
        document.addEventListener('selectstart', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('copy', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('cut', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('paste', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('keydown', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                if (e.ctrlKey && (e.key === 'c' || e.key === 'v' || e.key === 'x' || e.key === 'a')) {
                    return true;
                }
            }

            if (e.ctrlKey && (e.key === 'c' || e.key === 'v' || e.key === 'x' || e.key === 'a' || e.key === 's' || e.key === 'u')) {
                e.preventDefault();
                return false;
            }

            // F12 and developer tools shortcuts are now allowed
            // Removed: if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J' || e.key === 'C'))) {
            //     e.preventDefault();
            //     return false;
            // }
        });

        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
            return false;
        });

        document.addEventListener('dragstart', function(e) {
            e.preventDefault();
            return false;
        });
    </script>
</body>
</html>
