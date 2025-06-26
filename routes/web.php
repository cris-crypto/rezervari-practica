<?php
use App\Http\Controllers\FilmController;
use App\Models\Film;
use App\Http\Controllers\RezervareController;
use Illuminate\Support\Facades\Route;
use App\Models\Rezervare;
use Carbon\Carbon;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome',[
        'nume' => "Cristina",
        "fructe"=>[
            "mere",
            "pere",
            "banane",
            "portocale",
            "kiwi"
        ]


    ]);
});
Route::get('/galerie', function () {
    return view('galerie',[
        'nume' => "Cristina",
        "fructe"=>[
            "mere",
            "pere",
            "banane",
            "portocale",
            "kiwi"
        ]
        

    ]);
});
Route::get('/insert-model', [RezervareController::class, "getRezervare"]);  



    Route::get ('/display-model',[ RezervareController::class, "create"] );



Route::get('/formular', function() {
    return view('formular',);
});

Route::post('/formular', [RezervareController::class, "Store"]);



Route::get('/filme', [FilmController::class, 'index'])->name('filme.index');
Route::get('/filme/create', [FilmController::class, 'create'])->name('filme.create');

Route::post('/filme', [FilmController::class, 'store'])->name('filme.store');
 Route::get('/insert-filme', function () {
    \App\Models\Film::factory()->count(10)->create();
    return '10 filme adăugate!';
});
Route::get("/filme/{film}/sterge", [FilmController::class, 'destroy'])->name('filme.destroy');
