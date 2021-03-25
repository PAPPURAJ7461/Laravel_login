<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
Route::get('/login1', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/sign_up',[App\Http\Controllers\UserController::class, 'signup']);
Route::post('/auth',[App\Http\Controllers\UserController::class, 'authenticate']);
Route::get('/logout', function () {
Session::forget('email');
Session::forget('f_name');
Session::forget('l_name');
Session::flash('message', "Logout Successfully ");
Session::flash('class', "alert-success");
return redirect('login1');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::post('/register',[App\Http\Controllers\UserController::class, 'register']);

Route::middleware(['logindata'])->group( function(){

Route::get('/dashboard',[App\Http\Controllers\UserController::class, 'dashboard']);
Route::get('/artical_list',[App\Http\Controllers\ArticalController::class,'artical_list']);
Route::get('/view_artical',[App\Http\Controllers\ArticalController::class,'view_artical']);
Route::get('/edit_artical',[App\Http\Controllers\ArticalController::class,'edit_artical']);
Route::post('/artical_update',[App\Http\Controllers\ArticalController::class,'artical_update']);
Route::get('/artical_list',[App\Http\Controllers\ArticalController::class,'artical_list']);
Route::get('/add_artical',[App\Http\Controllers\ArticalController::class,'add_artical']);
Route::post('/arical_save',[App\Http\Controllers\ArticalController::class,'artical_save']);
Route::any('/cetegory_list',[App\Http\Controllers\CetegoryController::class,'cetegory_list']);
Route::any('/add_cetegory',[App\Http\Controllers\CetegoryController::class,'add_cetegory']);
Route::post('/cetegory_save',[App\Http\Controllers\CetegoryController::class,'cetegory_save']);


});
