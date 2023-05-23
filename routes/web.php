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
use App\Http\Controllers\ticketsController;

//route vers la page de conection
Route::get('/signin', [ticketsController::class, 'signin'])->name('signin');
//route vers la page de conection

//route vers la page de création de compte.
Route::get('/signup', [ticketsController::class, 'signup'])->name('signup');
//route vers la page d'acceuil utilisateur.
Route::get('/home', [ticketsController::class, 'home'])->name('home');
//route vers la page de tous les tickets.
Route::get('/all', [ticketsController::class, 'all'])->name('all');
//route vers la page de dréation de ticket.
Route::get('/detail', [ticketsController::class, 'detail'])->name('detail');
//route vers la page des tickets fermés.
Route::get('/', function () {
    return view('close');
})->name('close');
//route vers la page des tickets en attente.
Route::get('/waiting', function () {
    return view('waiting');
})->name('waiting');
//route vers la page de recherche de ticket par filtre.
Route::get('/search', function () {
    return view('search');
})->name('search');
Route::get('/closed', function () {
    return view('close');
})->name('close');
Route::get('/waiting', function () {
    return view('waiting');
})->name('waiting');
// liaison avec le controleurs:





Route::get('/', [ticketsController::class, 'detail']);
Route::get('/', [ticketsController::class, 'close']);
Route::get('/', [ticketsController::class, 'waiting']);
