<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthCusController extends Controller
{
    public function index()
    {
        return view('/landingpage.login');
    }
    public function registrasi()
    {
        return view('/landingpage.register');
    }
    public function registrasicus(Request $request)
    {
        // return $request;
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
            'level' => 3
        ]);

        return redirect('/');
    }

    public function logincus(Request $request)
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
            return redirect('/');
        } else
        {
            return redirect('/logincus');
        }
    }

    public function logoutcus()
    {
        Auth::logout();
        return redirect('/');
    }
}
