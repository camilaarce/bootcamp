<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Models\Pais;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Start() {
        $provincias = Provincia::get();
        return view('provincias', compact('provincias'));
    }
    
    public function index()
    {
        $provincias = Provincia::all();
        return view('provincia.index')->with('provincias', $provincias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Pais::all();
        return view('provincia.create')->with('paises', $paises);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provincias = new Provincia();
        $provincias->Codigo = $request->get('codigo');
        $provincias->Descripcion = $request->get('descripcion');
        $provincias->PaisID = $request->get('paisid');
    
        $provincias->save();

        return redirect('/provincias');
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
        $provincia = Provincia::find($id);
        $paises = Pais::all();
        return view('provincia.edit')->with('provincia', $provincia)->with('paises', $paises);
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
        $provincias = request()->except(['_token','_method']);
        Provincia::where('id', '=', $id)->update($provincias);
        
        return redirect('/provincias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provincia = Provincia::find($id);
        $provincia->delete();
        return redirect('/provincias');
    }
}