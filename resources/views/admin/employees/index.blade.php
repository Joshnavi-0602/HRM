
<h2>Employee List</h2>

<a href="/admin/employees/create">+ Add Employee</a><br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    @foreach($employees as $employee)
    <tr>
        <td>{{ $employee->id }}</td>
        <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
        <td>{{ $employee->email }}</td>
        <td>
            <a href="/admin/employees/{{ $employee->id }}/edit">Edit</a><br>

            <form method="POST" action="/admin/employees/{{ $employee->id }}" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
