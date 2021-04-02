<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function author(){
        return $this ->belongsToMany('App\Models\Author');
    }

    public function book(){
        return $this ->belongsToMany('App\Models\Book');
    }

    public function tag(){
        return $this ->belongsToMany('App\Models\Tag');
    }

    public function img(){
        return $this ->belongsToMany('App\Models\Img');
    }
}
