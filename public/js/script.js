// Custom JavaScript for SMLC Website

document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS (Animate On Scroll)
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });

    // Scroll Progress Bar
    const scrollProgress = document.getElementById('scrollProgress');
    
    function updateScrollProgress() {
        const scrollTop = window.pageYOffset;
        const docHeight = document.body.scrollHeight - window.innerHeight;
        const scrollPercent = (scrollTop / docHeight) * 100;
        if (scrollProgress) {
            scrollProgress.style.width = scrollPercent + '%';
        }
    }

    // Navbar scroll effect
    const navbar = document.getElementById('mainNav');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        
        // Update scroll progress
        updateScrollProgress();
    });

    // Smooth scrolling for navigation links
    const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 80;
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
            
            // Close mobile menu if open
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                bsCollapse.hide();
            }
        });
    });

    // Contact form handling
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;
            
            // Basic validation
            if (!name || !email || !message) {
                showAlert('يرجى ملء جميع الحقول المطلوبة', 'danger');
                return;
            }
            
            if (!isValidEmail(email)) {
                showAlert('يرجى إدخال بريد إلكتروني صحيح', 'danger');
                return;
            }
            
            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span class="loading"></span> جاري الإرسال...';
            submitBtn.disabled = true;

            contactForm.submit();
            
            // // Simulate form submission (replace with actual API call)
            // setTimeout(() => {
            //     showAlert('تم إرسال رسالتك بنجاح! سنتواصل معك قريباً', 'success');
            //     contactForm.reset();
                
            //     // Reset button
            //     submitBtn.innerHTML = originalText;
            //     submitBtn.disabled = false;
            // }, 2000);
        });
    }

    // Floating animation for hero icons
    const floatingIcons = document.querySelectorAll('.floating-icon');
    
    floatingIcons.forEach((icon, index) => {
        icon.style.animationDelay = `${index * 0.5}s`;
        
        // Add random movement
        setInterval(() => {
            const randomX = Math.random() * 20 - 10;
            const randomY = Math.random() * 20 - 10;
            icon.style.transform = `translate(${randomX}px, ${randomY}px)`;
        }, 3000 + index * 1000);
    });

    // Counter animation for statistics
    const counters = document.querySelectorAll('[data-count]');
    
    const animateCounters = () => {
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            const current = parseInt(counter.textContent) || 0;
            const increment = target / 100;
            
            if (current < target) {
                counter.textContent = Math.ceil(current + increment);
                setTimeout(animateCounters, 20);
            } else {
                counter.textContent = target;
            }
        });
    };

    // Intersection Observer for counter animation
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains('stats-section')) {
                    animateCounters();
                }
            }
        });
    }, observerOptions);

    // Observe stats section
    const statsSection = document.querySelector('#stats');
    if (statsSection) {
        observer.observe(statsSection);
    }

    // Parallax effect for hero background
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const heroSection = document.querySelector('.hero-section');
        
        if (heroSection) {
            const rate = scrolled * -0.5;
            heroSection.style.transform = `translateY(${rate}px)`;
        }
    });

    // Enhanced interactive effects
    const serviceCards = document.querySelectorAll('.service-card, .odoo-card, .feature-card, .team-card, .testimonial-card');
    
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
            this.style.boxShadow = '0 20px 40px rgba(54, 180, 179, 0.2)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '';
        });
    });

    // Enhanced button interactions with ripple effect
    const interactiveButtons = document.querySelectorAll('.btn-interactive');
    
    interactiveButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            // Create ripple effect
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(255, 255, 255, 0.6);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple-animation 0.6s linear;
                pointer-events: none;
            `;
            
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });

    // Add ripple animation CSS
    const rippleCSS = `
        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    
    const style = document.createElement('style');
    style.textContent = rippleCSS;
    document.head.appendChild(style);

    // Typing effect for hero title
    const heroTitle = document.querySelector('.hero-content h1');
    if (heroTitle) {
        const text = heroTitle.textContent;
        heroTitle.textContent = '';
        
        let i = 0;
        const typeWriter = () => {
            if (i < text.length) {
                heroTitle.textContent += text.charAt(i);
                i++;
                setTimeout(typeWriter, 50);
            }
        };
        
        setTimeout(typeWriter, 1000);
    }

    // Mobile menu close on link click
    const mobileNavLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 992) {
                navbarCollapse.classList.remove('show');
            }
        });
    });

    // Back to top button (modern FAB)
    const backToTopBtn = document.createElement('button');
    backToTopBtn.className = 'back-to-top-fab';
    backToTopBtn.setAttribute('aria-label', 'العودة للأعلى');
    backToTopBtn.innerHTML = `
        <svg viewBox="0 0 24 24" class="back-to-top-icon" aria-hidden="true">
            <path fill="currentColor" d="M12 5l7 7-1.41 1.41L13 9.83V20h-2V9.83l-4.59 4.58L5 12z"/>
        </svg>
    `;

    document.body.appendChild(backToTopBtn);

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    });

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Loading screen (branded)
    const loadingScreen = document.createElement('div');
    loadingScreen.className = 'loading-screen';
    loadingScreen.innerHTML = `
        <div class="loading-content">
            <div class="loading-logo-wrap">
                <span class="logo-pulse"></span>
                <img src="/images/fiv2.png" alt="SMLC Logo" class="loading-logo"/>
            </div>
            <h2 class="loading-title">SMLC</h2>
            <p class="loading-subtitle">صناع البرمجيات</p>
            <div class="brand-spinner" aria-hidden="true"></div>
        </div>
    `;

    document.body.appendChild(loadingScreen);

    window.addEventListener('load', () => {
        setTimeout(() => {
            loadingScreen.classList.add('loaded');
            setTimeout(() => {
                loadingScreen.remove();
            }, 600);
        }, 800);
    });

    // Initialize Leaflet map for Locations section
    const mapContainer = document.getElementById('locations-map');
    if (mapContainer && window.L) {
        const map = L.map('locations-map', { scrollWheelZoom: false }).setView([23.8859, 45.0792], 4);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        const locations = [
            { name: 'المملكة العربية السعودية - مكة المكرمة', coords: [21.3891, 39.8579] },
            { name: 'السودان - الخرطوم', coords: [15.5007, 32.5599] },
            { name: 'مصر - القاهرة', coords: [30.0444, 31.2357] },
            { name: 'الإمارات العربية المتحدة - دبي', coords: [25.2048, 55.2708] }
        ];

        locations.forEach(loc => {
            L.marker(loc.coords).addTo(map).bindPopup(`<b>${loc.name}</b>`);
        });

        // Fit bounds to markers
        const bounds = L.latLngBounds(locations.map(l => l.coords));
        map.fitBounds(bounds, { padding: [30, 30] });
    }

    // Certificate lightbox (Bootstrap Modal)
    const certLinks = document.querySelectorAll('a.cert-item');
    const certModalEl = document.getElementById('certificateModal');
    const certImgEl = document.getElementById('certificateModalImage');
    let certModalInstance = null;

    if (certModalEl && certImgEl && certLinks.length) {
        certModalInstance = new bootstrap.Modal(certModalEl);

        certLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const img = link.querySelector('img');
                // Prefer full href if provided, fallback to data-src/src
                const targetSrc = link.getAttribute('href') || img.getAttribute('data-src') || img.getAttribute('src');
                const altText = img.getAttribute('alt') || link.getAttribute('title') || 'شهادة';

                // Ensure lazy image is loaded before showing
                if (img.dataset && img.dataset.src && img.src !== img.dataset.src) {
                    img.src = img.dataset.src;
                }

                certImgEl.src = targetSrc;
                certImgEl.alt = altText;
                certModalInstance.show();
            });
        });

        // Clear image on hide to free memory on mobile
        certModalEl.addEventListener('hidden.bs.modal', () => {
            certImgEl.src = '';
        });
    }

    // Generic gallery lightbox for exhibitions
    const galleryLinks = document.querySelectorAll('a.gallery-item');
    const galleryModalEl = document.getElementById('galleryModal');
    const galleryImgEl = document.getElementById('galleryModalImage');
    let galleryModalInstance = null;

    if (galleryModalEl && galleryImgEl && galleryLinks.length) {
        galleryModalInstance = new bootstrap.Modal(galleryModalEl);

        galleryLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const targetSrc = link.getAttribute('href');
                const title = link.getAttribute('title') || 'صورة المعرض';
                galleryImgEl.src = targetSrc;
                galleryImgEl.alt = title;
                galleryModalInstance.show();
            });
        });

        galleryModalEl.addEventListener('hidden.bs.modal', () => {
            galleryImgEl.src = '';
        });
    }
});

// Utility functions
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function showAlert(message, type = 'info') {
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
    alertDiv.style.cssText = `
        top: 100px;
        right: 20px;
        z-index: 1050;
        min-width: 300px;
    `;
    alertDiv.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(alertDiv);
    
    setTimeout(() => {
        alertDiv.remove();
    }, 5000);
}

// Lazy loading for images
function lazyLoadImages() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                observer.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Initialize lazy loading
lazyLoadImages();

// Performance optimization
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Debounced scroll handler
const debouncedScrollHandler = debounce(() => {
    // Handle scroll events here
}, 10);

window.addEventListener('scroll', debouncedScrollHandler);

// Cookies Banner Functionality
document.addEventListener('DOMContentLoaded', function() {
    const cookiesBanner = document.getElementById('cookiesBanner');
    const acceptBtn = document.getElementById('acceptCookies');
    const declineBtn = document.getElementById('declineCookies');
    
    // Check if user has already made a choice
    const cookiesAccepted = localStorage.getItem('cookiesAccepted');
    const cookiesDeclined = localStorage.getItem('cookiesDeclined');
    
    // Show banner if no choice has been made
    if (!cookiesAccepted && !cookiesDeclined) {
        setTimeout(() => {
            cookiesBanner.classList.add('show');
        }, 2000); // Show after 2 seconds
    }
    
    // Accept cookies
    if (acceptBtn) {
        acceptBtn.addEventListener('click', function() {
            localStorage.setItem('cookiesAccepted', 'true');
            localStorage.removeItem('cookiesDeclined');
            hideCookiesBanner();
            
            // Enable analytics and other tracking here
            enableAnalytics();
        });
    }
    
    // Decline cookies
    if (declineBtn) {
        declineBtn.addEventListener('click', function() {
            localStorage.setItem('cookiesDeclined', 'true');
            localStorage.removeItem('cookiesAccepted');
            hideCookiesBanner();
            
            // Disable analytics and other tracking here
            disableAnalytics();
        });
    }
    
    function hideCookiesBanner() {
        cookiesBanner.classList.remove('show');
        setTimeout(() => {
            cookiesBanner.style.display = 'none';
        }, 400);
    }
    
    function enableAnalytics() {
        // Add your analytics code here
        console.log('Analytics enabled');
        
        // Example: Google Analytics
        // gtag('consent', 'update', {
        //     'analytics_storage': 'granted'
        // });
    }
    
    function disableAnalytics() {
        // Disable analytics
        console.log('Analytics disabled');
        
        // Example: Google Analytics
        // gtag('consent', 'update', {
        //     'analytics_storage': 'denied'
        // });
    }
    
    // Handle terms link click
    const termsLink = document.querySelector('.terms-link');
    if (termsLink) {
        termsLink.addEventListener('click', function(e) {
            // Allow normal link behavior to navigate to terms page
            // No preventDefault() needed
        });
    }
});