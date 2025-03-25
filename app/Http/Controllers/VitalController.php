<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VitalController extends Controller
{
    public function trackOverTime(Patient $patient) {
        $bpReadings = $patient->vitalSigns()
            ->where('parameters->type', 'BP')
            ->orderBy('recorded_at')
            ->get()
            ->map(fn($v) => [
                'date' => $v->recorded_at->format('Y-m-d'),
                'value' => $v->parameters['value']
            ]);
    
        return response()->json($bpReadings);
    }
}
