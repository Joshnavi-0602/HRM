<!DOCTYPE html>
<html>
<head>
    <title>HRM</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .container {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-bottom: 30px;
        }

        button {
            width: 150px;
            padding: 12px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .admin {
            background: #2c3e50;
            color: white;
        }

        .employee {
            background: #3498db;
            color: white;
        }

        button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>HRM</h1>

    <a href="{{ url('/admin/login') }}">
        <button class="admin">Admin</button>
    </a>

    <a href="{{ url('/employee') }}">
        <button class="employee">Employee</button>
    </a>
</div>

</body>
</html>
