<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthControlller;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});
   

Route::controller(AuthController::class)->group(function() {
    Route::get('register','register')->name('register');
    Route::post('register','registerSave')->name('register.save');

    Route::get('login','login')->name('login');
    Route::post('login','loginAction')->name('login.action');

    Route::post('logout',function() {
        Auth::logout();
        return redirect('/login');})->name('logout');
    
});    

Route::controller(MenuController::class)->prefix('menu')->group(function(){
    Route::get('','index')->name('menu');
});
Route::controller(ChefController::class)->prefix('chef')->group(function(){
    Route::get('','index')->name('chef');
});

Route::controller(GalleryController::class)->prefix('gallery')->group(function(){
    Route::get('','index')->name('gallery');
});

Route::controller(BookController::class)->prefix('book')->group(function(){
    Route::get('','index')->name('book');
    Route::get('create','create')->name('book.create');
    Route::post('store','store')->name('book.store');
    
});
// web.php
Route::get('cont', function() {
    return view('contact');
})->name('contact'); // This names the route

Route::get('abt',function(){
    return view('about');
})->name('about');

Route::get('event',function(){
return view('event');
})->name('event');

Route::get('special',function(){
return view('special');
})->name('special');