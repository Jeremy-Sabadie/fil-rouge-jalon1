<?php

namespace App\Models;

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
function storemsg($ticketId,$title,$content,$cdat) {
return DB::insert('insert into message (id_message, content, created_dat) values (?, ?,?)', [1, $content,$cdat]);



}

}



