<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


<head>
    <title>Adaugă film</title>
</head>
<body>
    <h1>Formular administrator - Adaugă film</h1>

    <form method= "POST" action="{{ route('filme.store') }}">
        @csrf
        <label>Titlu:</label><br>
        <input type="text" name="titlu"><br><br>

        <label>Gen:</label><br>
        <input type="text" name="gen"><br><br>

        <label>An lansare:</label><br>
        <input type="number" name="an_lansare"><br><br>

        <button type="submit">Salvează</button>
    </form>
</body>
</html>