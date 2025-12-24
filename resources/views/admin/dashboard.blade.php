<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .dashboard-card {
            background: #ffffff;
            padding: 30px 40px;
            width: 400px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .dashboard-card h2 {
            margin-bottom: 10px;
            color: #333;
        }

        .dashboard-card p {
            margin-bottom: 25px;
            color: #666;
            font-size: 16px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
        }

        .btn-primary {
            background: #2563eb;
            color: #fff;
        }

        .btn-primary:hover {
            background: #1e40af;
        }

        .btn-danger {
            background: #dc2626;
            color: #fff;
        }

        .btn-danger:hover {
            background: #991b1b;
        }

        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #e5e7eb;
        }
    </style>
</head>
<body>

    <div class="dashboard-card">
        <h2>Admin Dashboard</h2>

        <p>Welcome, <strong>{{ Auth::user()->first_name }}</strong></p>

        <hr>

        <a href="{{ route('admin.employees.index') }}">
            <button class="btn btn-primary">View Employee List</button>
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">
                Logout
            </button>
        </form>
    </div>

</body>
</html>
