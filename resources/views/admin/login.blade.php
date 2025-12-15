
<form method="POST" action="/admin/login">
    @csrf
    <input name="email" placeholder="Admin Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login</button>
</form>

