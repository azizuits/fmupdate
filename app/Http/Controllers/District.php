<?php

namespace App\Http\Controllers;

use App\Account;
use App\Agentlatest;
use App\Distreceive;
use App\Divreceive;
use App\Sendings;
use App\Subagentreceive;
use Illuminate\Http\Request;
use DB;

class District extends Controller
{
//    public function districtrecv(Request $request){
//        $divric= new Divreceive;
//        $districs= new Distreceive;
//        $agentlatest= new Agentlatest;
//        $sendings= new Sendings;
//        $accounts= new Account;
//        //$divfor=Divreceive::with('sendings')->get( );
//        //$abc=1;
//        //$divrics=Divreceive::orderBy('id','ASC')->get();
//        $districs->cnnumber= $request->cnnumber;
//        $districs->code= $request->code;
//        $districs->status= $request->status;
//        $districs->trackingchange= $request->trackingchange;
//        $sendings2 = Sendings::where('cnnumber', $request->cnnumber)->first();
//
//
//        if ($request->status==='district'){
//
//            $accounts->orderno= $request->cnnumber;
//            $accounts->amount=$sendings2->amount;
//            $accounts->ssubagentid=$sendings2->code;
//            $accounts->ssubagentamount=($sendings2->amount*15)/100;
//
//            $accounts->sdistagentid=$sendings2->district;
//            $accounts->sdistagentamount=($sendings2->amount*25)/100;
//
//            $accounts->sdivagentid=$sendings2->division;
//            $accounts->sdivagentamount=($sendings2->amount*5)/100;
//            $accounts->rdivagentid=$sendings2->senddiv;
//            $accounts->rdivagentamount=($sendings2->amount*25)/100;
//
//            echo $accounts->ssubagentamount. '<br>';
//            echo $accounts->sdistagentamount. '<br>';
//
//            echo $accounts->sdivagentamount . '<br>';
//
//
//            echo $accounts->ssubagentid. '<br>';
//            echo $accounts->sdistagentid. '<br>';
//
//            echo $accounts->sdivagentid . '<br>';
//            echo $accounts->save()?"Insert Success accounts":"Insert Fail";
//
//
//        }
//            echo $districs->save()?"Insert Success divricrecieve":"Insert Fail";
//    }
//    //====District Form===============
//    public function distform(){
//        return view("distreceivesform");
//    }
//    //=======District Receives==========
//    public function distreceivelist(){
//        $fetchData = DB::select('select * from distreceives');
//        $distreceives=['data'=>$fetchData];
//        return view("distreceivelist",$distreceives);
//    }
//    //========District Receive Process ==========
//    public function distreceiveprocess(Request $request){
//
//        $divric= new Distreceive;
//
//        $agentlatest= new Agentlatest;
//        $sendings= new Sendings;
//        $accounts= new Account;
//        //$divfor=Divreceive::with('sendings')->get( );
//        //$abc=1;
//
//        //$divrics=Divreceive::orderBy('id','ASC')->get();
//
//        $divric->cnnumber= $request->cnnumber;
//        $divric->area= $request->area;
//        $divric->status= $request->status;
//        $divric->deliverydetails= $request->deliverydetails;
//        $divric->trackingchange= $request->trackingchange;
//        $sendings2 = Sendings::where('cnnumber', $request->cnnumber)->first();
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
//
//            $accounts->sdivagentid=$sendings2->division;
//            $accounts->sdivagentamount=($sendings2->amount*5)/100;
//            $accounts->rdivagentid=$sendings2->senddiv;
//            $accounts->rdivagentamount=($sendings2->amount*25)/100;
//
//            echo $accounts->ssubagentamount. '<br>';
//            echo $accounts->sdistagentamount. '<br>';
//            echo $accounts->sdivagentamount . '<br>';
//            echo $accounts->ssubagentid. '<br>';
//            echo $accounts->sdistagentid. '<br>';
//            echo $accounts->sdivagentid . '<br>';
//            echo $accounts->save()?"Insert Success accounts":"Insert Fail";
//
//        }
//
//        echo $divric->save()?"Insert Success divricrecieve":"Insert Fail";
//        //$divfor=Divreceive::with('sendings')->get( );
//        //$abc=1;
//
//        //$divrics=Divreceive::orderBy('id','ASC')->get();
//        $divric->id=1;
//        $divric->cnnumber= $request->cnnumber;
//        $divric->code= $request->code;
//        $divric->status= $request->status;
//        $divric->deliverydetails= $request->deliverydetails;
//        $divric->trackingchange= $request->trackingchange;
//        // $flight = Sendings::where('id', $divric->id)->first();
//
//        // $divric->divname=$flight->division; ;
//
//
//        echo $divric->save()?"Insert Success":"Insert Fail";
//    }
//
//    public function distagentlist(){
//        $fetchData = DB::select('select * from agentlatest where status="distagent"');
//        $agentlist=['data'=>$fetchData];
//        return view("distagentlist",$agentlist);
//    }
//    //======District Process==========
//    public function distprocess(){
//        extract($_REQUEST);
//        $result=DB::table('agentlatest')->insert(
//            [ "id"=>1, "name" =>"$name", "fathername"=>"$fathername","mothername"=>"$mothername","mobilenumber"=>"$mobilenumber","requestmobile"=>"$requestmobile", "shopaddress"=>"$shopaddress","permanentaddress"=>"$permanentaddress","code"=>"$code"     ]
//        );
//        if($result){
//            echo "Insert Success";
//        }
//        else{
//            echo "Insert Fail";
//        }
//    }


}
