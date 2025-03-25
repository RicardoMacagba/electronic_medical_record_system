<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'recentPatients' => Patient::latest()->take(5)->get(),
            // 'appointments' => Appointment::with('patient')
            //     ->whereDate('scheduled_at', today())
            //     ->orderBy('scheduled_at')
            //     ->get()
        ]);
    }
}
