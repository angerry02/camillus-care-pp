@extends('layouts.app')

@section('content')

<div style="margin-bottom: 1rem;">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" type="button" href="/employee/create"><span data-feather="user-plus"></span> New</a>
      </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Employee: Nurse/Caregiver List
        </h5>
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Contact#</th>
                <th scope="col">Date Hired</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach($employees as $employee)
                    <tr>
                        <td><?php echo ++$i;?></td>
                        <td>{{ str_pad($employee->employee_id, 6, "0", STR_PAD_LEFT ) }}</td>
                        <td>
                            <strong>{{$employee->last_name.', '.$employee->first_name.' '.$employee->middle_name }}</strong>
                        </td>
                        <td>{{$employee->address}}</td>
                        <td>{{$employee->contact_no}}</td>
                        <td>{{$employee->date_hired}}</td>
                        <td>{{$employee->role}}</td>
                        <td>
                            <a class="btn btn-sm btn-success" href="/employee/{{ $employee->employee_id }}/view-schedule">
                                <span data-feather="calendar"></span>
                            </a>
                            <a class="btn btn-sm btn-info" href="/employee/{{ $employee->employee_id }}/edit">
                                <span data-feather="edit"></span>
                            </a>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to delete this records? This process cannot be undone.')" href="/employee/delete/{{ $employee->employee_id }}">
                                <span data-feather="trash-2"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>

        @empty($employee)
            <h6 class="text-center text-muted">*** NO DATA ***</h1>
        @endempty
    </div>
</div>

@endsection