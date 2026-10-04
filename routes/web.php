<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route Latihan Mandiri & Profil
Route::view('/profil-kelas', 'profil-kelas')
    ->name('profil-kelas');

Route::view('/bantuan', 'bantuan')
    ->name('bantuan');

// Route Katalogo Buku (Modul)
Route::get('/books', [BookController::class, 'index'])
    ->name('books.index');

Route::get('/books/{id}', [BookController::class, 'show'])
    ->whereNumber('id')
    ->name('books.show');