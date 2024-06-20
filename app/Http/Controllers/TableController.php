<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
  
    public function index()
    {
        $tables = Table::orderBy('id', 'desc')->get();
        return view('table.listar', compact('tables'));
    }


    public function create()
    {
        return view('table.create'); 
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'capacity' => 'required|string|max:20|trim',
        ]);
        
        $table= new Table();
        $table->capacity=$request->capacity;
        $table->save();
        return $table;
    }
    public function show(Table $table)
    {
        return view('capacity.show', compact('capacity'));
    }

      public function edit(Table $table)
    {
        return view('capacity.edit',compact('capacity'));
    }

    public function update(Request $request, Table $table)
    {
        $table->capacity=$request->capacity;
        $table->save();
        return redirect()->route('capacity.index');
    }

    public function destroy(Table $table)
    {
        $table->delete();
        return redirect()->route('table.index');
    }
}
