<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\managerController;

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
//     return view('welcome');
// });

Route::view('/' ,'welcome');
// this is the route for home
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// for admin page 
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
// this is route for task navigation
Route::resource(name:'files', controller:\App\Http\Controllers\TaskController::class);
// this is route for starred navigation
Route::resource(name:'starred', controller:\App\Http\Controllers\StarredController::class);
// this is route for Shared navigation
Route::resource(name:'shared', controller:\App\Http\Controllers\SharedController::class);

// for contact us 
Route::get('/contact',[ContactController::class,'contact']);
// for smtp send mail function
Route::post('/send-message',[ContactController::class , 'sendEmail'])-> name('contact.send');

// Auth::routes(['verify => true']);


Route::get('/uploadpage',[TaskController::class,'uploadpage']);

Route::post('/uploadproduct',[TaskController::class,'store']);


Route::get('/show',[TaskController::class,'show']);

Route::get('/download/{file}',[TaskController::class,'download']);

Route::get('/view/{id}',[TaskController::class,'view']);

//menu bar using UsersController and user.blade.php
route::view("/user","user");

route::get("user",[UsersController::class,'loadView']);

// route::get("management",[managerController::class,'manView']);

route::get("management",[TaskController::class,'index']);

//delete
Route::get('/CP\resources\views\showproduct.blade.php',[TaskController::class,'showproduct']);
Route::get('/delete/{id}',[TaskController::class,'delete']);
Route::post('/delete/{id}',[TaskController::class,'delete']);


// edit

Route::get('/CP\resources\views\showproduct.blade.php',[TaskController::class,'showproduct']);
Route::get('/edit/{id}',[TaskController::class,'showData']);

Route::any('/edit',[TaskController::class,'edit']);


