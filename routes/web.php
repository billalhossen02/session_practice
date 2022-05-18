<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
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
    return view('form');
});


Route::get('putdata',[SessionController::class, 'putData']);
Route::get('getdata',[SessionController::class, 'getData']);
Route::get('deletedata',[SessionController::class, 'deleteData']);
Route::get('deletep',[SessionController::class, 'deletep']);
Route::get('home',[SessionController::class, 'index'])->name('home');
Route::post('store',[SessionController::class,'store']);