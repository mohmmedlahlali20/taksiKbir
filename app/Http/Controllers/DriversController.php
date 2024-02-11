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
        // return view("chauffeur.Drivers");
        $driver = drivers::where('user_id', auth()->id())->first();
        $user = auth()->user();
        $cities = $driver ? $driver->cities : null;
        $taxi = $driver ? $driver->taxi : null;
        
        
        return view('chauffeur.Drivers', compact('driver', 'user', 'taxi' , 'cities'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = routes::all();
        // dd($cities );
        $statuses = taxis::pluck('status')->unique(); 
        // dd( $statuses);
        return view('chauffeur.create', compact('cities' , 'statuses'));
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
            $driver->update([]);
        } else {
            $driver = drivers::create([
                'user_id' => $user_id,
                'route_id' => $validatedData['Route'],
            ]);
        }

        if ($driver) {
            $imagePath = null; // Défaut à null si aucune image n'est téléchargée
            // Stocker l'image dans le système de fichiers
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('drivers', 'public');
            }

            $driver->taxi()->updateOrCreate(
                ['drivers_id' => $driver->id],
                [
                    'plate_number' => $validatedData['plate_number'],
                    'vehicle_type' => $validatedData['vehicle_type'],
                    'status' => $validatedData['status'], 
                    'payment_method' => $validatedData['payment_method'],
                    'image' => $imagePath,
                ]
            );
        }

        // Rediriger avec un message de succès
        return redirect()->route('chauffeur.drivers')->with('success', 'Profil du conducteur créé avec succès!');
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
