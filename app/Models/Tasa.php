<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasa extends Model
{
    protected $table = "tasas";
    protected $fillable = ['pais', 'moneda', 'tasa'];
    protected $guarded = ['id'];

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'paises');
    }

}
