<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class comment extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'author_id', 'product_id', 'recipe_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}