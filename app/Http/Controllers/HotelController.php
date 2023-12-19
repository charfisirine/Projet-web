<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::all();
        return $hotels;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hotels = new Hotel([
        'nomhotel' => $request->input('nomhotel'),
        'numtelephone' => $request->input('numtelephone'),
        'adresse' => $request->input('adresse'),
        'description' => $request->input('description'),
        'prixnuit' => $request->input('prixnuit'),
        'imagehotel' => $request->input('imagehotel')
        ]);

        $hotels->save();
        
        return response()->json($hotels, 201);
        }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $hotels = Hotel::find($id);
        return response()->json($hotels);
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hotels = Hotel::find($id);
        $hotels->update($request->all());
        return response()->json($hotels, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hotels = Hotel::find($id);
        $hotels->delete();
        return response()->json('Hotel supprimée !');
    }
}
