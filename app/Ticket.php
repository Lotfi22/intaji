<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produit;
use App\Livreur;
use DB;
class Ticket extends Model
{
    public function getProduit()
    {
        $produit = Produit::find($this->id_produit);
        if($produit==null){
            return new Produit();
        }
        return $produit;
    }

    public static function extract_date_and_number($array)
    {

        $ret=[];

        $created_at = [];
        $i=0;
        $numbers = [];

        foreach ($array as $element) 
        {

            $created_at[$i] = $element->created_at;
            $numbers[$i] = $element->nb_ticket;
            $i++;
            // code...
        }

        $ret['date'] = $created_at;
        $ret['numbers'] = $numbers;
        
        return (object)$ret;
        // code...
    }
    
    public static function extract_ids($array)
    {

        $ret=[];

        $i=0;

        foreach ($array as $element) 
        {

            $ret[$i] = $element->id;
            $i++;
            // code...
        }


        return $ret;
        // code...
    }
    

    public function getLivreur()
    {
        $sortie = Sortie::where('id_livreur',$this->id)->orderBy('created_at', 'desc')->first();
        $livreur = new Livreur();
        if($sortie!=null)
            $livreur = Livreur::find($sortie->id_livreur);
        return $livreur;
        
    }


    public function getSortie()
    {

        $sortie = Sortie::where('id_livreur',$this->id)->orderBy('created_at', 'desc')->first() ?? new Sortie();
        return $sortie;
       
    }

    public static function get_nom_livreur($id_ticket)
    {
        //dd($id_ticket);
        $livreur = (DB::select("select email,prenom from livreurs l where l.id in (select distinct(id_livreur) from sorties where id_ticket = '$id_ticket' ) "));
        
        if(count($livreur)>0)
        {
            return $livreur[0]->email;    
        }
        else
        {
            return '';
        }
        
    }

    public static function get_num_livraison($id_ticket)
    {
        //dd($id_ticket);
        
        $num_livraison = (DB::select("select num_livraison from sorties s where id_ticket = '$id_ticket' "));
        
        if(count($num_livraison)>0 && $num_livraison[0]->num_livraison !=0)
        {
            return "(Livraison Num_".$num_livraison[0]->num_livraison.')';    
        }
        else
        {
            return '';
        }
        
    }


    public static function get_id_livreur($id_ticket)
    {
        
        $livreur = (DB::select("select * from livreurs l where l.id in (select id_livreur from retours  where id_ticket = '$id_ticket' order by id desc) order by l.id desc"));
        
        if(count($livreur)>0)
        {
            return $livreur[0]->id;    
        }
        else
        {
            return 0;
        }
        
    }

    public static function get_id_livreur_sortie($id_ticket)
    {
        
        $livreur = (DB::select("select * from livreurs l where l.id in (select id_livreur from sorties where id_ticket = '$id_ticket' order by id desc) order by l.id desc"));
        
        if(count($livreur)>0)
        {
            return $livreur[0]->id;    
        }
        else
        {
            return 0;
        }
        
    }


    public static function get_retour($id_produit,$id_livreur,$date_debut,$date_fin)
    {
        
        $tickets = (DB::select("select * from tickets t where id_produit = '$id_produit' and satut = 'retour' and date(t.updated_at)>='$date_debut' and date(t.updated_at)<='$date_fin' "));
        
        $i=0;
        
        if(count($tickets)>0)
        {
            
            foreach($tickets as $ticket)
            {
                
                if(Ticket::get_id_livreur($ticket->id) == $id_livreur)
                {
                    
                    $i++;
                    
                }
                
            }
            
            
        }        
        
        
        return $i;

    }

    public static function get_qte_sortie($id_produit,$id_livreur,$date_debut,$date_fin)
    {
        
        $tickets = (DB::select("select * from tickets t where id_produit = '$id_produit' and satut = 'sortie' and date(t.updated_at)>='$date_debut' and date(t.updated_at)<='$date_fin' "));
        
        $i=0;
        
        if(count($tickets)>0)
        {
            
            foreach($tickets as $ticket)
            {
                
                if(Ticket::get_id_livreur_sortie($ticket->id) == $id_livreur)
                {
                    
                    $i++;
                    
                }
                
            }
            
            
        }        
        
        
        return $i;

       
    }


    public static function get_livreur_retour($id_ticket)
    {
        
        $livreur = DB::select("select email,prenom from livreurs l, retours r  where (l.id = r.id_livreur) and (id_ticket = '$id_ticket') order by r.created_at desc");
        
        if(count($livreur)>0)
        {
            return $livreur[0]->email;    
        }
        else
        {
            return '';
        }

       
    }

    
    public static function get_nom_produit($id_ticket)
    {
        
        $produit = DB::select("select nom from produits where id in (select id_produit from tickets where id = '$id_ticket') ");
        
        return $produit[0]->nom;
    }
    
    public static function get_num_lot($created_at)
    {    
        
        $first=DB::select("select date(created_at) as first from tickets order by date(created_at) asc limit 1");
        $first = ($first[0]->first) ?? date("Y-m-d");
        $first = strtotime($first);
        $created_at = substr($created_at,0,10);
        $created_at = strtotime($created_at);
        $interval = ($created_at - $first)/60/60/24;
        $interval++;
        
        return $interval;
           
    }
    
    public static function get_depo($id_ticket)
    {

        $depot = DB::select("select * from historiques 
            where id_ticket = $id_ticket 
            order by id desc");

        return $depot[0]->depot ?? '';

        // code...
    }

    public static function is_in_depot($id_ticket,$depot)
    {

        $ticket = DB::select("select * from historiques h
        where (id_ticket = '$id_ticket') order by h.id desc");

        if (count($ticket)>0) 
        {

            if ($ticket[0]->depot == $depot) 
            {

                return true;

                // code...
            }
            else
            {

                return false;

                //
            }
            
            //
        }

        return false;
        // code...
    }

    public static function get_livreur_vers_depot($id_ticket)
    {

        $livreur = DB::select("select * from tickets t,livreurs l 
        where (t.id = $id_ticket) and (t.satut = 'vers_depot') and (l.id=t.id_livreur)");

        return $livreur[0]->email ?? '';

        // code...
    }



}
