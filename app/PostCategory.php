<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    public function post() {
        return $this->belongsTo('App\Post', 'id');
    }

    public function category() {
        return $this->belongsTo('App\Category', 'id');
    }
}
