<?php

namespace App;

use App\Wilaya;
use App\Commune;
use App\Commande;
use DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Livreur extends Authenticatable
{
    use Notifiable;

    public function getWilaya()
    {
        return Wilaya::where('id',$this->wilaya_id)->first()['name'];
    }
   
    public function getCommune()
    {
        return Commune::where('id',$this->wilaya_id)->first()['name'];
    }

    public function NbrCourse()
    {
        return Commande::where('livreur_id',$this->id)->count();
    }

    protected $guard = 'livreur';

    protected $fillable = [
        'name', 'email', 'password','paswword_text'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function commandes()
    {
        return $this->hasMany('App\Commande');
    }

    public static function get_livreur_disponibles()
    {
        $ret = [];
        $i=0;

        $livreurs = DB::select("select * from livreurs l");

        foreach ($livreurs as $livreur) 
        {
            
            $id_livreur = $livreur->id;

            $occupe = DB::select("select * from livraisons where statut = 'BL' and  livreur = $id_livreur");

            if (count($occupe)>0) 
            {
                
                $ret[$i]=(object)["id" => $livreur->id , "name" => $livreur->name , "occupe" => "en cours de livraison num".$occupe[0]->num_livraison];

                $i++;

                //
            }
            else
            {

                $ret[$i]=(object)["id" => $livreur->id , "name" => $livreur->name , "occupe" => "Disponible"];

                $i++;


                //
            }


            // code...
        }

        return $ret;

        // code...
    }

}
