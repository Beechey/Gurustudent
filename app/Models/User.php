<?php

namespace Gurustudent\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Gurustudent\Models\Post;

class User extends Authenticatable
{
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany('Gurustudent\Models\Post','user_id');
    }

    public function likes()
    {
        return $this->hasMany('Gurustudent\Models\Like', 'user_id');
    }

    public function getName()
    {
        if($this->username) {
            return "{$this->username}";
        }

        if($this->username) {
            return $this->username;
        }

        return null;
    }

    public function getPostCount()
    {
        return $this->posts;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAvatarURL()
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return "http://www.gravatar.com/avatar/$hash" . '?d=mm&s=50';
    }

    public function hasLikedPost(Post $posts)
    {
        return $posts->likes
            ->where('likeable_id', $posts->id)
            ->where('likeable_type', get_class($posts))
            ->where('user_id', $this->id)
            ->count();
    }
}