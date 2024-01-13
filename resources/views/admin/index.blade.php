@extends('admin.main')
@section('content')
<div>
  <a href="{{route('add-beneficiary')}}" class="nav-link text-white"><i class="fa-solid fa-plus mr-2"></i>Add</a>
</div>
<div></div><br>
<div>
  <form action="{{route('view.pdf')}}" method="POST" target="_blank">
    @csrf
    <span class="nav-link text-white text-xs mt-10">
      <button class="fa-solid fa-file-export">
        Export all data
      </button>
    </span>
  </form>
</div>
<div class="table-container mt-4">

  <table class="table">
    <thead>
      <tr>
        <th class="px-4 py-2">beneficiary id</th>
        <th class="px-4 py-2">first name</th>
        <th class="px-4 py-2">Last Name</th>
        <th class="px-4 py-2">gender</th>
        <th class="px-4 py-2">age</th>
        <th class="px-4 py-2">action</th>
      </tr>
    </thead>
    <tbody class="text-white-600">
      @foreach ($beneficiaries as $beneficiary)
          <tr>
            <td class="px-4 py-2 text-center text-green-500">{{$beneficiary->beneficiary_id}}</i></td>
            <td class="px-4 py-2">{{$beneficiary->firstname}}</td>
            <td class="px-4 py-2">{{$beneficiary->lastname}}</td>
            <td class="px-4 py-2">{{$beneficiary->gender}}</td>
            <td class="px-4 py-2">{{$beneficiary->age}}</td>
            <td class="px-4 py-2">
              <form method="POST" action="{{route('beneficiary.destroy', ['beneficiary'=>$beneficiary->id])}}">
                @csrf
                @method('delete')
                <span class="text-red-700"><a href="{{route('beneficiary.destroy', ['beneficiary'=>$beneficiary->id])}}" 
                  onclick="event.preventDefault(); this.closest('form').submit();" 
                  class="fa-solid fa-trash focus:text-gray-900 focus:outline-none"></a></span>
              </form>
              <span class="ml-2 text-yellow-500"><a class="fa-solid fa-pen focus:text-gray-900 focus:outline-none" href="{{route('beneficiary.edit', ['beneficiary'=>$beneficiary->id])}}"></a></span>
              <span class="ml-2"><a class="fa-regular fa-eye focus:text-gray-900 focus:outline-none" href="{{route('beneficiary.details',['id'=>$beneficiary->id])}}"></a></span>
              <form action="{{route('beneficiary.pdf', ['id'=>$beneficiary->id])}}" method="POST" target="_blank">
                @csrf
                <span class="text-blue-600 ml-2">
                  <button class="fa-solid fa-download focus:text-gray-900 focus:outline-none"></button>
                </span>
              </form>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection