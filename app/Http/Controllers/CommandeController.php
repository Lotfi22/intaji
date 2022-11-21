<?php

namespace App\Http\Controllers;

use App\Commande;
use App\Commune;
use App\Wilaya;
use App\Livreur;
use App\Produit;
use App\Client;
use App\Livraison;
use App\Freelancer;
use Auth;
use App\Check;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Milon\Barcode\DNS1D;

class CommandeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }

    
    public function index()
    {

        if(Check::CheckAuth(['admin','production','depot','commercial'])==false){

            return redirect()->route('login.admin');     

        }


        $date_debut = date("Y-m-d",strtotime("-1 month"));
        $date_fin = date('Y-m-d');        

        $commandes=DB::select("select distinct num_commande,updated_at,created_at
                from commandes
                where date(updated_at) between date('$date_debut') and date('$date_fin')
            order by num_commande desc");        

        return view('commandes.index',compact('commandes','date_debut','date_fin'));
    }

    public function filter(Request $request)
    {

        if(Check::CheckAuth(['admin','production','depot','commercial'])==false){

            return redirect()->route('login.admin');     
        }

        $date_debut = $request->date_debut;
        $date_fin = $request->date_fin;

        $commandes=DB::select("select distinct num_commande,updated_at,created_at
                from commandes
                where date(updated_at) between date('$date_debut') and date('$date_fin')
            order by num_commande desc");        

        return view('commandes.index',compact('commandes','date_debut','date_fin'));
    }


    public function show($id_commande)
    {
        $num_commande = $id_commande;
        $commandes =  Commande::where('num_commande',$id_commande)->get();
        
        return view('commandes.view',compact('commandes','num_commande'));
    }

    public function create(Request $request)
    {   

        $clients = Client::all();
        $produits = Produit::all();
        $freelancers = Freelancer::orderBy('id','desc')->get();;
        
        return view('commandes.create',compact('clients','produits','freelancers'));
    }


    public function rejeter($id_commande)
    {

        if(auth()->guard('admin')->check())
        {

            $acteur= (Auth::guard('admin')->user()->email);

        }
        else
        {

            $acteur='Unknown';

        }
        
        
        $commandes =  Commande::where('num_commande',$id_commande)->update(['statut'=>"rejeté","validator"=>"$acteur","updated_at"=>date("Y-m-d H:i:s")]);

        return redirect()->route('commande.index')->with('success', 'la commande vous a été accordée ');           
    }

    public function annuler($num_commande,Request $request)
    {

        $motif_annulation = $request->motif_annulation;

        if(auth()->guard('commercial')->check())
        {

            $acteur= (Auth::guard('commercial')->user()->email);

        }
        else
        {

            $acteur='Unknown';

        }


        DB::update("update commandes set statut = 'annulé',updated_at=now(),validator='$acteur',motif_annulation='$motif_annulation'
        where num_commande = $num_commande");

        return redirect()->route('commande.index')->with('success', 'la commande a été annulée');

        // code...
    }


    public function valider($id_commande){
        
        if(auth()->guard('admin')->check())
        {

            $acteur= (Auth::guard('admin')->user()->email);

        }
        else
        {

            $acteur='Unknown';

        }

        $num_commande = $id_commande;
        $num_livraison = Livraison::get_next_num_livraison();

        $commandes =  Commande::where('num_commande',$id_commande)->update(['statut'=>"validé","num_livraison"=>"$num_livraison","validator"=>"$acteur","updated_at"=>date("Y-m-d H:i:s")]);
        
        $commandes =  Commande::where('num_commande',$id_commande)->get();
        foreach($commandes as $commande){
            $livraison = new Livraison();
            $livraison->num_livraison = $num_livraison;            
            $livraison->qte = $commande->qte;            
            $livraison->prix = $commande->prix;            
            $livraison->id_commande = $num_commande;            
            $livraison->id_client = $commande->id_client;            
            $livraison->nom_produit = $commande->nom_produit;
            $livraison->user = Commande::get_vrai_demandeur(Commande::get_demandeur($id_commande)) ?? 'commercial';
            $livraison->livreur = 0;            
            $livraison->id_depot = 0;            
            $livraison->save();
            
        }
        return redirect()->route('commande.index')->with('success', 'la commande vous a été accordée ');           
    }    

    public function store(Request $request)
    {

        $num_commande = Commande::orderBy('created_at', 'desc')->first();//dernier kamel  +1 
        foreach ($request['dynamic_form2']['dynamic_form2'] as $array) {

            $commande = new Commande();
            if($num_commande == null){
                $commande->num_commande = 1;
            }else{
                $commande->num_commande = $num_commande->num_commande+1;
            }

            $commande->id_client = $request['client'];
            $commande->nom_produit = $array['produit'];
            $commande->qte = $array['quantite'];
            $commande->prix = $array['prix_unitaire'];
            
            if(Auth::guard('admin')->user() != null)
            {
                $commande->user = "admin_".Auth::guard('admin')->user()->id;
            }
            elseif(Auth::guard('commercial')->user() != null)
            {

                $commande->user = "commercial_".Auth::guard('commercial')->user()->id;
            }
            else
            {
                $commande->user = "no one";   
            }
            $commande->commentaire = $request['commentaire'] ?? 'sans commentaire';
            $commande->freelancer = $request['freelance'];
            $commande->status_client = $request['status_client'];
            $commande->updated_at = date("Y-m-d H:i:s");
            $commande->save();
            // $commande->num_livraison = "";            

        }
        return redirect()->route('commande.index')->with('success', 'commande inséré avec succés ! ');
    }




    


    




    



    /**/
}