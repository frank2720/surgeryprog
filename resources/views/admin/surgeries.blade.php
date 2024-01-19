@extends('admin.main')
@section('content')
<div>
  <a href="{{route('surgery.create')}}" class="nav-link text-white"><i class="fa-solid fa-plus mr-2"></i>Add</a>
</div>
<div></div><br>

@if(session('status'))
      <div class="alert alert-success mt-4 mb-4">
          {{ session('status') }}
      </div>
@endif

<div class="table-container mt-4">

  <table class="table">
    <thead>
      <tr>
        <th class="px-4 py-2">beneficiary id</th>
        <th class="px-4 py-2">Patient Name</th>
        <th class="px-4 py-2">Surgeon Name</th>
        <th class="px-4 py-2">Surgery Procedure</th>
        <th class="px-4 py-2">Surgery Outcome</th>
      </tr>
    </thead>
    <tbody class="text-white-600">
      @foreach ($surgeries as $surgery)
          <tr>
            <td class="px-4 py-2 text-center text-green-500">{{$surgery->beneficiary->beneficiary_id}}</i></td>
            <td class="px-4 py-2">{{$surgery->beneficiary->firstname}}  {{$surgery->beneficiary->lastname}}</td>
            <td class="px-4 py-2">{{$surgery->surgeon_name}}</td>
            <td class="px-4 py-2">{{$surgery->procedure_name}}</td>
            <td class="px-4 py-2">{{$surgery->outcome}}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection