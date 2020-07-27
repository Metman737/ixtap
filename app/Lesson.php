<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    protected $guarded = ['id'];

    protected $casts = [
        'price' => 'double',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
