<?php

namespace App\Http\Controllers;

use App\Http\Requests\DriversRequest;
use App\Models\drivers;
use App\Models\taxis;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $driver = drivers::find(auth()->id());
         return view('chauffeur.Drivers' , compact('driver'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('chauffeur.Drivers' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DriversRequest $request)
    {
        

   
    }

    /**
     * Display the specified resource.
     */
    public function show(drivers $drivers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(drivers $drivers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, drivers $drivers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(drivers $drivers)
    {
        //
    }
}
