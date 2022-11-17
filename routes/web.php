<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/add', function () {
    return view('add');
});

Route::get('/edit', function () {
    return view('edit');
});
Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/sidebar', function () {
    return view('sidebar');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
// Route::get('/add',ContactController::class,'add');
