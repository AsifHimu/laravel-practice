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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/newroute',function(){
    return view('test.test',['name' => 'Asif Bin kabir']); //view with variable
});
Route::get('/existroute',function(){
    $check = View::exists('test.test'); //view with existing check
    if($check){
        return view('test.test1');
    }
    else{
        return 'view not found';
    }
});
