<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EndorsementAndMedication extends Model
{
    use HasFactory;

    public $table = 'endorsement_medication';

    public $fillable = [
        'id',
        'medication',
        'frequency',
        'patient_id',
        'created_at',
        'updated_at',
        'datetime_given'
    ];

    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id', 'patient_id');
    }
}
