<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="{{ asset('backend')}}/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('backend')}}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="{{ asset('backend')}}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('backend')}}/css/argon.css?v=1.0.0" rel="stylesheet">
  @stack('css')
</head>

<body>
  <!-- Sidenav -->
  @include('backend.layouts.sidebar')
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
   @include('backend.layouts.navbar')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          @yield('header')
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <!-- Table -->
    @yield('content')
      <!-- Dark table -->
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('backend')}}/vendor/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('backend')}}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="{{ asset('backend')}}/js/argon.js?v=1.0.0"></script>
  @stack('js')
</body>

</html>
