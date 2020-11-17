<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Agentlatest;
class AllagentController extends Controller
{
	public function allagentlist(){
		$fetchData = DB::select('select * from agentlatest');
		$agentlist=['data'=>$fetchData];
		return view("agentlist",$agentlist);
	}
}
