<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/menu.html', function () {
    return view('menu.html');
});
 
Route::get('/ผลงานของเรา.html', function () {
    return view('ผลงานของเรา.html');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//เมนู Product
Route::get('admin/product/index',[ProductController::class,'index'])->name('p.index');
Route::get('admin/product/create',[ProductController::class, 'create']);
Route::post('admin/product/insert',[ProductController::class,'insert']);
Route::get('admin/product/delete/{id}',[ProductController::class,'delete']);
Route::get('admin/product/edit/{id}',[ProductController::class,'edit']);
Route::post('admin/product/update/{id}',[ProductController::class,'update']);
