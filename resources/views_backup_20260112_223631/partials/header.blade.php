<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}" style="display: flex; align-items: center; text-decoration: none; direction: rtl;">
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
            <div class="mobile-lang-switcher d-lg-none">
                <a href="{{ route('index') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 44px; height: 44px; border: 2px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);" title="العربية">
                    <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                </a>
                <a href="{{ route('index-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 44px; height: 44px; border: 2px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);" title="English">
                    <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                </a>
                <a href="{{ route('index-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 44px; height: 44px; border: 2px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);" title="Français">
                    <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                </a>
            </div>
            <ul class="navbar-nav me-auto align-items-center" style="gap: 0.15rem; flex-wrap: nowrap;">
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ route('index') }}#home" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                        <i class="fas fa-home ms-1"></i>
                        الرئيسية
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ route('index') }}#about" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                        <i class="fas fa-info-circle ms-1"></i>
                        من نحن
                    </a>
                </li>
                <li class="nav-item dropdown mega-menu">
                    <a class="nav-link dropdown-toggle position-relative" href="{{ route('index') }}#services" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                        <i class="fas fa-briefcase ms-1"></i>
                        خدماتنا
                        <i class="fas fa-chevron-down ms-1" style="font-size: 0.7rem; opacity: 0.7;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-mega shadow-lg" style="border: none; border-radius: 12px; padding: 1rem; min-width: 280px; max-width: 100%; margin-top: 0.5rem;">
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('index') }}#tech-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-cogs ms-2 text-primary"></i>
                            الخدمات التقنية والاستشارية
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('index') }}#business-development-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-chart-line ms-2 text-success"></i>
                            خدمات تطوير الأعمال
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('index') }}#odoo-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-cube ms-2 text-info"></i>
                            خدمات Odoo ERP
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('index') }}#health-information-systems" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-heartbeat ms-2 text-danger"></i>
                            خدمات نظم المعلومات الصحية
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('index') }}#sovereign-systems" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-shield-alt ms-2 text-warning"></i>
                            الأنظمة السيادية والتحول الرقمي
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('index') }}#marketing-relations" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-handshake ms-2" style="color: #9c27b0;"></i>
                            خدمات التسويق عبر العلاقات
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('index') }}#ai-support" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-brain ms-2" style="color: #00d4ff;"></i>
                            نظام الدعم الفني الذكي ResolvePro AI
                        </a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ route('index') }}#presence" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                        <i class="fas fa-globe ms-1"></i>
                        تواجدنا
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ route('careers') }}" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                        <i class="fas fa-user-tie ms-1"></i>
                        الوظائف
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ route('index') }}#contact" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                        <i class="fas fa-envelope ms-1"></i>
                        اتصل بنا
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center ms-2 gap-1 flex-wrap" style="flex-shrink: 0;">
                <a href="{{ route('index') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem; background: rgba(0,0,0,0.2);" title="Arabic">
                    <img src="https://flagcdn.com/w20/sa.png" alt="علم السعودية" width="20" height="15" style="border-radius: 3px;">
                    <span>AR</span>
                </a>
                <a href="{{ route('index-en') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="English">
                    <img src="https://flagcdn.com/w20/gb.png" alt="British Flag" width="20" height="15" style="border-radius: 3px;">
                    <span>EN</span>
                </a>
                <a href="{{ route('index-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="Français">
                    <img src="https://flagcdn.com/w20/fr.png" alt="Drapeau de la France" width="20" height="15" style="border-radius: 3px;">
                    <span>FR</span>
                </a>
            </div>
        </div>
    </div>
</nav>
