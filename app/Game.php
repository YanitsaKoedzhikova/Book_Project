<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'GameName','creators_id', 'ReleaseDate', 'Creator', 'Genre', 'Description'
    ];
}