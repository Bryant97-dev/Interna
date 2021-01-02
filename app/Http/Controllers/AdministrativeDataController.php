<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdministrativeDataRequest;
use App\Http\Requests\UpdateAdministrativeDataRequest;
use App\Models\AdministrativeData;
use Illuminate\Http\Request;

class AdministrativeDataController extends Controller
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
    public function store(StoreAdministrativeDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdministrativeData  $administrativeData
     * @return \Illuminate\Http\Response
     */
    public function show(AdministrativeData $administrativeData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdministrativeData  $administrativeData
     * @return \Illuminate\Http\Response
     */
    public function edit(AdministrativeData $administrativeData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdministrativeData  $administrativeData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdministrativeDataRequest $request, AdministrativeData $administrativeData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdministrativeData  $administrativeData
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdministrativeData $administrativeData)
    {
        //
    }
}
