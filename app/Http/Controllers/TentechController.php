<?php

namespace App\Http\Controllers;

use App\Tentech;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class TentechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         abort_if(Gate::denies('tentech_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
       return view('tentech');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tentech  $tentech
     * @return \Illuminate\Http\Response
     */
    public function show(Tentech $tentech)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tentech  $tentech
     * @return \Illuminate\Http\Response
     */
    public function edit(Tentech $tentech)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tentech  $tentech
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tentech $tentech)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tentech  $tentech
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tentech $tentech)
    {
        //
    }
}
