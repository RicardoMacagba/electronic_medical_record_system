<?php

use App\Models\Patient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LabResultController;
use App\Http\Controllers\AppointmentController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/appointments', [Patient::class, 'index'])->name('appointments.create');
Route::get('/appointments', [Patient::class, 'index'])->name('appointments.edit');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/lab-orders', [LabResultController::class, 'index'])->name('lab-orders.index');
    Route::post('/patients', [Patient::class, 'index'])->name('patients.show');
    Route::get('/patients', [Patient::class, 'index'])->name('patients.create');
    # Route [appointments.create] not found.
    


});

require __DIR__.'/auth.php';


// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     // Add other routes for patients, appointments, etc.
// });