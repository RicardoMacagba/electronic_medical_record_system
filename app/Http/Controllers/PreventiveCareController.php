<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\PreventiveService;
use App\Http\Controllers\Controller;

class PreventiveCare extends Controller
{
    public function updateSchedule(Patient $patient) {
        $services = PreventiveService::where('age_min', '<=', $patient->age)
            ->where('age_max', '>=', $patient->age)
            ->where('gender', $patient->gender)
            ->get();
    
        $patient->preventiveCare()->sync(
            $services->mapWithKeys(fn($s) => [$s->id => ['due_date' => now()->addMonths($s->frequency)]])
        );
        
        return back()->with('status', 'Preventive schedule updated');
    }
}
