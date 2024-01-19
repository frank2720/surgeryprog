@extends('admin.main')
@section('content')
     <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16">
    <a href="/dashboard" class="nav-link text-white mb-4"><i class="fa-solid fa-backward mr-2"></i>Back</a>
    @if(session('status'))
      <div class="alert alert-success mt-4 mb-4">
          {{ session('status') }}
      </div>
    @endif

    <div class="container">

      <form id="beneficiaryForm" method="post" action="{{route('post-beneficiary')}}">

          @csrf
          <div class="form-content">
  
              <div>
                  <div class="heading">
                      <h2><strong>ADD SURGERY</strong></h2>
                  </div>
  
                  <!-- Existing fields -->
                  <label for="beneficiary_id">Beneficiary ID:</label>
                  <input required type="text" id="beneficiary_id" name="beneficiary_id" placeholder="Beneficiary Id">
  
                  <label for="surgeon_name">Surgeon Name:</label>
                  <input required type="text" id="surgeon_name" name="surgeon_name" placeholder="Full Name">

                  <label for="procedure_name">Producedure Name:</label>
                  <input required type="text" id="procedure_name" name="procedure_name" placeholder="Procedure Name">

                  <label for="outcome">Outcome:</label>
                  <input required type="text" id="outcome" name="outcome" placeholder="Surgery Outcome">

                  <label for="pre-images" class="mt-8">Pre-Operation Images:</label>
                  <input type="file" id="pre-images" name="pre-images" accept="image/*">
              </div>
  
              <div>
                  <label for="notes">Notes:</label>
                  <textarea name="notes" id="notes" placeholder="Enter the surgery notes"></textarea>
                  
                  <label for="procedure_details">Procedure Details:</label>
                  <textarea name="procedure_details" id="procedure_details" placeholder="Enter the surgery procedure"></textarea>
                  
                  <label for="pre_op_instructions">Pre-Operation Instructions:</label>
                  <textarea name="pre_op_instructions" id="pre_op_instructions" placeholder="Enter the surgery Pre-Operation Instructions"></textarea>
                  
                  <label for="post-images">Post-Operation Images:</label>
                  <input type="file" id="post-images" name="post-images" accept="image/*">
              </div>
  
          </div>
  
          <div class="action-bar">
              <input type="submit" value="Submit">
          </div>
  
      </form>    
  
  </div>

  </div>
  <!-- end content -->
@endsection