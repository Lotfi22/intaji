<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Produit extends Model
{
    protected $fillable = [
        'nom', 'reference', 'description','prix_gros','prix_semi_gros','prix_detail','prix_minimum','prix_autre','id_categorie'
    ];
    
    public function getTicketToday()
    {
        $tickets = Ticket::whereDate('created_at', Carbon::today())->where('id_produit',$this->id)->get();
        $nbrTickets = count($tickets); 
        return $nbrTickets;
    }


    public static function getNomProduit($id_produit)
    {
        $produit = DB::select("select nom from produits where id = '$id_produit' ");
        $produit = $produit[0] ?? "";
        return $produit->nom ?? "";
    }

    public static function getQteProduitStatut($id_produit,$statut,$date_debut,$date_fin)
    {
        $statut = (string)$statut;
        
        if($statut!='au_depot')
        {
            $tickets = (DB::select("select satut,count(*) as qte from tickets t where (id_produit = $id_produit and t.satut='$statut') and (DATE(t.updated_at)>=DATE('$date_debut') and DATE(t.updated_at)<=DATE('$date_fin')) group by satut "));
            
        }   
        else
        {
            $tickets = (DB::select("select satut,count(*) as qte from tickets t where id_produit = $id_produit and t.satut='$statut' group by satut "));
        }
        
        if(count($tickets)>0){ return ($tickets[0]->qte);}
        else{return 0;}
    }

    public static function getQteProduit($id_produit)
    {
        
        $tickets = (DB::select("select * from tickets t where (id_produit = $id_produit) and (t.satut='au_depot' or t.satut='retour') "));        
        
        return count($tickets);
        
    }    

    public static function getQteProduitParNomAuDepot($nom_produit,$date)
    {
        $produit = DB::select("select id from produits p where p.nom = '$nom_produit'");
        
        $id_produit = $produit[0]->id;
        
        $tickets = (DB::select("select * from tickets t where (id_produit = '$id_produit') and (t.satut='au_depot') and (date(t.updated_at)=date('$date') )  "));
        
        return count($tickets);
        
    }

    public static function getNumber($response)
    {
        $produits = Produit::all();
        $collection = collect();
        foreach($produits as $produit)
        {
            $object = (object) ['id_produit' => $produit->id ,'nbrtickets' => 0];
            foreach($response as $res)
            {
                if($res->id_produit == $produit->id)
                {
                    $object = (object) ['id_produit' => $produit->id ,'nbrtickets' => $res->nbrtickets];                    
                }
            }
            $collection->push($object);
        }
        return $collection;
    }
        
}
