<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FruitController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ClientController::class, 'index'])->name('clientpage.index');
Route::get('/Shop',[ClientController::class, 'shop'])->name('clientpage.shop');
Route::get('/news',[ClientController::class, 'news'])->name('clientpage.news');
Route::get('/contact',[ClientController::class, 'contact'])->name('clientpage.contact');
Route::get('/about',[ClientController::class, 'about'])->name('clientpage.about');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admin/dashboard', [Admincontroller::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/ajout', [Fruitcontroller::class, 'ajout'])->name('admin.ajout');
    Route::get('/admin/liste', [Fruitcontroller::class, 'listes'])->name('admin.liste');
    Route::get('/admin/listevente', [Admincontroller::class, 'listevente'])->name('admin.listevente');
    Route::get('/admin/personnel', [FruitController::class, 'personnel'])->name('admin.personnel');
    Route::get('/admin/categorie', [AdminController::class, 'categorie'])->name('admin.categorie');
    Route::get('/admin/liste_categorie', [CategorieController::class, 'listecategorie'])->name('admin.listecategorie');
    Route::post('/admin/categorie', [CategorieController::class, 'store'])->name('categorie.store');
    Route::post('/admin/ajouter', [FruitController::class, 'saves'])->name('fruit.saves');
    // Route::get('/admin/liste', [CarsController::class, 'index'])->name('admin.liste');
    // Route::delete('/cars/{id}', [CarsController::class, 'destroy'])->name('cars.destroy');
    // Route::get('/user/{id}/modifier', [RegisteredUserController::class, 'edite'])->name('admin.edite');
    // Route::post('/user/{id}/update', [RegisteredUserController::class, 'modifier'])->name('admin.modifier');
    // Route::delete('/user/{id}', [RegisteredUserController::class, 'destroy'])->name('admin.personnele');
    // Route::get('/cars/{id}/form', [CarsController::class, 'form'])->name('admin.form');
    // Route::post('/cars/{id}/update', [CarsController::class, 'update'])->name('admin.update');
    Route::get('/admin/reservation', [Admincontroller::class, 'reservation'])->name('admin.reservation');
});

require __DIR__.'/auth.php';
