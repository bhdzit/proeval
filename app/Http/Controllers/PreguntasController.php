<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use App\Models\Respuestas;
use Illuminate\Http\Request;
use App\Models\subcategorias;
use DB;
class PreguntasController extends Controller
{
    public function index()
    {
        return view('preguntas',['preguntas'=>Pregunta::get(),"respuestas"=>Respuestas::get()]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'ITEM_ID' => ['required', 'string', 'max:7', 'unique:item'],
        
        ]);
        $pregunta = new Pregunta();
        $pregunta->ITEM_ID=$request->ITEM_ID;
        $pregunta->ITEM_PREGUNTA=$request->ITEM_PREGUNTA;
        $pregunta->ITEM_SUB_CATEGORIA=$request->ITEM_SUB_CATEGORIA;
        $pregunta->ITEM_TIPO_PREGUNTA=$request->ITEM_TIPO_PREGUNTA;
        $pregunta->ITEM_ACTIVO=$request->ITEM_ACTIVO;
        $pregunta->ITEM_RETROALIMENTACION=$request->ITEM_RETROALIMENTACION;
        $pregunta->save();
        for($i=0;$i<count($request->all());$i++){

            if(request("ITD_RETRO_RESPUESTA".$i)){
                $respuesta = new Respuestas();
                $respuesta->ITD_ITEM=$request->ITEM_ID;
                $respuesta->ITD_RESPUESTA=request("ITD_RETRO_RESPUESTA".$i);
                $respuesta->ITD_RETRO_RESPUESTA=request("ITD_RETRO_RESPUESTA");
                $respuesta->ITD_VALOR=request("ITD_VALOR");
                $respuesta->save();
            }
           
        }

        return redirect()->route('preguntas.index');
    }
    public function destroy($id){
        Pregunta::destroy($id);
        return redirect()->route('preguntas.index');
    }
    public function show($id){
         return view('preguntasinput',[
             'subcategorias'=>subcategorias::get(),
             'tipo_preguntas'=>DB::table('tipo_pregunta')->get(),
             'pregunta'=>Pregunta::find($id),
             'respuestas'=>Respuestas::where('ITD_ITEM',$id)->get()
             ]);
    }
}
