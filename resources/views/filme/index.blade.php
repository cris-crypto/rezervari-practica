<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista filme</title>
</head>
<body>
    <h1>Toate filmele</h1>
    <a href="{{ route('filme.create') }}">Adaugă film</a>
    <ul>
        @foreach($filme as $film)
            <li>{{ $film->titlu }} | {{ $film->gen }} | {{ $film->an_lansare }}</li>
        @endforeach

    </ul>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista Filme</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <h1>🎬 Lista Filmelor</h1>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <a href="{{ route('filme.create') }}" class="btn">Adaugă film nou</a>

    <div class="film-list">
        @forelse($filme as $film)
            <div class="film-card">
                <h3>{{ $film->titlu }}</h3>
                <p><strong>Gen:</strong> {{ $film->gen }}</p>
                <p><strong>An lansare:</strong> {{ $film->an_lansare }}</p>

                <a href="{{ route('filme.destroy', $film->id) }}" class="btn-reservations">Sterge film</a>
                </a>
                <br>
               
                
            </div>
        @empty
            <p>Nu există filme adăugate.</p>
        @endforelse
    </div>

</body>
</html>
</body>
</html>