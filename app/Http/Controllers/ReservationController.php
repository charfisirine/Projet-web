<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
public function index()
{
    $reservations = Reservation::with('hotels','chambres')->get();
    return $reservations;
}

public function store(Request $request)
{
    $reservation = new Reservation([
    'nomclient' => $request->input('nomclient'),
    'date_debut' => $request->input('date_debut'),
    'date_fin' => $request->input('date_fin'),
    'client' => $request->input('client'),
    'nombre_personnes' => $request->input('nombre_personnes'),
    'chambreID' => $request->input('chambreID'),
    'hotelID' => $request->input('hotelID'),

    ]);
    $reservation->save();
    return response()->json($reservation,201);
}
public function show($id)
{
    $reservation = Reservation::find($id);
    return response()->json($reservation);
}

public function update(Request $request, $id)
{
    $reservation = Reservation::find($id);
    $reservation->update($request->all());
    return response()->json($reservation,200);
}

public function destroy($id)
{
    $reservation = Reservation::find($id);
    $reservation->delete();
    return response()->json('Reservation supprimée !');
}

public function showReservationByCAT($idres)
{
    $reservations = Reservation::where('chambreID', $idres)
                                ->orWhere('hotelID', $idres)
                                ->with('chambres', 'hotels')
                                ->get();

    return response()->json($reservations);
}

}