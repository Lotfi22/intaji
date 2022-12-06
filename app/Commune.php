<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Commune extends Model
{
    protected $table = 'communes';

    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class);
    }

    public static function get_num_commune($nom_commune)
    {

        $num_commune = DB::select("select id from communes where name = '$nom_commune'");

        return $num_commune[0]->id ?? "";

        // code...
    }



    //
}
