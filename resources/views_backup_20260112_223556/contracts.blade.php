<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>الحضور والتواجد | شركة صناع البرمجيات المحدودة</title>
	<link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="index.html#home" style="display: flex; align-items: center; text-decoration: none;">
				<div class="logo-container" style="position: relative; margin-left: 15px;">
					<img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="شعار شركة صناع البرمجيات" class="img-fluid" style="width: 80px; height: 80px; filter: brightness(1.1) contrast(1.1);">
					
				</div>
				<div class="brand-text" style="display: flex; flex-direction: column; align-items: flex-start;">
					<span class="fw-bold" style="font-size: 1.2rem; color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">شركة صناع البرمجيات المحدودة</span>
				</div>
			</a>
			
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="تبديل القائمة">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto align-items-center">
					<li class="nav-item">
						<a class="nav-link" href="index.html#home">
							<i class="fas fa-home me-1"></i>
							الرئيسية
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.html#about">
							<i class="fas fa-info-circle me-1"></i>
							من نحن
						</a>
					</li>
					<li class="nav-item dropdown mega-menu">
						<a class="nav-link dropdown-toggle" href="index.html#services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-briefcase me-1"></i>
							خدماتنا
						</a>
						<ul class="dropdown-menu dropdown-menu-mega">
							<li class="dropdown-header">
								<i class="fas fa-cogs me-2"></i>
								الخدمات التقنية
							</li>
							<li><a class="dropdown-item" href="{{ route('consulting-services') }}">
								<i class="fas fa-lightbulb me-2"></i>
								الاستشارات التقنية
							</a></li>
							<li><a class="dropdown-item" href="{{ route('system-development') }}">
								<i class="fas fa-code me-2"></i>
								تطوير الأنظمة
							</a></li>
							<li><a class="dropdown-item" href="{{ route('system-integration') }}">
								<i class="fas fa-link me-2"></i>
								تكامل الأنظمة
							</a></li>
							<li><a class="dropdown-item" href="{{ route('project-management') }}">
								<i class="fas fa-project-diagram me-2"></i>
								إدارة المشاريع التقنية
							</a></li>
							<li><a class="dropdown-item" href="{{ route('process-automation') }}">
								<i class="fas fa-robot me-2"></i>
								تحسين وأتمتة العمليات
							</a></li>
							<li><a class="dropdown-item" href="{{ route('ui-ux-design') }}">
								<i class="fas fa-palette me-2"></i>
								تصميم واجهات وتجربة المستخدم
							</a></li>
							<li><a class="dropdown-item" href="{{ route('maintenance-support') }}">
								<i class="fas fa-tools me-2"></i>
								خدمات الدعم الفني والصيانة
							</a></li>
							<li><hr class="dropdown-divider"></li>
							<li class="dropdown-header">
								<i class="fas fa-chart-line me-2"></i>
								خدمات الأعمال
							</li>
							<li><a class="dropdown-item" href="{{ route('marketing-services') }}">
								<i class="fas fa-bullhorn me-2"></i>
								خدمات التسويق
							</a></li>
							<li><a class="dropdown-item" href="index.html#odoo-services">
								<i class="fas fa-cube me-2"></i>
								خدمات Odoo ERP
							</a></li>
							<li><a class="dropdown-item" href="index.html#ai-support">
								<i class="fas fa-brain me-2"></i>
								نظام الدعم الذكي
							</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.html#presence">
							<i class="fas fa-globe me-1"></i>
							تواجدنا
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('careers') }}">
							<i class="fas fa-user-tie me-1"></i>
							الوظائف
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="{{ route('contracts') }}">
							<i class="fas fa-file-contract me-1"></i>
							الحضور والتواجد
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.html#contact">
							<i class="fas fa-envelope me-1"></i>
							اتصل بنا
						</a>
					</li>
				</ul>
				<div class="d-flex align-items-center ms-3 gap-2">
					<a href="tel:+966555883492" class="btn btn-outline-light btn-sm d-none d-lg-inline-flex align-items-center">
						<i class="fas fa-phone me-1"></i>
						اتصال سريع
					</a>
				</div>
			</div>
		</div>
	</nav>

	<!-- Page Header -->
	<section class="py-5 bg-dark text-white">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-8" data-aos="fade-right">
					<h1 class="mb-3">الحضور والتواجد</h1>
					<p class="mb-0">توثيق شراكاتنا وتواجدنا في المعارض والمؤتمرات</p>
				</div>
				<div class="col-lg-4 text-lg-end mt-3 mt-lg-0" data-aos="fade-left">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-lg-end mb-0">
							<li class="breadcrumb-item"><a class="text-decoration-none text-white-50" href="{{ route('index') }}">الرئيسية</a></li>
							<li class="breadcrumb-item active text-white" aria-current="page">الحضور والتواجد</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>



	<!-- Contracts Section -->
	<section class="py-5 bg-light position-relative overflow-hidden" id="contracts">
		<!-- Background Pattern -->
		<div class="contracts-bg-pattern"></div>
		
		<div class="container position-relative">
			<div class="row">
				<div class="col-lg-12 text-center mb-5" data-aos="fade-up">
					<div class="contracts-header">
						<span class="contracts-badge">إنجازاتنا</span>
						<h2 class="section-title">العقود <span class="text-gradient">والشهادات</span></h2>
						<p class="section-subtitle">تعرّفوا على إنجازاتنا من خلال شهادات الاعتماد والجوائز التي نفتخر بها</p>
					</div>
				</div>
			</div>
			
			<div class="row g-4 justify-content-center">
				<!-- شهادات حقيقية من مجلد images -->
				<div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
					<div class="certificate-card">
						<a href="{{ asset('images/cer 1.png') }}" class="cert-item" title="شهادة 1" data-bs-toggle="modal" data-bs-target="#certificateModal">
							<div class="cert-image-wrapper">
								<img class="lazy" alt="شهادة 1" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/cer 1.png') }}"/>
								<div class="cert-overlay">
									<i class="fas fa-search-plus"></i>
								</div>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
					<div class="certificate-card">
						<a href="{{ asset('images/cer 2.png') }}" class="cert-item" title="شهادة 2" data-bs-toggle="modal" data-bs-target="#certificateModal">
							<div class="cert-image-wrapper">
								<img class="lazy" alt="شهادة 2" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/cer 2.png') }}"/>
								<div class="cert-overlay">
									<i class="fas fa-search-plus"></i>
								</div>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
					<div class="certificate-card">
						<a href="{{ asset('images/cer 3.png') }}" class="cert-item" title="شهادة 3" data-bs-toggle="modal" data-bs-target="#certificateModal">
							<div class="cert-image-wrapper">
								<img class="lazy" alt="شهادة 3" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/cer 3.png') }}"/>
								<div class="cert-overlay">
									<i class="fas fa-search-plus"></i>
								</div>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
					<div class="certificate-card">
						<a href="{{ asset('images/cer 4.png') }}" class="cert-item" title="شهادة 4" data-bs-toggle="modal" data-bs-target="#certificateModal">
							<div class="cert-image-wrapper">
								<img class="lazy" alt="شهادة 4" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/cer 4.png') }}"/>
								<div class="cert-overlay">
									<i class="fas fa-search-plus"></i>
								</div>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="500">
					<div class="certificate-card">
						<a href="{{ asset('images/cer 5.png') }}" class="cert-item" title="شهادة 5" data-bs-toggle="modal" data-bs-target="#certificateModal">
							<div class="cert-image-wrapper">
								<img class="lazy" alt="شهادة 5" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ asset('images/cer 5.png') }}"/>
								<div class="cert-overlay">
									<i class="fas fa-search-plus"></i>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Exhibitions - Each with its own carousel and description -->
	<section class="py-5" id="exhibitions">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center mb-5" data-aos="fade-up">
					<h2 class="section-title">المعارض <span class="text-primary">والمشاركات</span></h2>
					<p class="section-subtitle">كل معرض بمحتواه الخاص من الصور والوصف</p>
				</div>
			</div>

			<!-- Exhibition Cards (click to expand) -->
			<div class="row gy-4" data-aos="fade-up">
				<div class="col-12">
					<div class="card border-0 shadow-sm">
						<div class="card-body d-flex flex-column flex-md-row align-items-md-center gap-3">
							<img src="https://images.unsplash.com/photo-1531058020387-3be344556be6?q=80&w=800&auto=format&fit=crop" alt="معرض التقنية بالرياض" class="rounded" style="width: 160px; height: 110px; object-fit: cover;">
							<div class="flex-fill">
								<h4 class="mb-1">معرض التقنية بالرياض</h4>
								<div class="mb-2">
									<span class="badge bg-primary ms-1">الرياض</span>
									<span class="badge bg-secondary">2025</span>
								</div>
								<p class="text-muted mb-0">نظرة عامة سريعة عن المشاركة وعناوين أبرز الجلسات.</p>
							</div>
							<button class="btn btn-outline-primary ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#ex1Collapse" aria-expanded="false" aria-controls="ex1Collapse">عرض التفاصيل</button>
						</div>
						<div id="ex1Collapse" class="collapse">
							<div class="p-3 p-md-4">
								<div id="ex1Carousel" class="carousel slide mb-4" data-bs-ride="carousel">
									<div class="carousel-indicators">
										<button type="button" data-bs-target="#ex1Carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="1"></button>
										<button type="button" data-bs-target="#ex1Carousel" data-bs-slide-to="1" aria-label="2"></button>
										<button type="button" data-bs-target="#ex1Carousel" data-bs-slide-to="2" aria-label="3"></button>
									</div>
									<div class="carousel-inner rounded-3 shadow-sm">
										<div class="carousel-item active">
											<img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=1400&auto=format&fit=crop" class="d-block w-100" alt="جلسة">
										</div>
										<div class="carousel-item">
											<img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1400&auto=format&fit=crop" class="d-block w-100" alt="جولة">
										</div>
										<div class="carousel-item">
											<img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=1400&auto=format&fit=crop" class="d-block w-100" alt="لقاءات">
										</div>
									</div>
									<button class="carousel-control-prev" type="button" data-bs-target="#ex1Carousel" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
									<button class="carousel-control-next" type="button" data-bs-target="#ex1Carousel" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
								</div>
								<h5 class="mb-2">عن المعرض</h5>
								<p class="lead">مشاركة لتعريف الزوار بحلول التحول الرقمي ودمج أنظمة ERP وذكاء الأعمال، مع عروض عملية للحلول وتأثيرها على كفاءة الأعمال.</p>
								<ul class="text-muted mb-0">
									<li>تكامل الفوترة والمخزون والمشاريع بعروض مباشرة.</li>
									<li>لوحات قياس لحظية للمؤشرات التشغيلية والمالية.</li>
									<li>نقاشات مع الشركاء حول خارطة الطريق التقنية.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row gy-4" data-aos="fade-up">
				<div class="col-12">
					<div class="card border-0 shadow-sm">
						<div class="card-body d-flex flex-column flex-md-row align-items-md-center gap-3">
							<img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=800&auto=format&fit=crop" alt="منتدى الأعمال والتقنية" class="rounded" style="width: 160px; height: 110px; object-fit: cover;">
							<div class="flex-fill">
								<h4 class="mb-1">منتدى الأعمال والتقنية</h4>
								<div class="mb-2">
									<span class="badge bg-primary ms-1">جدة</span>
									<span class="badge bg-secondary">2025</span>
								</div>
								<p class="text-muted mb-0">ملخص أعمال المنتدى وأبرز المحاور والنتائج المتحققة.</p>
							</div>
							<button class="btn btn-outline-primary ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#ex2Collapse" aria-expanded="false" aria-controls="ex2Collapse">عرض التفاصيل</button>
						</div>
						<div id="ex2Collapse" class="collapse">
							<div class="p-3 p-md-4">
								<div id="ex2Carousel" class="carousel slide mb-4" data-bs-ride="carousel">
									<div class="carousel-indicators">
										<button type="button" data-bs-target="#ex2Carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="1"></button>
										<button type="button" data-bs-target="#ex2Carousel" data-bs-slide-to="1" aria-label="2"></button>
										<button type="button" data-bs-target="#ex2Carousel" data-bs-slide-to="2" aria-label="3"></button>
									</div>
									<div class="carousel-inner rounded-3 shadow-sm">
										<div class="carousel-item active">
											<img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=1400&auto=format&fit=crop" class="d-block w-100" alt="نقاش">
										</div>
										<div class="carousel-item">
											<img src="https://images.unsplash.com/photo-1503428593586-e225b39bddfe?q=80&w=1400&auto=format&fit=crop" class="d-block w-100" alt="ورشة">
										</div>
										<div class="carousel-item">
											<img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?q=80&w=1400&auto=format&fit=crop" class="d-block w-100" alt="جولة">
										</div>
									</div>
									<button class="carousel-control-prev" type="button" data-bs-target="#ex2Carousel" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
									<button class="carousel-control-next" type="button" data-bs-target="#ex2Carousel" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
								</div>
								<h5 class="mb-2">عن المنتدى</h5>
								<p class="lead">ربط التقنية بالأهداف التجارية مع نماذج عملية لخفض التكاليف ورفع العائد عبر الأتمتة والتحليلات.</p>
								<ul class="text-muted mb-0">
									<li>حوارات قيادية حول إدارة التغيير وبناء القدرات.</li>
									<li>رقمنة سلاسل الإمداد وتحسين تجربة العملاء.</li>
									<li>قياس الأداء بلوحات تفاعلية ومؤشرات واضحة.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row gy-4" data-aos="fade-up">
				<div class="col-12">
					<div class="card border-0 shadow-sm">
						<div class="card-body d-flex flex-column flex-md-row align-items-md-center gap-3">
							<img src="https://images.unsplash.com/photo-1531297484001-80022131f5a1?q=80&w=800&auto=format&fit=crop" alt="معرض الابتكار الرقمي" class="rounded" style="width: 160px; height: 110px; object-fit: cover;">
							<div class="flex-fill">
								<h4 class="mb-1">معرض الابتكار الرقمي</h4>
								<div class="mb-2">
									<span class="badge bg-primary ms-1">الخبر</span>
									<span class="badge bg-secondary">2025</span>
								</div>
								<p class="text-muted mb-0">ملخص المشاركة والتركيز على الذكاء الاصطناعي وMLOps وجودة البيانات.</p>
							</div>
							<button class="btn btn-outline-primary ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#ex3Collapse" aria-expanded="false" aria-controls="ex3Collapse">عرض التفاصيل</button>
						</div>
						<div id="ex3Collapse" class="collapse">
							<div class="p-3 p-md-4">
								<div id="ex3Carousel" class="carousel slide mb-4" data-bs-ride="carousel">
									<div class="carousel-indicators">
										<button type="button" data-bs-target="#ex3Carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="1"></button>
										<button type="button" data-bs-target="#ex3Carousel" data-bs-slide-to="1" aria-label="2"></button>
										<button type="button" data-bs-target="#ex3Carousel" data-bs-slide-to="2" aria-label="3"></button>
									</div>
									<div class="carousel-inner rounded-3 shadow-sm">
										<div class="carousel-item active">
											<img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?q=80&w=1400&auto=format&fit=crop" class="d-block w-100" alt="جلسة تقنية">
										</div>
										<div class="carousel-item">
											<img src="https://images.unsplash.com/photo-1518779578993-ec3579fee39f?q=80&w=1400&auto=format&fit=crop" class="d-block w-100" alt="نموذج">
										</div>
										<div class="carousel-item">
											<img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1400&auto=format&fit=crop" class="d-block w-100" alt="منصة العرض">
										</div>
									</div>
									<button class="carousel-control-prev" type="button" data-bs-target="#ex3Carousel" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
									<button class="carousel-control-next" type="button" data-bs-target="#ex3Carousel" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
								</div>
								<h5 class="mb-2">عن المعرض</h5>
								<p class="lead">حلول الذكاء الاصطناعي من التطوير إلى التشغيل مع التركيز على الحوكمة وجودة البيانات ودعم القرار.</p>
								<ul class="text-muted mb-0">
									<li>سير عمل MLOps والتحديث المستمر للنماذج.</li>
									<li>نماذج تنبؤية ولوحات لحظية.</li>
									<li>أخلاقيات وامتثال الذكاء الاصطناعي.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Certificate Modal (Lightbox) -->
	<div class="modal fade" id="certificateModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content bg-transparent border-0">
				<div class="modal-body p-0 position-relative">
					<button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
					<img id="certificateModalImage" src="" alt="شهادة" class="img-fluid w-100 rounded-3"/>
				</div>
			</div>
		</div>
	</div>

	<!-- Gallery Modal (Lightbox) -->
	<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl">
			<div class="modal-content bg-transparent border-0">
				<div class="modal-body p-0 position-relative">
					<button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
					<img id="galleryModalImage" src="" alt="صورة المعرض" class="img-fluid w-100 rounded-3"/>
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
							<a href="{{ route('contracts') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
								<img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
							</a>
							<a href="{{ route('contracts-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
								<img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
							</a>
							<a href="{{ route('contracts-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
								<img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- WhatsApp Floating Button -->
	<a href="https://wa.me/966555883492?text=%D9%85%D8%B1%D8%AD%D8%A8%D8%A7%20%D8%B5%D9%86%D8%A7%D8%B9%20%D8%A7%D9%84%D8%A8%D8%B1%D9%85%D8%AC%D9%8A%D8%A7%D8%AA" class="whatsapp-fab" aria-label="تواصل عبر واتساب" target="_blank" rel="noopener">
		<svg viewBox="0 0 32 32" aria-hidden="true" class="whatsapp-icon">
			<path fill="currentColor" d="M26.1 5.9A13.9 13.9 0 1 0 4.7 26.3L3 29.8a1 1 0 0 0 1.3 1.3l3.4-1.7A13.9 13.9 0 1 0 26.1 5.9zM16 28.1c-2.3 0-4.6-.7-6.5-1.9l-.5-.3-3.9 2 2-3.9-.3-.5A12 12 0 1 1 28 16 12 12 0 0 1 16 28.1zm6.6-7.7c-.4-.2-2.3-1.1-2.7-1.3-.4-.1-.7-.2-1 .2-.3.4-1.1 1.3-1.3 1.6-.2.2-.5.3-.9.1-2.3-1.1-4-3-4.6-3.9-.2-.3 0-.6.2-.8.2-.2.4-.5.6-.7.2-.2.3-.4.4-.7.1-.2 0-.5 0-.7 0-.2-1-2.5-1.3-3.4-.3-.8-.7-.7-1-.7h-.9c-.3 0-.7.1-1 .5-.4.4-1.3 1.3-1.3 3.1 0 1.8 1.3 3.6 1.5 3.9.2.3 2.6 3.9 6.3 5.5.9.4 1.6.6 2.1.8.9.3 1.7.2 2.3.1.7-.1 2.3-.9 2.6-1.8.3-.9.3-1.6.2-1.8-.1-.2-.3-.2-.5-.3z"/>
		</svg>
	</a>

	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="{{ asset('js/script.js') }}"></script>
	
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

			if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J' || e.key === 'C'))) {
				e.preventDefault();
				return false;
			}
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


