<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts = Post::inRandomOrder()->limit(5)->get();
        return view('post', compact('post', 'posts'));
    }
}
