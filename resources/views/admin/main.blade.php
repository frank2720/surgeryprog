<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{config('app.name', 'SurgeryProg')}}</title>
  <link rel="icon" type="image/x-icon" href="{{asset('imgs/plastic-surgery.png')}}"> 
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <script src="https://kit.fontawesome.com/3f96f27cdc.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body class="bg-gray-100">


@include('admin.navbar')

<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
    @include('admin.sidebar')


  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16">
    @yield('content')
  </div>
  <!-- end content -->


</div>
<!-- end wrapper -->

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<!-- end script -->

</body>
</html>