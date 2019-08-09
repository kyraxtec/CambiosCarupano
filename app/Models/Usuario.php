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
        $usd= Usuario::where('id', $this->id)->get()->toArray();
        $datosp = DatosPersonales::where('usuario', $this->id)->get()->toArray();
        $datosd = Domicilio::select('domicilios.*', 'paises.nombre as paisd')->where('usuario', $this->id)->
                    join('paises', 'domicilios.pais', 'paises.id')->get()->toArray();
        Session::put(
            [
                'rol' => $rol[0]['rol'],
                'rol_id' => $this->rol,
                'idUsuario' => $this->id,
                'emailUsuario' => $this->email,
            ]);
            if ($datosp) {
               
                Session::put([
                    'idDat' =>  $datosp[0]['id'],
                    'nombre' => $datosp[0]['nombre'],
                    'apellido' => $datosp[0]['apellido'],
                    'iddoctype' => $datosp[0]['iddoctype'],
                    'iddocnum' => $datosp[0]['iddocnum'],                    
                ]);
            }else {

                $datp = new DatosPersonales($usd);
                $datp->usuario = $usd[0]['id'];
                $datp->save();

                $datosp = DatosPersonales::where('usuario', $this->id)->get()->toArray();

                Session::put([

                    'idDat' =>  $datosp[0]['id'],
                    'nombre' => 'no especifica',
                    'apellido' => 'no especifica',
                    'iddoctype' => 'no especifica',
                    'iddocnum' => 'no especifica',                    
                ]);
            }

            if ($datosd) {
               
                Session::put([

                    'pais' => $datosd[0]['pais'],
                    'idDom' => $datosd[0]['id'],
                    'paisd' => $datosd[0]['paisd'],
                    'ciudad' => $datosd[0]['ciudad'],
                    'codigopl' => $datosd[0]['codigo_postal'],
                    'direccion' => $datosd[0]['direccion']                   
                ]);
            }else {

                $datd = new Domicilio($usd);
                $datd->usuario = $usd[0]['id'];
                $datd->save();

                $datosd = Domicilio::where('usuario', $usd[0]['id'])->get()->toArray();

                Session::put([

                    'pais' => 'no especifica',
                    'idDom' => $datosd[0]['id'],
                    'paisd' => 'no especifica',
                    'ciudad' => 'no especifica',
                    'codigopl' => 'no especifica',
                    'direccion' => 'no especifica'                   
                ]);
                
            }

    }
}

