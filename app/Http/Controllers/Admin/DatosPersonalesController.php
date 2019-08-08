<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DatosPersonales;
use Illuminate\Support\Facades\Session;

class DatosPersonalesController extends Controller
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
        $datosp = DatosPersonales::where('usuario', $id)->get()->toArray();
      
        return view('admin.usuarios.editarDatosPersonales')->with('datosp', $datosp);
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
        $datos = DatosPersonales::find($id);
        $datos->nombre = $request->nombre;
        $datos->apellido = $request->apellido;
        $datos->iddoctype = $request->iddoctype;
        $datos->iddocnum = $request->iddocnum;
        $datos->save();
        $datosp = DatosPersonales::where('usuario', session()->get('idUsuario'))->get()->toArray();
        Session::put(
           [
               'nombre' => $datosp[0]['nombre'],
               'apellido' => $datosp[0]['apellido'],
               'iddoctype' => $datosp[0]['iddoctype'],
               'iddocnum' => $datosp[0]['iddocnum']
           ]);
        flash('Datos actualizados exitosamente')->success();
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
