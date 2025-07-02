<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Înregistrare</h2>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="name">Nume:</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required><br><br>

    <label for="password">Parolă:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <label for="password_confirmation">Confirmă parola:</label><br>
    <input type="password" id="password_confirmation" name="password_confirmation" required><br><br>

    <button type="submit">Înregistrează-te</button>
</form>

</body>
</html>
