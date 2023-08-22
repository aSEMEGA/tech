<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::latest()->paginate(4); 
        return view('reservations.index',compact('reservation')) 
        ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'sexe'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',
            'compagnie'=>'required',
            'dateDepart'=>'required',
            'heureDepart'=>'required',
            'source'=>'required',
            'destination'=>'required',
            'montantBillet'=>'required',
            'dateReservation'=>'required',
        ]);
        Reservation::create($request->all()); 
        return redirect()->route('reservation.index') 
        ->with('success','Billet reserve avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return view('reservations.show',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('reservations.edit',compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'sexe'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',
            'compagnie'=>'required',
            'dateDepart'=>'required',
            'heureDepart'=>'required',
            'source'=>'required',
            'destination'=>'required',
            'montantBillet'=>'required',
            'dateReservation'=>'required',
        ]);
        $reservation->update($request->all()); 
        return redirect()->route('reservation.index') 
        ->with('success','Billet mise a jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete(); 
        return redirect()->route('reservation.index') 
        ->with('success','Article supprimé avec succès');
    }
}
