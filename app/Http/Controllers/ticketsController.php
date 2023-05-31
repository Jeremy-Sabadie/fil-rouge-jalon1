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
        $ticketModel = new TicketModel();
        $tickets = $ticketModel->getallTickets();
        return view('home', ['tickets' => $tickets]);
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
        $ticketModel = new TicketModel();
        $tickets = $ticketModel->getallTickets();
        return view('new_ticket',['tickets'=>$tickets]);
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
        $tickets = $ticketModel->getallTickets();
        return view('detail', ['ticket' => $ticket, 'tickets'=>$tickets]);
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
        $ticketModel = new TicketModel();
        $tickets = $ticketModel->getallTickets();
        //Si la la création est retournée false on renvoie ver le formulaire de céation avec un message d'erreur
        if (!$res) {

            return view('new_ticket', ['message' => 'Ticket non créé !', 'tickets' => $tickets]);
            //Sinon on renvoi vers le détail du ticket créé avec un message:
        } else {
            return redirect()->route('ticket_detail', ['n' => $res])->withMessage('Ticket créé');
        }
    }
    //Fonction qui créer une nouvelle instance du modèle des tickets et qui retourne le résultat de la fonction chargée de récupérer tous les éléments de la table des tickets.
    public function allTickets()
    {
        $ticketModel = new TicketModel();
        $tickets = $ticketModel->getallTickets();
        return view('all', ['tickets' => $tickets]);
    }


    public function one_ticket($n)
    {
        $one_ticket_model = new TicketModel();
        $ticket = $one_ticket_model->getone_ticket;
        return view('detail', ['ticket' => $ticket]);
    }
    public function logout(Request $request)
    {
        Auth()->logout();
        return redirect('/login')->with(['msg_body' => 'You signed out!']);

    }
    public function search(Request $request) {

    $ticketModel= new TicketModel();

    $ticket = $ticketModel->search($request->input("search"));

    $tickets = $ticketModel->getallTickets();

    $nbResultSearch = (is_null($ticket))? 0 : 1;

    return view('detail',
    [
        'tickets' => $tickets,
        'nbresult' => $nbResultSearch,
        's'=>$ticket
    ]);
    }
}
