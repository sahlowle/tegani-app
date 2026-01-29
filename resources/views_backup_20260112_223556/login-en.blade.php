<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Biometric Systems | Software Makers Company</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 50%, #2d3561 100%);
            min-height: 100vh;
            height: 100vh;
            max-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', sans-serif;
            position: relative;
            overflow: hidden;
            padding: 10px;
            margin: 0;
        }
        
        /* Hide scrollbar in body */
        body::-webkit-scrollbar {
            display: none;
        }
        
        body {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        html {
            overflow: hidden;
        }
        
        html::-webkit-scrollbar {
            display: none;
        }

        /* Biometric pattern background */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(0, 212, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(102, 126, 234, 0.1) 0%, transparent 50%),
                linear-gradient(45deg, transparent 30%, rgba(0, 212, 255, 0.03) 50%, transparent 70%);
            animation: backgroundShift 20s ease-in-out infinite;
            z-index: 0;
        }

        @keyframes backgroundShift {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        /* Biometric grid */
        .biometric-grid {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                linear-gradient(rgba(0, 212, 255, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 212, 255, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: gridMove 20s linear infinite;
            z-index: 0;
        }

        @keyframes gridMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        .login-container {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 
                0 20px 60px rgba(0, 0, 0, 0.5),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            overflow: hidden;
            max-width: 450px;
            width: 100%;
            max-height: calc(100vh - 20px);
            height: auto;
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
        }
        
        /* Hide scrollbar in container */
        .login-container::-webkit-scrollbar {
            display: none;
        }
        
        .login-container {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .login-header {
            background: linear-gradient(135deg, rgba(0, 212, 255, 0.2) 0%, rgba(102, 126, 234, 0.2) 100%);
            padding: 1rem 1.5rem 0.8rem;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
        }

        .login-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0, 212, 255, 0.3) 0%, transparent 70%);
            animation: pulse 3s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }

        .biometric-icon {
            position: relative;
            z-index: 2;
            margin-bottom: 1.5rem;
        }

        .fingerprint-scan {
            width: 70px;
            height: 70px;
            margin: 0 auto 0.3rem;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fingerprint-circle {
            width: 100%;
            height: 100%;
            border: 3px solid rgba(0, 212, 255, 0.5);
            border-radius: 50%;
            position: absolute;
            animation: scanRing 2s ease-in-out infinite;
        }

        .fingerprint-circle:nth-child(2) {
            animation-delay: 0.5s;
            border-color: rgba(102, 126, 234, 0.5);
        }

        .fingerprint-circle:nth-child(3) {
            animation-delay: 1s;
            border-color: rgba(0, 212, 255, 0.3);
        }

        @keyframes scanRing {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }
            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        .fingerprint-icon {
            font-size: 28px;
            color: #00d4ff;
            position: relative;
            z-index: 3;
            text-shadow: 0 0 20px rgba(0, 212, 255, 0.8);
            animation: fingerprintPulse 2s ease-in-out infinite;
        }

        @keyframes fingerprintPulse {
            0%, 100% {
                transform: scale(1);
                filter: brightness(1);
            }
            50% {
                transform: scale(1.1);
                filter: brightness(1.3);
            }
        }

        .login-header img {
            width: 40px;
            height: 40px;
            margin-bottom: 0.3rem;
            filter: brightness(1.2) drop-shadow(0 0 10px rgba(0, 212, 255, 0.5));
            position: relative;
            z-index: 2;
        }

        .login-header h2 {
            margin: 0;
            font-weight: 700;
            font-size: 1.2rem;
            text-shadow: 0 0 20px rgba(0, 212, 255, 0.5);
            position: relative;
            z-index: 2;
        }

        .login-header p {
            margin-top: 0.2rem;
            opacity: 0.9;
            position: relative;
            z-index: 2;
            font-size: 0.8rem;
        }

        .security-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            background: rgba(0, 212, 255, 0.1);
            padding: 0.3rem 0.7rem;
            border-radius: 12px;
            border: 1px solid rgba(0, 212, 255, 0.3);
            margin-top: 0.4rem;
            font-size: 0.7rem;
            position: relative;
            z-index: 2;
        }

        .login-body {
            padding: 0.9rem 1rem;
            background: rgba(255, 255, 255, 0.02);
            flex: 1;
            overflow-y: hidden;
            overflow-x: hidden;
            min-height: 0;
        }
        
        /* Hide scrollbar */
        .login-body::-webkit-scrollbar {
            display: none;
        }
        
        .login-body {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .form-group {
            margin-bottom: 0.7rem;
            position: relative;
        }

        .form-group label {
            font-weight: 600;
            color: #00d4ff;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-shadow: 0 0 10px rgba(0, 212, 255, 0.3);
        }

        .form-group label i {
            font-size: 0.95rem;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(0, 212, 255, 0.3);
            border-radius: 10px;
            padding: 0.6rem 0.9rem;
            color: white;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: #00d4ff;
            box-shadow: 
                0 0 0 0.2rem rgba(0, 212, 255, 0.25),
                0 0 20px rgba(0, 212, 255, 0.3);
            color: white;
            outline: none;
        }

        .input-icon-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(0, 212, 255, 0.6);
            z-index: 1;
            font-size: 0.9rem;
        }

        .form-control.has-icon {
            padding-left: 1.2rem;
            padding-right: 3rem;
        }

        .btn-login {
            background: linear-gradient(135deg, #00d4ff 0%, #667eea 100%) !important;
            border: 2px solid rgba(255, 255, 255, 0.3) !important;
            border-radius: 10px;
            padding: 0.7rem 1.2rem;
            font-weight: 700;
            width: 100%;
            color: white !important;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 212, 255, 0.5) !important;
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
            cursor: pointer;
            margin-top: 0.7rem;
            z-index: 10;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn-login:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 212, 255, 0.5);
            color: white;
        }

        .btn-login:active {
            transform: translateY(-1px);
        }

        .btn-login i {
            position: relative;
            z-index: 1;
        }

        .btn-login span {
            position: relative;
            z-index: 1;
        }

        .alert {
            border-radius: 12px;
            margin-bottom: 1rem;
            padding: 0.7rem 1rem;
            background: rgba(220, 53, 69, 0.2);
            border: 1px solid rgba(220, 53, 69, 0.5);
            color: #ff6b6b;
            backdrop-filter: blur(10px);
            font-size: 0.85rem;
        }

        .back-link {
            text-align: center;
            margin-top: 0.7rem;
            padding-top: 0.4rem;
        }

        .back-link a {
            color: #00d4ff;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .back-link a:hover {
            color: #667eea;
            text-shadow: 0 0 10px rgba(102, 126, 234, 0.5);
            transform: translateX(5px);
        }

        /* Biometric scan lines */
        .scan-lines {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, 
                transparent 0%, 
                rgba(0, 212, 255, 0.8) 50%, 
                transparent 100%);
            animation: scanLine 3s linear infinite;
            z-index: 10;
        }

        @keyframes scanLine {
            0% {
                top: 0;
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
            100% {
                top: 100%;
                opacity: 0;
            }
        }

        /* Particle effects */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(0, 212, 255, 0.6);
            border-radius: 50%;
            animation: floatParticle 15s infinite;
        }

        @keyframes floatParticle {
            0% {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) translateX(100px);
                opacity: 0;
            }
        }

        /* Biometric option buttons */
        .biometric-btn {
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(0, 212, 255, 0.3);
            border-radius: 12px;
            padding: 0.5rem;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            width: 85px;
            height: 85px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.2rem;
            text-align: center;
        }

        .biometric-btn:hover {
            background: rgba(0, 212, 255, 0.1);
            border-color: #00d4ff;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 212, 255, 0.3);
        }

        .biometric-btn:active {
            transform: translateY(-1px);
        }

        .biometric-btn.scanning {
            border-color: #00d4ff;
            background: rgba(0, 212, 255, 0.15);
            box-shadow: 0 0 20px rgba(0, 212, 255, 0.5);
        }

        .biometric-btn-icon {
            font-size: 2.6rem;
            color: #00d4ff;
            transition: all 0.3s ease;
            line-height: 1;
        }

        .biometric-btn:hover .biometric-btn-icon {
            transform: scale(1.1);
        }

        .biometric-btn.scanning .biometric-btn-icon {
            animation: biometricPulse 1.5s ease-in-out infinite;
        }

        .biometric-btn-text {
            font-weight: 600;
            font-size: 0.7rem;
            color: #00d4ff;
            line-height: 1.1;
            margin-top: 0.1rem;
        }

        .biometric-btn-scan {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, 
                transparent 0%, 
                rgba(0, 212, 255, 0.3) 50%, 
                transparent 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .biometric-btn.scanning .biometric-btn-scan {
            opacity: 1;
            animation: scanAnimation 2s linear infinite;
        }

        @keyframes biometricPulse {
            0%, 100% {
                transform: scale(1);
                filter: brightness(1);
            }
            50% {
                transform: scale(1.15);
                filter: brightness(1.5);
            }
        }

        @keyframes scanAnimation {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        .biometric-success {
            border-color: #28a745 !important;
            background: rgba(40, 167, 69, 0.15) !important;
        }

        .biometric-success .biometric-btn-icon {
            color: #28a745 !important;
        }

        @media (max-width: 576px) {
            body {
                padding: 10px;
            }
            
            .login-container {
                max-width: 100%;
                max-height: 98vh;
                border-radius: 15px;
            }

            .login-header {
                padding: 1rem;
            }

            .login-body {
                padding: 1rem;
            }

            .fingerprint-scan {
                width: 70px;
                height: 70px;
            }

            .fingerprint-icon {
                font-size: 35px;
            }
            
            .login-header h2 {
                font-size: 1.2rem;
            }

            .biometric-buttons {
                flex-direction: column;
                align-items: stretch;
            }

            .biometric-btn {
                width: 100%;
                min-width: auto;
            }
        }
    </style>
</head>
<body>
    <div class="biometric-grid"></div>
    <div class="scan-lines"></div>
    
    <!-- Particles -->
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
            <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Software Makers Company Logo">
            <h2>Biometric Verification System</h2>
            <p class="mb-0">Sovereign Systems - Secure Verification</p>
            <div class="security-badge">
                <i class="fas fa-shield-alt" style="font-size: 0.7rem;"></i>
                <span>Secure & Encrypted System</span>
            </div>
        </div>
        <div class="login-body">
            <div id="errorMessage" class="alert alert-danger" style="display: none;" role="alert"></div>
            <form id="loginForm">
                <div class="form-group">
                    <label for="username">
                        <i class="fas fa-user-shield"></i>
                        User ID
                    </label>
                    <div class="input-icon-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" class="form-control has-icon" id="username" name="username" required autocomplete="username" placeholder="Enter your user ID">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">
                        <i class="fas fa-key"></i>
                        Encrypted Password
                    </label>
                    <div class="input-icon-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control has-icon" id="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
                    </div>
                </div>
                <button type="submit" class="btn btn-login" id="loginButton">
                    <i class="fas fa-fingerprint me-2" style="font-size: 0.9rem;"></i>
                    <span>Verify & Access</span>
                </button>
            </form>
            
            <!-- Biometric Options Section -->
            <div class="biometric-options" style="margin-top: 0.8rem; padding-top: 0.8rem; border-top: 1px solid rgba(0, 212, 255, 0.2);">
                <div class="text-center mb-1.5">
                    <p style="color: #00d4ff; font-weight: 600; margin-bottom: 0.2rem; font-size: 0.85rem;">
                        <i class="fas fa-hand-pointer me-2" style="font-size: 0.75rem;"></i>
                        Or login using
                    </p>
                    <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.7rem; margin-bottom: 0;">
                        Choose a biometric verification method
                    </p>
                </div>
                
                <div class="biometric-buttons" style="display: flex; gap: 0.5rem; justify-content: center; flex-wrap: wrap; margin-top: 0.7rem;">
                    <!-- Face Recognition -->
                    <button type="button" class="biometric-btn" id="faceScanBtn" data-type="face">
                        <div class="biometric-btn-icon">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <span class="biometric-btn-text">Face ID</span>
                        <div class="biometric-btn-scan" id="faceScanIndicator"></div>
                    </button>
                    
                    <!-- Fingerprint -->
                    <button type="button" class="biometric-btn" id="fingerprintBtn" data-type="fingerprint">
                        <div class="biometric-btn-icon">
                            <i class="fas fa-fingerprint"></i>
                        </div>
                        <span class="biometric-btn-text">Fingerprint</span>
                        <div class="biometric-btn-scan" id="fingerprintScanIndicator"></div>
                    </button>
                    
                    <!-- Eye Scan -->
                    <button type="button" class="biometric-btn" id="eyeScanBtn" data-type="eye">
                        <div class="biometric-btn-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <span class="biometric-btn-text">Eye Scan</span>
                        <div class="biometric-btn-scan" id="eyeScanIndicator"></div>
                    </button>
                </div>
            </div>
            
            <div class="back-link">
                <a href="{{ route('index-en') }}">
                    <i class="fas fa-arrow-left" style="font-size: 0.85rem;"></i>
                    Back to Homepage
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Create animated particles
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

        // Get redirect parameter from URL
        const urlParams = new URLSearchParams(window.location.search);
        const redirectUrl = urlParams.get('redirect') || 'index-en.html';

        // Required login credentials
        const REQUIRED_USERNAME = 'smlc-sa';
        const REQUIRED_PASSWORD = 'saudia-arabia';

        // Handle login form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const errorDiv = document.getElementById('errorMessage');
            const submitBtn = document.querySelector('.btn-login');
            
            // Hide error message
            errorDiv.style.display = 'none';
            
            // Check if fields are not empty
            if (!username || !password) {
                errorDiv.textContent = 'Please enter your user ID and password';
                errorDiv.style.display = 'block';
                return;
            }
            
            // Biometric scan effect
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i><span>Verifying...</span>';
            submitBtn.disabled = true;
            
            // Simulate biometric verification process
            setTimeout(() => {
                // Verify login credentials
                if (username === REQUIRED_USERNAME && password === REQUIRED_PASSWORD) {
                    // Save login state in localStorage
                    localStorage.setItem('isLoggedIn', 'true');
                    localStorage.setItem('username', username);
                    
                    // Success message
                    submitBtn.innerHTML = '<i class="fas fa-check-circle me-2"></i><span>Verification Successful</span>';
                    submitBtn.style.background = 'linear-gradient(135deg, #28a745 0%, #20c997 100%)';
                    
                    // Redirect user to requested page
                    isRedirecting = true;
                    setTimeout(() => {
                        const targetUrl = (redirectUrl && redirectUrl !== 'login-en.html') ? redirectUrl : 'index-en.html';
                        window.location.href = targetUrl;
                    }, 1000);
                } else {
                    // Invalid credentials
                    errorDiv.textContent = 'Invalid login credentials. Please check your username and password';
                    errorDiv.style.display = 'block';
                    submitBtn.innerHTML = '<i class="fas fa-fingerprint me-2"></i><span>Verify & Access</span>';
                    submitBtn.disabled = false;
                    
                    // Restore original button colors
                    submitBtn.style.background = 'linear-gradient(135deg, #00d4ff 0%, #667eea 100%)';
                }
            }, 1500);
        });

        // Page load - without any automatic redirect
        let isRedirecting = false; // Prevent repeated redirects
        
        window.addEventListener('load', function() {
            createParticles();
            
            // Ensure login button is visible
            const loginButton = document.getElementById('loginButton');
            if (loginButton) {
                loginButton.style.display = 'block';
                loginButton.style.visibility = 'visible';
                loginButton.style.opacity = '1';
            }
            
            // We don't redirect automatically - always allow user to enter credentials
        });
    </script>
    
    <!-- Copy Protection Script -->
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

