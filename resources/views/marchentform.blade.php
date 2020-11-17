@extends('layouts.admin')
@section('title')
    Marchent Form
@endsection
@section('content')

<!-- Default form contact -->
<form class="text-center border border-light p-5" action="{{route('admin.marchentprocess')}}" method="post">

    <p class="h4 mb-4">Registration</p>

    <!-- Name -->


    <input type="text" name="name" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">

    <!--
        <p>Please select your status:</p>
        <input type="radio" id="merchant" name="status" value="merchant">
        <label for="merchant">Merchant</label><br>
        <input type="radio" id="subagent" name="status" value="subagent">
        <label for="subagent">Subagent</label><br>
        <input type="radio" id="distagent" name="status" value="distagent">
        <label for="distagent">District agent</label>
        <input type="radio" id="divagent" name="status" value="divagent">
        <label for="divagent">Divisional agent</label>
        -->

    <input type="text" name="buisnesstype" id="defaultContactFormbuisness" class="form-control mb-4" placeholder="Buisness Type">
    <input type="text" name="producttype" id="defaultContactFormproduct" class="form-control mb-4" placeholder="Product Type">

    <!-- Mobile -->
    <div class="form-group">
        <textarea name="address" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Address"></textarea>
    </div>

    <input type="text" name="district" id="defaultContactFormDistrict" class="form-control mb-4" placeholder="District">
    <input type="text" name="thana" id="defaultContactFormthana" class="form-control mb-4" placeholder="Thana">
    <div class="form-group">
        <textarea name="pickupaddress" class="form-control rounded-0" id="exampleFormControlpickaddress" rows="3" placeholder="Pick Up Address"></textarea>
    </div>
    <input type="text" name="weblink" id="weblink" class="form-control mb-4" placeholder="Web link">
    <input type="text" name="fblink" id="fblink" class="form-control mb-4" placeholder="FB link">
    <input type="text" name="mobile" id="defaultContactmobile" class="form-control mb-4" placeholder="Mobilenumber">
    <input type="text" name="personname" id="defaultContactpersonname" class="form-control mb-4" placeholder="Person Name">
    <input type="text" name="personstatus" id="personstatus" class="form-control mb-4" placeholder="Person Status">
    <input type="email" name="email" id="email" class="form-control mb-4" placeholder="Email">
    <input type="text" name="paymentmethod" id="paymentmethod" class="form-control mb-4" placeholder="Payment Method">
    <input type="text" name="accountname" id="accountname" class="form-control mb-4" placeholder="Accountname">
    <input type="text" name="accountnumber" id="accountnumber" class="form-control mb-4" placeholder="Account Number">


    <!-- Address -->


@csrf
<!-- Submit button -->
    <button class="btn btn-info btn-block" type="submit">Submit</button>

</form>
@endsection
