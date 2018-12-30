<?php

namespace App\Http\Controllers\modulos\amenaza;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Amenaza;
use DB;

class amenazaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amenazas=Amenaza::get();
        $array_amenazas=$this->amenazas();
        return view('modulos.amenazas.index', compact('amenazas','array_amenazas'));
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
        $amenaza=Amenaza::find($id);$array_amenazas=$this->amenazas();
        return view('modulos.amenazas.editar', compact('amenaza','array_amenazas'));
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
        $amenaza=Amenaza::find($id);
        $input = $request->all();
        $amenaza->fill($input)->save();

        return redirect()->route('ame.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Amenaza::destroy($id);
    }
    public function amenazas(){
      return array( '1' =>'DESASTRES NATURALES [I]' ,
                            '2' =>'DE ORIGEN INDUSTRIAL [N]' ,
                            '3' =>'ERRORES Y FALLOS NO INTENCIONADOS [E]' ,
                            '4' =>'ATAQUES INTENCIONADOS [A]');

    }
}
