<?php

namespace App\Http\Controllers;

use App\Models\Prexc;
use Illuminate\Http\Request;

class PrexcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prexcs = Prexc::where('level', 0)->with('children.children')->get();

        return view('prexcs.index', compact('prexcs'));
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
     * @param  \App\Models\Prexc  $prexc
     * @return \Illuminate\Http\Response
     */
    public function show(Prexc $prexc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prexc  $prexc
     * @return \Illuminate\Http\Response
     */
    public function edit(Prexc $prexc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prexc  $prexc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prexc $prexc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prexc  $prexc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prexc $prexc)
    {
        //
    }
}
