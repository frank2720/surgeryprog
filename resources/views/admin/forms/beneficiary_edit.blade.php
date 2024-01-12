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


<!-- start navbar -->
<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
    
    <!-- logo -->
    <div class="flex-none w-56 flex flex-row items-center">
        <x-application-logo class="w-10 h-10 fill-current text-red-500" />
      <strong class="capitalize ml-1 flex-1">SurgeryProg</strong>

      <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
        <i class="fad fa-list-ul"></i>
      </button>
    </div>
    <!-- end logo -->   
    
    <!-- navbar content toggle -->
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
      <i class="fad fa-chevron-double-down"></i>
    </button>
    <!-- end navbar content toggle -->

    <!-- navbar content -->
    <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
      <!-- left -->
      <div class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">
        <div id="time" class="text-red-700"></div>
        <script type="text/javascript">
        
        function showTime() {
          var date = new Date(),
          utc = new Date(
          date.getFullYear(),
          date.getMonth(),
          date.getDate(),
          date.getHours(),
          date.getMinutes(),
          date.getSeconds()
        );
        document.getElementById('time').innerHTML = utc.toLocaleTimeString();
      }
      setInterval(showTime, 1000);
      </script>
      </div>
      <!-- end left -->      

      <!-- right -->
      <div class="flex flex-row-reverse items-center"> 

        <!-- user -->
        <div class="dropdown relative md:static">

          <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
            <div class="w-8 h-8 overflow-hidden rounded-full">
              <img class="w-full h-full object-cover" src="img/user.svg" >
            </div> 

            <div class="ml-2 capitalize flex ">
              <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">{{ Auth::user()->name }}</h1>
              <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
            </div>                        
          </button>

          <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

          <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="{{route('profile.edit')}}">
              <i class="fad fa-user-edit text-xs mr-1"></i> 
              edit my profile
            </a>     
            <!-- end item -->

            <hr>

            <!-- item -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="{{route('logout')}}" 
                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <i class="fad fa-user-times text-xs mr-1"></i> 
                    log out
                </a> 
            </form>    
            <!-- end item -->

          </div>
        </div>
        <!-- end user -->

        <!-- notifcation -->
        <div class="dropdown relative mr-5 md:static">

          <button class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
            <i class="fad fa-bells"></i>               
          </button>

          <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

          <div class="menu hidden rounded bg-white md:right-0 md:w-full shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
            <!-- top -->
            <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
              <h1>notifications</h1>
              <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                <strong>5</strong>
              </div>
            </div>
            <hr>
            <!-- end top -->

            <!-- body -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                <i class="fad fa-birthday-cake text-sm"></i>
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">poll..</h1>
                  <p class="text-xs text-gray-500">text here also</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>4 min ago</p>
                </div>
              </div>

            </a>
           
            <!-- end body -->

            <!-- bottom -->
            <hr>
            <div class="px-4 py-2 mt-2">
              <a href="#" class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                view all
              </a>
            </div>
            <!-- end bottom -->            
          </div>
        </div>
        <!-- end notifcation -->
      </div>
      <!-- end right -->
    </div>
    <!-- end navbar content -->

  </div>
<!-- end navbar -->


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
    <!-- start sidebar -->
  <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    

    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

      <!-- link -->
      <a href="{{route('dashboard')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">               
        <i class="fa-solid fa-people-pulling mr-1"></i>{{__('Beneficiaries')}}
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">               
        <i class="fa-solid fa-bed-pulse mr-1"></i>{{__('Surgeries')}}
      </a>
      <!-- end link -->
    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->


  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16">
    <a href="/dashboard" class="nav-link text-white mb-4"><i class="fa-solid fa-backward mr-2"></i>Back</a>
    @if(session('status'))
      <div class="alert alert-success mt-4">
          {{ session('status') }}
      </div>
    @endif

    <div class="container mt-4">
      <form method="POST" action="{{ route('beneficiary.update',['beneficiary'=>$beneficiary->id]) }}">
        @csrf
        @method('put')
        <div class="row">
          <div class="col-25">
            <label for="fname">First Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="firstname" value="{{ old('firstname', $beneficiary->firstname) }}">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Last Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="lastname" value="{{ old('lastname', $beneficiary->lastname) }}">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="gender">Gender</label>
          </div>
          <div class="col-75">
            <select id="gender" name="gender">
              <option value="{{ old('gender', $beneficiary->gender) }}">{{ old('lastname', $beneficiary->gender) }}</option>
              <option value="M">Male</option>
              <option value="F">Female</option>
              <option value="O">Other</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="age">Age</label>
          </div>
          <div class="col-75">
            <input type="number" id="age" name="age" min="0"  value="{{ old('age', $beneficiary->age) }}">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="contact">Phone number</label>
          </div>
          <div class="col-75">
            <input type="tel" id="contact" name="contact" value="{{ old('contact', $beneficiary->contact) }}">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="history">Medical history</label>
          </div>
          <div class="col-75">
            <textarea name="medical_history" id="history" cols="30" rows="10">{{ old('medical_history', $beneficiary->history) }}</textarea>
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Submit">
        </div>
    </form>
      </div> 
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