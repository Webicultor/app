<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index () 
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd($request);
        //dd($request->get('email'));
        $request->request->add(['username' => Str::slug($request->username)]);
        //Validación
        $this->validate($request, [
            'name' => 'required|min:5|max:30',
            'username' => 'required|min:5|max:20|unique:users',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6',
        ]);
        //dd("Creando Usuario");

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        //auth()->attempt->only('email', 'password');

        return redirect()->route('posts.index');
    }
}
