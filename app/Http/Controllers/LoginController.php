<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function dashboard()
    {
        if(Auth::check() === true)
        {
            return redirect()->route('site.estatistica');
        }
    }

    public function login(Request $request)
    {
        $credencias = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credencias))
        {
            return redirect()->route('site.estatistica');
        }
            return redirect()->back()->withInput()->withErrors(['Credenciais inválidas']);
        
       
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }

}
