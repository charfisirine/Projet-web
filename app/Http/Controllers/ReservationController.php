<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
public function index()
{
    $reservations = Reservation::with('hotels')->get();
    return $reservations;
}

public function store(Request $request)
{
    $reservation = new Reservation([
    'hotelID' => $request->input('hotelID'),
    'type' => $request->input('type'),
    'nom' => $request->input('nom'),
    'prenom' => $request->input('prenom'),
    'email' => $request->input('email'),
    'numero_tel' => $request->input('numero_tel'),
    'date_debut' => $request->input('date_debut'),
    'date_fin' => $request->input('date_fin'),
    'nombre_personnes' => $request->input('nombre_personnes'),
    'message' => $request->input('message'),


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

// public function showReservationByCAT($idres)
// {
//     $reservations = Reservation::where('chambreID', $idres)
//                                 ->orWhere('hotelID', $idres)
//                                 ->with('chambres', 'hotels')
//                                 ->get();

//     return response()->json($reservations);
// }

}
