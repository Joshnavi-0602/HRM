<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class EmployeeAuthController extends Controller
{
    public function showRegister(){
        return view('employee.register');
    }

    public function register(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'nullable',
            'email'      => 'required|email|unique:users',
            'password'   => 'required|confirmed'
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'role'       => 'employee',
        ]);

        Auth::login($user);
        return redirect('/employee/dashboard');
    }

    public function showLogin(){
        return view('employee.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role === 'employee') {
                return redirect('/employee/dashboard');
            }

            Auth::logout();
            return back()->with('error','Not employee');
        }

        return back()->with('error','Invalid login');
    }

    public function dashboard(){
        return "Employee Dashboard - Welcome " . Auth::user()->first_name;
    }
}
