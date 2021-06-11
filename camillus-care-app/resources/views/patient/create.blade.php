@extends('layouts.app')

@section('content')

<form method="POST" action="/employee/save">
    @method('POST')
    @csrf

    <div class="form-horizontal">
        <div class="card">
            <div class="card-header">
                <h5>
                    Patient: Add New Patient
                </h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="last_name" class="col-sm-2 form-label">Last Name</label>
                    <div class="col-sm-6">
                        <input type="text" id="last_name" name="last_name" class="form-control" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="first_name" class="col-sm-2 form-label">First Name</label>
                    <div class="col-sm-6">
                        <input type="text" id="first_name" name="first_name" class="form-control" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="middle_name" class="col-sm-2 form-label">Middle Name</label>
                    <div class="col-sm-6">
                        <input type="text" id="middle_name" name="middle_name" class="form-control" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address" class="col-sm-2 form-label">Address</label>
                    <div class="col-sm-6">
                        <textarea id="address" name="address" class="form-control" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact_no" class="col-sm-2 form-label">Contact#</label>
                    <div class="col-sm-6">
                        <input type="text" id="contact_no" name="contact_no" class="form-control" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="birth_date" class="col-sm-2 form-label">Birth Date</label>
                    <div class="col-sm-6">
                        <input type="date" id="birth_date" name="birth_date" class="form-control" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="date_hired" class="col-sm-2 form-label">Date Hired</label>
                    <div class="col-sm-6">
                        <input type="date" id="date_hired" name="date_hired" class="form-control" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="sss_no" class="col-sm-2 form-label">SSS#</label>
                    <div class="col-sm-6">
                        <input type="text" id="sss_no" name="sss_no" class="form-control" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="philhealth_no" class="col-sm-2 form-label">PHILHEALTH#</label>
                    <div class="col-sm-6">
                        <input type="text" id="philhealth_no" name="philhealth_no" class="form-control" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tin_no" class="col-sm-2 form-label">Tin#</label>
                    <div class="col-sm-6">
                        <input type="text" id="tin_no" name="tin_no" class="form-control" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="role" class="col-sm-2 form-label">Employee Role</label>
                    <div class="col-sm-6">
                        <select id="role" name="role" class="form-control" required> 
                            <option>--- Select employee role ---</option>
                            <option value="NURSE">NURSE</option>
                            <option value="CAREGIVER">CAREGIVER</option>
                        </select>
                    </div>
                </div>
                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-lg">Save</button>
                <button type="button" class="btn btn-danger btn-lg">Close</button>
            </div>
        </div>
    </div>
</form>

@endsection