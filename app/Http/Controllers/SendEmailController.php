<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Notifications\NewFormCareerNotification;
use Illuminate\Http\Request;
use App\Notifications\NewFormContactNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Log;


class SendEmailController extends Controller
{

    public function SendContactFormEmail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email:rfc,dns|max:150',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:255',
        ]);

        try {
            Notification::route('mail', ['info@smlc.sa' => 'eltigani erp'])
                ->notify(new NewFormContactNotification($data));
            
            // Log::info('Email notification sent successfully', $data);
        } catch (\Exception $e) {
            Log::error('Email notification failed: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Message sent successfully');
    }

    public function SendCareerFormEmail(Request $request, Career $career)
    {
    
        $data = $request->validate([
            'applicant_name' => 'required|string|max:150',
            'applicant_email' => 'required|email:rfc,dns|max:150',
            'applicant_phone' => 'required|string|max:20',
            'applicant_experience' => 'required|string|max:255',
            'applicant_message' => 'required|string|max:255',
            'applicant_cv' => 'required|file|mimes:pdf|max:2048',
        ]);

        $data['applicant_cv'] = $request->file('applicant_cv');
        $data['career_name'] = $career->name;

        try {
            Notification::route('mail', ['jobs@smlc.sa' => 'eltigani erp'])
                ->notify(new NewFormCareerNotification($data));
            
            // Log::info('Email notification sent successfully', $data);
        } catch (\Exception $e) {
            Log::error('Email notification failed: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
