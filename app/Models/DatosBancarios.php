<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosBancarios extends Model
{
    protected $table = "datos_bancarios";
    protected $fillable = ['usuario', 'banco', 'tcuenta', 'cuenta'];
    protected $guarded = ['id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuarios');
    }
    public function banco()
    {
        return $this->belongsTo(Banco::class, 'bancos');
    }
}
