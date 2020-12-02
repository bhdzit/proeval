<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use App\Models\PreguntasDetalles;
use App\Models\PruebaDetalles;
use Illuminate\Http\Request;

class PruebaController extends Controller
{

    public function index()
    {
        return view('prueba',['preguntas' => Preguntas::get(), "respuestas" => PreguntasDetalles::get()]);
     //   return view('preguntaslist',['preguntas'=>Preguntas::get(),"respuestas"=>PreguntasDetalles::get()]);
    }
    public function store(Request $request)
    {
        //return $request;
        foreach(Preguntas::get() as $prueba){
            $pruebaDetalle= new PruebaDetalles();
            $pruebaDetalle->PD_RESP_ITEM_DETALLE=request($prueba->ITEM_ID);
            $pruebaDetalle->PR_BY_USER=auth()->user()->US_NUMBER;
            $pruebaDetalle->save();
            
        }
        return redirect()->route('examen.index');
    }
}
