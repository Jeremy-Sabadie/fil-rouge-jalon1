<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ticketsController extends Controller
{
    //fonction home pour la route vers la page de tous l'acceuil.
    public function home()
    {
        return view('home');
    }
    //fonction all pour la route vers la liste de tous les tickets:
    public function all()
    {
        return view('all');
    }

    //fonction new pour la route vers la page de création d'un nouveau ticket:
    public function new()
    {
        return view('new');
    }
    //fonction close pour la page des tickets fermés:
    //Page des tickets fermés
    public function close()
    {
        return view('close');
    }

    //route vers la page des tickets en attente.
    public function waiting()
    {
        return view('waiting');
    }
}
