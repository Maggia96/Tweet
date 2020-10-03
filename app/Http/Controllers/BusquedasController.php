<?php

namespace App\Http\Controllers;

use App\Busquedas;
use Illuminate\Http\Request;

class BusquedasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //return $busquedas = Busquedas::all();
     return  $busquedas = Busquedas::orderBy('created_at', 'desc')->get();
         
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
        return $busqueda = Busquedas::create($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Busquedas  $busquedas
     * @return \Illuminate\Http\Response
     */
    public function show(Busquedas $busquedas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Busquedas  $busquedas
     * @return \Illuminate\Http\Response
     */
    public function edit(Busquedas $busquedas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Busquedas  $busquedas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Busquedas $busquedas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Busquedas  $busquedas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Busquedas $busquedas)
    {
        //
    }
}
