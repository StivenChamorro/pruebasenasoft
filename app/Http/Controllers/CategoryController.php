<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('category.listar', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {

        $category= new Category();
        $category->name=$request->name;
        $category->color=$request->color;
        $category->save();
        return  $category;
    }


    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->name=$request->name;
        $category->color=$request->color;
        $category->save();
        return  redirect()->route('category.index');

    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
