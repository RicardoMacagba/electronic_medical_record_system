<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditLogObserver
{
    // public function created(Model $model)
    // {
    //     AuditLog::create([
    //         'user_id' => auth()->id(),
    //         'action' => 'create',
    //         'model_type' => get_class($model),
    //         'model_id' => $model->getKey(),
    //         'ip_address' => request()->ip()
    //     ]);
    // }
}
