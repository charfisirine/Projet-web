<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return $utilisateurs;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $utilisateurs = new Utilisateur([
        'nom' => $request->input('nom'),
        'email' => $request->input('email'),
        'cin' => $request->input('cin'),
        'ville' => $request->input('ville'),
        'numtelephone' => $request->input('numtelephone')
        ]);
        $utilisateurs->save();

        return response()->json($utilisateurs, 201);
        }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $utilisateurs = Utilisateur::find($id);
        return response()->json($utilisateurs);
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $utilisateurs = Utilisateur::find($id);
        $utilisateurs->update($request->all());
        return response()->json($utilisateurs, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $utilisateurs = Utilisateur::find($id);
        $utilisateurs->delete();
        return response()->json('Utilisateur supprimée !');
    }
}
