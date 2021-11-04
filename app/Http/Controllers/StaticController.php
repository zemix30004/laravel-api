<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
        return "aSrfhasdrhdfrhaShview";
    }

    public function blog()
    {
        $posts = Post::select(['id', 'title', 'excerpt', 'slug'])->get();
        return view('blog')->with('posts', $posts);
    }

    public function blogPost($url)
    {
        $post = Post::all()->where('slug', $url)->first();
        return view('postShow')->with('post', $post);
    }
}
