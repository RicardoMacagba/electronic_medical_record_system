<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlertService extends Model
{
    // public function checkCriticalValues(LabResult $result)
    // {
    //     $criticalValues = CriticalValue::where('test_type', $result->test_type)
    //         ->where(function ($query) use ($result) {
    //             $query->where('min_value', '>', $result->numeric_value)
    //                 ->orWhere('max_value', '<', $result->numeric_value);
    //         })->exists();

    //     if ($criticalValues) {
    //         Notification::send(
    //             Physician::onCall()->get(),
    //             new CriticalResultNotification($result)
    //         );
    //     }
    // }
}
