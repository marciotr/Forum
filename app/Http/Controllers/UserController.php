<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listAllUsers() {
        return view('users.listAllUsers');
    }

    public function listUser(Request $request, $uid) {
        print($uid);
    }

    public function createUser() {
        return view('users.createUser');
    }

    public function showProfile() {
        return view('users.userProfile');
    }

    public function registerUser(Request $request){
        if ($request->method() === 'GET') {
        } 
        else {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed'
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Math::make($request->password),
            ]);
        }
        
    }

}
