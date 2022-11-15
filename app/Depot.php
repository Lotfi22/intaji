<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;


class Depot extends Authenticatable
{
    use Notifiable;

    protected $guard = 'depot';

    protected $fillable = [
        'name', 'email', 'depot' , 'password','paswword_text'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function get_wicth_depot($id_ticket)
    {

        $depot = DB::select("select * from historiques h where h.id_ticket = '$id_ticket' 
        order by h.id desc");

        return $depot[0]->depot; 

        // code...
    }

    public static function depot_single_produit_qte($nom_depot,$id_produit)
    {

        $tickets = DB::select("select * from tickets t 
        where t.satut = 'au_depot' and t.id_produit = '$id_produit'");

        $cpt = 0;

        foreach ($tickets as $ticket) 
        {

            if($nom_depot == Depot::get_wicth_depot($ticket->id))
            {
                $cpt++;
            }

            //
        }

        return $cpt;
        // code...
    }


    public static function depot_all_produits_qte($nom_depot,$produits)
    {

        $all_produits = [];
        
        $i=0;

        foreach ($produits as $produit) 
        {

            $all_produits[$i]=(object)["produit"=>$produit->nom ,"qte"=>Depot::depot_single_produit_qte($nom_depot,$produit->id)];

            $i++;

            //
        }

        return $all_produits;

        // code...
    }

    public static function depot_all_qte($nom_depot)
    {

        $produits = DB::select("select * from produits");

        $qte_generale = 0;

        foreach (Depot::depot_all_produits_qte($nom_depot,$produits) as $prod_qte) 
        {
            
            $qte_generale=$qte_generale+$prod_qte->qte;

            // code...
        }

        return $qte_generale;

        //
    }

    public static function get_qte_each_depot()
    {

        $depots = DB::select("select * from mes_depots");

        $depots_qte = [];
        $i=0;

        foreach ($depots as $depot) 
        {
            
            $depots_qte[$i] = ["depot"=>$depot->nom , "qte"=>Depot::depot_all_qte($depot->nom)];

            $i++;
            // code...
        }

        return $depots_qte;

        //
    }



}
