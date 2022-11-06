<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Client extends Model
{
    public function wilaya()
    {
        $wilaya =  Wilaya::find($this->wilaya);
        return $wilaya;
    }

    public function commune()
    {
        $commune =  Commune::find($this->commune);
        return $commune;

    }

    public static function get_wilaya($id_client)
    {
        $wilaya = DB::select("select wilaya from clients where id = '$id_client' ");
        
        return $wilaya[0]->wilaya ?? "";
    }


}
