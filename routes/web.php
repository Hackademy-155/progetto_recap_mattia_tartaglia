<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicConctroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicConctroller::class, 'homepage'])->name('homepage');

Route::get('/contact', [PublicConctroller::class, 'contact'])->name('contact');
Route::get('/contact/submit', [PublicConctroller::class, 'contactSubmit'])->name('contact.submit');

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');

Route::post('/contact/submit', [PublicConctroller::class, 'contactSubmit'])->name('contact.submit');
