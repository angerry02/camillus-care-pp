<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();

        return view('patient.index', ['patients' => $patients]);
    }

    public function create()
    {
        return view('patient.create');
    }

    public function store()
    {
        Patient::create([
            'first_name' => request('first_name'),
            'middle_name' => request('middle_name'),
            'last_name' => request('last_name'),
            'address' => request('address'),
            'age' => request('age'),
            'gender' => request('gender'),
            'weight' => request('weight'),
            'height' => request('height'),
            'allergies' => request('allergies'),
            'room_no' => request('room_no'),
            'hospital_no' => request('hospital_no'),
            'medical_diagnosis' => request('medical_diagnosis'),
            'physical_limitation' => request('physical_limitation'),
            'diet' => request('diet'),
            'physician_name' => request('physician_name'),
            'contact_person' => request('contact_person'),
            'contact_person_no' => request('contact_person_no'),
            'contact_relationship' => request('contact_relationship'),
            'patient_status' => request('patient_status')
        ]);

        return redirect('/patient')
        ->with('success','Patient successfully added. You can now assign the nurse/caregiver and set their schedule.');
    }
}
