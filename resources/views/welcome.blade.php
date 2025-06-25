<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        salut!
    </p>
    
        {{$nume}}
        @if($nume=="Cristina")
            <p> {{$nume}}!</p>
        @endif
    </p>
@foreach($fructe as $fruct)
    <p> {{$fruct}} </p>
@endforeach
<a href="http://google.com">Acceseaza Google </a>

</body>
</html>