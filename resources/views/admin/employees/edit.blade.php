@extends('admin.layout')

@section('content')
<h2>Edit Employee</h2>

<form method="POST" action="/admin/employees/{{ $employee->id }}">
    @csrf
    @method('PUT')

    <input name="first_name" value="{{ $employee->first_name }}" required>
    <input name="last_name" value="{{ $employee->last_name }}">
    <input name="email" value="{{ $employee->email }}" required>

    <button type="submit">Update Employee</button>
</form>

<br>
<a href="{{ route('admin.employees.index') }}">← Back to Employee List</a>
@endsection
