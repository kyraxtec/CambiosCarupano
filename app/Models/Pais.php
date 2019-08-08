<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table ="paises";


    protected $fillable = ['nombre', 'bandera', 'moneda'];
    protected $guarded = ['id'];

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'paises');
    }
}
