<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use App\Models\Order;
use App\Models\Table;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->get();
        return view('order.listar', compact('orders'));
    }

    
    public function create()
    {
        $categories = Category::all();
        $dishes = Dish::all();
        $tables = Table::all();

        return view('order.create', compact('categories', 'dishes', 'tables'));

    }

  
    public function store(Request $request)
    {
        $order = new Order();
        $order->name=$request->name;
        $order->category_id=$request->category_id;
        $order->dish_id=$request->dish_id;
        $order->table_id=$request->table_id;
        $order->
        $order->save();
        return $order;
    }

    
    public function show(Order $order)
    {
        return view('order.show', compact('order'));
    }

   
    public function edit(Order $order)
    {
        return view('order.edit',compact('order'));
    }

   
    public function update(Request $request, Order $order)
    {
        $order->name=$request->name;
        $order->category_id=$request->category_id;
        $order->dish_id=$request->dish_id;
        $order->table_id=$request->table_id;
        $order->save();

        return redirect()->route('order.index');
    }

   
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index');
    }
}
