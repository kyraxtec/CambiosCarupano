<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerfilUsuario extends Model
{
    protected $table = "datos_personales";


    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuarios');
    }
}
