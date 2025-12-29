<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Register</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 40px;
        }

        .container {
            max-width: 480px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #d1d5db;
            font-size: 14px;
            outline: none;
        }

        input:focus {
            border-color: #2563eb;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #16a34a;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            cursor: pointer;
        }

        .btn:hover {
            background: #15803d;
        }

        .login-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #2563eb;
            font-size: 14px;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Employee Registration</h2>

    <form method="POST" action="/employee/register">
        @csrf

        <div class="form-group">
            <label>First Name</label>
            <input name="first_name" placeholder="Enter first name" required>
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input name="last_name" placeholder="Enter last name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" placeholder="Enter email" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password" required>
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Confirm password" required>
        </div>

        <button type="submit" class="btn">Register</button>
    </form>

    <a href="{{ url('/employee/login') }}" class="login-link">
        Already registered? Login
    </a>
</div>

</body>
</html>
