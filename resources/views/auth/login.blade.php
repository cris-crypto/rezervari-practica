<form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus><br><br>

    <label for="password">Parolă:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Loghează-te</button>
</form>
<p>Nu ai cont? <a href="{{ route('register') }}">Înregistrează-te aici</a></p>


