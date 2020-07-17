<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->limit(3)->get();
        return view('welcome', compact('posts'));
    }

    public function admin()
    {
        return view('admin.welcome');
    }

    public function loginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        if ($request->phone == '09126585265' && $request->password == '65214585a')
            auth()->loginUsingId(1);
        return redirect(route('admin.home'));
    }
}
