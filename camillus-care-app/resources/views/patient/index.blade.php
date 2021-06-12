@extends('layouts.app')

@section('content')

<div style="margin-bottom: 1rem;">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" type="button" href="/patient/create"><span data-feather="user-plus"></span> New</a>
      </div>
   
</div>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Patient: Patient List
        </h5>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach($patients as $patient)
                    <tr>
                        <td><?php echo ++$i;?></td>
                        <td>{{ str_pad($patient->patient_id, 6, "0", STR_PAD_LEFT ) }}</td>
                        <td>
                            <strong>{{$patient->last_name.', '.$patient->first_name.' '.$patient->middle_name }}</strong>
                        </td>
                        <td>{{$patient->address}}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="/employee/{{ $patient->patient_id }}/edit">
                                <span data-feather="edit"></span>
                            </a>
                            <form method="POST" action="/employee/delete/{{ $patient->employee_id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <span data-feather="trash-2"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>

        @empty($patients)
            <h6 class="text-center text-muted">*** NO DATA ***</h1>
        @endempty
    </div>
</div>

@endsection