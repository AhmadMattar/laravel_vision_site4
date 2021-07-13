<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::prefix('site4')->group(function(){
    Route::get('/home',[PagesController::class,'home'])->name('site4home');
    Route::get('/about',[PagesController::class,'about'])->name('site4about');
    Route::get('/services',[PagesController::class,'services'])->name('site4services');
    Route::get('/portfolio',[PagesController::class,'portfolio'])->name('site4portfolio');
    Route::get('/contact',[PagesController::class,'contact'])->name('site4contact');
});

Route::get('/', function () {
    return view('welcome');
});
