<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Camillus Care +</title>

    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
    </style>
    
    <link href="{{ asset('css/dashboard.css')}}" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"> <strong>Camilus Care</strong> <span data-feather="plus-square"></span>
    <br><label class="small text-muted">Saint Camillus Health Care Service</h6></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-5">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('*/')) ? 'active' : '' }}" aria-current="page" href="/">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('patient*')) ? 'active' : '' }}" href="/patient">
              <span data-feather="file"></span>
              Patient
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('employee*')) ? 'active' : '' }}" href="/employee">
              <span data-feather="user-plus"></span>
              Employee
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('billing*')) ? 'active' : '' }}" href="#">
              <span data-feather="users"></span>
              Billing
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('payroll*')) ? 'active' : '' }}" href="#">
              <span data-feather="bar-chart-2"></span>
              Payroll
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="container" style="padding-top: 30px; padding-bottom: 30px;">

          @include('flash-message')

          @yield('content')
      </div>
    </main>
  </div>
</div>


<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="{{ asset('js/dashboard.js')}}"></script>

</body>
</html>
