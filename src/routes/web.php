<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;


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

Route::get('/', [ContactController::class, 'index'])->name('form.index');
Route::post('/confirm',[ContactController::class,'confirm'])->name('form.confirm');
Route::post('/process', [ContactController::class,'process'])->name('form.process');
Route::get('/thanks',[ContactController::class,'thanks'])->name('form.thanks');
Route::get('/search',[ContactController::class, 'search']);

Route::get('/login',[UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'entry']);
Route::post('/admin', [UserController::class, 'admin']);

Route::get('/admin',[UserController::class, 'index']);

