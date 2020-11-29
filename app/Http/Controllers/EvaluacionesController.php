<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Categoria;
use App\Models\Evaluacion;
use App\Models\EvaluacionDetalles;
use App\Models\subcategorias;
class EvaluacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('evaluaciones',['evaluaciones'=>DB::table('evaluacion')->get()]);
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
            'EV_ID' => ['required', 'string', 'max:255', 'unique:evaluacion'],
            'EV_TITULO'=>['required', 'string', 'max:255']
        
        ]);
        $evaluacion= new Evaluacion();
        $evaluacion->EV_ID=$request->EV_ID;
        $evaluacion->EV_TITULO=$request->EV_TITULO;
        $evaluacion->EV_ACTIVO=$request->EV_ACTIVO;
        //$evaluacion->save();

        $ed=new EvaluacionDetalles();
        $ed->ED_ID=$request->EV_ID;
        $ed->ED_EVALUACION=$request->EV_ID;
        $ed->ED_CATEGORIA=$request->ED_CATEGORIA;
        $ed->ED_NUMERO_ITEMS= $request->ED_NUMERO_ITEMS;
        $ed->PR_DURACION=$request->PR_DURACION;
        $ed->ED_FECHA_EVAUACION=$request->ED_FECHA_EVAUACION;
        $ed->PR_HORA_INICIO=$request->PR_HORA_INICIO;
       
        //$ed->save();
       

        return redirect()->route('evaluaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          return view('evaluacionesinput',[
          'categorias'=>Categoria::get(),
          'subcategorias'=>subcategorias::get(),
          'tipo_preguntas'=>DB::table('tipo_pregunta')->get(),
          'evaluacion'=>Evaluacion::find($id),
          'evaluacion_detalle'=>EvaluacionDetalles::find($id)]);
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
        $evaluacion= Evaluacion::find($id);
        $evaluacion->EV_TITULO=$request->EV_TITULO;
        $evaluacion->EV_ACTIVO=$request->EV_ACTIVO;
        $evaluacion->save();

        $ed=EvaluacionDetalles::find($id);

        $ed->ED_CATEGORIA=$request->ED_CATEGORIA;
        $ed->ED_NUMERO_ITEMS= $request->ED_NUMERO_ITEMS;
        $ed->PR_DURACION=$request->PR_DURACION;
        $ed->ED_FECHA_EVAUACION=$request->ED_FECHA_EVAUACION;
        $ed->PR_HORA_INICIO=$request->PR_HORA_INICIO;
        $ed->save();
        return  redirect()->route('evaluaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //  EvaluacionDetalles::destroy($id);
        Evaluacion::destroy($id);
     
        return redirect()->route('evaluaciones.index');;
    }
}
