<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTripRequest;
use App\Http\Requests\UpdateTripRequest;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::all();

        return inertia('Trips/IndexPage', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Trips/CreatePage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTripRequest $request)
    {
        $data = $request->validated();
        $new_trip = new Trip();
        $new_trip->fill($data);


        $new_trip->user_id = 1; // TODO PROVVISORIO

        $new_trip->save();
        $new_trip->generateDays($new_trip->departure_date, $new_trip->return_date);

        return to_route('trips.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        return inertia('Trips/ShowPage', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        return inertia('Trips/EditPage', compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTripRequest $request, Trip $trip)
    {
        $data = $request->validated();
        $trip->update($data);

        //TODO
        /*
        Controllare la differenza dei giorni tra vecchia data e nuova data.
        Se il viaggio viene accorciato devono essere cancellati i giorni con relative tappe che non rientrano più nel range
        Altrimenti aggiungere i giorni mancanti senza duplicare quelli già esistenti
        */
        return to_route('trips.show', $trip);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        $trip->delete();
        return to_route('trips.index');
    }
}
