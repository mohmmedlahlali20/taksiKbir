<?php

namespace App\Http\Controllers;

use App\Models\routes;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routes = routes::all();
    //  dd($routes);
        return view('chauffeur.create', compact('routes'));
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
    public function show(routes $routes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(routes $routes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, routes $routes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(routes $routes)
    {
        //
    }
}
