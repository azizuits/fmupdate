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
<form class="text-center border border-light p-5" action="/distagentprocess" method="post">

    <p class="h4 mb-4">Registration</p>

    <!-- Name -->
    <input type="text" name="code" id="defaultContactFormCode" class="form-control mb-4" placeholder="Code">

    <input type="text" name="name" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
    <input type="text" name="mobile" id="defaultContactFormMobile" class="form-control mb-4" placeholder="Mobile">

    <!-- Mobile -->
    <div class="form-group">
        <textarea name="address" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Address"></textarea>
    </div>
    <input type="text" name="division" id="defaultContactFormDivision" class="form-control mb-4" placeholder="Division">
    <input type="text" name="district" id="defaultContactFormDistrict" class="form-control mb-4" placeholder="District">
    <input type="text" name="postalcode" id="defaultContactFormpostalcode" class="form-control mb-4" placeholder="Postalcode">
    <input type="text" name="disagentcode" id="defaultContactFormdisagent" class="form-control mb-4" placeholder="District Agent Code">
    <input type="number" name="newid" id="defaultContactFormnewid" class="form-control mb-4" placeholder="New id">

    <!-- Address -->


@csrf
<!-- Submit button -->
    <button class="btn btn-info btn-block" type="submit">Submit</button>

</form>
</body>
</html>