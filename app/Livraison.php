<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Livraison extends Model
{

    public static function get_next_num_livraison()
    {

        $num_livraison = DB::select("select max(num_livraison) as num_livraison from livraisons");

        $num_livraison = $num_livraison[0]->num_livraison ?? 0;

        return $num_livraison+1;

        // code...
    }

    //
}
