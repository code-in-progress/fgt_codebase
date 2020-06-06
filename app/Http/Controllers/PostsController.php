<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests\PostFormRequest;


class PostsController extends Controller {
    public function index()
    {
        return Post::with('user')->with('categories')->get();
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function store(Request $request)
    {
        Post::create($request->validate([
            'title' => 'required',
            'body' => 'required',
            'slug' => 'required'
        ]));

        return redirect('/posts');
    }

    public function update(Request $request, Post $post)
    {
        Post::update($request->validate([
            'title' => 'required',
            'body' => 'required',
            'slug' => 'required'
        ]));

        return redirect('/posts/' . $post->slug);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }

}
