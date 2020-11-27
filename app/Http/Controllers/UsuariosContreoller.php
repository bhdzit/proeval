<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use PhpParser\Node\Stmt\Return_;

class UsuariosContreoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuarios',[
            'usuarios'=>DB::table('usuario')
            ->leftJoin('prueba','US_NUMBER','=','PR_USUARIO')
            ->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "sad";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //  return User::find($id);

       return view('home',['usuario'=>User::find($id)]);// abort(404);
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
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'sec_name' => [ 'string', 'max:255','nullable'],
            'last_name' => ['required', 'string', 'max:255'],
            'sec_last_name' => ['required', 'string', 'max:255'],
            'US_EMAIL' => ['required', 'string', 'email', 'max:255'],
            'rol'=>['required', 'string', 'size:1',],
        ]);
        $user=User::find($id);
            $user->US_NOMBRE = $request->name;
            $user->US_NOMBRE_2 = $request->sec_name;
            $user->US_AP_PATERNO = $request->last_name;
            $user->US_AP_MATERNO = $request->sec_last_name;
            $user->US_EMAIL = $request->US_EMAIL;
            $user->US_ROL=$request->rol;
            $user->save();
   return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('usuarios.index');
    }
}
