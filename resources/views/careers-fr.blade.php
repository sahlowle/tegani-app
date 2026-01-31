@extends('layouts.app')

@push('styles')
    <style>
        .apply-form .form-control {
           color: #000000 !important;
        }
        .apply-form .form-control::placeholder {
            color: #000000 !important;
        }
        .apply-form .form-select {
            color: #000000 !important;
        }
        .apply-form .form-select::placeholder {
            color: #000000 !important;
        }
        .apply-form .form-select option {
            color: #000000 !important;
        }
        
        /* Modal header positioning */
        .modal-header {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }
        
        .modal-title {
            flex: 1;
            margin-right: 1rem;
            margin-bottom: 0;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        .modal-header .btn-close {
            margin-left: auto !important;
            margin-right: 0 !important;
            flex-shrink: 0;
            order: 2;
        }
    </style>
@endpush

@section('title', 'Carrières | Software Makers Limited Company')

@section('content')
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
                </div>
            </div>
            
            <div class="row g-4" id="jobsContainer">
                @forelse($careers as $career)
                    <div class="col-lg-6 job-item">
                        <div class="job-card">
                            <div class="job-header">
                                <div class="job-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="job-title-section">
                                    <h4 class="job-title">{{ $career->name }}</h4>
                                </div>
                            </div>
                            
                            <div class="job-content">
                                @if($career->description)
                                    <div class="job-description">
                                        <h5>Détails du poste:</h5>
                                        <div style="white-space: pre-wrap; line-height: 1.8;">{{ $career->description }}</div>
                                    </div>
                                @endif
                                
                                @if($career->requirements)
                                    <div class="job-requirements">
                                        <h5>Profil recherché:</h5>
                                        <ul>
                                            @foreach(explode("\n", $career->requirements) as $requirement)
                                                @if(trim($requirement))
                                                    <li>{{ $requirement }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                
                                @if($career->benefits)
                                    <div class="job-benefits">
                                        <h5>Avantages:</h5>
                                        <ul>
                                            @foreach(explode("\n", $career->benefits) as $benefit)
                                                @if(trim($benefit))
                                                    <li>{{ $benefit }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            
                            <div class="job-footer">
                                <button class="btn btn-primary btn-apply" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#applyModal{{ $career->id }}" 
                                        data-job="{{ $career->name }}">
                                    <i class="fas fa-paper-plane me-2"></i>
                                    Postuler
                                </button>
                            </div>
                        </div>
                    </div>

                        <!-- Job Application Modal -->
                    <div class="modal fade" id="applyModal{{ $career->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Soumettre votre candidature pour le poste de {{ $career->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="jobApplicationForm{{ $career->id }}" class="apply-form" action="{{ route('career-form-email', $career->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
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
                                            <textarea class="form-control" id="applicantCoverLetter" name="applicant_message" rows="4" placeholder="Présentez brièvement votre parcours, vos réalisations et vos motivations..."></textarea>
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
                @empty
                    <div class="col-lg-12 text-center">
                        <div class="no-results">
                            <i class="fas fa-search fa-3x text-muted mb-3"></i>
                            <h4>Aucune offre pour le moment</h4>
                            <p class="text-muted">Revenez prochainement pour découvrir de nouvelles opportunités.</p>
                        </div>
                    </div>
                @endforelse
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



    <!-- Footer -->
    <!-- Scripts -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Job Application Modal functionality
        document.addEventListener('DOMContentLoaded', () => {
            const applyButtons = document.querySelectorAll('.btn-apply');
            const jobPositionInput = document.getElementById('jobPosition');
            const applyModal = document.getElementById('applyModal');
            
            applyButtons.forEach(button => {
                button.addEventListener('click', function () {
                    jobPositionInput.value = this.getAttribute('data-job');
                });
            });
            
            if (applyModal) {
                applyModal.addEventListener('hidden.bs.modal', function () {
                    document.getElementById('jobApplicationForm').reset();
                });
            }
        });
    </script>
    <!-- Careers Page Script -->
    @php
        $jobsData = $careers->map(function($career) {
            return [
                'id' => $career->id,
                'name' => $career->name,
                'description' => $career->description ?? '',
                'requirements' => $career->requirements ?? '',
                'benefits' => $career->benefits ?? '',
                'state' => 'recruit'
            ];
        })->values();
    @endphp
    <script>
        // Global variables - Load jobs from server
        let allJobs = @json($jobsData);

        // Job Management Functions
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

        function loadJobs() {
            // Les emplois sont déjà chargés depuis le serveur dans la variable allJobs
            // Mettre à jour l'affichage uniquement si nécessaire (par exemple, pour le filtrage/recherche)
            if (allJobs && allJobs.length > 0) {
                displayJobs(allJobs);
                updateJobCounts();
            } else {
                // Si aucun emploi, afficher l'état vide
                const container = document.getElementById('jobsContainer');
                if (container) {
                    container.innerHTML = `
                        <div class="col-lg-12 text-center">
                            <div class="no-results">
                                <i class="fas fa-search fa-3x text-muted mb-3"></i>
                                <h4>Aucune offre pour le moment</h4>
                                <p class="text-muted">Revenez prochainement pour découvrir de nouvelles opportunités.</p>
                            </div>
                        </div>
                    `;
                }
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
            // Les emplois sont déjà affichés depuis le rendu Blade côté serveur
            // Appeler loadJobs uniquement si vous devez actualiser ou filtrer
            // loadJobs();
            
            // Initialiser le modal de candidature
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
@endsection
