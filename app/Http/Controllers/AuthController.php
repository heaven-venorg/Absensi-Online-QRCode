<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (!Auth::check()) {
            return view('auth.login');
        }
        return redirect()->route('root');
    }

    public function loginaction(Request $request)
    {
        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect()->route('root');
        } else {
            return redirect()->route('login')->with('gagal', 'Email atau password yang anda masukan salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}