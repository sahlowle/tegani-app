<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrières | Software Makers Limited Company</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Fix for modal form labels visibility -->
    <style>
        /* Force modal form labels to be visible */
        #applyModal .form-label,
        #applyModal label.form-label,
        .modal-body .form-label,
        .modal-body label.form-label,
        .modal-content .form-label,
        .modal-content label.form-label {
            color: #2c3e50 !important;
            font-weight: 600 !important;
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
            margin-bottom: 8px !important;
            font-size: 0.95rem !important;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container" style="padding: 0 1.25rem;">
            <a class="navbar-brand" href="index-fr.html#home" style="display: flex; align-items: center; text-decoration: none; direction: ltr; margin-right: 1rem;">
                <div class="logo-container" style="position: relative; margin-right: 15px;">
                    <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="SMLC Company Logo" class="img-fluid" style="width: 64px; height: 64px; filter: brightness(1.1) contrast(1.1);">
                </div>
                <div class="brand-text" style="display: flex; flex-direction: column; align-items: flex-start; direction: ltr;">
                    <span class="fw-bold" style="font-size: 1.05rem; color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">Software Makers Limited Company</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Basculer le menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto align-items-center" style="gap: 0.05rem; flex-wrap: nowrap;">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-fr.html#home" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-home me-1"></i>
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-fr.html#about" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-info-circle me-1"></i>
                            À propos
                        </a>
                    </li>
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle position-relative" href="index-fr.html#services" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-briefcase me-1"></i>
                            Nos Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-mega shadow-lg" style="border: none; border-radius: 12px; padding: 1rem; min-width: 280px; max-width: 100%; margin-top: 0.5rem;">
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-cogs me-2"></i>
                                Services Techniques
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('consulting-services-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-lightbulb me-2 text-warning"></i>
                                Conseil Technique
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-development-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-code me-2 text-info"></i>
                                Développement de Systèmes
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-integration-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-link me-2 text-success"></i>
                                Intégration de Systèmes
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('project-management-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-project-diagram me-2 text-primary"></i>
                                Gestion de Projets Techniques
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('process-automation-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-robot me-2 text-danger"></i>
                                Optimisation et Automatisation des Processus
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('ui-ux-design-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-palette me-2" style="color: #e91e63;"></i>
                                Conception UI/UX
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('maintenance-support-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-tools me-2 text-secondary"></i>
                                Support Technique et Maintenance
                            </a></li>
                            <li><hr class="dropdown-divider my-3" style="opacity: 0.2;"></li>
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-chart-line me-2"></i>
                                Services Commerciaux
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('marketing-services-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-bullhorn me-2 text-warning"></i>
                                Services Marketing
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index-fr.html#odoo-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-cube me-2 text-info"></i>
                                Services Odoo ERP
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index-fr.html#ai-support" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-brain me-2" style="color: #9c27b0;"></i>
                                Système de Support IA
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-fr.html#presence" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-globe me-1"></i>
                            Notre Présence
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('careers-fr') }}" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-user-tie me-1"></i>
                            Carrières
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-fr.html#contact" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-envelope me-1"></i>
                            Contactez-nous
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-1 flex-wrap ms-lg-auto" style="flex-shrink: 0;">
                    <a href="{{ route('index') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.35rem 0.55rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.85rem;" title="Arabe">
                        <img src="https://flagcdn.com/w20/sa.png" alt="Drapeau de l'Arabie saoudite" width="20" height="15" style="border-radius: 3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('index-en') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.35rem 0.55rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.85rem;" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="Drapeau du Royaume-Uni" width="20" height="15" style="border-radius: 3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('index-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.35rem 0.55rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.85rem; background: rgba(0,0,0,0.2);" title="Français">
                        <img src="https://flagcdn.com/w20/fr.png" alt="Drapeau de la France" width="20" height="15" style="border-radius: 3px;">
                        <span>FR</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="careers-hero">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4" style="color:#ffffff; text-shadow:2px 2px 4px rgba(0,0,0,0.8);">
                        Rejoignez notre <span style="color:#00d4ff; text-shadow:0 0 15px rgba(0,212,255,0.6);">équipe d'excellence</span>
                    </h1>
                    <p class="lead mb-4" style="color:#e8f4fd; text-shadow:1px 1px 2px rgba(0,0,0,0.7); font-size:1.2rem;">
                        Découvrez nos opportunités dans le conseil, l'ingénierie et l'exploitation, et contribuez à façonner la prochaine génération de solutions numériques intelligentes.
                    </p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">02</span>
                            <span class="stat-label">Postes ouverts</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Membres de l'équipe</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Taux de rétention</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions -->
    <!-- Available Jobs -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Offres <span class="text-primary">disponibles</span></h2>
                    <p class="section-subtitle">Choisissez parmi les offres disponibles et rejoignez notre équipe</p>
                    <button id="refreshJobsBtn" class="btn btn-outline-primary btn-sm mt-3">
                        <i class="fas fa-sync-alt me-2"></i>Actualiser les offres
                    </button>
                </div>
            </div>
            
            <div class="row g-4" id="jobsContainer">
                <!-- Jobs will be loaded here dynamically -->
            </div>

        </div>
    </section>

    <!-- Why Work With Us -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up">
                    <div class="why-work-section">
                        <h3 class="text-center mb-5">Pourquoi construire votre carrière avec nous ?</h3>
                        <div class="row g-4">
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-rocket"></i>
                                    <h5>Hyper-croissance</h5>
                                    <p>Rejoignez une entreprise tech en forte expansion, impliquée dans des programmes numériques stratégiques.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-users"></i>
                                    <h5>Équipe internationale</h5>
                                    <p>Collaborez avec des ingénieurs, consultants et chefs de produit issus de plus de 10 pays.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-graduation-cap"></i>
                                    <h5>Apprentissage continu</h5>
                                    <p>Accédez à des parcours de formation, du mentorat et des certifications reconnues.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-balance-scale"></i>
                                    <h5>Équilibre vie pro / perso</h5>
                                    <p>Horaires flexibles, options hybrides et initiatives bien-être.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-medal"></i>
                                    <h5>Culture de reconnaissance</h5>
                                    <p>Entretiens de performance transparents et récompenses trimestrielles.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-globe"></i>
                                    <h5>Exposition internationale</h5>
                                    <p>Intervenez auprès de clients en Arabie saoudite, dans le CCG, en Europe et aux États-Unis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Job Application Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Soumettre votre candidature</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <form id="jobApplicationForm" action="sendmail.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="jobPosition" name="job_position" value="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="applicantName" class="form-label">Nom complet *</label>
                                <input type="text" class="form-control" id="applicantName" name="applicant_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="applicantEmail" class="form-label">E-mail *</label>
                                <input type="email" class="form-control" id="applicantEmail" name="applicant_email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="applicantPhone" class="form-label">Numéro de téléphone *</label>
                                <input type="tel" class="form-control" id="applicantPhone" name="applicant_phone" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="applicantExperience" class="form-label">Années d'expérience *</label>
                                <select class="form-select" id="applicantExperience" name="applicant_experience" required>
                                    <option value="">Sélectionnez une plage</option>
                                    <option value="0-1">0-1 an</option>
                                    <option value="1-3">1-3 ans</option>
                                    <option value="3-5">3-5 ans</option>
                                    <option value="5+">Plus de 5 ans</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="applicantCoverLetter" class="form-label">Summary</label>
                            <textarea class="form-control" id="applicantCoverLetter" name="applicant_cover_letter" rows="4" placeholder="Présentez brièvement votre parcours, vos réalisations et vos motivations..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="applicantCV" class="form-label">CV (PDF) *</label>
                            <input type="file" class="form-control" id="applicantCV" name="applicant_cv" accept=".pdf" required>
                            <div class="form-text">Merci de télécharger uniquement des fichiers PDF.</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>
                                Envoyer la candidature
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white text-dark py-4">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Company Logo" class="footer-logo mb-2">
                        <span class="fw-bold">Software Makers Limited Company</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 Tous droits réservés</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('careers') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('careers-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('careers-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        // Global variables
        let allJobs = [];

        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        function createJobCard(job) {
            // Check if this is a custom job (has description but no requirements/benefits, or empty requirements/benefits)
            const isCustomJob = job.description && (!job.requirements || job.requirements === '') && (!job.benefits || job.benefits === '');
            
            console.log('Creating card for job:', job.name, 'isCustomJob:', isCustomJob);
            
            // Escape HTML to prevent XSS
            const escapeHtml = (text) => {
                const div = document.createElement('div');
                div.textContent = text;
                return div.innerHTML;
            };
            
            return `
                <div class="col-lg-6 job-item" data-keywords="${escapeHtml(job.name)} ${escapeHtml(job.description || '')}">
                    <div class="job-card">
                        <div class="job-header">
                            <div class="job-icon"><i class="fas fa-briefcase"></i></div>
                            <div class="job-title-section"><h4 class="job-title">${escapeHtml(job.name)}</h4></div>
                        </div>
                        <div class="job-content">
                            ${isCustomJob ? `
                                <div class="job-description">
                                    <h5>Détails du poste:</h5>
                                    <div style="white-space: pre-wrap; line-height: 1.8;">${escapeHtml(job.description || '')}</div>
                                </div>
                            ` : `
                                <div class="job-description">
                                    <h5>Aperçu du poste</h5>
                                    <p>${escapeHtml(job.description || 'Aucune description disponible')}</p>
                                </div>
                                <div class="job-requirements">
                                    <h5>Profil recherché</h5>
                                    <ul>
                                        ${job.requirements ? job.requirements.split('\n').map(req => `<li>${escapeHtml(req)}</li>`).join('') : '<li>Aucune exigence spécifique</li>'}
                                    </ul>
                                </div>
                                <div class="job-benefits">
                                    <h5>Avantages</h5>
                                    <ul>
                                        ${job.benefits ? job.benefits.split('\n').map(b => `<li>${escapeHtml(b)}</li>`).join('') : '<li>Avantages compétitifs</li>'}
                                    </ul>
                                </div>
                            `}
                        </div>
                        <div class="job-footer">
                            <button class="btn btn-primary btn-apply" data-bs-toggle="modal" data-bs-target="#applyModal" data-job="${escapeHtml(job.name)}">
                                <i class="fas fa-paper-plane me-2"></i>
                                Postuler
                            </button>
                        </div>
                    </div>
                </div>
            `;
        }

        function displayJobs(jobs) {
            const container = document.getElementById('jobsContainer');
            console.log('=== displayJobs called ===');
            console.log('Jobs to display:', jobs);
            console.log('Jobs count:', jobs.length);
            console.log('Container element:', container);
            
            if (!container) {
                console.error('❌ Jobs container not found!');
                return;
            }
            
            if (!jobs || jobs.length === 0) {
                console.log('No jobs to display, showing empty state');
                container.innerHTML = `
                    <div class="col-lg-12 text-center">
                        <div class="no-results">
                            <i class="fas fa-search fa-3x text-muted mb-3"></i>
                            <h4>Aucune offre pour le moment</h4>
                            <p class="text-muted">Revenez prochainement pour découvrir de nouvelles opportunités.</p>
                        </div>
                    </div>
                `;
                return;
            }

            console.log('Creating job cards...');
            const jobsHTML = jobs.map((job, index) => {
                console.log(`Job ${index + 1}:`, job);
                const card = createJobCard(job);
                console.log(`Card ${index + 1} created, length:`, card.length);
                return card;
            }).join('');
            
            console.log('All cards created, total HTML length:', jobsHTML.length);
            console.log('Setting container innerHTML...');
            container.innerHTML = jobsHTML;
            console.log('✅ Jobs displayed successfully');
            console.log('Container now has', container.children.length, 'children');
            
            initializeJobApplicationModal();
        }

        function showLoadingState() {
            document.getElementById('jobsContainer').innerHTML = `
                <div class="col-lg-12 text-center">
                    <div class="loading-state">
                        <div class="spinner-border text-primary mb-3" role="status">
                            <span class="visually-hidden">Chargement...</span>
                        </div>
                        <h5>Chargement des offres...</h5>
                        <p class="text-muted">Merci de patienter</p>
                    </div>
                </div>
            `;
        }

        function showErrorState(message) {
            document.getElementById('jobsContainer').innerHTML = `
                <div class="col-lg-12 text-center">
                    <div class="error-state">
                        <i class="fas fa-exclamation-triangle fa-3x text-warning mb-3"></i>
                        <h4>Erreur lors du chargement des offres</h4>
                        <p class="text-muted">${message}</p>
                        <button class="btn btn-primary" onclick="loadJobs()">Réessayer</button>
                    </div>
                </div>
            `;
        }

        // API endpoint - assurez-vous d'ouvrir le fichier via http://localhost et non file://
        const JOBS_API_URL = 'jobs_db.php';
        
        // Vérifier si nous sommes sur HTTP et non file://
        if (window.location.protocol === 'file:') {
            console.error('⚠️ Le fichier doit être ouvert via un serveur HTTP: http://localhost/project/careers-fr.html');
        }

        // Charger les emplois personnalisés depuis la base de données du serveur
        async function loadCustomJobs() {
            try {
                console.log('Récupération des emplois depuis:', JOBS_API_URL);
                const response = await fetch(JOBS_API_URL);
                console.log('Statut de la réponse:', response.status, response.statusText);
                
                if (!response.ok) {
                    const errorText = await response.text();
                    console.error('Erreur de réponse:', errorText);
                    throw new Error(`Échec de la récupération des emplois: ${response.status} ${response.statusText}`);
                }
                
                const contentType = response.headers.get('content-type');
                if (!contentType || !contentType.includes('application/json')) {
                    const text = await response.text();
                    console.error('Type de réponse inattendu:', contentType, 'Réponse:', text);
                    throw new Error('Format de réponse invalide du serveur');
                }
                
                const jobs = await response.json();
                console.log('Emplois chargés depuis le serveur:', jobs);
                console.log('Nombre d\'emplois:', Array.isArray(jobs) ? jobs.length : 0);
                
                // Gérer le cas où la réponse pourrait être un objet d'erreur
                if (jobs && jobs.error) {
                    console.error('Le serveur a retourné une erreur:', jobs.error);
                    return [];
                }
                
                return Array.isArray(jobs) ? jobs : [];
            } catch (error) {
                console.error('Erreur lors du chargement des emplois personnalisés:', error);
                console.error('Détails de l\'erreur:', error.message, error.stack);
                return [];
            }
        }
        
        // Convertir un emploi personnalisé au format standard
        function convertCustomJob(customJob) {
            return {
                id: customJob.id,
                name: customJob.name,
                description: customJob.description,
                requirements: '',
                benefits: '',
                state: 'recruit'
            };
        }

        async function loadJobs() {
            showLoadingState();
            
            try {
                // Charger les emplois personnalisés depuis la base de données du serveur
                const customJobs = await loadCustomJobs();
                console.log('Emplois personnalisés chargés:', customJobs);
                const convertedCustomJobs = customJobs.map(convertCustomJob);
                console.log('Emplois personnalisés convertis:', convertedCustomJobs);
                
                allJobs = convertedCustomJobs;
                console.log('Tous les emplois:', allJobs);
                console.log('Total des emplois:', allJobs.length);
                displayJobs(allJobs);
                updateJobCounts();
            } catch (error) {
                console.error('Erreur lors du chargement des emplois:', error);
                showErrorState('Impossible de charger les emplois depuis la base de données.');
            }
        }

        function updateJobCounts() {
            const total = allJobs.length;
            const active = allJobs.filter(job => job.state === 'recruit').length;
            const statNumbers = document.querySelectorAll('.stat-number');
            if (statNumbers.length >= 2) {
                statNumbers[0].textContent = `${String(active).padStart(2,'0')}`;
                statNumbers[1].textContent = `${total}+`;
            }
        }

        function initializeJobApplicationModal() {
            document.querySelectorAll('.btn-apply').forEach(button => {
                button.addEventListener('click', function () {
                    document.getElementById('jobPosition').value = this.getAttribute('data-job');
                });
            });
            const applyModal = document.getElementById('applyModal');
            applyModal.addEventListener('hidden.bs.modal', function () {
                document.getElementById('jobApplicationForm').reset();
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Load jobs from server database
            loadJobs();
            
            // Initialize job application modal
            initializeJobApplicationModal();
            
            // Add manual refresh button functionality
            const refreshBtn = document.getElementById('refreshJobsBtn');
            if (refreshBtn) {
                refreshBtn.style.display = 'inline-block';
                refreshBtn.addEventListener('click', function() {
                    this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Actualisation...';
                    this.disabled = true;
                    loadJobs();
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-sync-alt me-2"></i>Actualiser les offres';
                        this.disabled = false;
                    }, 2000);
                });
            }
        });
    </script>
    <!-- Script de Protection contre la Copie -->
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

            // F12 and developer tools shortcuts are now allowed
            // Removed: if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J' || e.key === 'C'))) {
            //     e.preventDefault();
            //     return false;
            // }
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



