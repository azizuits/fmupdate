@extends('layouts.admin')
@section('title')
    Sub Agent Recieve Form
@endsection
@section('content')
<!-- Default form contact -->
<form class="text-center border border-light p-5" action="{{route('admin.subagentrecievesprocess')}}" method="GET">
    <p class="h4 mb-4">Registration</p>
    <!-- Name -->
    <input type="number" name="cnnumber" id="defaultcnnumber" class="form-control mb-4" placeholder="Cn Number">
    <input type="number" name="code" id="defaultcnnumber" class="form-control mb-4" placeholder="Code">
    <input type="text" name="deliverydetails" id="deliverydetails" class="form-control mb-4" placeholder="Delivery details">
    <label for="trackingchange">Choose a Tracking:</label>

    <select name="trackingchange" id="trackingchange">

        <option value="subagent">Send to local area</option>
        <option value="customer">Send to destination</option>
        <option value="delivered">Delivered</option>
        <option value="cancelled">Cancelled</option>
    </select>
@csrf
<!-- Submit button -->
    <button class="btn btn-info btn-block" type="submit">Submit</button>

</form>
@endsection
