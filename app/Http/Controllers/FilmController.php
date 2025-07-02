<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Film;
 

use App\Http\Controllers\Controller;

class FilmController extends Controller
{
    public function index() 
    {
        $filme = Film::all();
        return view('filme.index', compact('filme'));
    }

   
    public function create() 
    {
        return view('filme.create');
    }


    public function store(Request $request) 
    {
       
        
        Film::create($request->all());
        return redirect()->route('filme.index');
    }
    public function destroy(int $film)
    {
        $film = Film::findOrFail($film);
        $film->delete();
        return redirect()->route('filme.index');
    }
}




