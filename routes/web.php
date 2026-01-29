<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


// Main index pages (Arabic, English, French)
Route::view('/', 'index')->name('index');
Route::view('/en', 'index-en')->name('index-en');
Route::view('/fr', 'index-fr')->name('index-fr');

Route::get('test-email', function () {

    Mail::raw('Test email', function ($message) {
        $message->to('test@smlc.sa')
                ->subject('Test');
    });

    return '<h1>Email sent successfully!</h1>';
})->name('test-email');

Route::post('/contact-form-email', [SendEmailController::class, 'SendContactFormEmail'])->name('contact-form-email');

Route::post('/career-form-email/{career}', [SendEmailController::class, 'SendCareerFormEmail'])->name('career-form-email');


// Careers pages
Route::get('/careers', [CareerController::class, 'index'])->name('careers');
Route::get('/careers/en', [CareerController::class, 'indexEn'])->name('careers-en');
Route::get('/careers/fr', [CareerController::class, 'indexFr'])->name('careers-fr');

// Login pages
Route::view('/login', 'login')->name('login');
Route::view('/login/en', 'login-en')->name('login-en');
Route::view('/login/fr', 'login-fr')->name('login-fr');

// Terms pages
Route::view('/terms', 'terms')->name('terms');
Route::view('/terms/en', 'terms-en')->name('terms-en');
Route::view('/terms/fr', 'terms-fr')->name('terms-fr');

// Admin
Route::view('/admin/jobs', 'admin-jobs')->name('admin-jobs');

// Technical Services
Route::view('/services/consulting', 'consulting-services')->name('consulting-services');
Route::view('/services/consulting/en', 'consulting-services-en')->name('consulting-services-en');
Route::view('/services/consulting/fr', 'consulting-services-fr')->name('consulting-services-fr');

Route::view('/services/system-development', 'system-development')->name('system-development');
Route::view('/services/system-development/en', 'system-development-en')->name('system-development-en');
Route::view('/services/system-development/fr', 'system-development-fr')->name('system-development-fr');

Route::view('/services/system-integration', 'system-integration')->name('system-integration');
Route::view('/services/system-integration/en', 'system-integration-en')->name('system-integration-en');
Route::view('/services/system-integration/fr', 'system-integration-fr')->name('system-integration-fr');

Route::view('/services/project-management', 'project-management')->name('project-management');
Route::view('/services/project-management/en', 'project-management-en')->name('project-management-en');
Route::view('/services/project-management/fr', 'project-management-fr')->name('project-management-fr');

Route::view('/services/process-automation', 'process-automation')->name('process-automation');
Route::view('/services/process-automation/en', 'process-automation-en')->name('process-automation-en');
Route::view('/services/process-automation/fr', 'process-automation-fr')->name('process-automation-fr');

Route::view('/services/ui-ux-design', 'ui-ux-design')->name('ui-ux-design');
Route::view('/services/ui-ux-design/en', 'ui-ux-design-en')->name('ui-ux-design-en');
Route::view('/services/ui-ux-design/fr', 'ui-ux-design-fr')->name('ui-ux-design-fr');

Route::view('/services/maintenance-support', 'maintenance-support')->name('maintenance-support');
Route::view('/services/maintenance-support/en', 'maintenance-support-en')->name('maintenance-support-en');
Route::view('/services/maintenance-support/fr', 'maintenance-support-fr')->name('maintenance-support-fr');

Route::view('/services/technical-training', 'technical-training')->name('technical-training');
Route::view('/services/technical-training/en', 'technical-training-en')->name('technical-training-en');
Route::view('/services/technical-training/fr', 'technical-training-fr')->name('technical-training-fr');

Route::view('/services/technical-services', 'technical-services')->name('technical-services');
Route::view('/services/technical-services/en', 'technical-services-en')->name('technical-services-en');
Route::view('/services/technical-services/fr', 'technical-services-fr')->name('technical-services-fr');

Route::view('/services/contracts', 'contracts')->name('contracts');
Route::view('/services/contracts/en', 'contracts-en')->name('contracts-en');
Route::view('/services/contracts/fr', 'contracts-fr')->name('contracts-fr');

// Business Development Services
Route::view('/services/growth-strategy', 'growth-strategy')->name('growth-strategy');
Route::view('/services/growth-strategy/en', 'growth-strategy-en')->name('growth-strategy-en');
Route::view('/services/growth-strategy/fr', 'growth-strategy-fr')->name('growth-strategy-fr');

Route::view('/services/partnership-management', 'partnership-management')->name('partnership-management');
Route::view('/services/partnership-management/en', 'partnership-management-en')->name('partnership-management-en');
Route::view('/services/partnership-management/fr', 'partnership-management-fr')->name('partnership-management-fr');

Route::view('/services/market-analysis', 'market-analysis')->name('market-analysis');
Route::view('/services/market-analysis/en', 'market-analysis-en')->name('market-analysis-en');
Route::view('/services/market-analysis/fr', 'market-analysis-fr')->name('market-analysis-fr');

Route::view('/services/commercial-representation', 'commercial-representation')->name('commercial-representation');
Route::view('/services/commercial-representation/en', 'commercial-representation-en')->name('commercial-representation-en');
Route::view('/services/commercial-representation/fr', 'commercial-representation-fr')->name('commercial-representation-fr');

Route::view('/services/business-model-design', 'business-model-design')->name('business-model-design');
Route::view('/services/business-model-design/en', 'business-model-design-en')->name('business-model-design-en');
Route::view('/services/business-model-design/fr', 'business-model-design-fr')->name('business-model-design-fr');

Route::view('/services/development-projects', 'development-projects')->name('development-projects');
Route::view('/services/development-projects/en', 'development-projects-en')->name('development-projects-en');
Route::view('/services/development-projects/fr', 'development-projects-fr')->name('development-projects-fr');

Route::view('/services/marketing-services', 'marketing-services')->name('marketing-services');
Route::view('/services/marketing-services/en', 'marketing-services-en')->name('marketing-services-en');
Route::view('/services/marketing-services/fr', 'marketing-services-fr')->name('marketing-services-fr');

// Odoo Services
Route::view('/odoo/accounting', 'odoo-accounting')->name('odoo-accounting');
Route::view('/odoo/accounting/en', 'odoo-accounting-en')->name('odoo-accounting-en');
Route::view('/odoo/accounting/fr', 'odoo-accounting-fr')->name('odoo-accounting-fr');

Route::view('/odoo/crm', 'odoo-crm')->name('odoo-crm');
Route::view('/odoo/crm/en', 'odoo-crm-en')->name('odoo-crm-en');
Route::view('/odoo/crm/fr', 'odoo-crm-fr')->name('odoo-crm-fr');

Route::view('/odoo/hr', 'odoo-hr')->name('odoo-hr');
Route::view('/odoo/hr/en', 'odoo-hr-en')->name('odoo-hr-en');
Route::view('/odoo/hr/fr', 'odoo-hr-fr')->name('odoo-hr-fr');

Route::view('/odoo/inventory', 'odoo-inventory')->name('odoo-inventory');
Route::view('/odoo/inventory/en', 'odoo-inventory-en')->name('odoo-inventory-en');
Route::view('/odoo/inventory/fr', 'odoo-inventory-fr')->name('odoo-inventory-fr');

Route::view('/odoo/manufacturing', 'odoo-manufacturing')->name('odoo-manufacturing');
Route::view('/odoo/manufacturing/en', 'odoo-manufacturing-en')->name('odoo-manufacturing-en');
Route::view('/odoo/manufacturing/fr', 'odoo-manufacturing-fr')->name('odoo-manufacturing-fr');

Route::view('/odoo/project', 'odoo-project')->name('odoo-project');
Route::view('/odoo/project/en', 'odoo-project-en')->name('odoo-project-en');
Route::view('/odoo/project/fr', 'odoo-project-fr')->name('odoo-project-fr');

Route::view('/odoo/purchase', 'odoo-purchase')->name('odoo-purchase');
Route::view('/odoo/purchase/en', 'odoo-purchase-en')->name('odoo-purchase-en');
Route::view('/odoo/purchase/fr', 'odoo-purchase-fr')->name('odoo-purchase-fr');

Route::view('/odoo/sales', 'odoo-sales')->name('odoo-sales');
Route::view('/odoo/sales/en', 'odoo-sales-en')->name('odoo-sales-en');
Route::view('/odoo/sales/fr', 'odoo-sales-fr')->name('odoo-sales-fr');

// Health Information Systems
Route::view('/health/systems', 'health-systems')->name('health-systems');
Route::view('/health/systems/en', 'health-systems-en')->name('health-systems-en');
Route::view('/health/systems/fr', 'health-systems-fr')->name('health-systems-fr');

Route::view('/health/hms', 'health-hms')->name('health-hms');
Route::view('/health/hms/en', 'health-hms-en')->name('health-hms-en');
Route::view('/health/hms/fr', 'health-hms-fr')->name('health-hms-fr');

// Sovereign Systems
Route::view('/sovereign-systems', 'sovereign-systems')->name('sovereign-systems');
Route::view('/sovereign-systems/en', 'sovereign-systems-en')->name('sovereign-systems-en');
Route::view('/sovereign-systems/fr', 'sovereign-systems-fr')->name('sovereign-systems-fr');
