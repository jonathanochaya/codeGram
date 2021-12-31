<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Post;

class Profile extends Model
{
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function post()
    {
        return $this->hasMany(Post::class);
    }


    public function followers()
    {
        return $this->belongsToMany(User::class);
    }


    public function profileImage()
    {
        return $this->image ? $this->image : 'profile/RbKBWduOjV5fpwFb7AGCmlShhIYfWtDz0Y5V0reJ.png';
    }
}
