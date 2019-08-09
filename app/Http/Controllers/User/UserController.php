<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tasa;

class UserController extends Controller
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

        return view('/users/users/inicio', compact('tasas'));
    }


}
