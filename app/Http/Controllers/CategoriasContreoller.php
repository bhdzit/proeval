<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use DB;
class CategoriasContreoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categorias',['categorias'=>DB::table('categoria')->get()]);
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
            'CA_IDENTIFICADOR' => ['required', 'string', 'max:5'],
            'CA_NOMBRE' => ['required', 'string', 'max:45'],
            'CAT_ACTIVO' => ['required', 'string', 'size:1'],

        ]);

        Categoria::create([
        'CA_IDENTIFICADOR'=>$request->CA_IDENTIFICADOR,
        'CA_NOMBRE'=>$request->CA_NOMBRE,
        'CAT_ACTIVO'=>$request->CAT_ACTIVO,
        ]);
        return redirect()->route('categorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('categoriasinput',['categoria'=>Categoria::find($id)]);
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
        $categoria=Categoria::find($id);
        $categoria->CA_IDENTIFICADOR=$request->CA_IDENTIFICADOR;
        $categoria->CA_NOMBRE=$request->CA_NOMBRE;
        $categoria->CAT_ACTIVO=$request->CAT_ACTIVO;
        $categoria->save();
        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoria::destroy($id);
        return redirect()->route('categorias.index');
    }
}
