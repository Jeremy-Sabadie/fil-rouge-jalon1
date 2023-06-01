<?php

use App\Http\Controllers\AvionController;
use Illuminate\Support\Facades\Route;
use Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web"  group. Make something great!
|
*/
use App\Http\Controllers\ticketsController;


//page de connection fournie par fortify:
Route::get('/', function () {
    return view('welcome');
}); //Fortify: route qui renvoie vers la page acceuil si l'utilisateur seulement si connecté.
Route::get('/test', function () {
    return 'acceuil';
})->middleware('auth');



//========================================================================================
//--------------------------------------AVION---------------------------------------------
//========================================================================================
// route pour afficher tous les avions
Route::get('/avion', [AvionController::class, 'AfficherAvions'])->name('avion_all');
//Route en GET qui dirige via le contôleur vers le formulaire de création:
Route::get('/create', [AvionController::class, 'toCreate'])->name('avion_form');
Route::get('/avion/{n}', [AvionController::class, 'detailTicket'])->name('avion_detail');

//route en post qui apelle le contrôleur avec la fonction create qui envoie le formulaire de céation:
Route::post('/create', [AvionController::class, 'store'])->name('avion_create');
Route::get('/create', [AvionController::class, 'new'])->name('avion_form');
//================================================================================================
//===============================================TICKET
//================================================================================================
//route /new en post qui apelle la fonction create du contrôleur des tickets avec la fonction create qui qui elle apellera la fonction du modèle qui stockera les valeurs des inputs dans la table TICKET:
Route::post('/new', [ticketsController::class, 'store'])->name('avion_create')->middleware('auth');
//route/new en get pour fournir le fprmulaire de création de ticket:
Route::get('/new', [ticketsController::class, 'form'])->name('new_ticket')->middleware('auth');

Route::post('logout', [ticketsController::class, 'logout'])->name('logout')->middleware('auth');
// route pour afficher le détail d'un ticket:
Route::get('/ticket/{n}', [ticketsController::class, 'detailTicket'])->name('ticket_detail');
Route::post('/ticket/{n}', [ticketsController::class,  'search'])->name('result');
//route vers la page de conection

//route vers la page d'acceuil utilisateur.
Route::get('/home', [ticketsController::class, 'home'])->name('home')->middleware('auth');
//route vers la page de tous les tickets.
Route::get('/tickets', [ticketsController::class, 'allTickets'])->name('all_tickets');

//Route home en post pour le traitement de la recherche:
Route::post('/home', [ticketsController::class, 'search'])->name('search');
//Route pour l'envoie d'u nouveau message:
Route::post('ticket/{id}',[ticketsController::class, 'storemsg'])->name('sumition_msg');



