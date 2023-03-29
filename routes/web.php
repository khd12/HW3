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


Route::get('/about',function(){

    $name = request('name');

    return view('about' , compact('name'));
});

Route::post('/store',function(){

    //$name = 'Mohammed';
    $name = request('name');
    return view('about' , compact('name'));
});



Route::get('tasks' , function(){

    $tasks=[

        'first-task' => 'Task 1',
        'second-task' => 'Task 2',
        'third-task' => 'Task 3',
    ];

    return view('tasks' , compact('tasks'));


});

Route::get('show/{id}' , function($id){

    $tasks=[
         'first-task' => 'Task 1',
        'second-task' => 'Task 2',
         'third-task' => 'Task 3',
    ];

    $task = $tasks[$id];

return view ('show', compact('task'));


});