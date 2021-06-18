<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VIORecords extends Model
{
    use HasFactory;

    public $table = 'vio_records';

    public $fillable = [
        'id',
        'gcs',
        'bp',
        'hr',
        'rr',
        't',
        'o2_sat',
        'iv',
        'oral',
        'urine',
        'drainage',
        'bowel_movement',
        'remark',
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
