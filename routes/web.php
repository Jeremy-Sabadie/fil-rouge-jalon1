<?php

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
//route vers la page de conection
Route::get('/signin', function () {
    return view('signin');
})->name('signin');
//route vers la page de création de compte.
Route::get('{/signup', function () {
    return view('signup');
})->name('signup');
//route vers la page d'acceuil utilisateur.
Route::get('{/home', function () {
    return view('home');
})->name('home');
//route vers la page de tous les tickets.
Route::get('{/all', function () {
    return view('all');
})->name('all');
//route vers la page de dréation de ticket.
Route::get('{/new', function () {
    return view('new');
})->name('new');
//route vers la page de dréation de ticket.
Route::get('{/detail', function () {
    return view('detail');
})->name('detail');
//route vers la page de recherche de ticket par filtre.
Route::get('{/search', function () {
    return view('search');
})->name('search');



