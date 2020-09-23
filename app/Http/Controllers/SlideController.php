<?php

namespace App\Http\Controllers;

use App\Category;
use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::orderByDesc('id')->get();
        $categories = Category::all();

        return view('admin.slide.index', compact('slides','categories'));
    }

    public function store(Request $request)
    {
        $img = null;
        if ($request->img)
            $img = '/upload/' . $request->file('img')->store('img',['disk' => 'public']);

        Slide::create([
            'pic' => $img,
            'category_id' => $request->category
        ]);

        return back();
    }

    public function edit(Slide $slide)
    {
        $categories = Category::all();

        return view('admin.slide.edit', compact('slide','categories'));
    }

    public function update(Slide $slide, Request $request)
    {
        $img = $slide->pic;

        if ($request->img)
            $img = '/upload/' .  $request->file('img')->store('img',['disk' => 'public']);

        $slide->update([
            'pic' => $img,
            'category_id' => $request->category
        ]);

        return back();
    }

    public function destroy(Slide $slide)
    {
        $slide->delete();

        return back();
    }
}
