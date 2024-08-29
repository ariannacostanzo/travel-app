<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTripRequest;
use App\Http\Requests\UpdateTripRequest;
use App\Models\Day;
use App\Models\Trip;
use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recupero l'utente loggato
        $user = Auth::user();

        // Recupero i Trips dell'utente loggato
        $trips = Trip::whereUserId($user->id)->get();

        // Creo un array per i numeri di giorni dei trips
        $days = [];

        for ($i = 0; $i < count($trips); $i++) {

            $departure_date = Carbon::parse($trips[$i]->departure_date);
            $return_date = Carbon::parse($trips[$i]->return_date);

            $days[] = $trips[$i]->departure_date->diffInDays($trips[$i]->return_date) + 1;
        }

        return inertia('Trips/IndexPage', compact('trips', 'days', 'user'));
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


        $new_trip->user_id = Auth::id();

        $new_trip->save();
        $new_trip->generateDays($new_trip->departure_date, $new_trip->return_date);

        return to_route('trips.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {

        $days = Day::whereTripId($trip->id)->orderBy('date')->get();
        $stops = $trip->stops;

        return inertia('Trips/ShowPage', compact('trip', 'days', 'stops'));
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

        $trip->generateDays($data['departure_date'], $data['return_date'], true);

        $trip->update($data);

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
