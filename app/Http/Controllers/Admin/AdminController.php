<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tasa;
use App\Models\Pais;
use App\Models\PerfilUsuario;
use Illuminate\Support\Facades\Session;
use App\Models\DatosPersonales;
use App\Models\Domicilio;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


         $tasas = Tasa::join('paises', 'tasas.pais', 'paises.id' )
                     ->join('monedas', 'tasas.moneda', 'monedas.id')
                     ->whereIn('tasas.pais', [session()->get('pais'), 6])->get()->toArray();
        //dd($datosp);
        return view('/admin/admin/inicio', compact('tasas'));
    }

}
