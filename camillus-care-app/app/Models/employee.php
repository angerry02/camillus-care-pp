<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'employee_id';

    protected $fillable = [
        'employee_id',
        'first_name', 
        'middle_name',
        'last_name',
        'address',
        'contact_no',
        'date_hired',
        'birth_date',
        'sss_no',
        'philhealth_no',
        'tin_no',
        'role'
    ];
}