<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Evento extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    //protected $fillable = ['Codigo', 'Nombre', 'Foto', 'Descripcion', 'FechaInicio', 'FechaFinalizacion', 'Lugar', 'Geolocalizacion', 'LocalidadID'];

    public function localidad() {
        return $this->belongsTo(Localidad::class, 'LocalidadID');
    }
}
