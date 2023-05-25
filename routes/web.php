<?php

use App\Http\Controllers\AvionController;
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
Route::get('/all', [ticketsController::class, 'getall_tickets'])->name('all');
//route vers la page de dréation de ticket.
Route::get('/detail', [ticketsController::class, 'getone_ticket'])->name('detail');
//route vers la page des tickets fermés
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



// route pour afficher le détail d'un ticket:
Route::get('/ticket/{n}', [ticketsController::class, 'AfficherAvion'])->name('ticket_detail');
//========================================================================================
//--------------------------------------AVION---------------------------------------------
//========================================================================================
// route pour afficher tous les avions
Route::get('/avion', [AvionController::class, 'AfficherAvions'])->name('avion_all');
//Route en GET qui dirige via le contôleur vers le formulaire de création:
Route::get('/create', [AvionController::class, 'toCreate'])->name('avion_form');
Route::get('/avion/{n}', [AvionController::class, 'detailTicket'])->name('ticket_detail');

//route en post qui apelle le contrôleur avec la fonction create qui envoie le formulaire de céation:
Route::post('/create', [AvionController::class, 'store'])->name('avion_create');
Route::get('/create', [AvionController::class, 'new'])->name('avion_form');
//================================================================================================
//route /new en post qui apelle la fonction create du contrôleur des tickets avec la fonction create qui qui elle apellera la fonction du modèle qui stockera les valeurs des inputs dans la table TICKET:
Route::post('/new', [ticketsController::class, 'store'])->name('avion_create');
//route/new en get pour fournir le fprmulaire de création de ticket:
Route::get('/new', [ticketsController::class, 'form'])->name('new_ticket');
//Route pour tous les tickets faisant appel à la fonction allTickets qui se servira du modèle pour afficher tous les tickets:
Route::get('/tickets', [AvionController::class, 'allTTickets'])->name('allTickets');


