<?php

use Illuminate\Support\Facades\Route;
use App\Models\check_model;

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
Route::get('/checkmodel',function(){
    //get all row
    $allvalue = check_model::all();

    //get a single row
    $singlevalue = check_model::find(12);

    //add row in check_model database with fillable
    /*$addvalue = check_model::create([
        'name' => 'asif',
        'email' => 'asb@@@@@s',
        'address' => 'adressdddsd',
    ]);

    */
    //update fields value
    /*$findvalue = check_model::find(223);
    $findvalue->name = 'asifhimu';
    $findvalue->save();
    */

    //delete a row
    $value = check_model::destroy(226);
    return $value;
});