<?php

namespace Gurustudent\Models;

use Illuminate\Foundation\Auth\Post as Authenticatable;

class Post extends Authenticatable
{
    protected $table = 'messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
    ];
}