<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //showLogin
    public function showLogin(){
        return view('employee.login');
    }

    //Login
    public function Login(Request $request){

        $credentials = $request->only('email','password');
        //if (Auth::attempt($credentials))
        //return redirect('/admin/dashboard');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/admin/dashboard');
            }
            return "Not admin";
        } 

        return back()->with('error','Invalid admin login');
    }

    //dashboard
    public function dashboard()
    {
        return "Admin Dashboard - Welcome " . Auth::user()->first_name;
    }

}
