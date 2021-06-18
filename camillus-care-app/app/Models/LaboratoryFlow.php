<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaboratoryFlow extends Model
{
    use HasFactory;

    public $table = 'laboratory_flow';

    public $fillable = [
        'id',
        'blood_work',
        'values',
        'datetime_added',
        'patient_id',
        'updated_at',
        'datetime_given'
    ];

    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id', 'patient_id');
    }
}
