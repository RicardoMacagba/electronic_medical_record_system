<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /** @use HasFactory<\Database\Factories\PatientFactory> */
    use HasFactory;

    protected $casts = [
        'sensitive_data' => 'encrypted'
    ];

    public function vitalSigns() {
    return $this->hasMany(VitalSign::class)->orderBy('recorded_at');
}

public function preventiveCare() {
    return $this->belongsToMany(PreventiveService::class)
                ->withPivot('due_date', 'completed_date');
}

}
