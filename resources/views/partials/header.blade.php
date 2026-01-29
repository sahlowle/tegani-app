@php
    $segments = request()->segments();
    $lastSeg = collect($segments)->last();
    $locale = in_array($lastSeg, ['en', 'fr']) ? $lastSeg : (in_array($segments[0] ?? null, ['en', 'fr']) ? ($segments[0] ?? 'ar') : 'ar');
    $suffix = $locale === 'ar' ? '' : '-' . $locale;

    $isRtl = $locale === 'ar';
    $brandName = $locale === 'ar'
        ? 'شركة صناع البرمجيات المحدودة'
        : ($locale === 'fr' ? 'Software Makers Limited Company' : 'Software Makers Limited Company');

    $labels = [
        'home' => $locale === 'ar' ? 'الرئيسية' : ($locale === 'fr' ? 'Accueil' : 'Home'),
        'about' => $locale === 'ar' ? 'من نحن' : ($locale === 'fr' ? 'À propos' : 'About'),
        'services' => $locale === 'ar' ? 'خدماتنا' : ($locale === 'fr' ? 'Services' : 'Services'),
        'presence' => $locale === 'ar' ? 'تواجدنا' : ($locale === 'fr' ? 'Présence' : 'Presence'),
        'careers' => $locale === 'ar' ? 'الوظائف' : ($locale === 'fr' ? 'Carrières' : 'Careers'),
        'contact' => $locale === 'ar' ? 'اتصل بنا' : ($locale === 'fr' ? 'Contact' : 'Contact'),
    ];

    $homeRoute = 'index' . $suffix;
    $careersRoute = 'careers' . $suffix;

    // Service route names (base -> will append -en/-fr automatically)
    $serviceRoutes = [
        'consulting-services' => $locale === 'ar' ? 'الاستشارات التقنية' : ($locale === 'fr' ? 'Conseil' : 'Consulting'),
        'system-development' => $locale === 'ar' ? 'تطوير الأنظمة' : ($locale === 'fr' ? 'Dév. Systèmes' : 'System Development'),
        'system-integration' => $locale === 'ar' ? 'تكامل الأنظمة' : ($locale === 'fr' ? 'Intégration' : 'System Integration'),
        'ui-ux-design' => $locale === 'ar' ? 'تصميم UI/UX' : ($locale === 'fr' ? 'UI/UX' : 'UI/UX Design'),
        'growth-strategy' => $locale === 'ar' ? 'استراتيجيات النمو' : ($locale === 'fr' ? 'Croissance' : 'Growth Strategy'),
        'market-analysis' => $locale === 'ar' ? 'تحليل السوق' : ($locale === 'fr' ? 'Analyse marché' : 'Market Analysis'),
        'marketing-services' => $locale === 'ar' ? 'خدمات التسويق' : ($locale === 'fr' ? 'Marketing' : 'Marketing Services'),
        'odoo-accounting' => $locale === 'ar' ? 'Odoo - المحاسبة' : ($locale === 'fr' ? 'Odoo - Comptabilité' : 'Odoo - Accounting'),
        'odoo-crm' => $locale === 'ar' ? 'Odoo - CRM' : ($locale === 'fr' ? 'Odoo - CRM' : 'Odoo - CRM'),
        'odoo-hr' => $locale === 'ar' ? 'Odoo - الموارد البشرية' : ($locale === 'fr' ? 'Odoo - RH' : 'Odoo - HR'),
        'health-systems' => $locale === 'ar' ? 'نظم المعلومات الصحية' : ($locale === 'fr' ? 'Systèmes de santé' : 'Health Systems'),
        'sovereign-systems' => $locale === 'ar' ? 'الأنظمة السيادية' : ($locale === 'fr' ? 'Systèmes souverains' : 'Sovereign Systems'),
    ];
@endphp

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ route($homeRoute) }}" style="display: flex; align-items: center; text-decoration: none; direction: {{ $isRtl ? 'rtl' : 'ltr' }};">
            <div class="logo-container" style="position: relative; margin-{{ $isRtl ? 'left' : 'right' }}: 15px;">
                <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="SMLC Logo" class="img-fluid" style="width: 64px; height: 64px; filter: brightness(1.1) contrast(1.1);">
            </div>
            <div class="brand-text" style="display: flex; flex-direction: column; align-items: flex-start; direction: {{ $isRtl ? 'rtl' : 'ltr' }};">
                <span class="fw-bold" style="font-size: 1.05rem; color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">{{ $brandName }}</span>
            </div>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="تبديل القائمة">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mobile-lang-switcher d-lg-none">
                <a href="{{ route('index') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 44px; height: 44px; border: 2px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);" title="Arabic">
                    <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                </a>
                <a href="{{ route('index-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 44px; height: 44px; border: 2px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);" title="English">
                    <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                </a>
                <a href="{{ route('index-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 44px; height: 44px; border: 2px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);" title="Français">
                    <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                </a>
            </div>
            <ul class="navbar-nav {{ $isRtl ? 'me-auto' : 'ms-auto' }} align-items-center" style="gap: 0.15rem; flex-wrap: nowrap;">
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ route($homeRoute) }}" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                        <i class="fas fa-home {{ $isRtl ? 'ms-1' : 'me-1' }}"></i>
                        {{ $labels['home'] }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ route($homeRoute) }}#about" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                        <i class="fas fa-info-circle {{ $isRtl ? 'ms-1' : 'me-1' }}"></i>
                        {{ $labels['about'] }}
                    </a>
                </li>
                <li class="nav-item dropdown mega-menu">
                    <a class="nav-link dropdown-toggle position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                        <i class="fas fa-briefcase {{ $isRtl ? 'ms-1' : 'me-1' }}"></i>
                        {{ $labels['services'] }}
                        <i class="fas fa-chevron-down {{ $isRtl ? 'ms-1' : 'me-1' }}" style="font-size: 0.7rem; opacity: 0.7;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-mega shadow-lg" style="border: none; border-radius: 12px; padding: 1rem; min-width: 280px; max-width: 100%; margin-top: 0.5rem;">
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('consulting-services' . $suffix) }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-cogs {{ $isRtl ? 'ms-2' : 'me-2' }} text-primary"></i>
                            {{ $serviceRoutes['consulting-services'] }}
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-development' . $suffix) }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-code {{ $isRtl ? 'ms-2' : 'me-2' }} text-primary"></i>
                            {{ $serviceRoutes['system-development'] }}
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-integration' . $suffix) }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-project-diagram {{ $isRtl ? 'ms-2' : 'me-2' }} text-primary"></i>
                            {{ $serviceRoutes['system-integration'] }}
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('ui-ux-design' . $suffix) }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-palette {{ $isRtl ? 'ms-2' : 'me-2' }} text-primary"></i>
                            {{ $serviceRoutes['ui-ux-design'] }}
                        </a></li>
                        <li><hr class="dropdown-divider my-2"></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('growth-strategy' . $suffix) }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-chart-line {{ $isRtl ? 'ms-2' : 'me-2' }} text-success"></i>
                            {{ $serviceRoutes['growth-strategy'] }}
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('market-analysis' . $suffix) }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-chart-bar {{ $isRtl ? 'ms-2' : 'me-2' }} text-success"></i>
                            {{ $serviceRoutes['market-analysis'] }}
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('marketing-services' . $suffix) }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-bullhorn {{ $isRtl ? 'ms-2' : 'me-2' }} text-success"></i>
                            {{ $serviceRoutes['marketing-services'] }}
                        </a></li>
                        <li><hr class="dropdown-divider my-2"></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('odoo-accounting' . $suffix) }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-cube {{ $isRtl ? 'ms-2' : 'me-2' }} text-info"></i>
                            {{ $serviceRoutes['odoo-accounting'] }}
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('odoo-crm' . $suffix) }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-users {{ $isRtl ? 'ms-2' : 'me-2' }} text-info"></i>
                            {{ $serviceRoutes['odoo-crm'] }}
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('odoo-hr' . $suffix) }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-user-tie {{ $isRtl ? 'ms-2' : 'me-2' }} text-info"></i>
                            {{ $serviceRoutes['odoo-hr'] }}
                        </a></li>
                        <li><hr class="dropdown-divider my-2"></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('health-systems' . $suffix) }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-heartbeat {{ $isRtl ? 'ms-2' : 'me-2' }} text-danger"></i>
                            {{ $serviceRoutes['health-systems'] }}
                        </a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('sovereign-systems' . $suffix) }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                            <i class="fas fa-shield-alt {{ $isRtl ? 'ms-2' : 'me-2' }} text-warning"></i>
                            {{ $serviceRoutes['sovereign-systems'] }}
                        </a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ route($homeRoute) }}#presence" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                        <i class="fas fa-globe {{ $isRtl ? 'ms-1' : 'me-1' }}"></i>
                        {{ $labels['presence'] }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ route($careersRoute) }}" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                        <i class="fas fa-user-tie {{ $isRtl ? 'ms-1' : 'me-1' }}"></i>
                        {{ $labels['careers'] }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ route($homeRoute) }}#contact" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                        <i class="fas fa-envelope {{ $isRtl ? 'ms-1' : 'me-1' }}"></i>
                        {{ $labels['contact'] }}
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center {{ $isRtl ? 'ms-2' : 'me-2' }} gap-1 flex-wrap" style="flex-shrink: 0;">
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
