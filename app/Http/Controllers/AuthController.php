<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginUser(Request $request) {
        if ($request->method() === 'GET') {
            return view('auth.loginUser');
        }else {
            $credentials = $request->validate([
                'email' => 'required|string|max:255|unique:users',
                'password' => 'required|string'
            ]);

            if(Auth::attempt($credentials)){
                return redirect()
                    ->intended('/users')
                    ->with('success', 'Login Realizado com sucesso');
            }
        }
    }

    public function logoutUser(Request $request) {
        Auth::logout();
        return redirect()
                ->route('login')
                ->with('sucess', 'Registro realizado com sucesso');   
    }
}
