<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pais extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    //protected $fillable = ['Codigo', 'Descripcion'];
    
    public function provincias() {
        return $this->hasMany(Provincia::class, 'PaisID');
    }

}


