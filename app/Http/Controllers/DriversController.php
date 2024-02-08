<?php

namespace App\Http\Controllers;

use App\Models\drivers;
use Illuminate\Http\Request;


class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Drivers = drivers::orderBy('created_at', 'ASC')->paginate(10); 
        return view('chauffeur.Drivers', compact('Drivers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
