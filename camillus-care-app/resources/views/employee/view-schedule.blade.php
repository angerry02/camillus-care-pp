@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <p class="small">Active Schedule</p>
        <p>
            <strong class="medium">{{$employee->last_name.', '.$employee->first_name.' '.$employee->middle_name }}</strong>
            <br>
            {{ str_pad($employee->employee_id, 6, "0", STR_PAD_LEFT ) }}
            <br>
            {{$employee->address}}
        </p>
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Patient Name</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Effective Date</th>
              </tr>
            </thead>
        <tbody>
            <?php $i=0; ?>
            @foreach($employeeSchedules as $employeeSchedule)
                <tr>
                    <td><?php echo ++$i;?></td>
                    <td>
                        <strong>
                            {{$employeeSchedule->patient->last_name.', '.$employeeSchedule->patient->first_name.' '.$employeeSchedule->patient->middle_name }}</strong>
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
                </tr>
            @endforeach
        </tbody>
          </table>
    </div>
</div>

@endsection