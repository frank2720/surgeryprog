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