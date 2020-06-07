<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;

    protected $fillable = ['category_name', '_lft', '_rgt', 'parent_id'];

    public function posts() {
        return $this->belongsToMany('App\Post');
        // return $this->hasManyThrough('App\Post', 'App\Category');
    }

    public function user() {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function getRouteKeyName() {
        return 'category_name';
    }
}
