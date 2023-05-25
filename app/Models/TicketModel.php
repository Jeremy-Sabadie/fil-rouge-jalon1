<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketModel extends Model
{
    use HasFactory;
    public function getallTickets()
    {
        return DB::select("select * from TICKETS");
    }
    function getone($n)
    {
        return DB::selectOne('select * from AVION where ID =?;', [$n]);
}
    function getone_ticket($n)
    {
        return DB::selectOne('select * from AVION where ID =?;', [$n]);
}
    function store($id, $sujet, $idstatus, $typepanne,$cdat,$updat)
    {
        //to do gestion des exeptions:

        try {
            DB::table('TICKET')->insert([
                'ID' => $id,
                'SUJET' => $sujet,
                'ID8STATUS' => $idstatus,
                'ID_TYPE_PANNE' => $typepanne,
                'CREATEDAT' => $cdat,
                'UPDATED_AT' => $updat
            ]);
        } catch (Exception $e) {
            return false;
        }
        return true;
    }
}
