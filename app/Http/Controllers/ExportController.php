<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Controllers\Controller;

class ExportController extends Controller
{
    public function exportChart(Patient $patient) {
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('exports.patient-chart', [
            'patient' => $patient,
            'visits' => $patient->visits()->with('vitals', 'diagnoses')->get(),
            'medications' => $patient->medications,
        ]);
    
        return $pdf->download("chart-{$patient->chart_number}.pdf");
    }
}
