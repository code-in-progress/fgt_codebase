<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class CategoriesController extends Controller
{
    /**
     * Display a listing of categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Category::with('user')->with('posts')->get();
        /*return view('categories.index', [
            'categories' => Category::all()
        ]);*/
    }

    /**
     * Display the specified category if $category != null.
     * Else display all categories
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return $category;
        /*return view('categories.single', [
            'categories' => $category
        ]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        return view('categories.create');
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create($request->validate([
            'category_name' => 'required'
        ]));

        return redirect('/categories');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    /*public function edit(Category $category)
    {
        return view('categories.edit', [
            'category' => $category
        ]);
    }*/



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        Category::update($request->validate([
            'category_name' => 'required'
        ]));

        return redirect('/categories/' . $category->category_name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        $category->delete();
        return redirect('/categories');
    }

}
