<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FhirController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// routes/api.php

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['prefix' => 'fhir', 'middleware' => 'auth:api'], function() {
    Route::get('Patient/{id}', [FhirController::class, 'getPatient']);
    Route::post('DiagnosticReport', [FhirController::class, 'storeLabResult']);
});