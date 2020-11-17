<?php

namespace App\Http\Controllers;
use App\Account;
use App\Agentlatest;
use App\Distreceive;
use App\Divreceive;
use App\Sendings;
use App\Subagentreceive;
use Illuminate\Http\Request;

class Others extends Controller
{
    public function branch(){
        $fetchData = DB::select('select * from branch');
        $branch=['data'=>$fetchData];
        return view("branch",$branch);
    }
    public function comments(){
        $fetchData = DB::select('select * from comments');
        $comments=['data'=>$fetchData];
        return view("comments",$comments);
    }
}
