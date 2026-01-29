<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms &amp; Conditions | Software Makers Limited Company</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index-en.html#home" style="display: flex; align-items: center; text-decoration: none; direction: ltr;">
                <div class="logo-container" style="position: relative; margin-right: 15px;">
                    <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="SMLC Company Logo" class="img-fluid" style="width: 64px; height: 64px; filter: brightness(1.1) contrast(1.1);">
                </div>
                <div class="brand-text" style="display: flex; flex-direction: column; align-items: flex-start; direction: ltr;">
                    <span class="fw-bold" style="font-size: 1.05rem; color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">Software Makers Limited Company</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto align-items-center" style="gap: 0.15rem; flex-wrap: nowrap;">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-en.html#home" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-home me-1"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-en.html#about" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-info-circle me-1"></i>
                            About Us
                        </a>
                    </li>
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle position-relative" href="index-en.html#services" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-briefcase me-1"></i>
                            Our Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-mega shadow-lg" style="border: none; border-radius: 12px; padding: 1rem; min-width: 280px; max-width: 100%; margin-top: 0.5rem;">
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-cogs me-2"></i>
                                Technical Services
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('consulting-services-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-lightbulb me-2 text-warning"></i>
                                Technical Consulting
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-development-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-code me-2 text-info"></i>
                                System Development
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-integration-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-link me-2 text-success"></i>
                                System Integration
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('project-management-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-project-diagram me-2 text-primary"></i>
                                Technical Project Management
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('process-automation-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-robot me-2 text-danger"></i>
                                Process Optimization &amp; Automation
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('ui-ux-design-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-palette me-2" style="color: #e91e63;"></i>
                                UI/UX Design
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('maintenance-support-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-tools me-2 text-secondary"></i>
                                Technical Support &amp; Maintenance
                            </a></li>
                            <li><hr class="dropdown-divider my-3" style="opacity: 0.2;"></li>
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-chart-line me-2"></i>
                                Business Services
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('marketing-services-en') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-bullhorn me-2 text-warning"></i>
                                Marketing Services
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index-en.html#odoo-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-cube me-2 text-info"></i>
                                Odoo ERP Services
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index-en.html#ai-support" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-brain me-2" style="color: #9c27b0;"></i>
                                AI Support System
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-en.html#presence" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-globe me-1"></i>
                            Our Presence
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('careers-en') }}" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-user-tie me-1"></i>
                            Careers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative active" href="{{ route('terms-en') }}" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-file-alt me-1"></i>
                            Terms &amp; Conditions
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-en.html#contact" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-envelope me-1"></i>
                            Contact Us
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-1 flex-wrap ms-lg-auto" style="flex-shrink: 0;">
                    <a href="{{ route('terms') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="Arabic">
                        <img src="https://flagcdn.com/w20/sa.png" alt="Saudi Arabia Flag" width="20" height="15" style="border-radius: 3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('terms-en') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem; background: rgba(0,0,0,0.2);" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="United Kingdom Flag" width="20" height="15" style="border-radius: 3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('terms-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="Français">
                        <img src="https://flagcdn.com/w20/fr.png" alt="French Flag" width="20" height="15" style="border-radius: 3px;">
                        <span>FR</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Page Header -->
    <section class="py-5 bg-dark text-white" style="margin-top: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="mb-3">Terms &amp; Conditions</h1>
                    <p class="mb-0">Website terms of use for Software Makers Limited Company</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-decoration-none text-white-50" href="{{ route('index-en') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Terms &amp; Conditions</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Terms Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="terms-content">

                        <h2 class="mb-4">1. Introduction</h2>
                        <p>Welcome to the website of Software Makers Limited Company (SMLC). These Terms &amp; Conditions govern your use of our website and digital services. By accessing or using this website, you agree to be bound by these Terms &amp; Conditions. If you do not agree with any part of these terms, please do not use the website.</p>
                        
                        <p>We are committed to protecting your privacy and personal data in accordance with the highest international standards and the laws of the Kingdom of Saudi Arabia, including the Personal Data Protection Law issued by Royal Decree No. (M/19) dated 09/02/1443H.</p>

                        <h2 class="mb-4">2. Company Information</h2>
                        <p>Software Makers Limited Company is a Saudi company specialized in advanced software development and technology solutions. We provide technical consulting, systems development, and Odoo-based solutions as an official and certified partner.</p>

                        <h2 class="mb-4">3. Use of the Website</h2>
                        <h3>3.1 Permitted Use</h3>
                        <ul>
                            <li>You may use this website for lawful purposes only.</li>
                            <li>You must use the website in a way that does not infringe the rights of others.</li>
                            <li>You may not use the website for any unlawful, harmful, or malicious purposes.</li>
                        </ul>

                        <h3>3.2 Prohibited Use</h3>
                        <ul>
                            <li>Publishing or distributing any illegal, offensive, or defamatory content.</li>
                            <li>Infringing the intellectual property rights of others.</li>
                            <li>Attempting to hack, disrupt, or interfere with the website or its systems.</li>
                            <li>Using the website to distribute viruses, malware, or any harmful code.</li>
                        </ul>

                        <h2 class="mb-4">4. Intellectual Property</h2>
                        <p>All content on this website, including text, images, logos, designs, and software, is protected by copyright and trademark laws. You may not use any of this content without obtaining prior written permission from Software Makers Limited Company.</p>

                        <h2 class="mb-4">5. Services Provided</h2>
                        <h3>5.1 Technical Services</h3>
                        <p>We provide technical consulting, systems development, systems integration, technical project management, process automation, and UI/UX design services.</p>

                        <h3>5.2 Odoo Services</h3>
                        <p>We are an official and certified Odoo partner, providing end-to-end ERP implementation and customization services.</p>

                        <h3>5.3 Technical Support</h3>
                        <p>We provide the intelligent support platform ResolvePro AI to serve our clients around the clock.</p>

                        <h2 class="mb-4">6. Privacy and Personal Data Protection</h2>
                        <p>We are committed to protecting your privacy and personal data in accordance with the highest international standards and the laws of the Kingdom of Saudi Arabia, including the Personal Data Protection Law.</p>

                        <h3>6.1 Personal Data We Collect</h3>
                        <p>We collect the following categories of personal data:</p>
                        <ul>
                            <li><strong>Basic data:</strong> name, email address, phone number.</li>
                            <li><strong>Professional data:</strong> company name, job title, business sector.</li>
                            <li><strong>Technical data:</strong> IP address, browser type, operating system.</li>
                            <li><strong>Usage data:</strong> visited pages, visit duration, referrer sources.</li>
                        </ul>

                        <h3>6.2 Purposes of Processing Personal Data</h3>
                        <p>We use personal data for the following purposes:</p>
                        <ul>
                            <li>Providing our technical and consulting services.</li>
                            <li>Improving the user experience on our website.</li>
                            <li>Responding to your inquiries and requests.</li>
                            <li>Sending updates and marketing communications (with your consent).</li>
                            <li>Analyzing website usage to improve performance.</li>
                            <li>Complying with legal and regulatory requirements.</li>
                        </ul>

                        <h3>6.3 Legal Basis for Processing</h3>
                        <p>We process your personal data on the basis of:</p>
                        <ul>
                            <li><strong>Consent:</strong> your explicit consent to process your data.</li>
                            <li><strong>Contract performance:</strong> performing the services agreed with you.</li>
                            <li><strong>Legitimate interest:</strong> improving our services and protecting our interests.</li>
                            <li><strong>Legal obligation:</strong> complying with applicable laws and regulations.</li>
                        </ul>

                        <h3>6.4 Sharing Personal Data</h3>
                        <p>We do not sell or rent your personal data to third parties. We may share data with:</p>
                        <ul>
                            <li>Trusted technical service providers (such as Odoo).</li>
                            <li>Competent government authorities where legally required.</li>
                            <li>Business partners with your explicit consent.</li>
                        </ul>

                        <h3>6.5 Protection of Personal Data</h3>
                        <p>We apply strict security measures to protect your data, including:</p>
                        <ul>
                            <li><strong>Encryption:</strong> encrypting data in transit and at rest.</li>
                            <li><strong>Access control:</strong> restricting access to authorized personnel only.</li>
                            <li><strong>Continuous monitoring:</strong> monitoring security systems 24/7.</li>
                            <li><strong>Backups:</strong> secure and encrypted data backups.</li>
                            <li><strong>Training:</strong> training employees on data protection best practices.</li>
                        </ul>

                        <h3>6.6 Your Rights Regarding Personal Data</h3>
                        <p>You have the following rights regarding your personal data:</p>
                        <ul>
                            <li><strong>Right of access:</strong> to know what data we hold about you.</li>
                            <li><strong>Right to rectification:</strong> to correct inaccurate data.</li>
                            <li><strong>Right to erasure:</strong> to request deletion of your data in certain cases.</li>
                            <li><strong>Right to restriction:</strong> to request restriction of processing.</li>
                            <li><strong>Right to data portability:</strong> to obtain a copy of your data.</li>
                            <li><strong>Right to object:</strong> to object to certain types of processing.</li>
                            <li><strong>Right to withdraw consent:</strong> to withdraw your consent at any time.</li>
                        </ul>

                        <h3>6.7 Cookies</h3>
                        <p>We use different types of cookies, including:</p>
                        <ul>
                            <li><strong>Essential cookies:</strong> necessary for the website to function properly.</li>
                            <li><strong>Performance cookies:</strong> used to analyze website usage.</li>
                            <li><strong>Functional cookies:</strong> used to enhance the user experience.</li>
                            <li><strong>Marketing cookies:</strong> used to show relevant advertisements.</li>
                        </ul>
                        <p>You can manage your cookie preferences through your browser settings or via the cookie banner at the bottom of the page.</p>

                        <h3>6.8 Data Retention</h3>
                        <p>We retain your personal data only for as long as necessary to achieve the purposes described above or as required by law. As a general rule, we retain data for up to three years from your last interaction with us.</p>

                        <h3>6.9 Cross-Border Data Transfers</h3>
                        <p>We may transfer your personal data to other countries for processing or service delivery. In such cases, we ensure appropriate safeguards are in place to protect your data in line with international standards.</p>

                        <h3>6.10 Children’s Data</h3>
                        <p>We do not knowingly collect personal data from children under the age of 18 without the consent of a parent or legal guardian. If we learn that we have collected personal data from a child without proper consent, we will delete that data immediately.</p>

                        <h3>6.11 Security Incidents</h3>
                        <p>In the event of a security breach that may affect your personal data, we will notify you and the competent authorities within 72 hours of discovering the incident, in accordance with legal requirements.</p>

                        <h3>6.12 Updates to the Privacy Policy</h3>
                        <p>We may update this Privacy Policy from time to time. We will inform you of any material changes through a prominent notice on our website or via email.</p>

                        <h2 class="mb-4">7. Accounts and Passwords</h2>
                        <p>If you create an account on our website, you are responsible for:</p>
                        <ul>
                            <li>Maintaining the confidentiality of your account information and password.</li>
                            <li>Notifying us immediately of any unauthorized use of your account.</li>
                            <li>Keeping your personal information accurate and up to date.</li>
                        </ul>

                        <h2 class="mb-4">8. Limitation of Liability</h2>
                        <h3>8.1 No Warranty</h3>
                        <p>This website is provided on an “as is” basis without any warranties of any kind, whether express or implied.</p>

                        <h3>8.2 Limitation of Liability</h3>
                        <p>We shall not be liable for any direct, indirect, incidental, consequential, or special damages arising out of or in connection with your use of the website or our services.</p>

                        <h2 class="mb-4">9. Changes to the Terms &amp; Conditions</h2>
                        <p>We reserve the right to modify these Terms &amp; Conditions at any time. Any changes will be published on this page, and your continued use of the website after such changes are posted will constitute your acceptance of the updated terms.</p>

                        <h2 class="mb-4">10. Termination of Service</h2>
                        <p>We reserve the right to suspend or terminate your access to the website or our services at any time, without prior notice and for any reason.</p>

                        <h2 class="mb-4">11. Compliance with Saudi Laws and Regulations</h2>
                        <h3>11.1 Personal Data Protection Law</h3>
                        <p>We fully comply with the Personal Data Protection Law issued by Royal Decree No. (M/19) dated 09/02/1443H, which aims to protect the privacy of personal data and ensure its lawful and secure processing.</p>

                        <h3>11.2 Saudi Vision 2030</h3>
                        <p>We support Saudi Vision 2030 in the field of digital transformation and the development of the digital economy by providing innovative technology solutions that contribute to building an advanced digital society.</p>

                        <h3>11.3 Cybersecurity Standards</h3>
                        <p>We implement cybersecurity standards issued by the National Cybersecurity Authority, including:</p>
                        <ul>
                            <li>Personal data protection standards.</li>
                            <li>Network security standards.</li>
                            <li>Cyber risk management standards.</li>
                            <li>Cyber incident response standards.</li>
                        </ul>

                        <h3>11.4 Executive Regulations</h3>
                        <p>We comply with the following executive regulations, where applicable:</p>
                        <ul>
                            <li>Executive Regulations of the Personal Data Protection Law.</li>
                            <li>Cybersecurity Executive Regulations.</li>
                            <li>E-commerce Executive Regulations.</li>
                            <li>Cloud Services Executive Regulations.</li>
                        </ul>

                        <h2 class="mb-4">12. Governing Law</h2>
                        <p>These Terms &amp; Conditions are governed by and construed in accordance with the laws of the Kingdom of Saudi Arabia. Any dispute arising out of or in connection with these terms shall be submitted to the competent courts in the Kingdom of Saudi Arabia.</p>

                        <h2 class="mb-4">13. Contact Us</h2>
                        <p>If you have any questions about these Terms &amp; Conditions, please contact us via:</p>
                        <ul>
                            <li><strong>Email:</strong> info@smlc.com</li>
                            <li><strong>Phone:</strong> +966555883492</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-white text-dark py-4">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Software Makers Limited Company - SMLC Logo" class="footer-logo mb-2">
                        <span class="fw-bold">Software Makers Limited Company</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 All Rights Reserved</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('terms') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('terms-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('terms-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
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

