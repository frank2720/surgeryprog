@extends('admin.main')
@section('content')
  <div class="container">

    <form id="beneficiaryForm" method="post" action="{{ route('beneficiary.update',['beneficiary'=>$beneficiary->id]) }}">

        @csrf
        @method('put')
        <div class="form-content">

            <div>
                <div class="heading">
                    <h2>EDIT BENEFICIARY INFORMATION</h2>
                </div>

                <!-- Existing fields -->
                <label for="fname">First Name:</label>
                <input required type="text" id="fname" name="firstname" value="{{ old('firstname', $beneficiary->firstname) }}">

                <label for="lname">Last Name:</label>
                <input required type="text" id="lname" name="lastname" value="{{ old('lastname', $beneficiary->lastname) }}">

                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <option value="{{ old('gender', $beneficiary->gender) }}">{{ old('gender', $beneficiary->gender) }}</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Other</option>
                </select>

                <label for="age">Age:</label>
                <input required type="number" id="age" name="age"  value="{{ old('age', $beneficiary->age) }}">

            </div>

            <div>
                <label for="contact">Contact Number:</label>
                <input required type="tel" id="contact" name="contact" value="{{ old('contact', $beneficiary->contact) }}">

                <label for="history">Medical History:</label>
                <textarea name="medical_history" id="history">
                  {{ old('medical_history', $beneficiary->history) }}
                </textarea>

                
                <label for="consent">Consent Form Image:</label>
                <input type="file" id="consent" name="consent_form_image" accept="image/*">
            </div>

        </div>

        <div class="action-bar">
            <input type="submit" value="Update">
        </div>

    </form>    

</div>
@endsection