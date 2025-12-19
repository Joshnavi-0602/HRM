<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminEmployeeController extends Controller
{
    // List all employees
    public function index(){
        $employees = User::where('role', 'employee')->get();
        return view('admin.employees.index', compact('employees'));
    }

    // Show form to create a new employee
    public function create(){
        return view('admin.employees.create');
    }

    // Store new employee
    public function store(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'nullable',
            'email'      => 'required|email|unique:users',
            'password'   => 'required|confirmed'
        ]);

        User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'role'       => 'employee',
        ]);

        return redirect()->route('admin.employees.index')->with('success', 'Employee created successfully.');
    }

    // Show form to edit an employee
    public function edit($id){
        $employee = User::findOrFail($id);
        return view('admin.employees.edit', compact('employee'));
    }

    // Update employee
    public function update(Request $request, $id){
        $employee = User::findOrFail($id);

        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'nullable',
            'email'      => 'required|email|unique:users,email,'.$employee->id,
            'password'   => 'nullable|confirmed'
        ]);

        $employee->first_name = $request->first_name;
        $employee->last_name  = $request->last_name;
        $employee->email      = $request->email;
        if($request->password){
            $employee->password = Hash::make($request->password);
        }
        $employee->save();

        return redirect()->route('admin.employees.index')->with('success', 'Employee updated successfully.');
    }

    // Delete employee
    public function destroy($id){
        $employee = User::findOrFail($id);
        $employee->delete();

        return redirect()->route('admin.employees.index')->with('success', 'Employee deleted successfully.');
    }
}
