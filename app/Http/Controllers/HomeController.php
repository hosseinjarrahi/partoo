<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function login(Request $request)
    {
        $user = User::where('phone', $request->phone)->get();
        if (!!$user) {
            if (Hash::check($request->password, $user->password))
                auth()->loginUsingId(1);
        }

        return redirect(route('home'));
    }
}
