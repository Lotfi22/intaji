<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Livraison;

use App\Check;

use DB;

use Auth;

class CaisseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');

    }

    public function index()
    {

        if(Check::CheckAuth(['admin','production'])==false){

            return redirect()->route('login.admin');     

        }


        $date_debut = date("Y-m-d",strtotime("-1 month"));;
        $date_fin = date('Y-m-d');

        $versements = DB::select("select * from versements v 
        where date(v.created_at) between date('$date_debut') and date('$date_fin')
        order by v.num_livraison");

        $livraisons=DB::select("select distinct num_livraison,livreur,updated_at,remise
        from livraisons l
        where l.statut<>'rejeté' 
        and date(l.updated_at) between date('$date_debut') and date('$date_fin')
        order by num_livraison desc");

        $balance = Livraison::get_balance();
        $versement = Livraison::get_versements();
        $reste = Livraison::get_restes();
        
        return view('caisse.caisse',compact('livraisons','versements','date_debut','date_fin','balance','versement','reste'));

        // code...
    }

    public function filter(Request $request)
    {

        $date_debut = $request->date_debut;
        $date_fin = $request->date_fin;

        $versements = DB::select("select * from versements v 
        where date(v.created_at) between date('$date_debut') and date('$date_fin')
        order by v.num_livraison");

        $livraisons=DB::select("select distinct num_livraison,livreur,updated_at,remise
        from livraisons l
        where l.statut<>'rejeté' 
        and date(l.updated_at) between date('$date_debut') and date('$date_fin')
        order by num_livraison desc");

        $balance = Livraison::get_balance();
        $versement = Livraison::get_versements();
        $reste = Livraison::get_restes();
        
        return view('caisse.caisse',compact('livraisons','versements','date_debut','date_fin','balance','versement','reste'));


        // code...
    }

    //
}
