<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TicketModel extends Model
{
    use HasFactory;
    public function getallTickets()
    {
        return DB::select('select t.*,s.label
        from ticket as t
        inner join status as s on t.id_status=s.id;');
    }
    function getone($n)
    {
        return DB::selectOne('select * from ticket join status on ticket.id_status=status.id
        where ticket.id =?;', [$n]);
    }
    function getone_ticket($n)
    {
        return DB::selectOne('select * from ticket where ticket.id =?;', [$n]);
    }
    function store($sujet, $id_auteur,$id_status, $cdat)
    {
        //to do gestion des exeptions:

        try {
            $id = DB::table('ticket')->insertGetId([
                'sujet' => $sujet,
                'id_auteur'=>$id_auteur,
                'id_status'=>$id_status,
                'created_dat' => $cdat,
            ]);
            return $id;
        } catch (Exception $e) {
            return false;
        }
        return true;
    }
    function Ticket_search( $search)
    {

        try {
            return DB::select('select ticket.id,ticket.sujet,ticket.created_dat, status.label from ticket
            join status on ticket.id_status= status.id
            where ticket.id = :search or sujet like UPPER(:searchLike) or sujet like :searchLike2 order by ticket.id;',['search'=>$search, 'searchLike'=>'%'.$search.'%', 'searchLike2' => '%' . $search . '%']);

        } catch (Exception $e) {
            return false;
        }
        return true;

    }
function searchmsg($n) {
return DB::select('select * from messages
join ticket_message on messages.id_message=ticket_message.id_message
join users on messages.id_auteur=users.id
 where id_ticket =?;', [$n]);
}

/**
 * Insérer un message et lier ce message à un ticket
 * @param int $ticketId Identifiant du ticket
 * @param string $contentMessage Contenu du message à insérer
 * @param int $auteurId Identifiant de l'auteur du message
 * @return int Identifiant du message insérer
 */
 function storemsg($ticketId, $contentMessage, $auteurId) {
    try{
        //Debut Transaction
        DB::beginTransaction();
        // Insertion du message
        DB::insert('insert into messages (id_auteur, content, created_dat) values (?, ?, ?)', [$auteurId, $contentMessage, Carbon::now()]);
        $idMessage  = DB::selectone('select LAST_INSERT_ID() as messageID')->messageID;
        //Liaison du message et du ticket
        DB::insert('insert into ticket_message (id_message, id_ticket) values (?, ?)', [$idMessage, $ticketId]);
        //Fin Trransaction
        DB::commit();
        return $idMessage;
    }
    catch(Exception $exception) {
        throw $exception;
        return -1;
    }
 }

    function CurrentUser($n)
    {
        return DB::selectOne('select  role
from users   where  id=?;', [$n]);
    }
    public function getUserTickets($userId)
{
    return DB::select('
    SELECT t.*, s.label FROM ticket as t
    inner join status as s on t.id_status=s.id
    join users on t.id_auteur=users.id WHERE t.id_auteur = ?;
     ', [$userId]);
}
 public function closed($userId) {
        return DB::select("SELECT * FROM ticket JOIN users  ON ticket.id_auteur =users.id
WHERE id_status= ?;",[1]);
}


//Fonction qui met à jour le status du ticket en base de données:
 public function ticket_update($idTicket, $nstatus)
{
   return DB::update("update ticket set id_status = ? where id = ?", [$nstatus, $idTicket]);
}
    function get_ticket_status($n)
    {
        return DB::selectOne('select  label
        from status join ticket on ticket.id_status=status.id
   where  ticket.id=?;', [$n]);
    }

     public function open_tickets($userid)
    {
        return DB::select('select *from ticket
        join status on ticket.id_status=status.id
        join users on ticket.id_auteur= users.id
        WHERE status.id = ? AND users.id = ?', [1, $userid]);
    }
     public function pending_tickets($userid)
    {
        return DB::select('select *from ticket
        join status on ticket.id_status=status.id
        join users on ticket.id_auteur= users.id
        WHERE status.id = ? AND users.id = ?',[2,$userid]);
    }
 public function close_tickets($userid)
    {
        return DB::select('select *from ticket
        join status on ticket.id_status=status.id
        join users on ticket.id_auteur= users.id
        WHERE status.id = ? AND users.id = ?',[3,$userid]);
    }

}


