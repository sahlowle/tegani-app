<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة تحكم الوظائف - شركة صناع البرمجيات المحدودة</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 2rem 0;
        }
        
        .admin-container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .admin-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            padding: 2.5rem;
            margin-bottom: 2rem;
        }
        
        .admin-header {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 3px solid #667eea;
        }
        
        .admin-header h1 {
            color: #667eea;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .admin-header p {
            color: #000;
            margin: 0;
        }
        
        .form-label {
            font-weight: 600 !important;
            color: #000 !important;
            margin-bottom: 0.5rem !important;
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
        }
        
        .form-control, .form-select {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
            color: #000;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
            color: #000;
        }
        
        .form-control::placeholder {
            color: #666;
        }
        
        textarea.form-control {
            min-height: 200px;
            resize: vertical;
            color: #000;
        }
        
        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 0.75rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
            color: white;
        }
        
        .btn-submit:active {
            transform: translateY(0);
        }
        
        .jobs-list {
            margin-top: 2rem;
        }
        
        .job-item-admin {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            border-left: 5px solid #667eea;
            transition: all 0.3s ease;
        }
        
        .job-item-admin:hover {
            transform: translateX(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .job-item-admin h5 {
            color: #667eea;
            margin-bottom: 0.5rem;
        }
        
        .job-item-admin p {
            color: #000;
            margin: 0;
            white-space: pre-wrap;
        }
        
        .btn-delete {
            background: #dc3545;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }
        
        .btn-delete:hover {
            background: #c82333;
            transform: scale(1.05);
        }
        
        .alert {
            border-radius: 10px;
            border: none;
        }
        
        .success-icon {
            color: #28a745;
            font-size: 1.5rem;
        }
        
        .back-link {
            display: inline-block;
            margin-bottom: 1.5rem;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .back-link:hover {
            color: #f0f0f0;
            transform: translateX(-5px);
        }
        
        .empty-state {
            text-align: center;
            padding: 3rem;
            color: #000;
        }
        
        .empty-state i {
            font-size: 4rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <a href="{{ route('careers') }}" class="back-link">
            <i class="fas fa-arrow-right me-2"></i>العودة إلى صفحة الوظائف
        </a>
        
        <div class="admin-card">
            <div class="admin-header">
                <h1><i class="fas fa-briefcase me-2"></i>لوحة تحكم الوظائف</h1>
                <p>أضف وظائف جديدة أو قم بإدارتها</p>
            </div>
            
            <div id="alertContainer"></div>
            
            <form id="jobForm">
                <div class="mb-4">
                    <label for="jobName" class="form-label">
                        <i class="fas fa-tag me-2"></i>اسم الوظيفة
                    </label>
                    <input type="text" class="form-control" id="jobName" name="jobName" required placeholder="مثال: مطور برمجيات أول">
                </div>
                
                <div class="mb-4">
                    <label for="jobData" class="form-label">
                        <i class="fas fa-file-alt me-2"></i>بيانات الوظيفة
                    </label>
                    <textarea class="form-control" id="jobData" name="jobData" required placeholder="أدخل وصف الوظيفة، المتطلبات، المزايا، وغيرها من المعلومات..."></textarea>
                    <small class="form-text" style="color: #000;">يمكنك إدخال جميع بيانات الوظيفة هنا (الوصف، المتطلبات، المزايا، إلخ)</small>
                </div>
                
                <button type="submit" class="btn btn-submit">
                    <i class="fas fa-save me-2"></i>حفظ الوظيفة
                </button>
            </form>
        </div>
        
        <div class="admin-card jobs-list">
            <h3 class="mb-4">
                <i class="fas fa-list me-2"></i>الوظائف المحفوظة
            </h3>
            
            <div id="jobsList">
                <!-- Jobs will be loaded here -->
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // API endpoint
        const API_URL = 'jobs_db.php';

        // Job Management Functions using Server Database
        async function getJobs() {
            try {
                const response = await fetch(API_URL);
                if (!response.ok) {
                    throw new Error('Failed to fetch jobs');
                }
                const jobs = await response.json();
                console.log('Jobs loaded from server:', jobs.length);
                return jobs;
            } catch (error) {
                console.error('Error getting jobs:', error);
                throw error;
            }
        }
        
        async function addJob(name, data) {
            const newJob = {
                id: Date.now().toString() + '_' + Math.random().toString(36).substr(2, 9),
                name: name,
                description: data,
                createdAt: new Date().toISOString()
            };
            
            try {
                const response = await fetch(API_URL, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(newJob)
                });
                
                if (!response.ok) {
                    throw new Error('Failed to save job');
                }
                
                const result = await response.json();
                console.log('Job added to server:', newJob);
                return newJob;
            } catch (error) {
                console.error('Error adding job:', error);
                throw error;
            }
        }
        
        async function deleteJob(id) {
            try {
                const response = await fetch(API_URL, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ id: id })
                });
                
                if (!response.ok) {
                    throw new Error('Failed to delete job');
                }
                
                const result = await response.json();
                console.log('Job deleted from server:', id);
                return result;
            } catch (error) {
                console.error('Error deleting job:', error);
                throw error;
            }
        }
        
        async function displayJobs() {
            try {
                const jobs = await getJobs();
                const container = document.getElementById('jobsList');
                
                if (jobs.length === 0) {
                    container.innerHTML = `
                        <div class="empty-state">
                            <i class="fas fa-inbox"></i>
                            <h5>لا توجد وظائف محفوظة</h5>
                            <p>ابدأ بإضافة وظيفة جديدة باستخدام النموذج أعلاه</p>
                        </div>
                    `;
                    return;
                }
                
                container.innerHTML = jobs.map(job => `
                    <div class="job-item-admin">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="flex-grow-1">
                                <h5>${job.name}</h5>
                                <p>${job.description}</p>
                                <small style="color: #000;">
                                    <i class="fas fa-calendar me-1"></i>
                                    ${new Date(job.createdAt).toLocaleDateString('ar-SA')}
                                </small>
                            </div>
                            <button class="btn btn-delete ms-3" onclick="handleDelete('${job.id}')">
                                <i class="fas fa-trash me-1"></i>حذف
                            </button>
                        </div>
                    </div>
                `).join('');
            } catch (error) {
                console.error('Error displaying jobs:', error);
                showAlert('حدث خطأ في تحميل الوظائف', 'danger');
            }
        }
        
        async function handleDelete(id) {
            if (confirm('هل أنت متأكد من حذف هذه الوظيفة؟')) {
                try {
                    await deleteJob(id);
                    await displayJobs();
                    showAlert('تم حذف الوظيفة بنجاح', 'success');
                    
                    // Trigger custom event to notify careers page
                    window.dispatchEvent(new Event('customJobsUpdated'));
                    
                    // Also notify via storage event for cross-tab communication
                    localStorage.setItem('jobsUpdated', Date.now().toString());
                } catch (error) {
                    console.error('Error deleting job:', error);
                    showAlert('حدث خطأ في حذف الوظيفة', 'danger');
                }
            }
        }
        
        function showAlert(message, type = 'success') {
            const alertContainer = document.getElementById('alertContainer');
            const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
            const icon = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle';
            
            alertContainer.innerHTML = `
                <div class="alert ${alertClass} alert-dismissible fade show" role="alert">
                    <i class="fas ${icon} me-2"></i>
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `;
            
            // Auto dismiss after 3 seconds
            setTimeout(() => {
                const alert = alertContainer.querySelector('.alert');
                if (alert) {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }
            }, 3000);
        }
        
        // Form submission
        document.getElementById('jobForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const jobName = document.getElementById('jobName').value.trim();
            const jobData = document.getElementById('jobData').value.trim();
            
            if (!jobName || !jobData) {
                showAlert('يرجى ملء جميع الحقول', 'danger');
                return;
            }
            
            try {
                const newJob = await addJob(jobName, jobData);
                console.log('New job created:', newJob);
                await displayJobs();
                showAlert('تم حفظ الوظيفة بنجاح!', 'success');
                
                // Trigger custom event to notify careers page
                window.dispatchEvent(new Event('customJobsUpdated'));
                
                // Reset form
                this.reset();
            } catch (error) {
                console.error('Error adding job:', error);
                showAlert('حدث خطأ في حفظ الوظيفة', 'danger');
            }
        });
        
        // Initialize page
        document.addEventListener('DOMContentLoaded', async function() {
            try {
                await displayJobs();
            } catch (error) {
                console.error('Error loading jobs:', error);
                showAlert('حدث خطأ في تحميل الوظائف من قاعدة البيانات', 'danger');
            }
        });
    </script>
</body>
</html>
