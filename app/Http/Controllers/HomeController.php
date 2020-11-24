<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'sec_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'sec_last_name' => ['required', 'string', 'max:255'],
            'US_EMAIL' => ['required', 'string', 'email', 'max:255', 'unique:usuario'],
            'rol'=>['required', 'string', 'size:1',],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'US_NOMBRE' => $request->name,
            'US_NOMBRE_2' => $request->sec_name,
            'US_AP_PATERNO' => $request->last_name,
            'US_AP_MATERNO' => $request->sec_last_name,
            'US_EMAIL' => $request->US_EMAIL,
            'US_AUT_TEXT' => Hash::make($request->password),

        ]);

         return redirect()->route('usuarios.index');
    }
}
