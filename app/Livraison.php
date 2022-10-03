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

    public static function get_products($num_livraison)
    {

        $produits = DB::select("select * from livraisons where num_livraison = $num_livraison");

        $prods=[];
        $i=0;

        foreach ($produits as $produit) 
        {

            $prods[$i]=$produit->nom_produit;
            $i++;
            //
        }

        return ($prods);

        return json_encode($prods);

        // code...
    }


    public static function get_client($num_livraison)
    {

        $client = DB::select("select nom,prenom from clients 
        where id = (select id_client from livraisons where num_livraison = $num_livraison limit 1) ");

        return $client[0]->nom.'  '.$client[0]->prenom;
        // code...
    }


    public static function get_total($num_livraison)
    {

        $total = DB::select("select sum(prix*qte) as total from livraisons 
            where num_livraison = $num_livraison");

        return $total[0]->total;
        // code...
    }


    public static function get_statut($num_livraison)
    {

        $statut = DB::select("select statut from livraisons 
            where num_livraison = $num_livraison");

        return $statut[0]->statut;
        // code...
    }

    public static function get_demandeur($num_livraison)
    {

        $user = DB::select("select user from livraisons 
            where num_livraison = $num_livraison");

        return $user[0]->user;
        // code...
    }

    public static function get_livreur($num_livraison)
    {

        $livreur = DB::select("select email from livreurs where 
        id=(select livreur from livraisons where num_livraison = $num_livraison limit 1)");

        return $livreur[0]->email;
        // code...
    }


    public static function get_validator($num_livraison)
    {

        $validator = DB::select("select validator from livraisons 
            where num_livraison = $num_livraison");

        return $validator[0]->validator;
        // code...
    }

    public static function get_num_bl($num_livraison)
    {

        $validator = DB::select("select * from livraisons 
            where num_livraison = $num_livraison and statut = 'validé' ");

        return count($validator);
        // code...
    }



    //
}
