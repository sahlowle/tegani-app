@extends('layouts.app')

@section('title', 'لوحة تحكم الوظائف - شركة صناع البرمجيات المحدودة')

@section('content')
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
    @endsection
