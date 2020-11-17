@extends('layouts.admin')
@section('title')
    Account
@endsection
@section('content')
<div class="container row">
    <table class="table table-bordered table-hover table-striped">
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
    </table>
</div>
@endsection
