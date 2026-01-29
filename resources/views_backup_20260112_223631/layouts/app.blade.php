<!DOCTYPE html>
<html lang="{{ $lang ?? 'ar' }}" dir="{{ $dir ?? 'rtl' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'شركة صناع البرمجيات المحدودة | تطوير البرمجيات والحلول التقنية | شريك Odoo معتمد')</title>
    <meta name="description" content="@yield('description', 'شركة صناع البرمجيات المحدودة - شركة سعودية رائدة في تطوير البرمجيات والحلول التق نية المتطورة باستخدام الذكاء الاصطناعي. شريك Odoo معتمد.')">
    <meta name="keywords" content="@yield('keywords', 'شركة صناع البرمجيات, تطوير البرمجيات السعودية, حلول تقنية, Odoo ERP, تطوير الأنظمة')">
    <meta name="author" content="شركة صناع البرمجيات المحدودة">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="language" content="{{ $language ?? 'Arabic' }}">
    <meta name="revisit-after" content="7 days">
    <meta name="geo.region" content="SA">
    <meta name="geo.placename" content="Saudi Arabia">
    
    @stack('meta')
    
    <link rel="icon" type="image/png" href="{{ asset('images/fiv2.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/LOGO_UPDATE.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    @stack('styles')
</head>
<body>
    <div class="scroll-progress" id="scrollProgress"></div>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')
    @include('partials.whatsapp')
    @include('partials.cookies')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="{{ asset('js/translations.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    
    @stack('scripts')
</body>
</html>
