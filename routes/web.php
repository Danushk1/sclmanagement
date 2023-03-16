<?php

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
    return view('wel');
});

Auth::routes();

Route::middleware('auth')->group(function(){


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/edit/{id}',[App\Http\Controllers\HomeController::class,'update']);
    Route::post('/addsubmark/{id}'   ,[App\Http\Controllers\SubjectController::class,'store']);
    Route::get('/delete/{id}'   ,[App\Http\Controllers\SubjectController::class,'delete']);
    Route::get('/pdfdowonload/{id}', [App\Http\Controllers\PdfController::class, 'index']);
});
