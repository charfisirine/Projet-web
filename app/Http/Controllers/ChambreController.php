<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Http\Request;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chambres = Chambre::all();
        return $chambres;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $chambre = new Chambre([
        'type' => $request->input('type'),
        'Disponibilite' => $request->input('Disponibilite'),
        'descriptionchambre' => $request->input('descriptionchambre'),
        'prixnuit' => $request->input('prixnuit'),
        'numchambre' => $request->input('numchambre')
        ]);
        $chambre->save();

        return response()->json($chambre, 201);
        }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $chambre = Chambre::find($id);
        return response()->json($chambre);
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $chambre = Chambre::find($id);
        $chambre->update($request->all());
        return response()->json($chambre, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $chambre = Chambre::find($id);
        $chambre->delete();
        return response()->json('chambre supprimée !');
    }
}
