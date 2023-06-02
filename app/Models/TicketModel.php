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
        return DB::select("select * from ticket");
    }
    function getone($n)
    {
        return DB::selectOne('select * from ticket where id =?;', [$n]);
    }
    function getone_ticket($n)
    {
        return DB::selectOne('select * from ticket where ID =?;', [$n]);
    }
    function store($sujet, $idstatus, $typepanne, $cdat)
    {
        //to do gestion des exeptions:

        try {
            $id = DB::table('ticket')->insertGetId([
                'sujet' => $sujet,
                'id_status' => $idstatus,
                'ID_type_panne' => $typepanne,
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
            return DB::select('select * from ticket where id = :search or sujet like UPPER(:searchLike) or sujet like :searchLike2;',['search'=>$search, 'searchLike'=>'%'.$search.'%', 'searchLike2' => '%' . $search . '%']);

        } catch (Exception $e) {
            return false;
        }
        return true;

    }
function searchmsg($n) {
return DB::select('select * from messages join ticket_message on messages.id_message=ticket_message.id_message where id_ticket =?;', [$n]);
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

}



