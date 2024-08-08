<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(request $request)
    {
        $validatedata = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:255'
        ]);


        /* $validatedata['password'] = bcrypt($validatedata['password']); */

        $validatedata['password'] = Hash::make($validatedata['password']);

        User::Create($validatedata);

        return redirect('/login')->with('success', 'Registrasion successfull!! Please login');
    }
}