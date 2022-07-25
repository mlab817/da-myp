<?php

namespace App\Http\Controllers;

use App\Models\OperatingUnit;
use Illuminate\Http\Request;

class OperatingUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operating_units = OperatingUnit::paginate();

        return view('operating-units.index', compact('operating_units'));
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
     * @param  \App\Models\OperatingUnit  $operatingUnit
     * @return \Illuminate\Http\Response
     */
    public function show(OperatingUnit $operatingUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OperatingUnit  $operatingUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(OperatingUnit $operatingUnit)
    {
        return view('operating-units.edit')
            ->with(['operating_unit' => $operatingUnit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OperatingUnit  $operatingUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OperatingUnit $operatingUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OperatingUnit  $operatingUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(OperatingUnit $operatingUnit)
    {
        //
    }
}
