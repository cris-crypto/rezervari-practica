<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'titlu',
        'gen',
        'an_lansare'
    ];
}
