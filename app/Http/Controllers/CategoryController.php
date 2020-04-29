<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        # SELECT * FROM bidules
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

    public function edit($categoryId)
    {
        // récupérer l'élément pour le passer avec la vue (pré-remplissage du formulaire)
        $category = Category::where('id', $categoryId)->first();
        // revoie la vue avec le formulaire
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $categoryId)
    {
        // récupérer l'élément à modifier
        $category = Category::where('id', $categoryId)->first();
        // on modifie la valeur avec celle du formulaire
        $category->name = $request->get('name');
        // on sauvegarde les changements !
        $category->save();
    }

    public function delete($categoryId)
    {
        $category = Category::where('id', $categoryId)->first();
        // suppression, au choix !
        // $category->destroy();
        // $category->delete();
    }

}









