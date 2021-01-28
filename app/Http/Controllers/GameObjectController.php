<?php

namespace App\Http\Controllers;
use App\Http\Resources\Resources\GameObjectResource;
use App\GameObject;
use Illuminate\Http\Request;

class GameObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GameObjectResource::collection(GameObject::all());
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
     * @param  \App\GameObject  $gameObject
     * @return \Illuminate\Http\Response
     */
    public function show(GameObject $gameObject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GameObject  $gameObject
     * @return \Illuminate\Http\Response
     */
    public function edit(GameObject $gameObject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GameObject  $gameObject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GameObject $gameObject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GameObject  $gameObject
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameObject $gameObject)
    {
        //
    }
}
