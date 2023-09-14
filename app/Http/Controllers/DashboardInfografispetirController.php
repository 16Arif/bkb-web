<?php

namespace App\Http\Controllers;

use App\Models\Infografispetir;
use Illuminate\Http\Request;

class DashboardInfografispetirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.infografispetir.index', [
            'infografispetir' => Infografispetir::all()
        ]);
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
     * @param  \App\Models\Infografispetir  $infografispetir
     * @return \Illuminate\Http\Response
     */
    public function show(Infografispetir $infografispetir)
    {
        return $infografispetir;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infografispetir  $infografispetir
     * @return \Illuminate\Http\Response
     */
    public function edit(Infografispetir $infografispetir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Infografispetir  $infografispetir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infografispetir $infografispetir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infografispetir  $infografispetir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infografispetir $infografispetir)
    {
        //
    }
}
