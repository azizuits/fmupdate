@extends('layouts.admin')
@section('title')
    Sending Form
@endsection
@section('content')
<!-- Default form contact -->
<form class="text-center border border-light p-5" action="/sendingformprocess" method="GET">

    <p class="h4 mb-4">Registration</p>

    <!-- Name -->
    <input type="number" name="amount" id="defaultContactFormamount" class="form-control mb-4" placeholder="Amount">
    <input type="number" name="code" id="defaultContactFormamount" class="form-control mb-4" placeholder="Code">

    <input type="number" name="codamount" id="defaultContactFormcodamount" class="form-control mb-4" placeholder="Conditional Amount">


    <div class="form-group">
        <textarea name="pickaddress" class="form-control rounded-0" id="exampleFormControlpicaddress" rows="3" placeholder=" Pick Up Address"></textarea>
    </div>
    <input type="text" name="division" id="defaultContactdivision" class="form-control mb-4" placeholder="Division">
    <input type="text" name="district" id="defaultContactdistrict" class="form-control mb-4" placeholder="District">

    <div class="form-group">
        <textarea name="sendaddress" class="form-control rounded-0" id="exampleFormControlsendaddress" rows="3" placeholder=" Sending Address"></textarea>
    </div>
    <input type="text" name="sendiv" id="defaultContactdivision2" class="form-control mb-4" placeholder="Division">
    <input type="text" name="senddist" id="defaultContactdistrict2" class="form-control mb-4" placeholder="District">
@csrf
<!-- Submit button -->
    <button class="btn btn-info btn-block" type="submit">Submit</button>

</form>
@endsection
