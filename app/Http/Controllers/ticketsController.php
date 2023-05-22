<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ticketsController extends Controller
{
    public function home()
    {
        return view('home');
    }
    //route vers la page de tous les tickets
    public function all()
    {
        return view('all');
    }

    //route vers la page de dréation de ticket
    public function new()
    {
        return view('new');
    }
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
