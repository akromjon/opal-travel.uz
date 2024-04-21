<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/tours',[PagesController::class,'tours'])->name('tours');
Route::get('/gallery',[PagesController::class,'gallery'])->name('gallery');
Route::get('/contact',[PagesController::class,'contact'])->name('contact');


