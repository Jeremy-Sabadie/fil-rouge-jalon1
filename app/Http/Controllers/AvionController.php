<?php

namespace App\Http\Controllers;

use App\Models\AvionModel;
use Illuminate\Http\Request;

class AvionController extends Controller
{
    // méthode pour afficher tous les avions
    public function AfficherAvions()
    {
        $avionModel = new AvionModel();
        $avions=$avionModel->getall();
        //dd($avionModel->getall());
        return view('avions',['avions'=>$avions]);
    }

    //méthode pour afficher l'avion No $n
    public function AfficherAvion($n) {
        $avionModel = new AvionModel();
        dd($avionModel->getone($n));
    }

}
