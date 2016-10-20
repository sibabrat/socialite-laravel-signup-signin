<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Socialiteuser extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    protected $table = 'socialiteusers';
    protected $fillable = [
        'socialite_id',
        'user_name',
        'avtar',
        'email',
        'status',

    ];
}
