<?php

namespace App\Http\Controllers;

use App\Models\reservationn;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ReservationnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(now());
        $reservation = reservationn::where('users_id', Auth::id())->where('cancelled',false)->get();
        
        
    //    dd( $reservation);
      return view('reservation.index',compact('reservation'));
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
    reservationn::create([
        'horaire_id' => $request->input('horaire_id'),
        'users_id' => Auth::id(),
    ]);

    return redirect(route('Reservation.index'));
}


    /**
     * Display the specified resource.
     */
    public function show(reservationn $reservationn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservationn $reservationn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservationn $Reservation)
    {
       

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservationn $Reservation)
    {
        
        
       $Reservation->delete();
        return redirect(route('Reservation.index'));

    }
}
