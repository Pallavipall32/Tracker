<?php

namespace App\Http\Controllers;

use App\Models\Manageasset;
use Illuminate\Http\Request;

class ManageassetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->validate([
            
            'assetname' => 'required',
            'assettype' => 'required',
            'assetcode' => 'required',
               // 'image' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manageasset  $manageasset
     * @return \Illuminate\Http\Response
     */
    public function show(Manageasset $manageasset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manageasset  $manageasset
     * @return \Illuminate\Http\Response
     */
    public function edit(Manageasset $manageasset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manageasset  $manageasset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manageasset $manageasset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manageasset  $manageasset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manageasset $manageasset)
    {
        //
    }
}
