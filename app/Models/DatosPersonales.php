<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    protected $table = "datos_personales";
    protected $fillable = ['nombre', 'apellido', 'iddoctype', 'iddocnum'];
    protected $guarded = ['id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuarios');
    }
}
