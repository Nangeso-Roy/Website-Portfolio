<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
// Route::get('/blog',[BlogController::class,'index']);
// Route::get('/blog/{blog}',[BlogController::class,'show']);
// Route::get('/blog/create',[BlogController::class,'create']);
// Route::post('/blog/create/post',[BlogController::class,'store']);
// Route::get('/blog/{blog}/edit',[BlogController::class,'edit']);
// Route::put('/blog/{blog}/edit',[BlogController::class,'update']);
// Route::delete('/blog/{blog}/edit',[BlogController::class,'destroy']);

//Route Resource
Route::resource('blogs',BlogController::class);