<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::find(10);
        $category = Category::find(1);
        //$post = Post::find(12)->delete();
        dd($category->posts[1]->title);

        /*$post = Post::create(
        // Creación de un post con los campos del archivo de migración Posts
        [
            'title' => 'test title',
            'slug' => 'test title',
            'description' => 'test description',
            'content' => 'test content',
            'image' => 'test image',
            'posted' => 'no',
            'category_id' => 1
        ]);
        
        dd($post->title);

        return 'Index';*/
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$categories = Category::get();
        //dd($categories);

        //return view('dashboard.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
