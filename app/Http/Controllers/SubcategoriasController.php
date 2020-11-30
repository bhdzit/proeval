<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Subcategorias;
use Illuminate\Http\Request;

class SubcategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subcategorialist',['subcategorias'=>Subcategorias::get()]);
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
            'SB_ID' => ['required', 'string', 'max:5'],
            'SB_CVE_CATEGORIA' => ['required', 'string', 'max:45'],
            'SB_DESCRIPCION' => ['required', 'string', 'max:125'],
            'SB_ACTIVO' => ['required', 'string', 'size:1'],
        ]);

        Subcategorias::create([
        'SB_ID'=>$request->SB_ID,
        'SB_CVE_CATEGORIA'=>$request->SB_CVE_CATEGORIA,
        'SB_DESCRIPCION'=>$request->SB_DESCRIPCION,
        'SB_ACTIVO'=>$request->SB_ACTIVO
        ]);
        return redirect()->route('subcategorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('subcategoriainput',['subcategoria'=>Subcategorias::find($id),'categorias'=>Categorias::get()]);
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
        $this->validate($request, [
            'SB_ID' => ['required', 'string', 'max:5'],
            'SB_CVE_CATEGORIA' => ['required', 'string', 'max:45'],
            'SB_DESCRIPCION' => ['required', 'string', 'max:125'],
            'SB_ACTIVO' => ['required', 'string', 'size:1'],
        ]);

        $subcat=Subcategorias::find($id);
            $subcat->SB_ID=$request->SB_ID;
            $subcat->SB_CVE_CATEGORIA=$request->SB_CVE_CATEGORIA;
            $subcat->SB_DESCRIPCION=$request->SB_DESCRIPCION;
            $subcat->SB_ACTIVO=$request->SB_ACTIVO;
            $subcat->save();    
        return redirect()->route('subcategorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subcategorias::destroy($id);
        return redirect()->route('subcategorias.index');
    }
}
