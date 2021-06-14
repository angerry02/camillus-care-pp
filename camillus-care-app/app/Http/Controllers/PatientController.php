<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Employee;
use App\Models\EmployeeSchedule;

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
            'contact_relationship' => request('contact_relationship')
        ]);

        return redirect('/patient')
        ->with('success','Patient successfully added. You can now assign the nurse/caregiver and set their schedule.');
    }

    public function edit(Patient $patient)
    {
        return view('patient.edit', ['patient' => $patient]);
    }

    public function manageSchedule(Patient $patient)
    {
        $employees = Employee::all();
        $employeeSchedules = EmployeeSchedule::all();

        return view('patient.schedule-manager',
        ['patient' => $patient, 
        'employeeSchedules' => $employeeSchedules,
        'employees' => $employees]);
    }

    public function saveSchedule(Request $request, $patient_id)
    {
        EmployeeSchedule::create([
            'from' => request('from'),
            'to' => request('to'),
            'effective_date' => request('effective_date'),
            'employee_id' => request('employee_id'),
            'patient_id' => request('patient_id')
        ]);

        return redirect('/patient/'.$patient_id.'/manage-schedule');
    }

    public function update(Request $request, $patient_id)
    {
        Patient::where('patient_id', $patient_id)
        ->update([
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
            'contact_relationship' => request('contact_relationship')
        ]);

        return redirect('/patient')
        ->with('success','Patient successfully updated.');
    }

    public function destroy($patient_id)
    {
        Patient::where('patient_id', $patient_id)->delete();
       
        return redirect('/patient')->with('message', 'Patient data has been successfully deleted.');
    }
}
