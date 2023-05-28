<?php

namespace App\Http\Controllers;

use Carbon\Carbon; //ligne qui permettra de récupérer la date actuelle pous la colone de la date de création du ticket.
use Illuminate\Http\Request;
use App\Models\TicketModel;

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
        return view('closed_tickets');
    }

    //route vers la page des tickets en attente.
    public function waiting()
    {
        return view('waiting');
    }
    //route vers la page du détail du ticket.
    public function detailTicket($n)
    {
        $ticketModel = new ticketModel();
        $ticket = $ticketModel->getone_ticket($n);
        return view('detail', ['ticket' => $ticket]);
    }

    public function store(Request $request)
    {


        // Récupération des différentes valeurs des inputs du formulaire dans des variables.Ces variables seront données au modèle pour qu'il les range dans la base de dnnées.
        $idstatus = $request->input('idstatus');
        $sujet = $request->input('sujet');
        $typepanne = $request->input('typepanne');
        $cdat = Carbon::now(); // Date actuelle

        //Nouvelle instance de la classe ticketModel*:
        $ticketModel = new TicketModel();
        $res = $ticketModel->store($sujet, $idstatus, $typepanne, $cdat);
        //Si la la création est retournée false on renvoie ver le formulaire de céation avec un message d'erreur
        if (!$res) {
            return view('new_ticket', ['message' => 'Ticket non créé !']);
            //Sinon on renvoi vers le détail du ticket créé avec un message:
        } else {
            return redirect()->route('ticket_detail', ['n' => $res])->withMessage('Ticket créé');
        }
    }
    //Fonction qui créer une nouvelle instance du modèle des tickets et qui retourne le résultat de la fonction chargée de récupérer tous les éléments de la table des tickets.
    public function allTickets()
    {
        $ticketsModel = new TicketModel();
        $tickets = $ticketsModel->getallTickets();
        return view('all',['tickets'=>$tickets]);
        //return $ticketsModel->getallTickets();
    }

    public function one_ticket($n) {
   $one_ticket_model=new ticketsModel();
   $ticket=$one_ticket_model->getone_ticket;
   return view('detail',['ticket'=>$ticket]);

    }

    # code...
}





