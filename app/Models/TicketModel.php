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
        return DB::select("select * from TICKET");
    }
    function getone($n)
    {
        return DB::selectOne('select * from TICKET where ID =?;', [$n]);
    }
    function getone_ticket($n)
    {
        return DB::selectOne('select * from TICKET where ID =?;', [$n]);
    }
    function store($sujet, $idstatus, $typepanne, $cdat)
    {
        //to do gestion des exeptions:

        try {
            $id = DB::table('TICKET')->insertGetId([
                'SUJET' => $sujet,
                'ID_STATUS' => $idstatus,
                'ID_TYPE_PANNE' => $typepanne,
                'CREATED_AT' => $cdat,
            ]);
            return $id;
        } catch (Exception $e) {
            return false;
        }
        return true;
    }
}
