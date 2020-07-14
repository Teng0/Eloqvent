<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded =[];

    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');//rac gvoweroa migration tableshi
    }
    public  function posts(){
        return $this->morphedByMany(Post::class,"taggable");
    }
    public  function videos(){
        return $this->morphedByMany(Video::class,"taggable");
    }
}
