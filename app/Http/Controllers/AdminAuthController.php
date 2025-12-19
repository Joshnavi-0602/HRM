<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    // Show admin login form
    public function showLogin(){
        return view('admin.login'); // Use employee login view
    }

    // Handle admin login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Security: regenerate session

            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            }

            // If not admin, logout
            Auth::logout();
            return back()->with('error', 'Not admin');
        }

        return back()->with('error', 'Invalid admin login');
    }

    // Admin dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
