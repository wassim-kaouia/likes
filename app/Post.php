<?php

namespace App;

use App\Like;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function likes(){

        return $this->hasMany(Like::class); 
    }

    public function isLikedByLoggedInUser(){

        return $this->likes->where('user_id', auth()->user()->id)->isEmpty() ? false : true; 
    }
}
