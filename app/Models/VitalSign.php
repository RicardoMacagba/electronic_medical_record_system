<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VitalSign extends Model
{
    protected $casts = [
    'recorded_at' => 'datetime',
    'parameters' => 'array' // Stores {type: 'BP', value: '120/80'}
];
}
