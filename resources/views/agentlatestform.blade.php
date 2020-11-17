<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Registration Form</title>
</head>
<body>
<!-- Default form contact -->
<form class="text-center border border-light p-5" action="/agentlatestprocess" method="post">

    <p class="h4 mb-4">Registration</p>

    <!-- Name -->


    <input type="text" name="name" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
    <input type="text" name="fathername" id="fatherName" class="form-control mb-4" placeholder="Father Name">
    <input type="text" name="mothername" id="motherName" class="form-control mb-4" placeholder="Mother Name">

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


    <!-- Mobile -->
    <input type="text" name="mobilenumber" id="defaultContactmobilenumber" class="form-control mb-4" placeholder="Mobile Number">
    <input type="text" name="requestmobile" id="defaultContactrequestmobile" class="form-control mb-4" placeholder="Request Mobile Number">
    <div class="form-group">
        <textarea name="shopaddress" class="form-control rounded-0" id="shopaddress" rows="3" placeholder="Shop Address"></textarea>
    </div>

    <div class="form-group">
        <textarea name="permanentaddress" class="form-control rounded-0" id="permanentaddress" rows="3" placeholder="Permanent Address"></textarea>
    </div>
    <input type="text" name="nid" id="nid" class="form-control mb-4" placeholder="NID">
    <input type="date" name="dob" id="dob" class="form-control mb-4">
    <input type="text" name="religious" id="religious" class="form-control mb-4" placeholder="Religious">
    <input type="text" name="occupation" id="occupation" class="form-control mb-4" placeholder="Occupation">
    <input type="text" name="referenceid" id="referenceid" class="form-control mb-4" placeholder="Reference ID">
    <input type="text" name="area" id="area" class="form-control mb-4" placeholder="Area">
    <input type="text" name="division" id="division" class="form-control mb-4" placeholder="Division">
    <input type="text" name="code" id="code" class="form-control mb-4" placeholder="Code">
    <div class="form-group">
    <label for="status">Choose product status</label>
    <select name="status" id="status">
        <option value="subagent">sending to Sub Agent</option>
        <option value="divagent">sending to Division Agent </option>
        <option value="distagent">sending to District Agent</option>
        <option value="employee">sending to Employee</option>
    </select>
    </div>

    <!-- Address -->


@csrf
<!-- Submit button -->
    <button class="btn btn-info btn-block" type="submit">Submit</button>

</form>
</body>
</html>