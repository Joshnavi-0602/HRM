
<form method="POST" action="/employee/register">
    @csrf
    <input name="first_name" placeholder="First Name" required><br><br>
    <input name="last_name" placeholder="Last Name"><br><br>
    <input name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required><br><br>
    <button type="submit">Register</button>
</form>

