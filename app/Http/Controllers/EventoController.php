<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Localidad;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function Start() {
        $eventos = Evento::get();
        return view('eventos', compact('eventos'));
    }
    
    public function index()
    {
        $eventos = Evento::all();
        return view('evento.index')->with('eventos', $eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $localidades = Localidad::all();
        return view('evento.create')->with('localidades', $localidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eventos = new Evento();
        $eventos->Codigo = $request->get('codigo');
        $eventos->Nombre = $request->get('nombre');
        if($request->hasFile('foto')){
            $eventos['Foto'] = $request->file('foto')->store('uploads','public');
        }

        $eventos->Descripcion = $request->get('descripcion');
        $eventos->FechaInicio = $request->get('fechainicio');
        $eventos->FechaFinalizacion = $request->get('fechafinalizacion');
        $eventos->Lugar = $request->get('lugar');
        $eventos->Geolocalizacion = $request->get('geolocalizacion');
        $eventos->LocalidadID = $request->get('localidadid');
    
        $eventos->save();

        return redirect('/eventos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$evento = Evento::find($id);
        //return view('evento.show')->with('evento', $evento);
        echo $id;
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);
        $localidades = Localidad::all();
        return view('evento.edit')->with('evento', $evento)->with('localidades', $localidades);
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
        $eventos = request()->except(['_token','_method']);
        Evento::where('id', '=', $id)->update($eventos);
        
        return redirect('/eventos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect('/eventos');
    }
}