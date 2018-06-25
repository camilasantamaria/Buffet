<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

   public function login(){
   $credenciales = $this->validate(request(),[
        'usuario'=>'required',
        'clave'=>'required'
    ]);
   if (Auth::attempt($credenciales)){
       return redirect()->route('admin');
   }
   return back()
       ->withErrors(['usuario'=>trans('auth.failed')])
       ->withInput(request(['usuario']));
   }

   public function salir(){
       Auth::logout();
       return redirect('/');
   }

}