@extends('layouts.app')

@section('title', 'تسجيل الدخول - الأنظمة البيومترية | شركة صناع البرمجيات')

@section('content')
<div class="biometric-grid"></div>
    <div class="scan-lines"></div>
    
    <!-- الجسيمات -->
    <div class="particles" id="particles"></div>

    <div class="login-container">
        <div class="login-header">
            <div class="biometric-icon">
                <div class="fingerprint-scan">
                    <div class="fingerprint-circle"></div>
                    <div class="fingerprint-circle"></div>
                    <div class="fingerprint-circle"></div>
                    <i class="fas fa-fingerprint fingerprint-icon"></i>
                </div>
            </div>
            <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="شعار شركة صناع البرمجيات">
            <h2>نظام التحقق البيومتري</h2>
            <p class="mb-0">الأنظمة السيادية - التحقق الآمن</p>
            <div class="security-badge">
                <i class="fas fa-shield-alt" style="font-size: 0.7rem;"></i>
                <span>نظام آمن ومشفر</span>
            </div>
        </div>
        <div class="login-body">
            <div id="errorMessage" class="alert alert-danger" style="display: none;" role="alert"></div>
            <form id="loginForm">
                <div class="form-group">
                    <label for="username">
                        <i class="fas fa-user-shield"></i>
                        معرف المستخدم
                    </label>
                    <div class="input-icon-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" class="form-control has-icon" id="username" name="username" required autocomplete="username" placeholder="أدخل معرف المستخدم">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">
                        <i class="fas fa-key"></i>
                        كلمة المرور المشفرة
                    </label>
                    <div class="input-icon-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control has-icon" id="password" name="password" required autocomplete="current-password" placeholder="أدخل كلمة المرور">
                    </div>
                </div>
                <button type="submit" class="btn btn-login" id="loginButton">
                    <i class="fas fa-fingerprint me-2" style="font-size: 0.9rem;"></i>
                    <span>التحقق والوصول</span>
                </button>
            </form>
            
            <!-- قسم الخيارات البيومترية -->
            <div class="biometric-options" style="margin-top: 0.8rem; padding-top: 0.8rem; border-top: 1px solid rgba(0, 212, 255, 0.2);">
                <div class="text-center mb-1.5">
                    <p style="color: #00d4ff; font-weight: 600; margin-bottom: 0.2rem; font-size: 0.85rem;">
                        <i class="fas fa-hand-pointer me-2" style="font-size: 0.75rem;"></i>
                        أو سجل الدخول باستخدام
                    </p>
                    <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.7rem; margin-bottom: 0;">
                        اختر طريقة التحقق البيومتري
                    </p>
                </div>
                
                <div class="biometric-buttons" style="display: flex; gap: 0.5rem; justify-content: center; flex-wrap: wrap; margin-top: 0.7rem;">
                    <!-- بصمة الوجه -->
                    <button type="button" class="biometric-btn" id="faceScanBtn" data-type="face">
                        <div class="biometric-btn-icon">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <span class="biometric-btn-text">بصمة الوجه</span>
                        <div class="biometric-btn-scan" id="faceScanIndicator"></div>
                    </button>
                    
                    <!-- بصمة اليد -->
                    <button type="button" class="biometric-btn" id="fingerprintBtn" data-type="fingerprint">
                        <div class="biometric-btn-icon">
                            <i class="fas fa-fingerprint"></i>
                        </div>
                        <span class="biometric-btn-text">بصمة اليد</span>
                        <div class="biometric-btn-scan" id="fingerprintScanIndicator"></div>
                    </button>
                    
                    <!-- بصمة العين -->
                    <button type="button" class="biometric-btn" id="eyeScanBtn" data-type="eye">
                        <div class="biometric-btn-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <span class="biometric-btn-text">بصمة العين</span>
                        <div class="biometric-btn-scan" id="eyeScanIndicator"></div>
                    </button>
                </div>
            </div>
            
            <div class="back-link">
                <a href="{{ route('index') }}">
                    <i class="fas fa-arrow-right" style="font-size: 0.85rem;"></i>
                    العودة إلى الصفحة الرئيسية
                </a>
            </div>
        </div>
    </div>

    <script>
        // إنشاء الجسيمات المتحركة
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 20;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 15 + 's';
                particle.style.animationDuration = (10 + Math.random() * 10) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // الحصول على معامل redirect من URL
        const urlParams = new URLSearchParams(window.location.search);
        const redirectUrl = urlParams.get('redirect') || 'index.html';

        // بيانات تسجيل الدخول المطلوبة
        const REQUIRED_USERNAME = 'smlc-sa';
        const REQUIRED_PASSWORD = 'saudia-arabia';

        // معالجة تسجيل الدخول
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const errorDiv = document.getElementById('errorMessage');
            const submitBtn = document.querySelector('.btn-login');
            
            // إخفاء رسالة الخطأ
            errorDiv.style.display = 'none';
            
            // التحقق من أن الحقول غير فارغة
            if (!username || !password) {
                errorDiv.textContent = 'يرجى إدخال معرف المستخدم وكلمة المرور';
                errorDiv.style.display = 'block';
                return;
            }
            
            // تأثير المسح البيومتري
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i><span>جارٍ التحقق...</span>';
            submitBtn.disabled = true;
            
            // محاكاة عملية التحقق البيومتري
            setTimeout(() => {
                // التحقق من بيانات تسجيل الدخول
                if (username === REQUIRED_USERNAME && password === REQUIRED_PASSWORD) {
                    // حفظ حالة تسجيل الدخول في localStorage
                    localStorage.setItem('isLoggedIn', 'true');
                    localStorage.setItem('username', username);
                    
                    // رسالة نجاح
                    submitBtn.innerHTML = '<i class="fas fa-check-circle me-2"></i><span>تم التحقق بنجاح</span>';
                    submitBtn.style.background = 'linear-gradient(135deg, #28a745 0%, #20c997 100%)';
                    
                    // توجيه المستخدم إلى الصفحة المطلوبة
                    isRedirecting = true;
                    setTimeout(() => {
                        const targetUrl = (redirectUrl && redirectUrl !== 'login.html') ? redirectUrl : 'index.html';
                        window.location.href = targetUrl;
                    }, 1000);
                } else {
                    // بيانات خاطئة
                    errorDiv.textContent = 'بيانات تسجيل الدخول غير صحيحة. يرجى التحقق من اسم المستخدم وكلمة المرور';
                    errorDiv.style.display = 'block';
                    submitBtn.innerHTML = '<i class="fas fa-fingerprint me-2"></i><span>التحقق والوصول</span>';
                    submitBtn.disabled = false;
                    
                    // إرجاع الألوان الأصلية للزر
                    submitBtn.style.background = 'linear-gradient(135deg, #00d4ff 0%, #667eea 100%)';
                }
            }, 1500);
        });

        // تحميل الصفحة - بدون أي إعادة توجيه تلقائية
        let isRedirecting = false; // منع إعادة التوجيه المتكررة
        
        window.addEventListener('load', function() {
            createParticles();
            
            // التأكد من أن زر تسجيل الدخول مرئي
            const loginButton = document.getElementById('loginButton');
            if (loginButton) {
                loginButton.style.display = 'block';
                loginButton.style.visibility = 'visible';
                loginButton.style.opacity = '1';
            }
            
            // لا نعيد التوجيه تلقائياً - نسمح للمستخدم بإدخال بياناته دائماً
        });
    </script>
    
    <!-- حماية منع النسخ -->
@endsection
