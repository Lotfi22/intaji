<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

use Auth;

class Livraison extends Model
{

    public static function produit_existe_livraison($livraisons,$nom_produit)
    {

        foreach ($livraisons as $livraison) 
        {
            
            if ($livraison->nom_produit == $nom_produit) 
            {

                return true;

                // code...
            }

            // code...
        }

        return false;

        // code...
    }


    public static function affectation_autorisee($livraisons,$produit_qte,$nom_produit)
    {

        if (count($produit_qte)==0 && Livraison::produit_existe_livraison($livraisons,$nom_produit)) 
        {
            
            return true;

            // code...
        }

        foreach ($livraisons as $livraison) 
        {
            
            foreach ($produit_qte as $prod)
            {
                
                if ($livraison->nom_produit == $prod->nom && $prod->nom==$nom_produit) 
                {

                    if ($livraison->qte > $prod->qte)
                    {
                        
                        return true;

                        // code...
                    }

                    return false;

                    // code...
                }

                // code...
            }

            // code...
        }

        return false;

        // code...
    }

    public static function jump_to_bl_autorisee($livraisons,$produit_qte,$num_livraison)
    {

        $result=[];
        $i=0;

        foreach ($livraisons as $livraison) 
        {
            
            foreach ($produit_qte as $prod)
            {
                
                if ($livraison->nom_produit == $prod->nom) 
                {

                    if ($livraison->qte > ($prod->qte+1))
                    {
                        
                        $result[$i]=true;

                        //
                    }
                    else
                    {

                        $result[$i]=false;

                        //
                    }

                    $i++;
                }

                //
            }

            //
        }


        if(in_array(false, $result))
        {

            DB::update("update livraisons l set l.statut = 'BL',updated_at=now()
            where l.num_livraison = '$num_livraison' ");

            //
        }

        //
    }


    public static function get_next_num_livraison()
    {

        $num_livraison = DB::select("select max(num_livraison) as num_livraison from livraisons");

        $num_livraison = $num_livraison[0]->num_livraison ?? 0;

        return $num_livraison+1;

        // code...
    }

    public static function get_products($num_livraison)
    {

        $produits = DB::select("select * from livraisons 
        where num_livraison = $num_livraison order by id asc");

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

    public static function get_client_all($num_livraison)
    {

        $client = DB::select("select * from clients 
        where id = (select id_client from livraisons where num_livraison = $num_livraison limit 1) ");

        
        return $client;
        // code...
    }


    public static function get_client($num_livraison)
    {

        $client = DB::select("select nom,prenom,telephone from clients 
        where id = (select id_client from livraisons where num_livraison = $num_livraison limit 1) ");

        return $client[0]->nom.' '.$client[0]->prenom.' | '.$client[0]->telephone;
        // code...
    }


    public static function get_adresse_client($num_livraison)
    {

        $client = DB::select("select wilaya,commune from clients 
        where id = (select id_client from livraisons where num_livraison = $num_livraison limit 1) ");

        return $client[0]->wilaya.' '.$client[0]->commune;
        // code...
    }


    public static function get_total($num_livraison)
    {

        $remise = DB::select("select remise from livraisons where num_livraison = $num_livraison");

        $remise=$remise[0]->remise;

        $total = DB::select("select sum(prix*qte) as total from livraisons 
            where num_livraison = $num_livraison");

        return $total[0]->total*(1-($remise/100));
        // code...
    }

    public static function get_versement($num_livraison)
    {

        $total_versement = DB::select("select sum(versement) as total from versements 
            where num_livraison = $num_livraison");

        return $total_versement[0]->total;
        // code...
    }

    public static function get_reste($num_livraison)
    {

        $reste=(Livraison::get_total($num_livraison)-Livraison::get_versement($num_livraison));

        if(Livraison::get_total($num_livraison)==Livraison::get_versement($num_livraison))
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

    public static function get_complet($num_livraison)
    {

        if(Livraison::get_total($num_livraison)==(Livraison::get_versement($num_livraison)))
        {   
            return '<span class="tag tag-rounded tag-green"> Complète</span>';
        }
        else
        {
            return '<p class="tag tag-rounded tag-red"> Incomplète</p>';
        }

        //
    }


    public static function get_statut($num_livraison)
    {

        $statut = DB::select("select statut from livraisons 
            where num_livraison = $num_livraison");
        
        return $statut[0]->statut;
        // code...
    }

    public static function get_commentaire($num_livraison)
    {

        $statut = DB::select("select commentaire from livraisons 
            where num_livraison = $num_livraison");
        
        return $statut[0]->commentaire ?? "";
        // code...
    }


    public static function get_demandeur($num_livraison)
    {

        $user = DB::select("select user from livraisons 
            where num_livraison = $num_livraison");

        return $user[0]->user ?? "";
        // code...
    }


    public static function get_depot($num_livraison)
    {

        $id_depot = DB::select("select id_depot from livraisons 
            where num_livraison = $num_livraison");

        $id_depot = $id_depot[0]->id_depot;

        $depot = DB::select("select * from mes_depots where id = '$id_depot'");

        return $depot[0]->nom ?? '';
        // code...
    }


    public static function get_livreur($num_livraison)
    {

        $livreur = DB::select("select email from livreurs where 
        id=(select livreur from livraisons where num_livraison = $num_livraison limit 1)");

        return $livreur[0]->email ?? "";
        // code...
    }

    public static function get_livreur_ajax($num_livraison)
    {

        $livreur = DB::select("select * from livreurs where 
        id=(select livreur from livraisons where num_livraison = $num_livraison limit 1)");

        return $livreur[0] ?? "";
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

        return $num_livraison;
        // code...
    }

    public static function get_balance()
    {

        $balance = DB::select("select sum(prix*qte) as balance 
        from livraisons l
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


    public static function get_balance_interval($date_debut,$date_fin)
    {

        $balance = DB::select("select sum(prix*qte) as balance 
        from livraisons l
        where l.statut <> 'rejeté'
        and date(l.updated_at) between date('$date_debut') and date('$date_fin') ");

        return $balance[0]->balance;
        // code...
    }

    public static function get_versements_interval($date_debut,$date_fin)
    {

        $versement = DB::select("select sum(versement) as versement 
        from versements
        where date(updated_at) between date('$date_debut') and date('$date_fin')");

        return $versement[0]->versement;

        // code...
    }

    public static function get_restes_interval($date_debut,$date_fin)
    {

        return Livraison::get_balance_interval($date_debut,$date_fin)-Livraison::get_versements_interval($date_debut,$date_fin);
        // code...
    }

    public static function mise_a_jour_tickets_to_vendue($num_livraison)
    {

        DB::update("update tickets t set t.satut = 'vendue' 
        where t.id in (select s.id_ticket from sorties s where s.num_livraison = $num_livraison) ");

        //
    }


    //
}
