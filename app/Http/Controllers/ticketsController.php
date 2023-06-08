<?php

namespace App\Http\Controllers;


use Carbon\Carbon; //ligne qui permettra de récupérer la date actuelle pous la colone de la date de création du ticket.
use Illuminate\Http\Request;
use App\Models\TicketModel;
use App\Models\User;

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
        return view('new_ticket', ['tickets' => $tickets]);
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
        $status = $ticketModel->get_ticket_status($n);
        $ticket = $ticketModel->getone_ticket($n);
        $tickets = $ticketModel->getallTickets();
        // récupére tous les messages du ticket et les donner à la vue.
        $msg = $ticketModel->searchmsg($n);
        //Récupération des droits de l'utilisateur pour l'affichage de la mise à jour du status du ticket:
        $user= new User;
        $user = auth()->user();
        $NtiketController = new TicketModel();
        $right = $NtiketController->CurrentUser($user);

        return view('detail', ['ticket' => $ticket, 'tickets' => $tickets,'msg'=>$msg,'user'=>$user,'status'=>$status]);}


    public function store(Request $request)
    {// Récupération des différentes valeurs des inputs du formulaire dans des variables.Ces variables seront données au modèle pour qu'il les range dans la base de dnnées.
        $sujet = $request->input('sujet');
        $id_auteur= auth()->user()->id;
        $cdat = Carbon::now(); // Date actuelle
        $id_status=1;//Par défault le ticket est à 1 =ouvert.
        //Nouvelle instance de la classe ticketModel*:
        $ticketModel = new TicketModel();
        $res = $ticketModel->store($sujet,$id_auteur,$id_status,$cdat);
        $ticketModel = new TicketModel();
        $id= $request->route("idTicket");
        $status=$ticketModel->get_ticket_status($id);
        $tickets = $ticketModel->getallTickets();
        //Si la la création est retournée false on renvoie ver le formulaire de céation avec un message d'erreur
        if (!$res) {

            return view('new_ticket', ['message' => 'Ticket non créé !', 'tickets' => $tickets, 'status'=>$status]);
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
        $ticket = $one_ticket_model->getone_ticket();

        return view('detail', ['ticket' => $ticket]);
    }
    public function logout(Request $request)
    {
        Auth()->logout();
        return redirect('/login')->with(['msg_body' => 'You signed out!']);

    }
    public function search(Request $request)
    {

        $ticketModel = new TicketModel();

        $tickets = $ticketModel->Ticket_search($request->input("search"));

        $nbResultSearch = (is_null($tickets)) ? 0 : 1;
        if (count($tickets)) {
            # code...
           
            return view(
                'result',
                [
                    'tickets' => $tickets,
                    'nbresult' => $nbResultSearch,

                ]
            );
        } else {
            return view('home', ['tickets' => $tickets]);
        }
    }
    public function getmsg($n)
    {
        $TicketModel = new TicketModel();
        $msg = $TicketModel()->searchmsg($n);
        return view('detail', $msg);
    }
    //Controller pour la sommission d'un nouveau message:
    function storemsg( Request $request) {
    $newtiketModel=new TicketModel();
    $ticketId= $request->route("id");
    $contentMessage=$request->input('new_msg');
    $auteurId=auth()->user()->id;
    $n_msg=$newtiketModel->storemsg($ticketId,$contentMessage,$auteurId);

    return redirect()->route('ticket_detail', ['n' =>$ticketId]);
    }
    //La fonction userRight récupère le role de l'utilisateur actuellement autentifié par l'intermédiaire du modèle User, si ce role est égal à 'admin' sinon elle retourne la vue admin et l'objet $user qui permettra de faire une condition d'affichage dans la vue en fonction durole de ll'utilisateur.
    function userRight( Request $request) {
        $user=auth()->user();
    $NtiketController= new User();//Fait appel au modèle des users pour vérifier en BDD le role de l'utilisateur actuellement connecté.
    $right= $NtiketController->CurrentUser($user);
    //pour l'aside:
        $ticketModel = new TicketModel();
        $tickets = $ticketModel->getallTickets();

        return view('admin',['user'=>$user,'tickets'=>$tickets]);
}
    public function allUserTickets()
    {
        $user = auth()->user(); // Récupère l'utilisateur connecté
        $ticketModel = new TicketModel();
        $tickets = $ticketModel->getUserTickets($user->id);
        return view('all', ['tickets' => $tickets]);
    }
    public function closedTickets() {
        $user = auth()->user();
    $newticketModel= new TicketModel();
    $tickets=$newticketModel->closed($user->id);
    return view('closed',['tickets'=>$tickets]);
    }
    public function open_tickets() {
        $user = auth()->user();
    $newticketModel= new TicketModel();
    $tickets=$newticketModel->open_tickets($user->id);
    return view('open',['tickets'=>$tickets]);
    }
    public function pending_tickets()
    {
        $iduser = auth()->user()->id;
        $newticketModel = new TicketModel();
        $tickets = $newticketModel->pending_tickets($iduser);
        return view('pending', ['tickets' => $tickets]);
    }
    //Affichage de tickets terminés:
    public function closed_tickets() {
        $iduser = auth()->user()->id;
    $newticketModel= new TicketModel();

    $tickets=$newticketModel->close_tickets($iduser);
    return view('close',['tickets'=>$tickets]);
    }
    //Fonction servant à afficher les tickets en cours:

    //Fonction maj_status pour la mise à jour du status du ticket par un admin:
    public function maj_status(Request $request) {
        //
        $idTicket = $request->route("idTicket");
    //1.Récupère la valeur de l'input radio validé dans le formulaire de mise à jour:
        $new_status=$request->input('status');
    //2.initialise une nouvelle instance de la classe TicketModel:
    $new_icketModel= new TicketModel();
    //3.Fait apel de la fonction de cette instance qui sert à la mise à jour du ticket:
    $new_update=$new_icketModel->ticket_update($idTicket, $new_status);
    //4. Redirige vers la page de détiai du ticket:
    return redirect()->route('ticket_detail',['n'=>$idTicket]);
    }
}
