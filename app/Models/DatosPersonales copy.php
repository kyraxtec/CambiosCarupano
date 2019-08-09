<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    protected $table = "domicilios";
    protected $fillable = ['usuario', 'pais', 'ciudad', 'codigo_postal', 'direccion'];
    protected $guarded = ['id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuarios');
    }
    public function pais()
    {
        return $this->belongsTo(Pais::class, 'paises');
    }
}
