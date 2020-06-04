<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //

    protected $fillable = [
        'id_material', 'material'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class , 'id_material', 'id_material');
    }
}
