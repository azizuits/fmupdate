<?php

namespace App\Http\Controllers;

use App\Distreceive;
use Illuminate\Http\Request;
use DB;
use  App\name;
use  App\Sendings;
use  App\Divreceive;
use  App\Subagentreceive;
use  App\Account;
use  App\Agentlatest;
use phpseclib\Crypt\DES;
class subagentController extends Controller
{
    //
   /* public function accounts(){
        $fetchData = DB::select('select * from accounts');
        $accounts=['data'=>$fetchData];
        return view("getdivagents",$accounts);
    }*/
//    public function agentreceives(){
//        $fetchData = DB::select('select * from subagentreceives');
//        $agentreceives=['data'=>$fetchData];
//        return view("agentreceives",$agentreceives);
//    }
//    public function accounts(){
//        $fetchData = DB::select('select * from accounts2');
//        $branch=['data'=>$fetchData];
//        return view("accountstable",$branch);
//    }
    public function member(){
        $fetchData = DB::select('select * from member');
        $divreceives=['data'=>$fetchData];
        return view("member",$divreceives);
    }
    public function sendings(){
        $fetchData = DB::select('select * from sendings');
        $divreceives=['data'=>$fetchData];
        return view("sendings",$divreceives);
    }

//    public function subagentreceivesform(){
//        return view("agentreceivesform");
//    }

    public function sendingsform(){
        return view("sendingsform");
    }

    public function agentlatestform(){
        return view("agentlatestform");
    }
    
    public function agentlatestprocess(){
        extract($_REQUEST);
        $result=DB::table('agentlatest')->insert(
            [ "id"=>1, "name" =>"$name", "fathername"=>"$fathername","mothername"=>"$mothername","mobilenumber"=>"$mobilenumber","requestmobile"=>"$requestmobile", "shopaddress"=>"$shopaddress","permanentaddress"=>"$permanentaddress", "nid"=>"$nid","dob"=>"$dob", "religious"=>"$religious","occupation"=>"$occupation", "referenceid"=>"$referenceid","area"=>"$area","division"=>"$division","code"=>"$code","status"=>"$status"]
        );
        if($result){
            echo "Insert Success";
        }
        else{
            echo "Insert Fail";
        }
    }

    public function sendingsform2(){
        return view("sendingsform");
    }
    public function sendingformprocess(Request $request){

        $sendings= new Sendings;
        $sendings->cnnumber=$sendings->id;
        $sendings->code=$request->code;
        $sendings->amount=$request->amount;
        $sendings->codamount=$request->codamount;
        $sendings->pickaddress=$request->pickaddress;
        $sendings->division=$request->division;
        $sendings->district=$request->district;

        $sendings->sendaddress=$request->sendaddress;
        $sendings->senddiv=$request->senddiv;
        $sendings->senddist=$request->senddist;
        echo $sendings->save()?"Insert Success":"Insert Fail";
    }

    public function accountsprocess(Request $request){
        // extract($_REQUEST);
        // $result=DB::table('divreceives')->insert(
        //  ["orderid" => "$orderid", "code" =>"$code","status"=>"$status","deliverydetails"=>"$deliverydetails", "trackingchange"=>"$trackingchange"     ]
        //  );
        $divric= new Account;
        //$divfor=Divreceive::with('sendings')->get( );
        //$abc=1;
        //$divrics=Divreceive::orderBy('id','ASC')->get();

        $divric->id=1;
        $divric->cnnumber= $request->cnnumber;
        $divric->code= $request->code;
        $divric->status= $request->status;
        $divric->deliverydetails= $request->deliverydetails;
        $divric->trackingchange= $request->trackingchange;
        // $flight = Sendings::where('id', $divric->id)->first();

        // $divric->divname=$flight->division; ;

        echo $divric->save()?"Insert Success":"Insert Fail";
    }
    public function sendingform(){
        return view("sendingview");
    }
   
}


