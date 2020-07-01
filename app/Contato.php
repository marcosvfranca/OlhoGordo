<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'message', 'g-recaptcha-response'
    ];
}
