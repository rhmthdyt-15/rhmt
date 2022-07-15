<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::get('/berhasil', [LoginController::class, 'berhasil'])->middleware('auth');


Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/create', [LoginController::class, 'create']);
Route::post('/store', [LoginController::class, 'store']);
Route::get('/show/{id}', [LoginController::class, 'show']);
Route::post('/update/{id}', [LoginController::class, 'update']);
Route::get('/destory/{id}', [LoginController::class, 'destory']);
