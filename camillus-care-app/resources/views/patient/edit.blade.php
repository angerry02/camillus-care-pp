@extends('layouts.app')

@section('content')

<form method="POST" action="/patient/edit/{{ $patient->patient_id }}}">
    @method('PUT')
    @csrf

    <div class="form-horizontal">
        <div class="card">
            <div class="card-header">
                <h5>
                    Patient: Add New Patient
                </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6" style="border-right: solid rgb(133, 131, 131) 2px;">
                        <div class="form-group">
                            <label for="last_name" class="col-sm-2 form-label">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" value="{{  $patient->last_name }}" required/>
                        </div>
        
                        <div class="form-group">
                            <label for="first_name" class="col-sm-2 form-label">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" value="{{  $patient->first_name }}" required/>
                        </div>
        
                        <div class="form-group">
                            <label for="middle_name" class="col-sm-2 form-label">Middle Name</label>
                            <input type="text" id="middle_name" name="middle_name" class="form-control" value="{{  $patient->middle_name }}" required/>
                        </div>
        
                        <div class="form-group">
                            <label for="address" class="col-sm-2 form-label">Address</label>
                            <textarea id="address" name="address" class="form-control" required>{{  $patient->address }}</textarea>
                        </div>
                       
                        <div class="form-group">
                            <label for="gender" class="col-sm-2 form-label">Gender</label>
                            <select id="gender" name="gender" class="form-control" required> 
                                <option>--- Select gender ---</option>
                                <option value="MALE" {{ ( $patient->gender == 'MALE') ? 'selected' : '' }}>MALE</option>
                                <option value="FEMALE" {{ ( $patient->gender == 'FEMALE') ? 'selected' : '' }}>FEMALE</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="age" class="col-sm-2 form-label">Age</label>
                            <input type="number" id="age" name="age" class="form-control" value="{{  $patient->age }}" required/>
                        </div>

                        <div class="form-group">
                            <label for="weight" class="col-sm-2 form-label">Weight(kg)</label>
                            <input type="number" id="weight" name="weight" class="form-control" value="{{  $patient->weight }}" required/>
                        </div>
        
                        <div class="form-group">
                            <label for="height" class="col-sm-2 form-label">Height(m)</label>
                            <input type="number" step=".01" id="height" name="height" class="form-control" value="{{  $patient->height }}" required/>
                        </div>
        
                        <div class="form-group">
                            <label for="allergies" class="col-sm-2 form-label">Allergies</label>
                            <input type="text" id="allergies" name="allergies" class="form-control" value="{{  $patient->allergies }}" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="hospital_no" class="col-sm-12 form-label">Hospital</label>
                            <input type="text" id="hospital_no" name="hospital_no" class="form-control" value="{{  $patient->hospital_no }}"/>
                        </div>
        
                        <div class="form-group">
                            <label for="room_no" class="col-sm-12 form-label">Room#</label>
                            <input type="text" id="room_no" name="room_no" class="form-control" value="{{  $patient->room_no }}"/>
                        </div>
        
                        <div class="form-group">
                            <label for="medical_diagnosis" class="col-sm-12 form-label">Medical Diagnosis</label>
                            <input type="text" id="medical_diagnosis" name="medical_diagnosis" class="form-control" value="{{  $patient->medical_diagnosis }}" required/>
                        </div>
        
                        <div class="form-group">
                            <label for="physical_limitation" class="col-sm-12 form-label">Physical Limitation/Precaution</label>
                            <input type="text" id="physical_limitation" name="physical_limitation" class="form-control" value="{{  $patient->physical_limitation }}" required/>
                        </div>
                    
                        <div class="form-group">
                            <label for="diet" class="col-sm-12 form-label">Diet</label>
                            <input type="text" id="diet" name="diet" class="form-control" value="{{  $patient->diet }}" required/>
                        </div>
        
                        <div class="form-group">
                            <label for="physician_name" class="col-sm-12 form-label">Physician Name</label>
                            <input type="text" id="physician_name" name="physician_name" class="form-control" value="{{  $patient->physician_name }}" required/>
                        </div>
        
                        <div class="form-group">
                            <label for="contact_person" class="col-sm-12 form-label">Contact Person</label>
                            <input type="text" id="contact_person" name="contact_person" class="form-control" value="{{  $patient->contact_person }}" required/>
                        </div>

                        <div class="form-group">
                            <label for="contact_relationship" class="col-sm-12 form-label">Relationship(Contact Person)</label>
                            <input type="text" id="contact_relationship" name="contact_relationship" class="form-control" value="{{  $patient->contact_relationship }}" required/>
                        </div>

                        <div class="form-group">
                            <label for="contact_person_no" class="col-sm-12 form-label">Contact No(Contact Person)</label>
                            <input type="text" id="contact_person_no" name="contact_person_no" class="form-control" value="{{  $patient->contact_person_no }}" required/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-primary btn-lg m-2">Save</button>
                    <a type="button" href="{{ url()->previous() }}" class="btn btn-danger btn-lg">Close</a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection