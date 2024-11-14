<?php

use App\Http\Controllers\PublicConctroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicConctroller::class, 'homepage'])->name('homepage');

Route::get('/contact', [PublicConctroller::class, 'contact'])->name('contact');
Route::get('/contact/submit', [PublicConctroller::class, 'contactSubmit'])->name('contact.submit');

