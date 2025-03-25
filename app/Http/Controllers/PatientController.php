<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\LabResult;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PatientController extends Controller
{

    use AuthorizesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        $this->authorize('view', $patient);

        return view('patients.show', [
            'patient' => $patient,
            'allergies' => $patient->allergies,
            'medications' => $patient->medications()->with('prescriber')->get(),
            'labResults' => LabResult::where('patient_id', $patient->id)
                ->orderBy('test_date', 'desc')
                ->paginate(10)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }

    // public function __construct() {
    //     $this->middleware('practice');
    // }
}
