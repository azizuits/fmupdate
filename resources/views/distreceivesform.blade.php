@extends('layouts.admin')
@section('title')
    District Recieve Form
@endsection
@section('content')

<!-- Default form contact -->
<form class="text-center border border-light p-5" action="{{route('admin.distrecievesprocess')}}" method="GET">
    <p class="h4 mb-4">Registration</p>
    <!-- Name -->
    <input type="number" name="cnnumber" id="defaultcnnumber" class="form-control mb-4" placeholder="Cn Number">
    <input type="number" name="code" id="defaultcnnumber" class="form-control mb-4" placeholder="Code">
    <label for="status">Choose product status</label>

    <select name="status" id="status">

        <option value="subagent">sending to Sub agent</option>
        <option value="customer">sending to Customer</option>
        <option value="district">sending to District Agent</option>

    </select>
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
