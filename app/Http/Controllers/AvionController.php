<?php

namespace App\Http\Controllers;

use App\Models\AvionModel;
use Illuminate\Http\Request;

class AvionController extends Controller
{
    public function AfficherAvions()
    {
        $avionModel = new AvionModel();
        $avions=$avionModel->getall();
        //dd($avionModel->getall());
        return view('avions',['avions'=>$avions]);
    }

}
