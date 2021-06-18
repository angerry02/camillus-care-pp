<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Employee;
use App\Models\EmployeeSchedule;
use App\Models\EndorsementAndMedication;
use App\Models\LaboratoryFlow;
use App\Models\VIORecords;

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
        $employeeSchedules = EmployeeSchedule::where('patient_id', $patient->patient_id)->get();

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

         //Update patient status to 'Handled'
         Patient::where('patient_id', $patient->patient_id)
         ->update([
             'patient_status' => '1'
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
       
        return redirect('/patient')
        ->with('success', 'Patient data has been successfully deleted.');
    }

    public function deleteSchedule($id)
    {
        $employeeSchedules = EmployeeSchedule::where('id', $id)->get()->first();
        
        EmployeeSchedule::where('id', $id)->delete();
       
        $patient_id = $employeeSchedules->patient_id;
        return redirect('/patient/'.$patient_id.'/manage-schedule')
        ->with('success', 'Schedule has been successfully deleted.');
    }

    public function manageMedicalRecord($patient_id)
    {
        $endorsementAndMedication = EndorsementAndMedication::where('patient_id', $patient_id)->get();
        $laboratoryFlow = LaboratoryFlow::where('patient_id', $patient_id)->get();
        $vioRecords = VIORecords::where('patient_id', $patient_id)->get();
        $patient = Patient::where('patient_id', $patient_id)->get()->first();

        return view('patient.manage-medical-record',
        ['patient' => $patient,
        'laboratoryFlows' => $laboratoryFlow,
        'vioRecords' => $vioRecords,
        'endorsementAndMedications' => $endorsementAndMedication]);
    }

    public function saveEM()
    {
        EndorsementAndMedication::create([
            'medication' => request('medication'),
            'frequency' => request('frequency'),
            'patient_id' => request('patient_id'),
            'datetime_given' => request('datetime_given')
        ]);

        $patient_id = request('patient_id');

        return redirect('/patient/'.$patient_id.'/medical-record')
        ->with('success','Edorsement and medication successfully added.');
    }

    public function saveLF()
    {
        LaboratoryFlow::create([
            'blood_work' => request('blood_work'),
            'values' => request('values'),
            'patient_id' => request('patient_id'),
            'datetime_added' => request('datetime_added')
        ]);

        $patient_id = request('patient_id');

        return redirect('/patient/'.$patient_id.'/medical-record')
        ->with('success','Laboratoty flow data successfully added.');
    }

    public function saveVIO()
    {
        VIORecords::create([
            'gcs' => request('gcs'),
            'bp' => request('bp'),
            'hr' => request('hr'),
            'rr' => request('rr'),
            't' => request('t'),
            'o2_sat' => request('o2_sat'),
            'iv' => request('iv'),
            'oral' => request('oral'),
            'urine' => request('urine'),
            'drainage' => request('drainage'),
            'bowel_movement' => request('bowel_movement'),
            'remark' => request('remark'),
            'bp' => request('bp'),
            'patient_id' => request('patient_id'),
            'datetime_added' => request('datetime_added')
        ]);

        $patient_id = request('patient_id');

        return redirect('/patient/'.$patient_id.'/medical-record')
        ->with('success','Vital Signs, Intake and Output data successfully added.');
    }

    public function deleteVIO($id)
    {
        $patient_id = VIORecords::where('id', $id)->get()->first()->patient_id;
        VIORecords::where('id', $id)->delete();

        return redirect('/patient/'.$patient_id.'/medical-record')
        ->with('success','Vital Signs, Intake and Output data successfully deleted.');
    }

    public function deleteLF($id)
    {
        $patient_id = LaboratoryFlow::where('id', $id)->get()->first()->patient_id;
        LaboratoryFlow::where('id', $id)->delete();

        return redirect('/patient/'.$patient_id.'/medical-record')
        ->with('success','Laboratory Flow record successfully deleted.');
    }

    public function deleteEM($id)
    {
        $patient_id = EndorsementAndMedication::where('id', $id)->get()->first()->patient_id;
        EndorsementAndMedication::where('id', $id)->delete();

        return redirect('/patient/'.$patient_id.'/medical-record')
        ->with('success','Endorsement and Medication record successfully deleted.');
    }
}