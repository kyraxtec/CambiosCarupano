<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pais;
use App\Models\Domicilio;
use Illuminate\Support\Facades\Session;

class DomicilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paises = Pais::pluck('nombre', 'id');
        return view('admin/usuarios/editarDomicilio')->with('paises', $paises);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dom = Domicilio::find($id);
        $dom->pais = $request->pais;
        $dom->ciudad = $request->ciudad;
        $dom->codigo_postal = $request->codigopl;
        $dom->direccion = $request->direccion;

        $dom->save();
        $datosd = Domicilio::select('domicilios.*', 'paises.nombre as paisd')->where('usuario', session()->get('idUsuario'))->
        join('paises', 'domicilios.pais', 'paises.id')->get()->toArray();
        Session::put(
            [
                'paisd' => $datosd[0]['paisd'],
                'pais' => $datosd[0]['pais'],
                'ciudad' => $datosd[0]['ciudad'],
                'codigopl' => $datosd[0]['codigo_postal'],
                'direccion' => $datosd[0]['direccion']
            ]);

        flash('Domicilio actualizado')->success();
        return redirect()->route('perfil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
