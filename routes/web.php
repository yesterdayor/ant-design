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

Route::get('index', [\App\Http\Controllers\UserController::class, 'index']);

Route::prefix('study')->name('study')->group(function () {
    Route::get('index', function () {
       return view('study.index', ['name' => '邓志秋', 'record' => [],
           'errCode' => 200,
           'jobs'    => ['22', '33', '44', '55', '34343'],
           'array'   => ['age' => 23, 'sex' => '男']]);
    });
});

Route::get('tasks', function (){
   return view('tasks', ['tasks' => [1,2,3,5,6,7], 'title' => '哇哇哇']);
});

Route::get('child', function (){
   return view('child');
});


Route::get('counter', \App\Http\Livewire\Counter::class );
Route::get('hello_world', \App\Http\Livewire\HelloWorld::class);

Route::get('verbatim', function () {
   return view('home');
});
Route::get('post', \App\Http\Livewire\ShowPosts::class);
