<?php

namespace App\Http\Controllers;

use App\Models\DataTransaksi;
use App\Http\Requests\StoreDataTransaksiRequest;
use App\Http\Requests\UpdateDataTransaksiRequest;

class DataTransaksiController extends Controller
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
     * @param  \App\Http\Requests\StoreDataTransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataTransaksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataTransaksi  $dataTransaksi
     * @return \Illuminate\Http\Response
     */
    public function show(DataTransaksi $dataTransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataTransaksi  $dataTransaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(DataTransaksi $dataTransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataTransaksiRequest  $request
     * @param  \App\Models\DataTransaksi  $dataTransaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataTransaksiRequest $request, DataTransaksi $dataTransaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataTransaksi  $dataTransaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataTransaksi $dataTransaksi)
    {
        //
    }
}
