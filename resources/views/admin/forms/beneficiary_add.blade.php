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
                      <h2>ADD BENEFICIARY</h2>
                  </div>
  
                  <!-- Existing fields -->
                  <label for="fname">First Name:</label>
                  <input required type="text" id="fname" name="firstname" placeholder="First name">
  
                  <label for="lname">Last Name:</label>
                  <input required type="text" id="lname" name="lastname" placeholder="Last name">
  
                  <label for="gender">Gender:</label>
                  <select id="gender" name="gender">
                      <option value="M">Male</option>
                      <option value="F">Female</option>
                      <option value="O">Other</option>
                  </select>
  
                  <label for="age">Age:</label>
                  <input required type="number" id="age" name="age" placeholder="Age">

              </div>
  
              <div>
                  <label for="contact">Contact Number:</label>
                  <input required type="tel" id="contact" name="contact" placeholder="Contact number">
  
                  <label for="history">Medical History:</label>
                  <textarea name="medical_history" id="history" placeholder="Enter medical history"></textarea>

                  
                  <label for="consent">Consent Form Image:</label>
                  <input type="file" id="consent" name="consent_form_image" accept="image/*">
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