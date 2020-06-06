<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Posts class instance will refer to posts table in database
class Post extends Model
{
    //restricts columns from modifying
    protected $guarded = [];

    // posts can have one or many categories
    // returns all categories associated to the post
    public function categories() {
        return $this->hasManyThrough('App\Category', 'App\Post');
    }

    public function user() {
        return $this->belongsTo('App\User', 'author_id');
    }
}
