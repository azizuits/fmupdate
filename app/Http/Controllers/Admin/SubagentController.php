<?php

namespace App\Http\Controllers\admin;
use DB;
use App\Account;
use App\Agentlatest;
use App\Distreceive;
use App\Divreceive;
use App\Http\Controllers\Controller;
use App\Sendings;
use App\Subagentreceive;
use Illuminate\Http\Request;

class SubagentController extends Controller
{
	public function agentreceives(){
		$fetchData = DB::select('select * from subagentreceives');
		$agentreceives=['data'=>$fetchData];
		return view("agentreceives",$agentreceives);
	}
	public function subagentlist(){
		$fetchData = DB::select('select * from agentlatest where status="subagent"');
		$agentlist=['data'=>$fetchData];
		return view("agentlist",$agentlist);
	}
	public function subagentreceiveprocess(Request $request){
		$divric= new Divreceive;
		$districs= new Distreceive;
		$agentlatest= new Agentlatest;
		$sendings= new Sendings;
		$accounts= new Account;
		$subagent = New Subagentreceive;
		//$divfor=Divreceive::with('sendings')->get( );
		//$abc=1;
		//$divrics=Divreceive::orderBy('id','ASC')->get();
		$subagent->cnnumber= $request->cnnumber;
		$subagent->code= $request->code;
		$subagent->trackingchange= $request->trackingchange;
		$sendings2 = Sendings::where('cnnumber', $request->cnnumber)->first();
// account
		$accounts->orderno= $request->cnnumber;
		$accounts->amount=$sendings2->amount;
		$accounts->ssubagentid=$sendings2->code;
		$accounts->ssubagentamount=($sendings2->amount*15)/100;
		
		$accounts->sdistagentid=$sendings2->district;
		$accounts->sdistagentamount=($sendings2->amount*10)/100;
		
		$accounts->sdivagentid=$sendings2->division;
		$accounts->sdivagentamount=($sendings2->amount*5)/100;
		$accounts->rdivagentid=$sendings2->senddiv;
		$accounts->rdivagentamount=($sendings2->amount*25)/100;
		
		
		echo $subagent->save()?"Insert Success agent recieve ":"Insert Fail";
		echo $accounts->save()?"Insert Success account ":"Insert Fail";
	}
	public function subagentreceivesform(){
		return view("agentreceivesform");
	}
}
