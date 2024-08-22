<?php

use App\Http\Controllers\AvionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ticketsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" group. Make something great!
|
*/

// Page de connexion fournie par Fortify
Route::get('/', function () {
    return view('welcome');
});

// Route qui renvoie vers la page d'accueil si l'utilisateur est connecté
Route::get('/test', function () {
    return 'accueil';
})->middleware('auth');

// Route pour créer un ticket (POST)
Route::post('/new', [ticketsController::class, 'store'])->name('avion_create')->middleware('auth');

// Route pour afficher le formulaire de création de ticket (GET)
Route::get('/new', [ticketsController::class, 'form'])->name('new_ticket')->middleware('auth');

// Route pour la déconnexion
Route::post('logout', [ticketsController::class, 'logout'])->name('logout')->middleware('auth');

// Route pour afficher le détail d'un ticket
Route::get('/ticket/{n}', [ticketsController::class, 'detailTicket'])->name('ticket_detail');

// Route pour la page d'accueil utilisateur
Route::get('/home', [ticketsController::class, 'home'])->name('home')->middleware('auth');

// Route pour afficher tous les tickets de l'utilisateur
Route::get('/tickets', [ticketsController::class, 'allUserTickets'])->name('all_tickets');

// Route pour le traitement de la recherche (POST)
Route::post('/home', [ticketsController::class, 'search'])->name('search');

// Route pour l'envoi d'un nouveau message
Route::post('ticket/{id}', [ticketsController::class, 'storemsg'])->name('sumition_msg');

// Route pour accéder à la page admin
Route::get('/admin', [ticketsController::class, 'userRight'])->name('admin')->middleware('auth');

// Route pour voir les tickets ouverts
Route::get('/open', [ticketsController::class, 'open_tickets'])->name('open')->middleware('auth');

// Route pour voir les tickets en cours
Route::get('/pending', [ticketsController::class, 'pending_tickets'])->name('pending')->middleware('auth');

// Route pour voir les tickets fermés
Route::get('closed', [ticketsController::class, 'closed_tickets'])->name('close')->middleware('auth');

// Route pour la soumission du formulaire de mise à jour du statut du ticket
Route::post('/ticket/{idTicket}/status', [ticketsController::class, 'maj_status'])->name('maj_status');
