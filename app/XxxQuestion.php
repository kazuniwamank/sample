<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XxxQuestion extends Model
{
    protected $fillable = [
        'id',
        'title',
        'question',
        'start_date',
        'end_date'
    ];
}
