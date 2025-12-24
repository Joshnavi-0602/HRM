<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee List</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 40px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            color: #fff;
        }

        .btn-add {
            background: #2563eb;
        }

        .btn-add:hover {
            background: #1e40af;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background: #f1f5f9;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }

        table th {
            font-weight: bold;
            color: #374151;
        }

        .action-btn {
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 13px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            color: #fff;
        }

        .btn-edit {
            background: #16a34a;
        }

        .btn-edit:hover {
            background: #15803d;
        }

        .btn-delete {
            background: #dc2626;
        }

        .btn-delete:hover {
            background: #b91c1c;
        }

        .actions {
            display: flex;
            gap: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="top-bar">
        <h2>Employee List</h2>
        <a href="/admin/employees/create" class="btn btn-add">+ Add Employee</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th width="180">Actions</th>
            </tr>
        </thead>

        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>
                    <div class="actions">
                        <a href="/admin/employees/{{ $employee->id }}/edit" class="action-btn btn-edit">
                            Edit
                        </a>

                        <form method="POST" action="/admin/employees/{{ $employee->id }}"
                            style="display:inline"
                            onsubmit="return confirm('Are you sure you want to delete this employee?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="color:red;"> Delete </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>

