<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Slide;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->limit(3)->get();
        $slides = Slide::all();
        $categories = Category::whereHas('posts')->get();
        return view('welcome', compact('posts','slides','categories'));
    }

    public function post(Post $post)
    {
        $posts = Post::inRandomOrder()->limit(5)->get();
        return view('post', compact('post', 'posts'));
    }

    public function myClass()
    {
        $cats = auth()->user()->categories;
        $rooms = collect([]);
        foreach ($cats as $c)
        {
            $rooms->push($c->rooms);
        }

        return view('my-class', compact('rooms'));
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
        $user = User::where('phone', $request->phone)->first();
        if (!!$user) {
            if (Hash::check($request->password, $user->password)) {
                auth()->login($user);
            }
        }

        return redirect(route('login'));
    }

    public function logout()
    {
        auth()->logout();

        return back();
    }

    public function category(Category $category)
    {
        $posts = $category->posts()->paginate(10);

        return view('category',compact('posts'));
    }
}
