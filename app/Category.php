<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;

    protected $fillable = ['category_name', '_lft', '_rgt', 'parent_id'];

    public function post()
    {
        return $this->belongsTo('App\Posts', 'on_post');
    }

    public function getRouteKeyName() {
        return 'category_name';
    }
}
