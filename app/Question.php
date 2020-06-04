<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = [
        'id_material', 'question', 'option_a', 'option_b', 'option_c', 'option_d', 'answer'
    ];

    protected $hidden = [
        'updated_at'
    ];
}
