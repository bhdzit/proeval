<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller{

    public function login(Request $request){
     
        if (Auth::attempt(['US_EMAIL' => $request->US_EMAIL,'password' => $request->US_AUT_TEXT],false)){
    
             return redirect()->intended(route('home'));
        }
    
        return $this->sendFailedLoginResponse($request);
    }
    
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required', 'password' => 'required',
        ]);
    }
    
    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'US_EMAIL';
    }
    protected function sendFailedLoginResponse(Request $request)
{
    return redirect()->back()
        ->withInput($request->only($this->username(), 'remember'))
        ->withErrors([
            $this->username() => "Credenciales Incorectas",
        ]);
}
}