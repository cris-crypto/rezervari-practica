<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Adaugă acest use dacă lipsește

class Rezervare extends Model
{
    protected $table = "rezervari";

    protected $fillable = [
        'nume',
        'email',
        'telefon',
        'filmul',
        'data_rezervare',
        'user_id' // adaugă asta în fillable dacă vrei să salvezi relația
    ];

    protected $casts = [
        'data_rezervare' => 'datetime',
    ];

  public function user()
{
    return $this->belongsTo(\App\Models\User::class);
}

}

