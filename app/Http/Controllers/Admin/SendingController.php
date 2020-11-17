<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Http\Controllers\Controller;
use App\Sendings;
use Illuminate\Http\Request;
Use DB;
class SendingController extends Controller
{
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
}
