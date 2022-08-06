<?php

use App\Http\Controllers\Data\PrintMessageController;
use App\Http\Controllers\HelloController;
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

Route::get('/hello',[HelloController::class,'print'])->name('hello');
Route::get('/print',[PrintMessageController::class,'message'])->name('name');
Route::get('users',[PrintMessageController::class,'users'])->name('users.all');

