@extends('admin.main')
@section('content')
<a href="{{route('add-beneficiary')}}" class="nav-link text-white"><i class="fa-solid fa-plus mr-2"></i>Add</a>
<a href="" class="nav-link text-white"><i class="fa-solid fa-file-export mr-2"></i></i>Export all data</a>
<div class="container mt-4">
      <table class="table-auto w-full text-center">
        <thead>
            <tr>
                <th class="px-4 py-2 border-r text-red-700">beneficiary id</th>
                <th class="px-4 py-2 border-r text-red-700">first name</th>
                <th class="px-4 py-2 border-r text-red-700">last name</th>
                <th class="px-4 py-2 border-r text-red-700">gender</th>
                <th class="px-4 py-2 text-red-700">age</th>
                <th class="px-4 py-2 text-red-700">action</th>
            </tr>
        </thead>
        <tbody class="text-gray-600">
          @foreach ($beneficiaries as $beneficiary)
          <tr>
            <td class="border border-l-0 px-4 py-2 text-gray-900">{{$beneficiary->beneficiary_id}}</td>
            <td class="border border-l-0 px-4 py-2 text-gray-900">{{$beneficiary->firstname}}</td>
            <td class="border border-l-0 px-4 py-2 text-gray-900">{{$beneficiary->lastname}}</td>
            <td class="border border-l-0 px-4 py-2 text-gray-900">{{$beneficiary->gender}}</td>
            <td class="border border-l-0 px-4 py-2 text-gray-900">{{$beneficiary->age}}</td>
            <td class="border border-l-0 px-4 py-2 text-center">
              <form method="POST" action="{{route('beneficiary.destroy', ['beneficiary'=>$beneficiary->id])}}">
                @csrf
                @method('delete')
                <span class="text-red-700"><a href="{{route('beneficiary.destroy', ['beneficiary'=>$beneficiary->id])}}" 
                  onclick="event.preventDefault(); this.closest('form').submit();" 
                  class="fa-solid fa-trash focus:text-gray-900 focus:outline-none"></a></span>
              </form>
              <span class="ml-2 text-yellow-500"><a class="fa-solid fa-pen focus:text-gray-900 focus:outline-none" href="{{route('beneficiary.edit', ['beneficiary'=>$beneficiary->id])}}"></a></span>
              <span class="ml-2"><a class="fa-regular fa-eye focus:text-gray-900 focus:outline-none" href="{{route('beneficiary.details',['id'=>$beneficiary->id])}}"></a></span>
              <span class="text-blue-600 ml-2"><button class="fa-solid fa-download focus:text-gray-900 focus:outline-none"></button></span>
          </td>
            
         </tr>
          @endforeach
            
        </tbody>
    </table>
</div>
@endsection