<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // create a array of integers
//     // get a random string from array named food_images
//     // return view with random string

//     $numbers = [1, 2, 3, 4, 5];
//     return view('Racipe.index', ['recipes' => $numbers]);
// });
Route::get('/', function () {
    return redirect('/recipes');
});

Route::get('/recipes', 'App\Http\Controllers\RecipeController@index')->name('recipes.index');

Route::get('/recipes/create', 'App\Http\Controllers\RecipeController@create')->name('recipes.create');

Route::post('/newrecipe', 'App\Http\Controllers\RecipeController@store')->name('recipes.store');

Route::get('/recipes/{recipe}', 'App\Http\Controllers\RecipeController@show')->name('recipes.show');

//Route::delete('/recipes/{recipe}', 'App\Http\Controllers\RecipeController@destroy')->name('recipes.destroy');

Route::get('/ingredients','App\Http\Controllers\IngredientsController@index')->name('ingredients.index');

Route::get('/ingredients/{ingredient}', 'App\Http\Controllers\IngredientsController@show')->name('ingredients.show');
