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
    //fonction home pour la route vers la page de conection.
    public function signup()
    {
        return view('signup');
    }
    //fonction home pour la route vers la page de création de compte.
    public function signin()
    {
        return view('signin');
    }
    //fonction all pour la route vers la liste de tous les tickets:
    public function all()
    {
        return view('all');
    }

    //fonction new pour la route vers la page de création d'un nouveau ticket:
    public function new()
    {
        return view('new_ticket');
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
    //route vers la page du détail du ticket.
    public function detail()
    {
        return view('detail');
    }



}
