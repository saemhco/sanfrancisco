<?php

namespace App\Http\Controllers\modulos\caracterizacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Caracterizacion;
use App\Activo;
use App\Amenaza;
class caracterizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activos=Activo::get();
        return view('modulos.caracterizacion.index', compact('activos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        $activos=Activo::pluck('nombre','id');
        $amenazas=Amenaza::all();
        $array_amenazas=$this->amenazas();
        return view('modulos.caracterizacion.nuevo', compact('activos','amenazas','array_amenazas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p= array_filter($request->get('probabilidad'),'strlen');
        $d= array_filter($request->get('D'),'strlen');
        $i= array_filter($request->get('I'),'strlen');
        $c= array_filter($request->get('C'),'strlen');
        $a= array_filter($request->get('A'),'strlen');
        $nr= array_filter($request->get('NR'),'strlen');
        
        foreach ($p as $key => $value) {$pp[]=$value;}
        foreach ($d as $key => $value) {$dd[]=$value;}
        foreach ($i as $key => $value) {$ii[]=$value;}
        foreach ($c as $key => $value) {$cc[]=$value;}
        foreach ($a as $key => $value) {$aa[]=$value;}
        foreach ($nr as $key => $value) {$nnrr[]=$value;}
        $pp[]=null;$dd[]=null;$ii[]=null;$cc[]=null;$aa[]=null;$nnrr[]=null;
        
        
        
        //Registramos nuevo
        foreach ($request->get('amenazas') as $key=> $value) {
             $caracterizacion=new Caracterizacion;
             $caracterizacion->amenaza_id=$value;
             $caracterizacion->activo_id=$request->get('activo_id');
             if(array_key_exists($key,$pp)){
                 $caracterizacion->probabilidad=$pp[$key];
             }
             $caracterizacion->dimension_D=$dd[$key];
            if(array_key_exists($key,$ii)){
                $caracterizacion->dimension_I=$ii[$key];
            }
            if(array_key_exists($key,$cc)){
             $caracterizacion->dimension_C=$cc[$key];
            }
            if(array_key_exists($key,$aa)){
             $caracterizacion->dimension_A=$aa[$key];
            }
            if(array_key_exists($key,$nnrr)){
             $caracterizacion->dimension_NR=$nnrr[$key];
            }
             $caracterizacion->save();
        };
        return redirect()->route('caract.index')->with('verde','Se registró correctamente');
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caracterizacion=Caracterizacion::where('activo_id',$id)->get();
        $activo=Activo::find($id);
        $promedio=$this->promedio($id);
        return view('modulos.caracterizacion.modal_vermas', compact('caracterizacion','activo','promedio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caracterizacion=Caracterizacion::where('activo_id',$id)->get();
        $activo=Activo::find($id);
        $amenazas=Amenaza::all();
        $caracterizacion=Caracterizacion::find($id);
        $array_amenazas=$this->amenazas();
        return view('modulos.caracterizacion.editar', compact('caracterizacion','activo','amenazas','array_amenazas'));
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
        $p= array_filter($request->get('probabilidad'),'strlen');
        $d= array_filter($request->get('D'),'strlen');
        $i= array_filter($request->get('I'),'strlen');
        $c= array_filter($request->get('C'),'strlen');
        $a= array_filter($request->get('A'),'strlen');
        $nr= array_filter($request->get('NR'),'strlen');
        
        foreach ($p as $key => $value) {$pp[]=$value;}
        foreach ($d as $key => $value) {$dd[]=$value;}
        foreach ($i as $key => $value) {$ii[]=$value;}
        foreach ($c as $key => $value) {$cc[]=$value;}
        foreach ($a as $key => $value) {$aa[]=$value;}
        foreach ($nr as $key => $value) {$nnrr[]=$value;}
        $pp[]=null;$dd[]=null;$ii[]=null;$cc[]=null;$aa[]=null;$nnrr[]=null;
        
        //Eliminamos (solo en editar)
        $px_eliminar=Caracterizacion::where('activo_id',$id)->get();
        foreach ($px_eliminar as $e) {
            Caracterizacion::destroy($e->id);
        }
        
        foreach ($request->get('D') as $key => $value) {
            
        }
        //Registramos nuevo
        foreach ($request->get('amenazas') as $key=> $value) {
             $caracterizacion=new Caracterizacion;
             $caracterizacion->amenaza_id=$value;
             $caracterizacion->activo_id=$id;
             if(array_key_exists($key,$pp)){
                 $caracterizacion->probabilidad=$pp[$key];
             }
             $caracterizacion->dimension_D=$dd[$key];
            if(array_key_exists($key,$ii)){
                $caracterizacion->dimension_I=$ii[$key];
            }
            if(array_key_exists($key,$cc)){
             $caracterizacion->dimension_C=$cc[$key];
            }
            if(array_key_exists($key,$aa)){
             $caracterizacion->dimension_A=$aa[$key];
            }
            if(array_key_exists($key,$nnrr)){
             $caracterizacion->dimension_NR=$nnrr[$key];
            }
             $caracterizacion->save();
        };
        return redirect()->route('caract.index')->with('verde','Se actualizó correctamente');
        //return $request->all();

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
    public function promedio($id){
        $caracterizacion=Caracterizacion::where('activo_id',$id)->get();
        $cont=0; $probabilidad=0;$D=0;$I=0;$C=0;$A=0;$NR=0;
        if($caracterizacion){
            foreach ($caracterizacion as $i) {
                $cont++;
                $probabilidad=$probabilidad+$i->probabilidad;
                if ($D<$i->dimension_D) {$D=$i->dimension_D;}
                if ($I<$i->dimension_I) {$I=$i->dimension_I;}
                if ($C<$i->dimension_C) {$C=$i->dimension_C;}
                if ($A<$i->dimension_A) {$A=$i->dimension_A;}
                if ($NR<$i->dimension_NR) {$NR=$i->dimension_NR;}
                
            }if($cont==0){$cont++;}
            $probabilidad=round($probabilidad/$cont);
            $D=round(100*$D);
            $I=round(100*$I);
            $C=round(100*$C);
            $A=round(100*$A);
            $NR=round(100*$NR);
        }
        $msj= array('probabilidad' =>$probabilidad,'D' =>$D,'I' =>$I,'A' =>$A,'NR' =>$NR,'C' =>$C);
        return $msj;
    }
    public function amenazas(){
      return array( '1' =>'DESASTRES NATURALES [I]' ,
                            '2' =>'DE ORIGEN INDUSTRIAL [N]' ,
                            '3' =>'ERRORES Y FALLOS NO INTENCIONADOS [E]' ,
                            '4' =>'ATAQUES INTENCIONADOS [A]');

    }
}
