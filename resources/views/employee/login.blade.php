
<form method="POST" action="/employee/login">
    @csrf
    <input name="email" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login</button>
</form>

