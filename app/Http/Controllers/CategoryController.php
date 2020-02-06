<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->get('name');
        $category->save();
        return redirect()->route('categories.index');
    }

    public function show($categoryId)
    {
        $category = Category::where('id', $categoryId)->first();
        return view('categories.show', compact('category'));
    }
}
