<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = [
        'caminho', 'texto', 'titulo'
    ];

    protected $table = 'galeria';
}
