@extends('layouts.auth')

@section('title', 'Login - Biometric Systems | Software Makers Company')

@section('content')
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
            @error('email')
                <div id="errorMessage" class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror

            <form id="loginForm" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">
                        <i class="fas fa-envelope"></i>
                        Email
                    </label>
                    <div class="input-icon-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-control has-icon" id="email" name="email" required autocomplete="email" placeholder="Enter your email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">
                        <i class="fas fa-key"></i>
                        Password
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

        // // Handle login form submission
        // document.getElementById('loginForm').addEventListener('submit', function(e) {
        //     e.preventDefault();
            
        //     const username = document.getElementById('username').value.trim();
        //     const password = document.getElementById('password').value.trim();
        //     const errorDiv = document.getElementById('errorMessage');
        //     const submitBtn = document.querySelector('.btn-login');
            
        //     // Hide error message
        //     errorDiv.style.display = 'none';
            
        //     // Check if fields are not empty
        //     if (!username || !password) {
        //         errorDiv.textContent = 'Please enter your user ID and password';
        //         errorDiv.style.display = 'block';
        //         return;
        //     }
            
        //     // Biometric scan effect
        //     submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i><span>Verifying...</span>';
        //     submitBtn.disabled = true;
            
        //     // Simulate biometric verification process
        //     setTimeout(() => {
        //         // Verify login credentials
        //         if (username === REQUIRED_USERNAME && password === REQUIRED_PASSWORD) {
        //             // Save login state in localStorage
        //             localStorage.setItem('isLoggedIn', 'true');
        //             localStorage.setItem('username', username);
                    
        //             // Success message
        //             submitBtn.innerHTML = '<i class="fas fa-check-circle me-2"></i><span>Verification Successful</span>';
        //             submitBtn.style.background = 'linear-gradient(135deg, #28a745 0%, #20c997 100%)';
                    
        //             // Redirect user to requested page
        //             isRedirecting = true;
        //             setTimeout(() => {
        //                 const targetUrl = (redirectUrl && redirectUrl !== 'login-en.html') ? redirectUrl : 'index-en.html';
        //                 window.location.href = targetUrl;
        //             }, 1000);
        //         } else {
        //             // Invalid credentials
        //             errorDiv.textContent = 'Invalid login credentials. Please check your username and password';
        //             errorDiv.style.display = 'block';
        //             submitBtn.innerHTML = '<i class="fas fa-fingerprint me-2"></i><span>Verify & Access</span>';
        //             submitBtn.disabled = false;
                    
        //             // Restore original button colors
        //             submitBtn.style.background = 'linear-gradient(135deg, #00d4ff 0%, #667eea 100%)';
        //         }
        //     }, 1500);
        // });

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
@endsection
