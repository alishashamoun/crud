<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);

// form 
Route::get('/home/create', [\App\Http\Controllers\HomeController::class, 'create']);

// form submit
Route::post('/home/store', [\App\Http\Controllers\HomeController::class, 'store']);

// form edit
Route::get('/home/edit/{id}', [\App\Http\Controllers\HomeController::class, 'edit']);

// form update
Route::put('/home/update/{id}', [\App\Http\Controllers\HomeController::class, 'update']);



// data delete
Route::delete('/home/delete/{id}', [\App\Http\Controllers\HomeController::class, 'delete']);




