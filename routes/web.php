<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\menu;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TableController;
use App\Models\Category;
use App\Models\Dish;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homerestaurant');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//categoria
Route::get('categoria/listar',[CategoryController::class,'index'])->name('category.index')->middleware('auth');
Route::get('categoria/create',[CategoryController::class,'create'])->name('create.category')->middleware('auth');
Route::post('categoria/store', [CategoryController::class,'store'])->name('category.store')->middleware('auth');
Route::get('categoria/{category}',[CategoryController::class,'show'])->name('category.show')->middleware('auth');
Route::put('categoria/{category}',[CategoryController::class,'update'])->name('category.update')->middleware('auth');
Route::delete('categoria/{category}',[CategoryController::class,'destroy'])->name('category.destroy')->middleware('auth');
Route::get('categoria/{category}/editar',[CategoryController::class,'edit'])->name('category.edit')->middleware('auth');

//platos
Route::get('plato/listar',[DishController::class,'index'])->name('dish.index')->middleware('auth');
Route::get('plato/create',[DishController::class,'create'])->name('create.dish')->middleware('auth');
Route::post('plato/store', [DishController::class,'store'])->name('dish.store')->middleware('auth');
Route::get('plato/{dish}',[DishController::class,'show'])->name('dish.show')->middleware('auth');
Route::put('plato/{dish}',[DishController::class,'update'])->name('dish.update')->middleware('auth');
Route::delete('plato/{dish}',[DishController::class,'destroy'])->name('dish.destroy')->middleware('auth');
Route::get('plato/{dish}/editar',[DishController::class,'edit'])->name('dish.edit')->middleware('auth');


//orden
Route::get('orden/listar',[OrderController::class,'index'])->name('order.index');
Route::get('orden/create',[OrderController::class,'create'])->name('create.order');
Route::post('orden/store', [OrderController::class,'store'])->name('order.store');
Route::get('orden/{order}',[OrderController::class,'show'])->name('order.show');
Route::put('orden/{order}',[OrderController::class,'update'])->name('order.update');
Route::delete('orden/{order}',[OrderController::class,'destroy'])->name('order.destroy');
Route::get('orden/{order}/editar',[OrderController::class,'edit'])->name('order.edit');

//mesa
Route::get('mesa/listar',[TableController::class,'index'])->name('table.index')->middleware('auth');
Route::get('mesa/create',[TableController::class,'create'])->name('create.table')->middleware('auth');
Route::post('mesa/store', [TableController::class,'store'])->name('table.store')->middleware('auth');
Route::get('mesa/{table}',[TableController::class,'show'])->name('table.show')->middleware('auth');
Route::put('mesa/{table}',[TableController::class,'update'])->name('table.update')->middleware('auth');
Route::delete('mesa/{table}',[TableController::class,'destroy'])->name('table.destroy')->middleware('auth');
Route::get('mesa/{table}/editar',[TableController::class,'edit'])->name('table.edit')->middleware('auth');

Route::get('menu',[menu::class,'menu'])->name('menu');