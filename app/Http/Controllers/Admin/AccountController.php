<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Account;
use DB;
class AccountController extends Controller
{
	public function accounts(){
		$fetchData = DB::select('select * from accounts2');
		$branch=['data'=>$fetchData];
		return view("accountstable",$branch);
	}
}
