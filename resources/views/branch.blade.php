<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Table</title>
</head>
<body>
<div class="container row">
    <table class="table table-bordered table-hover table-striped table-condensed table-responsive">
        <tr>
            <?php
            foreach($data[0] as $key=>$value){
                echo "<th>".ucfirst($key)."</th>";
            }
            echo "<th>Action</th>";
            ?>
        </tr>
        <?php
        $count=1;
        foreach($data as $rows){
            echo "<tr>";
            foreach($rows as $val){
                echo "<td>$val</td>";
                $count++;
            }
            $id=$rows->id;
            echo "<td><a class=\"btn btn-info\" href=\"/edit/$id\">Edit</a>  <a class=\"btn btn-danger\" href=\"/delete/$id\">Delete</a></td>";
            echo "</tr>";
        }
        ?>
        <tr>
            <td colspan="<?=$count;?>" class="text-center"><a href="/form" class="btn btn-primary">Add New  </a></td>
        </tr>
    </table>
</div>
</body>
</html>