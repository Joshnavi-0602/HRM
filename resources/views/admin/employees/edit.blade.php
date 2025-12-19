
<h2>Edit Employee</h2>

<form method="POST" action="/admin/employees/{{ $employee->id }}">
    @csrf
    @method('PUT')

    <input name="first_name" value="{{ $employee->first_name }}" required><br><br>
    <input name="last_name" value="{{ $employee->last_name }}"><br><br>
    <input name="email" value="{{ $employee->email }}" required><br><br>

    <button type="submit">Update Employee</button>
</form>
