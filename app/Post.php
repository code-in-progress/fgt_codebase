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
    public function categories()
    {
        return $this->hasMany('App\Category', 'on_post');
    }

    // returns the instance of the user who is author of that post
    public function author()
    {
        return $this->belongsTo('App\User', 'author_id');
    }
}
