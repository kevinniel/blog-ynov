<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class ApiCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        # SELECT * FROM bidules
        return response()->json([
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $category = new Category();
        $category->name = $request->get('name');
        if ($category->save()) {
            return response()->json([
                'status' => 'OK'
            ]);
        }
        return response()->json([
            'status' => 'KO'
        ]);
    }
}









