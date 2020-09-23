<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        $categories = Category::all();

        return view('admin.post.index', compact('posts','categories'));
    }

    public function store(Request $request)
    {
        $img = null;
        if ($request->img)
            $img = '/upload/' . $request->file('img')->store('img',['disk' => 'public']);

        $post = Post::create([
            'title' => $request->title,
            'short_desc' => $request->short_desc,
            'pic' => $img,
            'post-trixFields' => $request->get('post-trixFields'),
            'body' => $request->get('post-trixFields')['content']
        ]);

        $post->categories()->attach($request->categories);

        return back();
    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('admin.post.edit', compact('post','categories'));
    }

    public function update(Post $post, Request $request)
    {
        $img = $post->pic;

        if ($request->img)
            $img = '/upload/' .  $request->file('img')->store('img',['disk' => 'public']);

        $post->update([
            'title' => $request->title,
            'short_desc' => $request->short_desc,
            'pic' => $img,
            'post-trixFields' => $request->get('post-trixFields'),
            'body' => $request->get('post-trixFields')['content'],
        ]);

        $post->categories()->sync($request->categories);

        return back();
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }
}
