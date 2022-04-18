<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goalscorer extends Model
{
    protected $fillable = [
        'name',
        'club',
        'country',
        'score'
    ];
}
