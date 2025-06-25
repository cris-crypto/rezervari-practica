<?php

use Illuminate\Support\Facades\Route;
use App\Models\Rezervare;
use Carbon\Carbon;
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
Route::get('/insert-model', function () 
{

for($i=0; $i<10; $i++ )
{
    
      $rezervare_query = Rezervare::query()->create([ 
        "nume"=> "cristina",
        "email"=>"cristina@gmail.com",
        "telefon"=>"0787823875",
        "filmul"=> "Soft_Tehnica",
        "data_rezervare"=>Carbon::now()->addDays(rand(0, 30)) 

      ]);
}
    return "10 rezervari inserate cu succes!";
});


    Route::get ('/display-model', function() {
        $rezervari=Rezervare::all();
        return view('rezervari.index', compact('rezervari'));

});

