<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreateController;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Schema;

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

Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/user', 'App\Http\Controllers\UserController@index');
//Route::resources('/user', 'UserController');
Route::get('/event', 'App\Http\Controllers\EventController@index');
//Route::post('add', [UserController::class, 'addData']);
Route::view('/form', 'create');
Route::post('/submit', 'App\Http\Controllers\CreateController@save');
Route::resource('create', 'App\Http\Controllers\CreateController');

//modals
Route::get('/modals', 'App\Http\Controllers\StationCreate@index');

//Route::get('/about/{id}/{name}', function($id, $name) {
//    return 'This is user ' .$name. ' with id of ' .$id;
//});

//Route::get('/about', function() {
//    return ('pages.about');
//});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
