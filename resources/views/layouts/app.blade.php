<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee App</title>
  <link href="{{ asset('assets/dashboard/images/logos/recruitment.png') }}" rel="icon">
  <link href="{{ asset('assets/dashboard/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link rel="stylesheet" href="{{ asset('/assets/dashboard/css/style-purple.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('/assets/dashboard/libs/apexcharts/dist/apexcharts.css') }}" />
  <!-- SweetAlert2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.min.css">
  <!-- Toastr CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>

  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
       data-sidebar-position="fixed" data-header-position="fixed">

    @include('layouts.dashboard.sidebar')

    <div class="body-wrapper">

      @include('layouts.dashboard.header')

      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <!-- ApexCharts -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  
  <!-- Bootstrap JS (ensure jQuery is loaded before) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <!-- Toastr -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  
  <!-- Your custom scripts -->
  <script src="{{ asset('/assets/dashboard/js/dashboard.js') }}"></script>
  <script src="{{ asset('/assets/dashboard/js/app.min.js') }}"></script>
  <script src="{{ asset('/assets/dashboard/js/sidebarmenu.js') }}"></script>

</body>

</html>
