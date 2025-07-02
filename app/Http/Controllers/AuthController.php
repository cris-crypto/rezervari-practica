<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 


class AuthController extends Controller
{
    // Afișează formularul de înregistrare
    public function register()
    {
        return view('auth.register');
    }

    // Procesează formularul de înregistrare
    public function registerSubmit(Request $request)
    {
        // Validare simplă
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        // Creare user nou
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirecționează spre formularul de login după înregistrare
        return redirect()->route('login.form')->with('success', 'Înregistrare reușită! Te poți loga acum.');
    }

    // Afișează formularul de login
    public function login()
    {
        return view('auth.login');
    }

    // Procesează login-ul
    public function loginSubmit(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Protecție securitate

            return redirect()->intended('/'); // Redirecționează spre pagina dorită sau home
        }

        return back()->withErrors([
            'email' => 'Credențialele nu sunt corecte.',
        ])->onlyInput('email');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
