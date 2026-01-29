@extends('layouts.app')

@push('styles')
    <style>
        .apply-form .form-control {
           color: #000000 !important;
        }
        .apply-form .form-control::placeholder {
            color: #000000 !important;
        }
        .apply-form .form-select {
            color: #000000 !important;
        }
        .apply-form .form-select::placeholder {
            color: #000000 !important;
        }
        .apply-form .form-select option {
            color: #000000 !important;
        }
    </style>
@endpush

@section('title', 'الوظائف المتاحة | شركة صناع البرمجيات المحدودة')

@section('content')
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
                </div>
            </div>
            
            <div class="row g-4" id="jobsContainer">
                @forelse($careers as $career)
                    <div class="col-lg-6 job-item">
                        <div class="job-card">
                            <div class="job-header">
                                <div class="job-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="job-title-section">
                                    <h4 class="job-title">{{ $career->name }}</h4>
                                </div>
                            </div>
                            
                            <div class="job-content">
                                @if($career->description)
                                    <div class="job-description">
                                        <h5>وصف الوظيفة:</h5>
                                        <div style="white-space: pre-wrap; line-height: 1.8;">{{ $career->description }}</div>
                                    </div>
                                @endif
                                
                                @if($career->requirements)
                                    <div class="job-requirements">
                                        <h5>المتطلبات:</h5>
                                        <ul>
                                            @foreach(explode("\n", $career->requirements) as $requirement)
                                                @if(trim($requirement))
                                                    <li>{{ $requirement }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                
                                @if($career->benefits)
                                    <div class="job-benefits">
                                        <h5>المزايا:</h5>
                                        <ul>
                                            @foreach(explode("\n", $career->benefits) as $benefit)
                                                @if(trim($benefit))
                                                    <li>{{ $benefit }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            
                            <div class="job-footer">
                                <button class="btn btn-primary btn-apply" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#applyModal{{ $career->id }}" 
                                        data-job="{{ $career->name }}">
                                    <i class="fas fa-paper-plane me-2"></i>
                                    تقدم للوظيفة
                                </button>
                            </div>
                        </div>
                    </div>

                     <!-- Job Application Modal -->
                    <div class="modal fade" id="applyModal{{ $career->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">التقدم للوظيفة {{ $career->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form id="jobApplicationForm{{ $career->id }}" class="apply-form" action="{{ route('career-form-email', $career->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
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
                                            <textarea class="form-control" id="applicantCoverLetter" name="applicant_message" rows="4" placeholder="اكتب رسالة مختصرة عن نفسك وخبراتك..."></textarea>
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

                @empty
                    <div class="col-lg-12 text-center">
                        <div class="no-results">
                            <i class="fas fa-search fa-3x text-muted mb-3"></i>
                            <h4>لا توجد وظائف متاحة حالياً</h4>
                            <p class="text-muted">يرجى المحاولة مرة أخرى لاحقاً</p>
                        </div>
                    </div>
                @endforelse
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

   
    <!-- Footer -->
    <!-- Bootstrap JS -->
    <!-- AOS Animation -->
    <!-- Custom JS -->
    <!-- Careers Page Script -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Job Application Modal functionality
        document.addEventListener('DOMContentLoaded', function() {
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
            if (applyModal) {
                applyModal.addEventListener('hidden.bs.modal', function() {
                    document.getElementById('jobApplicationForm').reset();
                });
            }
        });
    </script>
    
    <!-- حماية منع النسخ -->
@endsection
