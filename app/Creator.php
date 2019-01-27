<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    protected $fillable = [
      'CreatorName', 'CreatingCompany', 'Description'
    ];
}
