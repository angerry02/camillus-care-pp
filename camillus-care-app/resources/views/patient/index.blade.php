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
        <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Diagnosis</th>
                <th scope="col">Contact</th>
                <th scope="col">Status</th>
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
                        <td>{{$patient->medical_diagnosis}}</td>
                        <td>{{$patient->contact_person.' - '.$patient->contact_person_no}}</td>
                        <td>
                            @if ($patient->patient_status === 0)
                                <span class="badge bg-danger">NO SCHEDULE YET</span>
                            @elseif($patient->patient_status === 1)
                                <span class="badge bg-success">HANDLED</span>
                            @endif
                        </td>
                        <td>
                            @if($patient->patient_status === 1)
                            <a data-toggle="tooltip" data-placement="top" title="Manage patient medical record." class="btn btn-sm btn-secondary" href="/patient/{{ $patient->patient_id }}/medical-record">
                                <span data-feather="activity"></span>
                            </a>
                            @endif
                            <a data-toggle="tooltip" data-placement="top" title="Manage patient/nurse assigned and schedule." class="btn btn-sm btn-success" href="/patient/{{ $patient->patient_id }}/manage-schedule">
                                <span data-feather="calendar"></span>
                            </a>
                            <a class="btn btn-sm btn-info" href="/patient/{{ $patient->patient_id }}/edit">
                                <span data-feather="edit"></span>
                            </a>
                            @if ($patient->patient_status === 0)
                                <a class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to delete this records? This process cannot be undone.')" href="/patient/delete/{{ $patient->patient_id }}">
                                    <span data-feather="trash-2"></span>
                                </a>
                            @endif
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