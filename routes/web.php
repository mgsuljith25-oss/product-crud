<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');
Route::get('/brand/create', [BrandController::class, 'create'])->name('brands.create');
Route::post('/brand/store', [BrandController::class, 'store'])->name('brands.store');
