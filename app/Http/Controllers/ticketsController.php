<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
    public function form()
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
    public function detailTicket($n)
    {
        $ticketModel = new AvionModel();
        $avion = $ticketModel->getone_ticket($n);
        return view('detail', ['ticket' => $ticket]);
    }
    public function store(Request $request)
    {
        //validation des input
        //to do vérif des inputs
        $id = $request->input('id');
        $idstatus = $request->input('idstatus');
        $sujet = $request->input('sujet');
        $typepanne = $request->input('typepanne');
        $cdat= Carbon::now();
        $ticketModel = new TicketModel();
        $res = $ticketModel->create($id, $sujet, $idstatus, $typepanne,$cdat);
        if (!$res) {

            return view('new_ticket', ['message' => 'ticket non créé!']);
        } else {
            return redirect()->route('avion_detail', ['n' => $id,])->withMessage('mon message.');
        }


    }
    public function all_tickets() {
    $ticketModel= new TicketModel();
    return $ticketModel->getallTickets();
    }





}
