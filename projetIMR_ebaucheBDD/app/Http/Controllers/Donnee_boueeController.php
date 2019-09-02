<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donnee_bouee;

class Donnee_boueeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donnee_bouees = Donnee_bouee::all(); //variable utilisée dans donnee_bouees.index.blade.php

        return view('donnee_bouees.index', compact('donnee_bouees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donnee_bouees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_bouee'=>'required',
            'temperature'=>'required',
            'salinite'=>'required',
            'debit'=>'required',
            'valide'=>'required',
            'date_temps'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'batterie'=>'required'
        ]);

        $donnee_bouee = new Donnee_bouee([
            'id_bouee' => $request->get('id_bouee'),
            'temperature' => $request->get('temperature'),
            'salinite' => $request->get('salinite'),
            'debit' => $request->get('debit'),
            'valide' => $request->get('valide'),
            'date_temps' => $request->get('date_temps'),
            'latitude' => $request->get('latitude'),
            'longitude' => $request->get('longitude'),
            'batterie' => $request->get('batterie')
        ]);
        $donnee_bouee->save();
        return redirect('/donnee_bouees')->with('success', 'La donnée de bouée à été ajoutée !');
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
        $donnee_bouee = Donnee_bouee::find($id);
        return view('donnee_bouees.edit', compact('donnee_bouee'));
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
        $request->validate([
            'id_bouee'=>'required',
            'temperature'=>'required',
            'salinite'=>'required',
            'debit'=>'required',
            'valide'=>'required',
            'date_temps'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'batterie'=>'required'
        ]);

        $donnee_bouee = Donnee_bouee::find($id);
        $donnee_bouee->id_bouee = $request->get('id_bouee');
        $donnee_bouee->temperature = $request->get('temperature');
        $donnee_bouee->salinite = $request->get('salinite');
        $donnee_bouee->debit = $request->get('debit');
        $donnee_bouee->valide = $request->get('valide');
        $donnee_bouee->date_temps = $request->get('date_temps');
        $donnee_bouee->latitude = $request->get('latitude');
        $donnee_bouee->longitude = $request->get('longitude');
        $donnee_bouee->batterie = $request->get('batterie');
        $donnee_bouee->save();

        return redirect('/donnee_bouees')->with('success', 'La donnée de bouée à été mise à jour !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donnee_bouee = Donnee_bouee::find($id);
        $donnee_bouee->delete();

        return redirect('/donnee_bouees')->with('success', 'La donnée de bouée à été supprimée !');
    }
}
