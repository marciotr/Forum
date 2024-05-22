<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listAllUsers()
    {
        return view('users.listAllUsers');
    }

    public function listUserById()
    {

    }

    public function createUser()
    {
        return view('users.createUser');
    }

    public function updateUser()
    {

    }

    public function deleteUser()
    {
        return null;
    }
    //
}
