@extends('layouts.app')

@section('content')

<!-- Modal ENDORSEMENT AND MEDICATION -->
<div class="modal fade" id="modal-edorsement-medication" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form method="POST" action="/patient/EM/save/{{ $patient->patient_id }}">
        @method('POST')
        @csrf

        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Edorsement and Medication</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="patient_id" id="patient_id" value="{{ $patient->patient_id }}">
                <div class="form-group">
                    <label for="medication" class="col-sm-6 form-label">Medication</label>
                    <input type="text" id="medication" name="medication" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="frequency" class="col-sm-6 form-label">Frequency</label>
                    <input type="text" id="frequency" name="frequency" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="datetime_given" class="col-sm-6 form-label">Datetime Given</label>
                    <input type="datetime-local" id="datetime_given" name="datetime_given" class="form-control" required/>
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

<!-- Modal LABORATORY FLOW -->
<div class="modal fade" id="modal-laboratory-flow" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form method="POST" action="/patient/LF/save">
        @method('POST')
        @csrf

        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Laboratory Flow Record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="patient_id" id="patient_id" value="{{ $patient->patient_id }}">
                <div class="form-group">
                    <label for="blood_work" class="col-sm-6 form-label">Blood Works</label>
                    <textarea type="text" id="blood_work" name="blood_work" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="values" class="col-sm-6 form-label">Values</label>
                    <input type="text" id="values" name="values" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="datetime_added" class="col-sm-6 form-label">Datetime</label>
                    <input type="datetime-local" id="datetime_added" name="datetime_added" class="form-control" required/>
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

<!-- Modal VIO -->
<div class="modal fade" id="modal-vio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form method="POST" action="/patient/VIO/save">
        @method('POST')
        @csrf

        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Vital Sign, Intake & Output Record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="patient_id" id="patient_id" value="{{ $patient->patient_id }}">
                <div class="form-group">
                    <label for="datetime_added" class="col-sm-6 control-label">Datetime</label>
                    <input type="datetime-local" id="datetime_added" name="datetime_added" class="form-control" required/>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="gcs" class="col-sm-6 control-label">GCS</label>
                        <input type="text" id="gcs" name="gcs" class="form-control" required/>
                    </div>
                    <div class="col-md-6">
                        <label for="bp" class="col-sm-6 control-label">BP</label>
                        <input type="text" id="bp" name="bp" class="form-control" required/>
                    </div>
                </div>

                <div class="form-group row">
                   <div class="col-md-6">
                        <label for="hr" class="col-sm-6 control-label">HR</label>
                        <input type="text" id="hr" name="hr" class="form-control" required/>
                   </div>
                   <div class="col-md-6">
                        <label for="rr" class="col-sm-6 control-label">RR</label>
                        <input type="text" id="rr" name="rr" class="form-control" required/>
                     </div>
                </div>

                <div class="form-group row">
                   <div class="col-md-6">
                        <label for="t" class="col-sm-6 control-label">T</label>
                        <input type="text" id="t" name="t" class="form-control" required/>
                   </div>
                   <div class="col-md-6">
                        <label for="o2_sat" class="col-sm-6 control-label">O2 Sat</label>
                        <input type="text" id="o2_sat" name="o2_sat" class="form-control" required/>
                   </div>
                </div>

                <br>
                <label class="col-sm-6 control-label"><strong>Intake</strong></label>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="iv" class="col-sm-6 control-label">IV</label>
                        <input type="text" id="iv" name="iv" class="form-control" required/>
                    </div>
                    <div class="col-md-6">
                        <label for="oral" class="col-sm-6 control-label">Oral</label>
                        <input type="text" id="oral" name="oral" class="form-control" required/>
                    </div>
                </div>
                
                <br>
                <label class="col-sm-6 control-label"><strong>Output</strong></label>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="urine" class="col-sm-6 control-label">Urine</label>
                        <input type="text" id="urine" name="urine" class="form-control" required/>
                    </div>
                    <div class="col-md-6">
                        <label for="drainage" class="col-sm-6 control-label">Drainage</label>
                        <input type="text" id="drainage" name="drainage" class="form-control" required/>
                    </div>
                </div>

                <br>

                <div class="form-group">
                    <label for="bowel_movement" class="col-sm-6 control-label">Bowel Movement</label>
                    <input type="text" id="bowel_movement" name="bowel_movement" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label for="remark" class="col-sm-6 control-label">Remark</label>
                    <input type="text" id="remark" name="remark" class="form-control"/>
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

<div class="card card-info">
    <div class="card-header">
        <p class="small">Medical Records Management</p>
        <p>
            <strong class="medium">{{$patient->last_name.', '.$patient->first_name.' '.$patient->middle_name }}</strong>
            <br>
            {{ str_pad($patient->patient_id, 6, "0", STR_PAD_LEFT ) }}
            <br>
            {{$patient->address}}
        </p>
    </div>
</div>

<!-- RH: this is bootstrap 5 tabbed panel -->
<ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="EM-tab" data-bs-toggle="tab" href="#EM" role="tab" aria-controls="EM" aria-selected="true"><strong>Endorsement and Medication Record</strong></a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="vio-tab" data-bs-toggle="tab" href="#vio" role="tab" aria-controls="vio" aria-selected="false"><strong>Vital Signs, Intake and Output Record</strong></a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="lf-tab" data-bs-toggle="tab" href="#lf" role="tab" aria-controls="lf" aria-selected="false"><strong>Laboratory Flow Record</strong></a>
    </li>
  </ul>

  <div class="tab-content card" id="myTabContent">
    <div class="tab-pane fade show active" id="EM" role="tabpanel" aria-labelledby="EM-tab">
        <div class="m-3">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-edorsement-medication">
                    <span data-feather="plus-square"></span> Add Record
                </button>
            </div>
        </div>

        <div class="card mt-3" style="border: none;">
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Medication</th>
                        <th scope="col">Frequency</th>
                        <th scope="col">Datetime Given</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i=0; ?>
                        @foreach($endorsementAndMedications as $endorsementAndMedication)
                            <tr>
                                <td><?php echo ++$i;?></td>
                                <td>
                                    <strong>{{ $endorsementAndMedication->medication }}</strong>
                                </td>
                                <td>{{ $endorsementAndMedication->frequency }}</td>
                                <td>{{ $endorsementAndMedication->datetime_given }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
        
                @empty($endorsementAndMedications)
                    <h6 class="text-center text-muted">*** NO DATA ***</h1>
                @endempty
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="vio" role="tabpanel" aria-labelledby="vio-tab">
        <div class="m-3">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-vio">
                    <span data-feather="plus-square"></span> Add Record
                </button>
            </div>
        </div>

        <div class="card mt-3" style="border: none;">
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th rowspan="2" scope="col">#</th>
                        <th rowspan="2" scope="col">Datetime</th>
                        <th rowspan="2" scope="col">GCS</th>
                        <th rowspan="2" scope="col">BP</th>
                        <th rowspan="2" scope="col">HR</th>
                        <th rowspan="2" scope="col">RR</th>
                        <th rowspan="2" scope="col">T</th>
                        <th rowspan="2" scope="col">O2 Sat.</th>
                        <th colspan="2" scope="col" class="text-center">Intake</th>
                        <th colspan="2" scope="col" class="text-center">Output</th>
                        <th rowspan="2" scope="col" class="text-center">Bowel Movement</th>
                        <th rowspan="2" scope="col" class="text-center">Remark</th>
                      </tr>

                      <tr>
                        <th>IV</th>
                        <th>Oral</th>
                        <th>Urine</th>
                        <th>Drainage</th>
                      </tr>

                      <tbody>
                        <?php $i=0; ?>
                        @foreach($vioRecords as $vioRecord)
                            <tr>
                                <td><?php echo ++$i;?></td>
                                <td>{{ $vioRecord->datetime_added }}</td>
                                <td>{{ $vioRecord->gcs }}</td>
                                <td>{{ $vioRecord->bp }}</td>
                                <td>{{ $vioRecord->hr }}</td>
                                <td>{{ $vioRecord->rr }}</td>
                                <td>{{ $vioRecord->t }}</td>
                                <td>{{ $vioRecord->o2_sat }}</td>
                                <td>{{ $vioRecord->iv }}</td>
                                <td>{{ $vioRecord->oral }}</td>
                                <td>{{ $vioRecord->urine }}</td>
                                <td>{{ $vioRecord->drainage }}</td>
                                <td>{{ $vioRecord->bowel_movement }}</td>
                                <td>{{ $vioRecord->remark }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                    </thead>
                  </table>
        
                @empty($endorsementAndMedications)
                    <h6 class="text-center text-muted">*** NO DATA ***</h1>
                @endempty
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="lf" role="tabpanel" aria-labelledby="lf-tab">
        <div class="m-3">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-laboratory-flow">
                    <span data-feather="plus-square"></span> Add Record
                </button>
            </div>
        </div>

        <div class="card mt-3" style="border: none;">
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Blood Works</th>
                        <th scope="col">Values</th>
                        <th scope="col">Datetime</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i=0; ?>
                        @foreach($laboratoryFlows as $laboratoryFlow)
                            <tr>
                                <td><?php echo ++$i;?></td>
                                <td>
                                    <strong>{{ $laboratoryFlow->blood_work }}</strong>
                                </td>
                                <td>{{ $laboratoryFlow->values }}</td>
                                <td>{{ $laboratoryFlow->datetime_added }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
        
                @empty($laboratoryFlows)
                    <h6 class="text-center text-muted">*** NO DATA ***</h1>
                @endempty
            </div>
        </div>
    </div>
  </div>

@endsection