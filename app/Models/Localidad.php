<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Localidad extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    //protected $fillable = ['Codigo', 'Descripcion', 'CodigoPostal', 'CodigoArea', 'ProvinciaID'];


    public function eventos() {
        return $this->hasMany(Evento::class, 'LocalidadID');
    }

    public function provincia() {
        return $this->belongsTo(Provincia::class, 'ProvinciaID');
    }
}
