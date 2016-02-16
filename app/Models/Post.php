<?php

namespace Gurustudent\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

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
    
    public function author()
    {
        return $this->belongsTo('Gurustudent\Models\User', 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany('Gurustudent\Models\Tag')->withTimestamps();
    }
}