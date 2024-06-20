<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{

    public function index()
    {
        $dishes = Dish::orderBy('id', 'desc')->get();
        return view('dish.listar', compact('dishes'));
    }

    
    public function create()
    {
        $categories = Category::all();
        return view('dish.create', compact('categories'));
    }

     
    public function store(Request $request)
    {
        $dish = new Dish();
        $dish->name=$request->name;
        $dish->description=$request->description;
        $dish->price=$request->price;
        $dish->category_id=$request->category_id;
        $dish->save();

        return $dish;
    }

  
    public function show(Dish $dish)
    {
        return view('dish.show', compact('dish'));
    }

    
    public function edit(Dish $dish)
    {
        return view('dish.edit',compact('dish'));
    }

   
    public function update(Request $request, Dish $dish)
    {
        $dish->name=$request->name;
        $dish->description=$request->description;
        $dish->price=$request->price;
        $dish->category_id=$request->category_id;
        $dish->save();
        return redirect()->route('dish.index');
    }

    public function destroy(Dish $dish)
    {
        $dish->delete();
        return redirect()->route('book.index');
    }

    
}
