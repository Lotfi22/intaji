<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use App\Commune;
use App\Depot;
use App\Ticket;

class DepotController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin'or'auth:depot');

    }

    
    public function index()
    {
        $depots =Depot::all();
        
        $mes_depots = DB::select("select * from mes_depots");
        
        return view('depots.index',compact('depots','mes_depots'));
    }


    public function index1()
    {
        $mes_depots = DB::select("select * from mes_depots");
        
        return view('depots.mes_depots',compact('mes_depots'));
    }

    
    public function ajouter(Request $request)
    {   
        $nom_depot = $request->nom_depot;

        $adresse_depot = $request->adresse_depot;

        DB::insert("insert into mes_depots(nom,adresse) values ('$nom_depot','$adresse_depot') ");
        
        return back()->with('success', 'un nouveau dépot a été inséré avec succés ');
    }

    public function modifier(Request $request)
    {
        
        $nom_depot = $request->nom_depot;

        $adresse_depot = $request->adresse_depot;

        $id_depot = substr($request->id_depot,7,1);
        
        DB::update("update mes_depots set nom = '$nom_depot' , adresse = '$adresse_depot' where id = $id_depot ");

        return back()->with('success', 'Le dépot a été modifié avec succés ');

        # code...
    }
    
    public function create()
    {
        return view('depots.create');
    }
    public function store(Request $request)
    {

        $depot = new Depot();
        $depot->name = $request->get('name');
        $depot->email = $request->get('email');
        $depot->depot = $request->get('depot');
        $depot->password = Hash::make($request->get('password'));
        $depot->password_text = $request->get('password');
        $depot->save();
        return redirect()->route('depot.index')->with('success', 'un nouveau agent a été inséré avec succés ');
    }  
    public function edit($id_user)
    {
        $depot = Depot::find($id_user);
        return view('depots.edit',compact('depot'));
    }

    public function update(Request $request,$id_depot)
    {
        $depot = Depot::find($id_depot);
        if($request['password']==null){
            return redirect()->back()->with('error', 'mot de passe n\'a été entré ');
        }
        if($request['password']!=$depot->password_text){
            return redirect()->back()->with('error', 'ancien mot de passe n\'est pas correcte ');
        }
        if($request['new_password']==null){
            return redirect()->back()->with('error', 'Nouveau mot de passe ne peut aps etre vide ');
        }

        $depot->name = $request->get('name');
        $depot->email = $request->get('email');
        $depot->depot = $request->get('depot');
        $depot->password = Hash::make($request->get('new_password'));
        $depot->password_text = $request->get('new_password');
        try {
            $depot->save();
            return redirect()->back()->with('success', 'Mot de passe modifié avec succés ');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    
    public function destroy($id_user)
    {
        $communes = Commune::all();
        $wilayas = Wilaya::all();
        $depots = Depot::find($id_user);
        $depot->delete();    
        return redirect()->route('depot.index')->with('success', 'le  agent a été supprimé ');
    }


    public function get_qte_produit(Request $request)
    {

        $id_produit = $request->id_produit;

        $mes_depots = DB::select("select * from mes_depots");

        $mes_depots = DB::select("select distinct depot as nom from historiques order by depot desc");

        $tickets = (DB::select("select * from tickets 
                where id_produit = $id_produit and satut = 'au_depot' "));

        
        $i=0;
        $resultats=[];

        foreach ($mes_depots as $depot) 
        {

            $cpt=0;

            foreach ($tickets as $ticket) 
            {

                if (Ticket::is_in_depot($ticket->id,$depot->nom)) 
                {

                    $cpt++;

                    // code...
                }


                //
            }

            $depot->nom=="" ? $depot->nom="Sans Nom" : $depot->nom = $depot->nom; 

            $resultats[$i]=(object)["depot"=>$depot->nom,"qte"=>$cpt];

            $i++;
            
            //
        }

        return response()->json($resultats);

        // code...
    }

    //
}
