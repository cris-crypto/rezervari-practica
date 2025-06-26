<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rezervare;
use Carbon\Carbon;

class RezervareController extends Controller
{
    public function Store(Request $request)

    {
        Rezervare::create([
            'nume' => $request->nume,
            'email' => $request->email,
            'telefon' => $request->telefon,
            'filmul' => $request->filmul,
            'data_rezervare' => Carbon::parse($request->data_rezervare)
        ]);

        return redirect('/display-model');
    }



    public function create()
    {
        $rezervari = Rezervare::all();
        return view('display-model', ['rezervari' => $rezervari]);
    }

    public function getRezervare()
    {
        for ($i = 0; $i < 10; $i++) {

            $rezervare_query = Rezervare::query()->create([
                "nume" => "cristina",
                "email" => "cristina@gmail.com",
                "telefon" => "0787823875",
                "filmul" => "Soft_Tehnica",
                "data_rezervare" => Carbon::now()->addDays(rand(0, 30))

            ]);
        }
        return "10 rezervari inserate cu succes!";
    }
}
