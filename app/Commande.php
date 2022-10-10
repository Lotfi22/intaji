<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{

    public static function get_products($num_commande)
    {

        $produits = DB::select("select * from commandes where num_commande = $num_commande");

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


    }

    public static function get_wilaya($num_commande)
    {

    }

    public static function get_commune($num_commande)
    {

    }


    public static function get_client($num_commande)
    {

        $client = DB::select("select * from clients 
        where id = (select id_client from commandes where num_commande = $num_commande limit 1) ");

        
        return $client;
        // code...
    }


    public static function get_total($num_commande)
    {

        $total = DB::select("select sum(prix*qte) as total from commandes 
            where num_commande = $num_commande");
        return $total[0]->total;
        // code...
    }

    public static function get_versement($num_commande)
    {

        $total_versement = DB::select("select sum(versement) as total from versements 
            where num_commande = $num_commande");

        return $total_versement[0]->total;
        // code...
    }

    public static function get_reste($num_commande)
    {

        $reste=(Livraison::get_total($num_commande)-Livraison::get_versement($num_commande));

        if(Livraison::get_total($num_commande)==Livraison::get_versement($num_commande))
        {
            return '<span class="tag tag-rounded tag-green"> 0</span>';
            //
        }
        else
        {

            return '<span class="tag tag-rounded tag-danger">'.$reste.' DA</span>';

            //
        }

        //
    }

    public static function get_complet($num_commande)
    {

        if(Livraison::get_total($num_commande)==(Livraison::get_versement($num_commande)))
        {   
            return '<span class="tag tag-rounded tag-green"> Complète</span>';
        }
        else
        {
            return '<p class="tag tag-rounded tag-red"> Incomplète</p>';
        }

        //
    }

    public static function get_num_livraison($num_commande)
    {
        $commande = DB::select("select num_livraison from commandes 
            where num_commande = $num_commande");
        
        return $commande[0]->num_livraison;

    }

    public static function get_status_client($num_commande)
    {
        $status = DB::select("select status_client from commandes 
            where num_commande = $num_commande");
        
        return $status[0]->status_client;

    }
    public static function get_freelancer($num_commande)
    {
        // $freelancer = DB::select("select nom,prenom from freelancers 
        // where id = (select freelancer from commandes where num_commande = $num_commande limit 1) ");
        
        return "freelancer";

    }
    
    public static function get_statut($num_commande)
    {
        $statut = DB::select("select statut from commandes 
            where num_commande = $num_commande");
        
        return $statut[0]->statut;
        // code...
    }

    public static function get_demandeur($num_commande)
    {

        $user = DB::select("select user from commandes 
            where num_commande = $num_commande");

        return $user[0]->user;
        // code...
    }



    public static function get_validator($num_commande)
    {

        $validator = DB::select("select validator from commandes 
            where num_commande = $num_commande");

        return $validator[0]->validator;
        // code...
    }

    public static function get_num_bl($num_commande)
    {

        $validator = DB::select("select * from commandes 
            where num_commande = $num_commande and statut = 'validé' ");

        return count($validator);
        // code...
    }

    public static function get_balance()
    {

        $balance = DB::select("select sum(prix*qte) as balance 
        from commandes l
        where l.statut <> 'rejeté'");

        return $balance[0]->balance;
        // code...
    }

    public static function get_versements()
    {

        $versement = DB::select("select sum(versement) as versement 
        from versements");

        return $versement[0]->versement;

        // code...
    }

    public static function get_restes()
    {

        return Livraison::get_balance()-Livraison::get_versements();
        // code...
    }


}
