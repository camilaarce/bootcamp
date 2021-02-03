<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Models\Localidad;

class LocalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Start() {
        $localidades = Localidad::get();
        return view('localidades', compact('localidades'));
    }
    
    public function index()
    {
        $localidades = Localidad::all();
        return view('localidad.index')->with('localidades', $localidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provincias = Provincia::all();
        return view('localidad.create')->with('provincias', $provincias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $localidades = new Localidad();
        $localidades->Codigo = $request->get('codigo');
        $localidades->Descripcion = $request->get('descripcion');
        $localidades->CodigoPostal = $request->get('codigopostal');
        $localidades->CodigoArea = $request->get('codigoarea');
        $localidades->ProvinciaID = $request->get('provinciaid');
    
        $localidades->save();

        return redirect('/localidades');
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
        $localidad = Localidad::find($id);
        $provincias = Provincia::all();
        return view('localidad.edit')->with('localidad', $localidad)->with('provincias', $provincias);
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
        $localidades = request()->except(['_token','_method']);
        Localidad::where('id', '=', $id)->update($localidades);
        
        return redirect('/localidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $localidad = Localidad::find($id);
        $localidad->delete();
        return redirect('/localidades');
    }
}