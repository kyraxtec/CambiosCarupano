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
        $datosp = DatosPersonales::where('usuario', $this->id)->get()->toArray();
        $datosd = Domicilio::select('domicilios.*', 'paises.nombre as paisd')->where('usuario', $this->id)->
                    join('paises', 'domicilios.pais', 'paises.id')->get()->toArray();
        Session::put(
            [
                'rol' => $rol[0]['rol'],
                'rol_id' => $this->rol,
                'idUsuario' => $this->id,
                'emailUsuario' => $this->email,

                'nombre' => $datosp[0]['nombre'],
                'apellido' => $datosp[0]['apellido'],
                'iddoctype' => $datosp[0]['iddoctype'],
                'iddocnum' => $datosp[0]['iddocnum'],

                'pais' => $datosd[0]['pais'],
                'idDom' => $datosd[0]['id'],
                'paisd' => $datosd[0]['paisd'],
                'ciudad' => $datosd[0]['ciudad'],
                'codigopl' => $datosd[0]['codigo_postal'],
                'direccion' => $datosd[0]['direccion']




            ]



        );
    }
}

