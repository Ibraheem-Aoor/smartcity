<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\ContactController;
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

Route::get('/', [HomeController::class , 'index'])->name('home');
Route::prefix('site')->as('site.')->group(function(){
    Route::get('/about' , [HomeController::class , 'about'])->name('about');
    Route::get('/services' , [HomeController::class , 'services'])->name('core_services');
    Route::get('/apply' , [HomeController::class , 'apply'])->name('apply');
    Route::get('/contact' , [HomeController::class , 'contact'])->name('contact');
    Route::post('contact-submit', [ContactController::class, 'store'])->name('contact.submit');

});
Route::get('/{slug}' , [HomeController::class , 'page'])->name('page');


