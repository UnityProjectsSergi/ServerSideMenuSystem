<?php

namespace App\Http\Controllers;
use App\Http\Resources\SlotResource;
use App\Models\SlotModel;
use Illuminate\Http\Request;

class SlotMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new SlotResource(SlotModel::find(1));
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
     * @param  \App\SlotM  $slotM
     * @return \Illuminate\Http\Response
     */
    public function show($slotM)
    {

        return new SlotResource(SlotModel::find($slotM));
    }
    public function show2( $slotM)
    {
        return new SlotResource(SlotModel::find($slotM));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SlotM  $slotM
     * @return \Illuminate\Http\Response
     */
    public function edit(SlotM $slotM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SlotM  $slotM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SlotM $slotM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SlotM  $slotM
     * @return \Illuminate\Http\Response
     */
    public function destroy(SlotM $slotM)
    {
        //
    }
}
