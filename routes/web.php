<?php

use App\Http\Controllers\DayController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StopController;
use App\Http\Controllers\TripController;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return Inertia::render('HomePage', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);

    if (Auth::user()) return to_route('trips.index');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rotte dei Trips
    Route::resource('trips', TripController::class)->except('store', 'update');
    Route::post('/trips', [TripController::class, 'store'])->middleware([HandlePrecognitiveRequests::class])->name('trips.store');
    Route::put('/trips/{trip}', [TripController::class, 'update'])->middleware([HandlePrecognitiveRequests::class])->name('trips.update');

    //Rotte dei Days
    Route::patch('/days/{day}', [DayController::class, 'modify'])->name('days.modify');
});


//Rotte dei Days
Route::resource('days', DayController::class)->except('update');


//Rotte delle Stops
Route::resource('stops', StopController::class)->except('store', 'update');
Route::post('/stops', [StopController::class, 'store'])->middleware([HandlePrecognitiveRequests::class])->name('stops.store');
Route::put('/stops/{stop}', [StopController::class, 'update'])->middleware([HandlePrecognitiveRequests::class])->name('stops.update');
Route::patch('/stops/{stop}', [StopController::class, 'toggleStatus'])->middleware([HandlePrecognitiveRequests::class])->name('stops.toggleStatus');





require __DIR__ . '/auth.php';
