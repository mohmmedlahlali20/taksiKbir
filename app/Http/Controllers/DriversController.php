<?php

namespace App\Http\Controllers;

use App\Http\Requests\DriversRequest;
use App\Models\drivers;
use App\Models\routes;
use App\Models\User;
use App\Models\taxis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $driver = drivers::where('user_id', auth()->id())->first();
        $user = auth()->user();
        $taxi = $driver ? $driver->taxi : null;
        
        return view('chauffeur.Drivers', compact('driver', 'user', 'taxi' ));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = routes::all();
        return view('chauffeur.create' , compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(DriversRequest $request)
    {
        $validatedData = $request->validated();

        $user_id = auth()->id();

        $driver = drivers::where('user_id', $user_id)->first();

        if ($driver) {
            $driver->update([
                'description' => $validatedData['description'],

            ]);
        } else {
            $driver = drivers::create([
                
                'route_id' => $request->route_id,
                'description' => $validatedData['description'],
                'start_city' => $validatedData['start_city'],
                'end_city' => $validatedData['end_city'],
            ]);
        }

        $driver->taxi()->updateOrCreate(
            ['drivers_id' => $driver->id],
            [
                'plate_number' => $validatedData['plate_number'],
                'vehicle_type' => $validatedData['vehicle_type'],
                'status' => $validatedData['status'],
                'payment_method' => $validatedData['payment_method'],
            ]
        );

        // Rediriger avec un message de succès
        return redirect()->route('chauffeur.create')->with('success', 'Profil du conducteur créé avec succès!');
    }



    /**
     * Display the specified resource.
     */


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
