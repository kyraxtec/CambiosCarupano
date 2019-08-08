<?php

namespace  App\Models;


use Illuminate\Foundation\Auth\User as Autenticable;
use Illuminate\Support\Facades\Session;

class Usuario extends Autenticable
{
    protected $remember_token = false;
    protected $table = "usuarios";
    protected $fillable = ['email', 'password'];
    protected $guarded = ['id'];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol');
    }

    public function setSession($rol)
    {
        
        Session::put(
            [
                'rol' => $rol[0]['rol'],
                'rol_id' => $this->rol,
                'idUsuario' => $this->id,
                'pais' => $this->pais,
                'emailUsuario' => $this->email,
            ]
        );
    }
}
