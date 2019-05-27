<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XxxAnswer extends Model
{
    protected $fillable = [
        'name',
        'qid',
        'answer_value',
        'comment'
    ];
}
