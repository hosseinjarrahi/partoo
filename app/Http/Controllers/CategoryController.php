<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'slug' => str_replace(' ','-',$request->name)
        ]);

        return back();
    }

    public function update(Category $category,Request $request)
    {
        $category->update([
            'name' => $request->name,
            'slug' => str_replace(' ','-',$request->name)
        ]);

        return back();
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
