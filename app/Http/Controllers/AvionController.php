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
        $avions = $avionModel->getall();
        //dd($avionModel->getall());
        return view('avions', ['avions' => $avions]);
    }

    //méthode pour afficher l'avion No $n
    public function AfficherAvion($n)
    {
        $avionModel = new AvionModel();
        $avion = $avionModel->getone($n);
        return view('avion', ['avion' => $avion]);
    }
    //route vers le formulaire de céation:
    public function toCreate()
    {
        //retourne la vue contenant le formulaire de création:
        return view('creation');
    }
    public function store(Request $request)
    {
        //validation des input
        //to do vérif des inputs
        $avno = $request->input('avno');
        $avnom = $request->input('nom');
        $capacity = $request->input('capacity');
        $location = $request->input('location');
        $avionModel = new AvionModel();
        $res = $avionModel->create($avno, $avnom, $capacity, $location);
        if (!$res) {

            return view('creation',['message'=>'avion non créé!']);
        } else {
            return redirect()->route('avion_detail', ['n' => $avno,])->withMessage('mon message.');
        }


    }
}
