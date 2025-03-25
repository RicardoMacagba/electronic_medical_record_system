<?php

namespace App\Http\Controllers;

use App\Models\Medication;
use Illuminate\Http\Request;
use App\Models\PreventiveService;
use App\Http\Controllers\Controller;

class QualityController extends Controller
{
    public function dashboard()
    {
        return view('quality.dashboard', [
            'preventiveCompliance' => PreventiveService::withCount([
                'patients as completed' => fn($q) => $q->whereNotNull('completed_date'),
                'patients as due' => fn($q) => $q->whereNull('completed_date')
            ])->get(),

            'vaccinationRates' => Medication::where('is_vaccine', true)
                ->withCount(['patients as administered'])
                ->get()
        ]);
    }
}
