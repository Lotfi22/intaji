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

    public static function calcul_produit_in_produits_qte($produit_qte,$nom_produit)
    {

        foreach ($produit_qte as $prod) 
        {
            
            if ($prod->nom==$nom_produit) 
            {

                return $prod->qte;

                // code...
            }

            // code...
        }

        return 0;

        // code...
    }


    public static function affectation_autorisee($livraisons,$produit_qte,$nom_produit)
    {

        if (count($produit_qte)==0 && Livraison::produit_existe_livraison($livraisons,$nom_produit)) 
        {
            
            return true;

            // code...
        }

        if (Livraison::calcul_produit_in_produits_qte($produit_qte,$nom_produit)==0 && Livraison::produit_existe_livraison($livraisons,$nom_produit) )
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

        $arr=[];
        $i=0;

        foreach ($livraisons as $livraison)
        {

            $arr[$i] = Livraison::affectation_autorisee($livraisons,$produit_qte,$livraison->nom_produit);

            $i++;

            // code...
        }

        if(!in_array(true, $arr))
        {

            DB::update("update livraisons l set l.statut = 'BL',updated_at=now()
            where l.num_livraison = '$num_livraison' ");

            return true;

            //
        }

        return false;

        /*dd($livraisons,$produit_qte,$num_livraison);*/

        /*        $result=[];
        $i=0;

        if (count($livraisons) != count($produit_qte) ) 
        {
            return 0;
        }

        foreach ($livraisons as $livraison) 
        {
            
            foreach ($produit_qte as $prod)
            {
                
                if ($livraison->nom_produit == $prod->nom) 
                {

                    if ($livraison->qte >= $prod->qte)
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
        }*/


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

        $remise=$remise[0]->remise ?? 0;

        $total = DB::select("select sum(prix*qte) as total from livraisons 
            where num_livraison = $num_livraison");

        return $total[0]->total*(1-($remise/100));
        // code...
    }

    public static function get_versement($num_livraison)
    {

        $total_versement = DB::select("select sum(versement) as total from versements 
            where num_livraison = $num_livraison");

        return $total_versement[0]->total ?? 0;
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
        
        return $statut[0]->statut ?? '';
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

        $id_depot = $id_depot[0]->id_depot ?? '';

        $depot = DB::select("select * from mes_depots where id = '$id_depot'");

        return $depot[0]->nom ?? '';
        // code...
    }


    public static function get_livreur($num_livraison)
    {

        $livreur = DB::select("select email from livreurs where 
        id=(select livreur from livraisons where num_livraison = $num_livraison limit 1)");

        return $livreur[0]->email ?? "-";
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

        return $validator[0]->validator ?? '';
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
        where l.statut <> 'rejeté' and l.statut <> 'annulé'");

        return $balance[0]->balance ?? 0;
        // code...
    }

    public static function get_versements()
    {

        $versement = DB::select("select sum(versement) as versement 
        from versements");

        return $versement[0]->versement ?? 0;

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
        where l.statut <> 'rejeté' and l.statut <> 'annulé'
        and date(l.updated_at) between date('$date_debut') and date('$date_fin') ");

        return $balance[0]->balance ?? 0;
        // code...
    }

    public static function get_versements_interval($date_debut,$date_fin)
    {

        $versement = DB::select("select sum(versement) as versement 
        from versements
        where date(updated_at) between date('$date_debut') and date('$date_fin')");

        return $versement[0]->versement ?? 0;

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

    public static function get_all_livraisons()
    {

        $livraisons = DB::select("select statut,count(distinct(num_livraison)) as nb_livraison
        from livraisons l 
        group by statut
        order by statut");

        return Livraison::statuts_existants($livraisons);

        // code...
    }

    public static function statuts_existants($livraisons)
    {

        $statuts = ['en attente','rejeté','annulé','validé','BL','terminé','encaissement'];
        
        $statuts_existants=[];
        $i=0;
        
        foreach ($livraisons as $livraison) 
        {
        
            foreach ($statuts as $statut) 
            {
            
                if ($livraison->statut == $statut) 
                {

                    $statuts_existants[$i] = (object)array('statut' => $statut ,'nb_livraison' => $livraison->nb_livraison );

                    $statuts = array_diff($statuts, [$statut]);

                    $i++;

                    // code...
                }

                // code...
            }

            // code...
        }
        
        $statuts_0 = [];
        $i=0;

        foreach ($statuts as $statut) 
        {
        
            $statuts_0[$i] = (object)array('statut'=>$statut , 'nb_livraison'=>0);

            $i++;

            // code...
        }

        $ret = array_merge($statuts_existants,$statuts_0);

        return $ret;

        // code...
    }

    public static function get_all_caisse()
    {

        $date_debut = Date('Y-m-d');
        $date_fin = Date('Y-m-d');

        $versements_aujoudhui=Livraison::get_versements_interval($date_debut,$date_fin);
        
        $versement_total = Livraison::get_versements();

        $reste = Livraison::get_restes();


        return array('versements_aujoudhui' => $versements_aujoudhui,'versement_total' => $versement_total,'reste' => $reste);
        // code...
    }


    public static function get_all_stock()
    {

        $stock = DB::select("select p.id,p.nom,count(*) as qte
        from produits p, tickets t
        where (t.id_produit = p.id) and (t.satut = 'au_depot')
        group by p.id,p.nom
        order by p.id,p.nom");

        return ($stock);

        // code...
    }

    public static function get_all_tickets()
    {

        $stock = DB::select("select p.id,p.nom,count(*) as qte
        from produits p, tickets t
        where (t.id_produit = p.id)
        group by p.id,p.nom
        order by p.id,p.nom");

        return ($stock);

        // code...
    }

    public static function get_pourcentage_decrease($qte,$total)
    {

        return ((int)(($qte->qte/$total->qte)*100/10))*10 ?? '0';

        // code...
    }


    public static function get_color()
    {

        $tab1 = ['warning','danger','info','primary','success','danger'];

        return $tab1[random_int(0, 5)];

        // code...
    }




    //
}
