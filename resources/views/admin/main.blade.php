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
<style>
        body {
          font-family: Arial, sans-serif;
          background-color: #f4f4f4;
          margin: 0;
          padding: 0;
        }

        .container {
          max-width: 800px;
          margin: 20px auto;
          background-color: #fff;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          padding: 20px;
          border-radius: 8px;
        }

        .form-content {
          display: flex;
          flex-wrap: wrap;
          gap: 20px;
        }

        .form-content > div {
          flex: 1;
        }

        .heading h2 {
          color: #333;
        }

        label {
          display: block;
          margin-bottom: 8px;
        }

        input,
        select,
        textarea {
          width: 100%;
          padding: 10px;
          box-sizing: border-box;
          border: 1px solid #ccc;
          border-radius: 5px;
          display: inline-block;
        }

        .action-bar {
          margin-top: 20px;
          text-align: center;
        }

        input[type="submit"] {
          background-color: #18AF79;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
        }
      /* Updated style for left sidebar */
    #sideBar {
      background-color: #18AF79;
    }

    /* Added style for left sidebar navigation items */
    #sideBar a {
      display: block;
      color: white;
      padding: 10px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    /* Added hover effect for left sidebar navigation items */
    #sideBar a:hover {
      background-color: #18AF79;
    }

    /* Added icons for left sidebar navigation items */
    #sideBar i {
      margin-right: 10px;
    }
</style>
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