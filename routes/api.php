<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/contact',ContactController::class,'__invoke');
Route::post('/contact/create',ContactController::class,'__create');
Route::get('/contact/{contact_id}/edit',ContactController::class,'__edit');
Route::put('/contact/{contact_id}/update',ContactController::class,'__update');
Route::delete('/contact/{contact_id}/delete',ContactController::class,'__delete');

