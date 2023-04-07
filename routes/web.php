<?php

use Illuminate\Support\Facades\DB;
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

    $tasks = DB::table('tasks') -> get();

    return view('tasks',compact('tasks'));

});




Route::POST('store',function(){

    $tasks = DB::table('tasks') -> insert([

        'name' =>$_REQUEST['name']
    ]);

    return redirect()-> back();

});



Route::POST('delete/{id}', function ($id) {
    $tasks = DB::table('tasks') -> where('id','=',$id)-> delete();
    return redirect()-> back();


});
Route::get('update/{id}/edit', function ($id) {
    $tasks = DB::table('tasks') -> where('id','=',$id)
     -> update(['options->enabled' => true]);

    return redirect()-> back();


});