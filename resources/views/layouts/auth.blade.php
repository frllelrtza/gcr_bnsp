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
  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
  {{-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}
</head>
<body>
    <div class="container mt-5 p-5">
        @yield('content')
    </div>



    <script src="{{ asset('/assets/dashboard/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/js/app.min.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/js/dashboard.js') }}"></script>
    <script src="{{ asset('/assets/dashboard/js/aos.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  </body>
  
  </html>
