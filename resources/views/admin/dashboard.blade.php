<h2>Admin Dashboard</h2>

<p>Welcome, {{ Auth::user()->first_name }}</p>

<hr>

<a href="{{ route('admin.employees.index') }}">
    <button>View Employee List</button>
</a>
