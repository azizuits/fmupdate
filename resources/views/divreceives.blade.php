@extends('layouts.admin')
@section('title')
    Division Recieve Form List
@endsection
@section('content')

    <div class="container">
<div class="row mt-3">
    <div class="col-md-12">
    <table class="table table-bordered table-hover table-striped ">
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
</div>
</div>
@endsection
