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
<form class="text-center border border-light p-5" action="/subagentrecievesprocess" method="GET">

    <p class="h4 mb-4">Registration</p>

    <!-- Name -->

    <input type="number" name="cnnumber" id="defaultcnnumber" class="form-control mb-4" placeholder="Cn Number">
    <input type="text" name="code" id="defaultContactcode" class="form-control mb-4" placeholder="Code">
    <label for="status">Choose product status</label>

    <select name="status" id="status">


        <option value="customer">sending to Customer</option>

    </select>
    <input type="text" name="deliverydetails" id="deliverydetails" class="form-control mb-4" placeholder="Delivery details">
    <label for="trackingchange">Choose a Tracking:</label>

    <select name="trackingchange" id="trackingchange">


        <option value="customer">Send to destination</option>
        <option value="delivered">Delivered</option>
        <option value="cancelled">Cancelled</option>
    </select>









@csrf
<!-- Submit button -->
    <button class="btn btn-info btn-block" type="submit">Submit</button>

</form>
</body>
</html>