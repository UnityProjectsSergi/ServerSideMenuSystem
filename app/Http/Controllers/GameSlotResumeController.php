<?php

namespace App\Http\Controllers;
use 
use App\Resources\GameSlotResume;
use Illuminate\Http\Request;

class GameSlotResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new GameSlotResume(SlotModel::find(1));
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
     * @param  \App\GameSlotResume  $gameSlotResume
     * @return \Illuminate\Http\Response
     */
    public function show(GameSlotResume $gameSlotResume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GameSlotResume  $gameSlotResume
     * @return \Illuminate\Http\Response
     */
    public function edit(GameSlotResume $gameSlotResume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GameSlotResume  $gameSlotResume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GameSlotResume $gameSlotResume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GameSlotResume  $gameSlotResume
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameSlotResume $gameSlotResume)
    {
        //
    }
}
