<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

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

Route::get('/about', function(){
    return view('about');
});

//Route for contacts page
Route::post('/contact',[ContactController::class,'storeForm'])->name('storeform');
Route::get('/contact',[ContactController::class,'createForm']);


//Route Resource for blog routes

Route::resource('blogs',BlogController::class);
