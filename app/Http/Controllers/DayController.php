<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateDayRequest;
use App\Models\Day;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Day $day)
    {

        if ($day->trip->user_id !== Auth::id()) {
            abort(404);
        }
        $stops = $day->stops;
        return inertia('Days/ShowPage', compact('day', 'stops'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Day $day)
    {
        // $stops = $day->stops;
        if ($day->trip->user_id !== Auth::id()) {
            abort(404);
        }
        return inertia('Days/EditPage', compact('day'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDayRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function modify(UpdateDayRequest $request, Day $day)
    {

        if ($day->trip->user_id !== Auth::id()) {
            abort(404);
        }
        $data = $request->validated();
        $day->fill($data);
        $day->save();
        return back();
    }
}
