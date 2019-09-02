<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bouee;

class BoueeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bouees = Bouee::all(); //variable utilisée dans bouees.index.blade.php

        return view('bouees.index', compact('bouees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bouees.create');
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
            'numero'=>'required',
            //'description'=>'required', //osef de la description
            'date_debut'=>'required',
            'latitude'=>'required',
            'longitude'=>'required'
        ]);

        $bouee = new Bouee([
            'numero' => $request->get('numero'),
            'description' => $request->get('description'),
            'date_debut' => $request->get('date_debut'),
            'latitude' => $request->get('latitude'),
            'longitude' => $request->get('longitude')
        ]);
        $bouee->save();
        return redirect('/bouees')->with('success', 'La bouée a été ajoutée !');
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
        $bouee = Bouee::find($id);
        return view('bouees.edit', compact('bouee')); //attention a bien nommer la varname !!
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
            'numero'=>'required',
            //'description'=>'required', //osef de la description
            'date_debut'=>'required',
            'latitude'=>'required',
            'longitude'=>'required'
        ]);

        $bouee = Bouee::find($id);
        $bouee->numero = $request->get('numero');
        $bouee->description = $request->get('description');
        $bouee->date_debut = $request->get('date_debut');
        $bouee->latitude = $request->get('latitude');
        $bouee->longitude = $request->get('longitude');
        $bouee->save();

        return redirect('/bouees')->with('success', 'La bouée a été mise à jour !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bouee = Bouee::find($id);
        $bouee->delete();

        return redirect('/bouees')->with('success', 'La bouée a été supprimée !');
    }
}
