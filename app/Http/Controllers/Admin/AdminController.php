<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tasa;
use App\Models\Pais;
use App\Models\PerfilUsuario;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datosp = PerfilUsuario::where('usuario', session()->get('idUsuario'))->get()->toArray();

         Session::put(
            [
                'nombre' => $datosp[0]['nombre'],
                'apellido' => $datosp[0]['apellido'],
                'fechanac' => $datosp[0]['fechanac'],
                'iddoctype' => $datosp[0]['iddoctype'],
                'iddocnum' => $datosp[0]['iddocnum']
            ]);

         $tasas = Tasa::join('paises', 'tasas.pais', 'paises.id' )
                     ->join('monedas', 'tasas.moneda', 'monedas.id')
                     ->whereIn('tasas.pais', [session()->get('pais'), 6])->get()->toArray();
        //dd($tasas);
        return view('/admin/admin/inicio', compact('datosp', 'tasas'));
    }

}
