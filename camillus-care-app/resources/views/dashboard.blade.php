@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card bg-info">
            <div class="card-body">
                <h2 class="text-white">
                    Hello, Admin.
                </h2>
                <h5 class="medium text-white">
                    I hope you are having a great day!
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-xl-4 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-users"></i>
          </div>
          <div class="mr-5">{{ $totalNurse }} Nurse</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="/employee">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <div class="col-xl-4 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-users"></i>
          </div>
          <div class="mr-5">{{ $totalCaregiver }} Caregiver</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="/employee">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <div class="col-xl-4 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-users"></i>
          </div>
          <div class="mr-5">{{ $totalPatient }} Patient</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="/patient">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

  </div>

@endsection