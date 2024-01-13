<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypechamSuiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TypechamSuites = TypechamSuite::all();
        return $TypechamSuites;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $TypechamSuite = new TypechamSuite([
            'type' => $request->input('type'), 
            'descriptionchambre' => $request->input('descriptionchambre'),
            'prixnuit' => $request->input('prixnuit'),
            'numchambre' => $request->input('numchambre'),
            'Disponibilite' => $request->input('Disponibilite'),
        ]);
        $TypechamSuite->save();
    
        return response()->json($TypechamSuite, 201);
    }
    

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $TypechamSuite = TypechamSuite::find($id);
        return response()->json($TypechamSuite);
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $TypechamSuite = TypechamSuite::find($id);
        $TypechamSuite->update($request->all());
        return response()->json($TypechamSuite, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $TypechamSuite = TypechamSuite::find($id);
        $TypechamSuite->delete();
        return response()->json('TypechamSuite supprimée !');
    }
}
