<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ClientController;


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


Route::get('/',[ClientController::class, 'index'])->name('clientpage.index');
Route::get('/Shop',[ClientController::class, 'shop'])->name('clientpage.shop');
Route::get('/news',[ClientController::class, 'news'])->name('clientpage.news');
Route::get('/contact',[ClientController::class, 'contact'])->name('clientpage.contact');
Route::get('/about',[ClientController::class, 'about'])->name('clientpage.about');
