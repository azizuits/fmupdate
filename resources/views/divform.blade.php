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
<form class="text-center border border-light p-5" action="/receiveprocess" method="post">

    <p class="h4 mb-4">Receive Form</p>

    <!-- Name -->
    <input type="text" name="orderid" id="orderid" class="form-control mb-4" placeholder="Order Id">

    <input type="text" name="code" id="code" class="form-control mb-4" placeholder="Code">


    <p>Please select your status:</p>
    <input type="radio" id="merchant" name="status" value="merchant">
    <label for="merchant">Merchant</label><br>
    <input type="radio" id="subagent" name="status" value="subagent">
    <label for="subagent">Subagent</label><br>
    <input type="radio" id="distagent" name="status" value="distagent">
    <label for="distagent">District agent</label>
    <input type="radio" id="divagent" name="status" value="divagent">
    <label for="divagent">Divisional agent</label>
    <br>
    <p>Please select your delivery details:</p>
    <input type="radio" id="details1" name="deliverydetails" value="divagent receive">
    <label for="details1">divagent receive</label><br>
    <input type="radio" id="details2" name="deliverydetails" value="div for dist">
    <label for="details2">div for dist</label><br>
    <input type="radio" id="details3" name="deliverydetails" value="div direct">
    <label for="details3">div direct</label>
    <input type="radio" id="details4" name="deliverydetails" value="dist receive">
    <label for="details4">Divisional agent</label>
    <input type="radio" id="details5" name="deliverydetails" value="dist direct">
    <label for="details5">Divisional agent</label>
    <input type="radio" id="details6" name="deliverydetails" value="subagent receive">
    <label for="details6">Divisional agent</label>
    <br>
    <p>Please select your delivery status:</p>
    <input type="radio" id="details11" name="trackingchange" value="divagent receive">
    <label for="details11">divagent receive</label><br>
    <input type="radio" id="details12" name="trackingchange" value="div for dist">
    <label for="details12">div for dist</label><br>
    <input type="radio" id="details13" name="trackingchange" value="div direct">
    <label for="details13">div direct</label>
    <input type="radio" id="details14" name="trackingchange" value="dist receive">
    <label for="details14">Divisional agent</label>
    <input type="radio" id="details15" name="trackingchange" value="dist direct">
    <label for="details15">Divisional agent</label>
    <input type="radio" id="details16" name="trackingchange" value="subagent receive">
    <label for="details16">Divisional agent</label>


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