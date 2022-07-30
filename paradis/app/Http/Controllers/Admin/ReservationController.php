<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bungalow;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $contrats=Contrats::with('Pigistes')->get();
        // $bungalows = Reservation::with('bungalows')->get();
        // $users = Reservation::with('users')->get();
        // $reservations = Reservation::with('bungalows')->get();
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }

    public function showpagereservation($id)
    {

        $reserves = Bungalow::find($id);
        $reservations = User::all();
        // $users = auth()->id();
        $users = Auth::user();
        $min_date = Carbon::today();
        return view('paradis.bungalow', compact('reserves', 'users', 'reservations', 'min_date'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationStoreRequest $request)
    {
        Reservation::create([
            'user_id' => $request->user_id,
            'bungalow_id' => $request->bungalow_id,
            'debut' => $request->debut,
            'fin' => $request->fin,
        ]);

        return to_route('catalogue');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return to_route('admin.reservations.index');
    }
}
