<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provincia extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    //protected $fillable = ['Codigo', 'Descripcion', 'PaisID'];

    public function localidades() {
        return $this->hasMany(Localidad::class, 'ProvinciaID');
    }

    public function pais() {
        return $this->belongsTo(Pais::class, 'PaisID');
    }
}
