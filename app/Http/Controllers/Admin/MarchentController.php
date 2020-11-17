<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use phpseclib\Crypt\DES;
class MarchentController extends Controller
{
	public function marchentform(){
		return view("marchentform");
	}
	public function marchentprocess(){
		extract($_REQUEST);
		$result=DB::table('merchants')->insert(
			[ "id"=>1, "name" =>"$name","buisnesstype"=>"$buisnesstype","producttype"=>"$producttype", "address"=>"$address","district"=>"$district","thana"=>"$thana","pickupaddress"=>"$pickupaddress","weblink"=>"$weblink", "fblink"=>"$fblink","mobile"=>"$mobile","personname"=>"$personname","personstatus"=>"$personstatus","contactnumber"=>"lastone","email"=>"$email", "paymentmethod"=>"$paymentmethod","accountname"=>"$accountname","accountnumber"=>"$accountnumber"          ]
		);
		if($result){
			echo "Insert Success";
		}
		else{
			echo "Insert Fail";
		}
	}
	public function marchentlist(){
		$fetchData = DB::select('select * from merchants');
		$marchentlist=['data'=>$fetchData];
		return view("marchentlist",$marchentlist);
	}
}
