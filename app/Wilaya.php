<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    protected $table = 'wilayas';

    public function communes()
    {
        return $this->hasMany(Commune::class, 'wilaya', 'id');
    }

    public static function get_num_wilaya($nom_wilaya)
    {

        $num_wilaya = DB::select("select id from wilayas where name = '$nom_wilaya'")[0]->id;

        return $num_wilaya ?? "";

        // code...
    }
}
