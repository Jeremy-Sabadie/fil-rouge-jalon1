<?php

namespace App\Models;

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
    function getone($n) {
    return DB::selectOne('select * from AVION where AVNO =?;',[$n]);
    }

}
