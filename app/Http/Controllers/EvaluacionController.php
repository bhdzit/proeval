<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;
use App\Models\Pregunta;
use App\Models\PruebaDetalles;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("realisarevaluacion",['prueba'=>Prueba::where('PR_USUARIO',auth()->user()->US_NUMBER)->get(),
        'respuestas'=>PruebaDetalles::where('PR_BY_USER',auth()->user()->US_NUMBER)->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach(Pregunta::get() as $prueba){
            $pruebaDetalle= new PruebaDetalles();
            $pruebaDetalle->PD_RESP_ITEM_DETALLE=request($prueba->ITEM_ID);
            $pruebaDetalle->PR_BY_USER=auth()->user()->US_NUMBER;
            $pruebaDetalle->save();
            
        }
        return redirect()->route('evaluacion.index');;
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
