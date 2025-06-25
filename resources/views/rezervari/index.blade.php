<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lista rezervari</h2>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nume</th>
                <th>email</th>
                <th>telefon</th>
                <th>filmul</th>
                <th>data_rezervare</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rezervari as $rezervare)
            <tr>
                <td>{{$rezervare->id}}</td>
                <td>{{$rezervare->nume}}</td>
                <td>{{$rezervare->email}}</td>
                <td>{{$rezervare->telefon}}</td>
                <td>{{$rezervare->filmul}}</td>
                <td>{{\Carbon\Carbon::parse($rezervare->data_rezervare)->format('d.m.Y')}}</td>
            </tr>
            
@endforeach
        </tbody>
    </table>

</body>
</html>