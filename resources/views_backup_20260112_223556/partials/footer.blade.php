<style>
    .footer-logo { height: 92px; width: auto; object-fit: contain; filter: drop-shadow(0 4px 10px rgba(0,0,0,0.15)) brightness(1.05) contrast(1.05); animation: footerFloat 6s ease-in-out infinite; }
    @keyframes footerFloat { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-6px); } }
    /* Brand colors and styling for social icons */
    .social-links { display: inline-flex; gap: 10px; }
    .social-links a { font-size: 1.25rem; display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 50%; background: rgba(255,255,255,0.08); color: inherit; transition: transform .2s ease, box-shadow .2s ease, opacity .2s ease; }
    .social-links a:hover { transform: translateY(-2px); box-shadow: 0 6px 14px rgba(0,0,0,0.25); opacity: 1; }
    .social-links a.instagram { color: #E1306C; }
    .social-links a.linkedin { color: #0A66C2; }
    .social-links a.facebook { color: #1877F2; }
    .social-links a i.fa-x-twitter { color: #ffffff; }
    .social-links a.x { background: #000000; color: #ffffff; }
    .social-links a.x svg { color: #ffffff; }
</style>

<footer class="bg-white text-dark py-4">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="شعار شركة صناع البرمجيات المحدودة - SMLC" class="footer-logo mb-2">
                    <span class="fw-bold">شركة صناع البرمجيات المحدودة</span>
                    <p class="mb-0 mt-2 text-muted">© 2025 جميع الحقوق محفوظة</p>
                    <div class="mt-3 d-inline-flex align-items-center gap-2">
                        <a href="{{ route('index') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                            <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                        </a>
                        <a href="{{ route('index-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                            <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                        </a>
                        <a href="{{ route('index-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                            <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
