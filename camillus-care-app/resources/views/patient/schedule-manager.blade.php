@extends('layouts.app')

@section('content')


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form method="POST" action="/patient/schedule-manager/save/{{ $patient->patient_id }}">
        @method('POST')
        @csrf

        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Schedule</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="patient_id" id="patient_id" value="{{ $patient->patient_id }}">
                <div class="form-group">
                    <label for="employee_id" class="col-sm-2 form-label">Nurse/Caregiver</label>
                    <select id="employee_id" name="employee_id" class="form-control" required> 
                        <option>--- Select Employee/Nurse ---</option>
                        @foreach($employees as $employee)
                            <option value="{{ $employee->employee_id }}">{{$employee->last_name.', '.$employee->first_name.' '.$employee->middle_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="from" class="col-sm-2 form-label">Start Time</label>
                    <input type="time" id="from" name="from" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="to" class="col-sm-2 form-label">End Time</label>
                    <input type="time" id="to" name="to" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="effective_date" class="col-sm-2 form-label">Effective Date</label>
                    <input type="date" id="effective_date" name="effective_date" class="form-control" required/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </form>
</div>

<div style="margin-bottom: 1rem;">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <span data-feather="plus-square"></span> Add Schedule
        </button>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <p class="small">Schedule Management</p>
        <p>
            <strong class="medium">{{$patient->last_name.', '.$patient->first_name.' '.$patient->middle_name }}</strong>
            <br>
            {{ str_pad($patient->patient_id, 6, "0", STR_PAD_LEFT ) }}
            <br>
            {{$patient->address}}
        </p>
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Assigned Nurse/Caregiver Name</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Effective Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
        <tbody>
            <?php $i=0; ?>
            @foreach($employeeSchedules as $employeeSchedule)
                <tr>
                    <td><?php echo ++$i;?></td>
                    <td>
                        <strong>
                            {{$employeeSchedule->employee->last_name.', '.$employeeSchedule->employee->first_name.' '.$employeeSchedule->employee->middle_name }}</strong>
                    </td>
                    <td>
                        {{ date('h:i A', strtotime($employeeSchedule->from)) }}
                    </td>
                    <td>
                        {{ date('h:i A', strtotime($employeeSchedule->to)) }}
                    </td>
                    <td>
                        {{ date('d-m-Y', strtotime($employeeSchedule->effective_date)) }}
                    </td>
                    <td>
                        <a class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to delete this records? This process cannot be undone.')" href="/patient/schedule-manager/delete/{{ $employeeSchedule->id }}">
                            <span data-feather="trash-2"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
          </table>
    </div>
</div>

@endsection