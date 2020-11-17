<?php
Route::get('/', function(){
return view('welcome');
});
//=====All Agent============
//Route::get('/allagentlist','AllAgentList@allagentlist');
//==========SubAgent==========
//Route::get('/subagentlist','subagentController@subagentlist');
Route::get('/agentlatestform','subagentController@agentlatestform');
Route::post('/agentlatestprocess','subagentController@agentlatestprocess');
//Route::get('/agentreceives','subagentController@agentreceives');
Route::get('/member','subagentController@member');
Route::get('/sendings','subagentController@sendings');
//Route::get('/subagentreceivesform','subagentController@subagentreceivesform');
//Route::get('/subagentrecievesprocess','subagentController@subagentreceiveprocess');
Route::get('/accountsprocess','subagentController@accountsprocess');
//Route::get('/accountshow','subagentController@accounts');

//Sending form
Route::get('/sendingsform2','subagentController@sendingform');
Route::get('/sendingformprocess','subagentController@sendingformprocess');

//=========Only Division==============
//Route::get('/divreceivesform','Division@divreceivesform');
//Route::get('/divrecievesprocess','Division@divreceiveprocess');
//Route::get('/divagentrecievelist','Division@divreceives');
//Route::get('/divagentlist','Division@divagentlist');
//==========End Division===============

//==========Only District=============
//Route::get('/distreceivesform','District@districtrecv');
//Route::get('/distreceivesform','District@distform');
//Route::post('/distagentprocess','District@distprocess');
//Route::get('/distagentform','District@distform');
//Route::get('/distreceivelist','District@distreceivelist');
//Route::get('/distrecievesprocess','District@districtrecv');
//Route::get('/distagentlist','District@distagentlist');
//====End District===========

//========only Marchent========
//Route::get('/marchentform','Marchent@marchentform');
//Route::post('/marchentprocess','Marchent@marchentprocess');
//Route::get('/marchentlist','Marchent@marchentlist');
//=====End Marchent=============

//==========Others============
Route::get('/branch','Others@branch');
Route::get('/comments','Others@comments');
//=========End Others=============

Route::redirect('/home', '/admin');
Auth::routes(['register' => true]);

//=========TenTech=============
Route::resource('tentech','TentechController');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
//=========Only Division==============
	Route::get('/divreceivesform','DivisionController@divreceivesform')->name('divreceivesform');
	Route::get('/divrecievesprocess','DivisionController@divreceiveprocess')->name('divrecievesprocess');;
	Route::get('/divagentrecievelist','DivisionController@divreceives')->name('divagentrecievelist');
	Route::get('/divagentlist','DivisionController@divagentlist')->name('divagentlist');
	//==========Only District=============
	Route::get('/distreceivesform','DistrictController@districtrecv')->name('distreceivesform');
	Route::get('/distreceivesform','DistrictController@distform')->name('distreceivesform');
	Route::post('/distagentprocess','DistrictController@distprocess')->name('distagentprocess');
	Route::get('/distagentform','DistrictController@distform')->name('distagentform');
	Route::get('/distreceivelist','DistrictController@distreceivelist')->name('distreceivelist');
	Route::get('/distrecievesprocess','DistrictController@districtrecv')->name('distrecievesprocess');
	Route::get('/distagentlist','DistrictController@distagentlist')->name('distagentlist');
//====End District===========
//==========SubAgent==========
	Route::get('/subagentlist','SubagentController@subagentlist')->name('subagentlist');
	Route::get('/subagentreceivesform','SubagentController@subagentreceivesform')->name('subagentreceivesform');
	Route::get('/subagentrecievesprocess','SubagentController@subagentreceiveprocess')->name('subagentrecievesprocess');
	Route::get('/agentreceives','SubagentController@agentreceives')->name('agentreceives');
	//=====All Agent============
	Route::get('/allagentlist','AllagentController@allagentlist')->name('allagentlist');
	//Sending form
	Route::get('/sendingsform2','SendingController@sendingsform2')->name('sendingsform2');
	Route::get('/sendingformprocess','SendingController@sendingformprocess')->name('sendingformprocess');
	//Account show
	Route::get('/accountshow','AccountController@accounts')->name('accountshow');
	//========only Marchent========
	Route::get('/marchentform','MarchentController@marchentform')->name('marchentform');
	Route::post('/marchentprocess','MarchentController@marchentprocess')->name('marchentprocess');
	Route::get('/marchentlist','MarchentController@marchentlist')->name('marchentlist');
	// Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    Route::resource('tentech','TentechController');
});
