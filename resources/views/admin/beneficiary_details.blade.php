@extends('admin.main')
@section('content')
    <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16">
    <a href="/dashboard" class="nav-link text-white mb-4"><i class="fa-solid fa-backward mr-2"></i>Back</a>

    <div class="bg-white overflow-hidden shadow rounded-lg border mt-4">
        <div class="px-4 py-5 sm:px-6">
            <p class="mt-1 max-w-2xl text-sm text-gray-900">
                This are some information about the beneficiary.
            </p>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <div>
                <p class="text-sm font-medium text-blue-700">
                    Full name
                </p>
                <p class="mt-1 mb-2 text-sm text-gray-900">
                    {{$beneficiary[0]->firstname}}  {{$beneficiary[0]->lastname}}
                </p>
            </div>

            <div>
                <p class="text-sm font-medium text-blue-700">
                    Age
                </p>
                <p class="mt-1 mb-2 text-sm text-gray-900">
                    {{$beneficiary[0]->age}}
                </p>
            </div>

            <div>
                <p class="text-sm font-medium text-blue-700">
                    Gender
                </p>
                <p class="mt-1 mb-2 text-sm text-gray-900">
                    {{$beneficiary[0]->gender}}
                </p>
            </div>

            <div>
                <p class="text-sm font-medium text-blue-700">
                    Phone number
                </p>
                <p class="mt-1 mb-2 text-sm text-gray-900">
                    {{$beneficiary[0]->contact}}
                </p>
            </div>
            <details>
                <summary class="text-blue-700">Medical history</summary>
                <p class="mt-1 text-sm text-gray-900">{{$beneficiary[0]->history}}</p>
            </details>
        </div>
    </div>
  </div>
  <!-- end content -->
@endsection