<?php

use Illuminate\Support\Facades\Route;
use   App\Http\Controllers\ThemeController;


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

Route::controller(ThemeController::class)->name('Theme.')->group(function(){
    Route::get('/' , "home")->name('home');
    Route::get('/about' , "about")->name('about');
    Route::get('/services' , "services")->name('services');
    Route::get('/portfolio' , "portfolio")->name('portfolio');
    Route::get('/contact' , "contact")->name('contact');
 
});


 