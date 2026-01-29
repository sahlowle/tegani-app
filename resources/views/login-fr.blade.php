@extends('layouts.app')

@section('title', 'Connexion - Systèmes Biométriques | Software Makers Company')

@section('content')
<div class="biometric-grid"></div>
    <div class="scan-lines"></div>
    
    <!-- Particules -->
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
            <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Logo Software Makers Company">
            <h2>Système de Vérification Biométrique</h2>
            <p class="mb-0">Systèmes Souverains - Vérification Sécurisée</p>
            <div class="security-badge">
                <i class="fas fa-shield-alt" style="font-size: 0.7rem;"></i>
                <span>Système Sécurisé et Chiffré</span>
            </div>
        </div>
        <div class="login-body">
            <div id="errorMessage" class="alert alert-danger" style="display: none;" role="alert"></div>
            <form id="loginForm">
                <div class="form-group">
                    <label for="username">
                        <i class="fas fa-user-shield"></i>
                        Identifiant Utilisateur
                    </label>
                    <div class="input-icon-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" class="form-control has-icon" id="username" name="username" required autocomplete="username" placeholder="Entrez votre identifiant">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">
                        <i class="fas fa-key"></i>
                        Mot de Passe Chiffré
                    </label>
                    <div class="input-icon-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control has-icon" id="password" name="password" required autocomplete="current-password" placeholder="Entrez votre mot de passe">
                    </div>
                </div>
                <button type="submit" class="btn btn-login" id="loginButton">
                    <i class="fas fa-fingerprint me-2" style="font-size: 0.9rem;"></i>
                    <span>Vérifier et Accéder</span>
                </button>
            </form>
            
            <!-- Section Options Biométriques -->
            <div class="biometric-options" style="margin-top: 0.8rem; padding-top: 0.8rem; border-top: 1px solid rgba(0, 212, 255, 0.2);">
                <div class="text-center mb-1.5">
                    <p style="color: #00d4ff; font-weight: 600; margin-bottom: 0.2rem; font-size: 0.85rem;">
                        <i class="fas fa-hand-pointer me-2" style="font-size: 0.75rem;"></i>
                        Ou connectez-vous en utilisant
                    </p>
                    <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.7rem; margin-bottom: 0;">
                        Choisissez une méthode de vérification biométrique
                    </p>
                </div>
                
                <div class="biometric-buttons" style="display: flex; gap: 0.5rem; justify-content: center; flex-wrap: wrap; margin-top: 0.7rem;">
                    <!-- Reconnaissance Faciale -->
                    <button type="button" class="biometric-btn" id="faceScanBtn" data-type="face">
                        <div class="biometric-btn-icon">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <span class="biometric-btn-text">Reconnaissance Faciale</span>
                        <div class="biometric-btn-scan" id="faceScanIndicator"></div>
                    </button>
                    
                    <!-- Empreinte Digitale -->
                    <button type="button" class="biometric-btn" id="fingerprintBtn" data-type="fingerprint">
                        <div class="biometric-btn-icon">
                            <i class="fas fa-fingerprint"></i>
                        </div>
                        <span class="biometric-btn-text">Empreinte Digitale</span>
                        <div class="biometric-btn-scan" id="fingerprintScanIndicator"></div>
                    </button>
                    
                    <!-- Scan Oculaire -->
                    <button type="button" class="biometric-btn" id="eyeScanBtn" data-type="eye">
                        <div class="biometric-btn-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <span class="biometric-btn-text">Scan Oculaire</span>
                        <div class="biometric-btn-scan" id="eyeScanIndicator"></div>
                    </button>
                </div>
            </div>
            
            <div class="back-link">
                <a href="{{ route('index-fr') }}">
                    <i class="fas fa-arrow-left" style="font-size: 0.85rem;"></i>
                    Retour à la Page d'Accueil
                </a>
            </div>
        </div>
    </div>

    <script>
        // Créer des particules animées
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

        // Obtenir le paramètre redirect de l'URL
        const urlParams = new URLSearchParams(window.location.search);
        const redirectUrl = urlParams.get('redirect') || 'index-fr.html';

        // Identifiants de connexion requis
        const REQUIRED_USERNAME = 'smlc-sa';
        const REQUIRED_PASSWORD = 'saudia-arabia';

        // Gérer la soumission du formulaire de connexion
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const errorDiv = document.getElementById('errorMessage');
            const submitBtn = document.querySelector('.btn-login');
            
            // Masquer le message d'erreur
            errorDiv.style.display = 'none';
            
            // Vérifier si les champs ne sont pas vides
            if (!username || !password) {
                errorDiv.textContent = 'Veuillez entrer votre identifiant et votre mot de passe';
                errorDiv.style.display = 'block';
                return;
            }
            
            // Effet de balayage biométrique
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i><span>Vérification en cours...</span>';
            submitBtn.disabled = true;
            
            // Simuler le processus de vérification biométrique
            setTimeout(() => {
                // Vérifier les identifiants de connexion
                if (username === REQUIRED_USERNAME && password === REQUIRED_PASSWORD) {
                    // Enregistrer l'état de connexion dans localStorage
                    localStorage.setItem('isLoggedIn', 'true');
                    localStorage.setItem('username', username);
                    
                    // Message de succès
                    submitBtn.innerHTML = '<i class="fas fa-check-circle me-2"></i><span>Vérification Réussie</span>';
                    submitBtn.style.background = 'linear-gradient(135deg, #28a745 0%, #20c997 100%)';
                    
                    // Rediriger l'utilisateur vers la page demandée
                    isRedirecting = true;
                    setTimeout(() => {
                        const targetUrl = (redirectUrl && redirectUrl !== 'login-fr.html') ? redirectUrl : 'index-fr.html';
                        window.location.href = targetUrl;
                    }, 1000);
                } else {
                    // Identifiants invalides
                    errorDiv.textContent = 'Identifiants de connexion invalides. Veuillez vérifier votre nom d\'utilisateur et votre mot de passe';
                    errorDiv.style.display = 'block';
                    submitBtn.innerHTML = '<i class="fas fa-fingerprint me-2"></i><span>Vérifier et Accéder</span>';
                    submitBtn.disabled = false;
                    
                    // Restaurer les couleurs originales du bouton
                    submitBtn.style.background = 'linear-gradient(135deg, #00d4ff 0%, #667eea 100%)';
                }
            }, 1500);
        });

        // Chargement de la page - sans redirection automatique
        let isRedirecting = false; // Empêcher les redirections répétées
        
        window.addEventListener('load', function() {
            createParticles();
            
            // S'assurer que le bouton de connexion est visible
            const loginButton = document.getElementById('loginButton');
            if (loginButton) {
                loginButton.style.display = 'block';
                loginButton.style.visibility = 'visible';
                loginButton.style.opacity = '1';
            }
            
            // Nous ne redirigeons pas automatiquement - permettre à l'utilisateur d'entrer ses identifiants
        });
    </script>
    
    <!-- Script de Protection contre la Copie -->
@endsection
