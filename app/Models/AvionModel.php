<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AvionModel extends Model
{
    use HasFactory;
    public function getall()
    {
        return DB::select("select * from AVION");
    }
    function getone($n)
    {
        return DB::selectOne('select * from AVION where AVNO =?;', [$n]);
    }
    function create($avno, $avnom, $capacity, $loc)
    {
        //to do gestion des exeptions:

        try {
            DB::table('AVION')->insert([
                'AVNO' => $avno,
                'AVNOM' => $avnom,
                'AVCAP' => $capacity,
                'AVLOC' => $loc
            ]);
        } catch (Exception $e) {
            return false;
        }
        return true;
    }

}
