<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tasa;
use App\Models\Pais;
use App\Models\Moneda;
use Illuminate\Support\Facades\DB;

class TasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tasas = DB::table('tasas')->select('tasas.id as idTasa', 'tasas.tasa as tasa', 'paises.nombre as pais', 'paises.moneda as pmoneda',
                                                 'monedas.moneda as moneda')
                                    ->join('paises', 'tasas.pais', 'paises.id')
                                    ->join('monedas', 'tasas.moneda', 'monedas.id')
                                     ->orderBy('paises.id', 'ASC')->paginate(5);
        //dd($tasas);
        return view('admin/tasas/index')->with('tasas', $tasas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Pais::pluck('nombre', 'id');
        $monedas = Moneda::pluck('moneda', 'id');
        return view('admin/tasas/create', compact('paises', 'monedas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Tasas = new Tasa($request->all());
        $Tasas->save();

        flash('Tasa registrada')->success();
        return redirect()->route('tasas.index');
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
        $tasa = Tasa::select('tasas.id as idTasa', 'tasas.tasa as tasa', 'paises.nombre as pais', 'monedas.moneda as moneda')
                            ->join('paises', 'tasas.pais', 'paises.id')
                            ->join('monedas', 'tasas.moneda', 'monedas.id')
                            ->where('tasas.id', $id)->get()->toArray();
                            //dd($tasa);
        return view('admin/tasas/edit')->with('tasa', $tasa);
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
        $tasa = Tasa::find($id);
        $tasa->tasa = $request->tasa;
        $tasa->save();

        flash('Tasa actualizada')->success();
        return redirect()->route('tasas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $user = Tasa::find($id);
       $user->delete();

       flash('Tasa eliminada con éxito')->error();

       return redirect()->route('tasas.index');
    }
}
