<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Livraison;

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


    public static function get_total_versement($id_client)
    {

        $num_livraisons = Client::get_num_livraison_client($id_client);

        $total = 0;

        foreach ($num_livraisons as $num_livraison) 
        {

            $num_livraison = $num_livraison->num_livraison;

            $versement = DB::select("select sum(versement) as versement
            from versements v 
            where (v.num_livraison = $num_livraison)");

            $total=$total+$versement[0]->versement;

            // code...
        }

        return $total;

        // code...
    }

    public static function get_num_livraison_client($id_client)
    {

        $num_livraisons = DB::select("select distinct(num_livraison) from livraisons 
        where id_client = $id_client and statut!='rejeté' and statut!='en attente'");

        return $num_livraisons ?? "";

        // code...
    }

    public static function get_credits($id_client)
    {

        $total_versement = Client::get_total_versement($id_client);

        $num_livraisons = Client::get_num_livraison_client($id_client);

        $total_du = 0;

        foreach ($num_livraisons as $num_livraison) 
        {
            $num_livraison=$num_livraison->num_livraison;
            
            $total_du = $total_du+Livraison::get_total($num_livraison);

            // code...
        }        

        $credits = $total_du - $total_versement;

        return $credits;

        // code...
    }




}
