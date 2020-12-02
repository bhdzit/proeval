<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use App\Models\PreguntasDetalles;
use App\Models\Prueba;
use Illuminate\Http\Request;
use DB;
class ExamenController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=auth()->user()->US_NUMBER;
        return view('examen', ['prueba'=>DB::select('call getPruebaActiva('.$id.')'),
        'respuestas'=>DB::select('call getCalifiacion('.$id.')')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Prueba::get($request->id);
        $estado = null;
        if ($request->bool=="true") {
            $estado = 'A';
        } else {
            $estado = 'N';
        }
      
        if (count(DB::table('prueba')->where('PR_USUARIO', $request->id)->get()) == 0) {
            $prueba = new Prueba();
            $prueba->PR_USUARIO = $request->id;
            $prueba->save(); //count(DB::table('prueba')->where('PR_USUARIO',$request->id)->get());
        } else {
            DB::table('prueba')
                ->where('PR_USUARIO', $request->id)
                ->update(['PR_ACTIVO' => $estado]);
        }

        return $estado.$request->bool;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
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
