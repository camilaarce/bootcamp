<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class SearchController extends Controller
{
    public function eventos(Request $request){
        $term = $request->get('term');
        $querys = Evento::where('Nombre', 'LIKE', '%'.$term.'%')->get();
        $eventos = [];

        foreach ($querys as $query){
            $eventos[] = [
            'label' => $query->Nombre
        ];
        }
        return $eventos;
    }
}
