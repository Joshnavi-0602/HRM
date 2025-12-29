<!DOCTYPE html>
<html>
<head>
    <title>Employee Access</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f4f6f9;
            font-family: Arial, sans-serif;
        }
        .card {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
            width: 350px;
        }
        h2 {
            margin-bottom: 30px;
            color: #333;
        }
        a {
            display: block;
            padding: 12px;
            margin: 10px 0;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }
        .login {
            background: #2563eb;
            color: #fff;
        }
        .register {
            background: #16a34a;
            color: #fff;
        }
        a:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Employee</h2>

    <a href="{{ url('/employee/login') }}" class="login">Login</a>
    <a href="{{ url('/employee/register') }}" class="register">Register</a>
</div>

</body>
</html>
