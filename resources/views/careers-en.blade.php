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

@section('title', 'Careers | Software Makers Limited Company')

@section('content')
<!-- Hero Section -->
    <section class="careers-hero">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4" style="color:#ffffff;text-shadow:2px 2px 4px rgba(0,0,0,0.8);">
                        Join our <span style="color:#00d4ff;text-shadow:0 0 15px rgba(0,212,255,0.6);">high-performing team</span>
                    </h1>
                    <p class="lead mb-4" style="color:#e8f4fd;text-shadow:1px 1px 2px rgba(0,0,0,0.7);font-size:1.2rem;">
                        Explore openings across engineering, consulting and operations, and help us build the next era of intelligent solutions.
                    </p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">02</span>
                            <span class="stat-label">Open positions</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Team members</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Retention rate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Available Jobs -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Available <span class="text-primary">Jobs</span></h2>
                    <p class="section-subtitle">Choose from available jobs and join our team</p>
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
                                        <h5>Job Description:</h5>
                                        <div style="white-space: pre-wrap; line-height: 1.8;">{{ $career->description }}</div>
                                    </div>
                                @endif
                                
                                @if($career->requirements)
                                    <div class="job-requirements">
                                        <h5>Requirements:</h5>
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
                                        <h5>Benefits:</h5>
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
                                    Apply now
                                </button>
                            </div>
                        </div>
                    </div>

                      <!-- Job Application Modal -->
                    <div class="modal fade" id="applyModal{{ $career->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Submit your application for the position of {{ $career->name }} </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="jobApplicationForm{{ $career->id }}" class="apply-form" action="{{ route('career-form-email', $career->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" id="jobPosition" name="job_position" value="">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="applicantName" class="form-label">Full name *</label>
                                                <input type="text" class="form-control" id="applicantName" name="applicant_name" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="applicantEmail" class="form-label">Email *</label>
                                                <input type="email" class="form-control" id="applicantEmail" name="applicant_email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="applicantPhone" class="form-label">Phone number *</label>
                                                <input type="tel" class="form-control" id="applicantPhone" name="applicant_phone" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="applicantExperience" class="form-label">Years of experience *</label>
                                                <select class="form-select" id="applicantExperience" name="applicant_experience" required>
                                                    <option value="">Select experience range</option>
                                                    <option value="0-1">0-1 year</option>
                                                    <option value="1-3">1-3 years</option>
                                                    <option value="3-5">3-5 years</option>
                                                    <option value="5+">5+ years</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="applicantCoverLetter" class="form-label">Summary</label>
                                            <textarea class="form-control" id="applicantCoverLetter" name="applicant_message" rows="4" placeholder="Tell us briefly about your motivation and achievements..."></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="applicantCV" class="form-label">Resume (PDF) *</label>
                                            <input type="file" class="form-control" id="applicantCV" name="applicant_cv" accept=".pdf" required>
                                            <div class="form-text">Please upload PDF files only.</div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-lg">
                                                <i class="fas fa-paper-plane me-2"></i>Send application
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
                            <h4>No jobs available at the moment</h4>
                            <p class="text-muted">Please try again later</p>
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
                        <h3 class="text-center mb-5">Why build your career with us?</h3>
                        <div class="row g-4">
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-rocket"></i>
                                    <h5>Hyper-growth environment</h5>
                                    <p>Join a fast-scaling tech firm delivering flagship digital programs.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-users"></i>
                                    <h5>World-class peers</h5>
                                    <p>Collaborate with engineers, consultants and product experts from 10+ countries.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-graduation-cap"></i>
                                    <h5>Continuous learning</h5>
                                    <p>Access certifications, mentorship and structured learning paths.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-balance-scale"></i>
                                    <h5>Work-life harmony</h5>
                                    <p>Flexible schedules, hybrid options and wellness initiatives.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-medal"></i>
                                    <h5>Recognition culture</h5>
                                    <p>Transparent performance reviews and quarterly awards.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="why-work-item">
                                    <i class="fas fa-globe"></i>
                                    <h5>International exposure</h5>
                                    <p>Serve enterprise and government clients across KSA, the GCC, Europe and the US.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  

    <!-- Footer -->
    <!-- Bootstrap JS -->
    <!-- AOS Animation -->
    <!-- Custom JS -->
    <!-- Careers Page Script -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Job Application Modal functionality
        document.addEventListener('DOMContentLoaded', function() {
            const applyButtons = document.querySelectorAll('.btn-apply');
            const jobPositionInput = document.getElementById('jobPosition');
            const applyModal = document.getElementById('applyModal');
            
            applyButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const jobTitle = this.getAttribute('data-job');
                    jobPositionInput.value = jobTitle;
                });
            });
            
            // Reset form when modal is closed
            if (applyModal) {
                applyModal.addEventListener('hidden.bs.modal', function() {
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
                            <div class="job-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="job-title-section">
                                <h4 class="job-title">${escapeHtml(job.name)}</h4>
                            </div>
                        </div>
                        
                        <div class="job-content">
                            ${isCustomJob ? `
                                <div class="job-description">
                                    <h5>Job Details:</h5>
                                    <div style="white-space: pre-wrap; line-height: 1.8;">${escapeHtml(job.description || '')}</div>
                                </div>
                            ` : `
                            <div class="job-description">
                                    <h5>Job Description:</h5>
                                    <p>${escapeHtml(job.description || 'No description available')}</p>
                            </div>
                            
                            <div class="job-requirements">
                                    <h5>Requirements:</h5>
                                <ul>
                                        ${job.requirements ? job.requirements.split('\n').map(req => `<li>${escapeHtml(req)}</li>`).join('') : '<li>No specific requirements</li>'}
                                </ul>
                            </div>
                            
                            <div class="job-benefits">
                                    <h5>Benefits:</h5>
                                <ul>
                                        ${job.benefits ? job.benefits.split('\n').map(benefit => `<li>${escapeHtml(benefit)}</li>`).join('') : '<li>Competitive benefits</li>'}
                                </ul>
                            </div>
                            `}
                        </div>
                        
                        <div class="job-footer">
                            <button class="btn btn-primary btn-apply" data-bs-toggle="modal" data-bs-target="#applyModal" data-job="${escapeHtml(job.name)}">
                                <i class="fas fa-paper-plane me-2"></i>
                                Apply now
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
                            <h4>No jobs available at the moment</h4>
                            <p class="text-muted">Please try again later</p>
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
            
            // Re-initialize event listeners for new buttons
            initializeJobApplicationModal();
        }

        function showLoadingState() {
            const container = document.getElementById('jobsContainer');
            container.innerHTML = `
                <div class="col-lg-12 text-center">
                    <div class="loading-state">
                        <div class="spinner-border text-primary mb-3" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <h5>Loading opportunities...</h5>
                        <p class="text-muted">Please wait</p>
                    </div>
                </div>
            `;
        }

        function showErrorState(message) {
            const container = document.getElementById('jobsContainer');
            container.innerHTML = `
                <div class="col-lg-12 text-center">
                    <div class="error-state">
                        <i class="fas fa-exclamation-triangle fa-3x text-warning mb-3"></i>
                        <h4>We could not load jobs</h4>
                        <p class="text-muted">${message}</p>
                        <button class="btn btn-primary" onclick="loadJobs()">Retry</button>
                    </div>
                </div>
            `;
        }

        // API endpoint - make sure to open the file via http://localhost and not file://
        const JOBS_API_URL = 'jobs_db.php';
        
        // Check if we're on HTTP and not file://
        if (window.location.protocol === 'file:') {
            console.error('⚠️ File must be opened via HTTP server: http://localhost/project/careers-en.html');
        }

        // Load custom jobs from server database
        async function loadCustomJobs() {
            try {
                console.log('Fetching jobs from:', JOBS_API_URL);
                const response = await fetch(JOBS_API_URL);
                console.log('Response status:', response.status, response.statusText);
                
                if (!response.ok) {
                    const errorText = await response.text();
                    console.error('Response error:', errorText);
                    throw new Error(`Failed to fetch jobs: ${response.status} ${response.statusText}`);
                }
                
                const contentType = response.headers.get('content-type');
                if (!contentType || !contentType.includes('application/json')) {
                    const text = await response.text();
                    console.error('Unexpected response type:', contentType, 'Response:', text);
                    throw new Error('Invalid response format from server');
                }
                
                const jobs = await response.json();
                console.log('Jobs loaded from server:', jobs);
                console.log('Number of jobs:', Array.isArray(jobs) ? jobs.length : 0);
                
                // Handle case where response might be an error object
                if (jobs && jobs.error) {
                    console.error('Server returned error:', jobs.error);
                    return [];
                }
                
                return Array.isArray(jobs) ? jobs : [];
            } catch (error) {
                console.error('Error loading custom jobs:', error);
                console.error('Error details:', error.message, error.stack);
                return [];
            }
        }
        
        // Convert custom job to standard format
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
            // Jobs are already loaded from server in allJobs variable
            // Only update display if needed (e.g., for filtering/searching)
            if (allJobs && allJobs.length > 0) {
                displayJobs(allJobs);
                updateJobCounts();
            } else {
                // If no jobs, show empty state
                const container = document.getElementById('jobsContainer');
                if (container) {
                    container.innerHTML = `
                        <div class="col-lg-12 text-center">
                            <div class="no-results">
                                <i class="fas fa-search fa-3x text-muted mb-3"></i>
                                <h4>No jobs available at the moment</h4>
                                <p class="text-muted">Please try again later</p>
                            </div>
                        </div>
                    `;
                }
            }
        }

        function updateJobCounts() {
            const totalJobs = allJobs.length;
            const activeJobs = allJobs.filter(job => job.state === 'recruit').length;
            const statNumbers = document.querySelectorAll('.stat-number');
            if (statNumbers.length >= 2) {
                statNumbers[0].textContent = `${String(activeJobs).padStart(2, '0')}`;
                statNumbers[1].textContent = `${totalJobs}+`;
            }
        }


        // Job Application Modal functionality
        function initializeJobApplicationModal() {
            const applyButtons = document.querySelectorAll('.btn-apply');
            const jobPositionInput = document.getElementById('jobPosition');
            const applyModal = document.getElementById('applyModal');
            
            applyButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const jobTitle = this.getAttribute('data-job');
                    jobPositionInput.value = jobTitle;
                });
            });
            
            // Reset form when modal is closed
            applyModal.addEventListener('hidden.bs.modal', function() {
                document.getElementById('jobApplicationForm').reset();
            });
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            // Jobs are already displayed from server-side Blade rendering
            // Only call loadJobs if you need to refresh or filter
            // loadJobs();
            
            // Initialize job application modal
            initializeJobApplicationModal();
            
            // Add manual refresh button functionality
            const refreshBtn = document.getElementById('refreshJobsBtn');
            if (refreshBtn) {
                refreshBtn.style.display = 'inline-block';
                refreshBtn.addEventListener('click', function() {
                    this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Refreshing...';
                    this.disabled = true;
                    loadJobs();
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-sync-alt me-2"></i>Refresh Jobs';
                        this.disabled = false;
                    }, 2000);
                });
            }
        });
    </script>
    <!-- Copy Protection Script -->
@endsection
