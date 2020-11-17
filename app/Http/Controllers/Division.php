<?php

namespace App\Http\Controllers;
use DB;
use App\Account;
use App\Agentlatest;
use App\Distreceive;
use App\Divreceive;
use App\Sendings;
use App\Subagentreceive;
use Illuminate\Http\Request;

class Division extends Controller
{

//    public function divreceives(){
//        $fetchData = DB::select('select * from divreceives');
//        $divreceives=['data'=>$fetchData];
//        return view("divreceives",$divreceives);
//    }
//    public function divreceivesform(){
//        return view("divreceivesform");
//    }
//    public function divagentlist(){
//
//            $fetchData = DB::select('select * from agentlatest where status= "divagent" ');
//            $agentlist=['data'=>$fetchData];
//            return view("divagentlist",$agentlist);
//
//    }
//    public function divreceiveprocess(Request $request){
//
//        $divric= new Divreceive;
//        $districs= new Distreceive;
//        $agentlatest= new Agentlatest;
//        $sendings= new Sendings;
//        $accounts= new Account;
//        //$divfor=Divreceive::with('sendings')->get( );
//        //$abc=1;
//        //$divrics=Divreceive::orderBy('id','ASC')->get();
//
//        $divric->cnnumber= $request->cnnumber;
//        $divric->code= $request->code;
//        $divric->status= $request->status;
//        $divric->deliverydetails= $request->deliverydetails;
//        $divric->trackingchange= $request->trackingchange;
//        $sendings2 = Sendings::where('cnnumber', $request->cnnumber)->first();
//        $divreceive2 = Divreceive::where('id', 1)->first();
//        $distreceive2 = Distreceive::where('id', 1)->first();
//        $subagentreceive2 = Subagentreceive::where('id', 1)->first();
//
//        if ($request->status==='customer'){
//
//            $accounts->orderno= $request->cnnumber;
//            $accounts->amount=$sendings2->amount;
//            $accounts->ssubagentid=$sendings2->code;
//            $accounts->ssubagentamount=($sendings2->amount*15)/100;
//
//            $accounts->sdistagentid=$sendings2->district;
//            $accounts->sdistagentamount=($sendings2->amount*10)/100;
//            $accounts->sdivagentid=$sendings2->division;
//            $accounts->sdivagentamount=($sendings2->amount*5)/100;
//            $accounts->rdivagentid=$sendings2->senddiv;
//            $accounts->rdivagentamount=($sendings2->amount*30)/100;
//            echo $accounts->ssubagentamount. '<br>';
//            echo $accounts->sdistagentamount. '<br>';
//            echo $accounts->sdivagentamount . '<br>';
//            echo $accounts->ssubagentid. '<br>';
//            echo $accounts->sdistagentid. '<br>';
//            echo $accounts->sdivagentid . '<br>';
//            echo $accounts->save()?"Insert Success accounts":"Insert Fail";
//        }
//        echo $divric->save()?"Insert Success divricrecieve":"Insert Fail";
//
//    }

}
