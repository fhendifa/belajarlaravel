<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('Login.login');
    }
    public function registrasi()
    {
        return view('Login.register');
    }
    public function registrasiStore(Request $request)
    {
        $request->validate
        ([
            'name' => 'required|alpha|min:3|max:28',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        User::create
        ([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 1
        ]);

        return redirect('login');
    }

    public function loginStore(Request $request)
    {
        $request->validate
        ([
        'email' => 'required|email',
        'password' => 'required|min:8'
        ]);

        $user = 
        [
            'email' => $request->email,
            'password' => $request->password
        ];

        Auth::attempt($user);
        if(Auth::check()){
            return redirect('/home');
        } else
        {
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
