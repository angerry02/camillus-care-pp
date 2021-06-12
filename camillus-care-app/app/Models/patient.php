<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;

    protected $primaryKey = 'patient_id';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'age',
        'gender',
        'weight',
        'height',
        'allergies',
        'room_no',
        'hospital_no',
        'medical_diagnosis',
        'physical_limitation',
        'diet',
        'physician_name',
        'contact_person',
        'contact_person_no',
        'contact_relationship',
        'patient_status'
    ];
}
