<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rezervare extends Model
{
    protected $table ="rezervari";
    protected $fillable = [
        'nume',
        'email',
        'telefon',
        'filmul',
        'data_rezervare'
    ];
    
}
