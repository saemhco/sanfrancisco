<?php

namespace App\Http\Controllers\modulos\activo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Activo;
use App\Capa;
use DB;

class activoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activos=Activo::get();
        return view('modulos.activos.identificacion.index', compact('activos'));
    }

    public function seguimiento()
    {
        return view('modulos.activos.seguimientos.index');
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
        $activo=Activo::find($id);
        $capas=Capa::select(DB::raw('CONCAT(capa," - ",categoria) AS nombre'),'id')->pluck('nombre','id');

        return view('modulos.activos.identificacion.editar', compact('activo','capas'));
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
        $activo=Activo::find($id);
        $input = $request->all();
        $activo->fill($input)->save();

        return redirect()->route('act.reg.index')->with('verde','Se actualizó correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Activo::destroy($id);
    }
}
