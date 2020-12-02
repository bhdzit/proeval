<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use App\Models\PreguntasDetalles;
use App\Models\Subcategorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('preguntaslist',['preguntas'=>Preguntas::get(),"respuestas"=>PreguntasDetalles::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ITEM_ID' => ['required', 'string', 'max:7', 'unique:item'],
        ]);
        $pregunta = new Preguntas();
        $pregunta->ITEM_ID=$request->ITEM_ID;
        $pregunta->ITEM_PREGUNTA=$request->ITEM_PREGUNTA;
        $pregunta->ITEM_SUB_CATEGORIA=$request->ITEM_SUB_CATEGORIA;
        $pregunta->ITEM_TIPO_PREGUNTA=$request->ITEM_TIPO_PREGUNTA;
        $pregunta->ITEM_ACTIVO=$request->ITEM_ACTIVO;
        $pregunta->ITEM_RETROALIMENTACION=$request->ITEM_RETROALIMENTACION;
        $pregunta->save();
        for($i=0;$i<count($request->all());$i++){

            if(request("ITD_RETRO_RESPUESTA".$i)){
                $respuesta = new PreguntasDetalles();
                $respuesta->ITD_ITEM=$request->ITEM_ID;
                $respuesta->ITD_RESPUESTA=request("ITD_RETRO_RESPUESTA".$i);
                $respuesta->ITD_RETRO_RESPUESTA=request("ITD_RETRO_RESPUESTA");
                $respuesta->ITD_VALOR=request("ITD_VALOR");
                $respuesta->save();
            }
           
        }

        return redirect()->route('preguntas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('preguntainput',[
            'subcategorias'=>Subcategorias::get(),
            'tipo_preguntas'=>DB::table('tipo_pregunta')->get(),
            'pregunta'=>Preguntas::find($id),
            'respuestas'=>PreguntasDetalles::where('ITD_ITEM',$id)->get()
            ]);
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
