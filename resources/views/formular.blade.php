<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adaugă student</h1>
    <form method="POST" action="/formular">
        @csrf
        <label>Nume:</label><br>
        <input type="text" name="nume"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Telefon:</label><br>
        <input type="text" name="telefon"><br><br>

        <label>Film:</label><br>
        <input type="text" name="filmul"><br><br>

        <label>Data rezervare:</label><br>
        <input type="date" name="data_rezervare"><br><br>

        
        <button type="submit">Adaugă</button>
    </form>

</body>
</html>