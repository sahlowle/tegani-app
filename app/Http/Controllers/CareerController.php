<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::where('status', 'active')->get();

        return view('careers', compact('careers'));
    }
    
    public function indexEn()
    {
        $careers = Career::query()->where('status', 'active')->get();

        return response()->json($careers);
        return view('careers-en', compact('careers'));
    }
    
    public function indexFr()
    {
        $careers = Career::where('status', 'active')->get();
        return view('careers-fr', compact('careers'));
    }
}
