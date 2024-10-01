<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function index(){

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
           
            //dd(Auth::user());
            if (Auth::user()->role == 1) {
                return redirect()->route('superadmin.dashboard');
            } elseif (Auth::user()->role == 2) {
                return redirect()->route('admin.dashboard');
            }
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials!']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
