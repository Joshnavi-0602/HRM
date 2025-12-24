@extends('admin.layout')

@section('title', 'Add Employee')

@section('content')
<h2>Add Employee</h2>

<form method="POST" action="/admin/employees">
    @csrf

    <label>First Name</label>
    <input name="first_name" placeholder="Enter first name" required>

    <label>Last Name</label>
    <input name="last_name" placeholder="Enter last name">

    <label>Email</label>
    <input type="email" name="email" placeholder="Enter email" required>

    <label>Password</label>
    <input type="password" name="password" placeholder="Enter password" required>

    <label>Confirm Password</label>
    <input type="password" name="password_confirmation" placeholder="Confirm password" required>

    <button class="btn">Create Employee</button>
</form>

<a href="{{ route('admin.employees.index') }}" class="back-link">
    ← Back to Employee List
</a>
@endsection
