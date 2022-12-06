<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Wilaya;


use Hash;
use Response;


use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::all();
        $telephones = Client::all('telephone');

        $wilayas = Wilaya::all();
        $communes=Commune::all();


        return view('clients.index',compact('communes','wilayas','clients','telephones'));
    }


    public function create()
    {
        $wilayas = Wilaya::all();
        $communes=Commune::all();
        
        return view('clients.create',compact('communes','wilayas','categories'));
    }

    
    public function store(Request $request)
    {

        $id_commune = ($request->commune_id);
        
        $commune = DB::select("select * from communes 
        where id = '$id_commune'");
        
        $commune = $commune[0]->name ?? "";
        
        $client = new Client();  
        $client->nom = $request['nom'];
        $client->prenom = $request['prenom'];
        $client->wilaya = $request['wilaya_id'];
        $client->commune = $commune;
        $client->telephone = $request['telephone'];
        $client->facebook = $request['facebook'];
        $client->save();

        $client = DB::table('clients')->orderBy('id', 'desc')->first();

        $id_client=$client->id;

        if ($request->comment == "freelancer") 
        {
            
            $freelancer_nom = $request->freelancer_nom;
            $freelancer_prenom = $request->freelancer_prenom;
            $freelancer_tel = $request->freelancer_tel;

            DB::insert("insert into freelancers(nom,prenom,telephone)
            values ('$freelancer_nom','$freelancer_prenom','$freelancer_tel')");

            //
        }

        if ($request->comment == "autre") 
        {

            $autre_desc = $request->autre_desc;

            DB::update("update clients cl set comment = '$autre_desc' 
            where cl.id = '$id_client' ");

            //
        }

        return redirect()->route('client.index')->with('success', 'Inséré avec succés ');         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id_client)
    {
        $client = Client::find($id_client);

        return view('clients.view',compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id_client)
    {
        $communes = Commune::all();
        $wilayas =Wilaya::all();
        $client = Client::find($id_client);
        $categories = Categorie::all();
        return view('clients.edit',compact('categories','communes','wilayas','client'));
    }

    public function update(Request $request,$client_id)
    {
        $client = Client::find($client_id);  
        $client->nom = $request['nom2'];
        $client->prenom = $request['prenom2'];
        $client->wilaya = $request['wilaya_id2'];
        $client->commune = $request['commune_id2'];
        $client->telephone = $request['telephone2'];
        $client->facebook = $request['facebook2'];       

        $client->save();
        return redirect()->route('client.index')->with('success', 'Modifié avec succés ');  
    }

    public function destroy($id_client)
    {
        $client = Client::find($id_client);
        $client->delete();
        return redirect()->route('client.index')->with('success', 'le Client a été supprimé ');        
    }

    public function verif_tel(Request $request)
    {

        $num_tel = $request->num_tel;

        $client = DB::select("select * from clients where telephone = '$num_tel'");

        return response()->json($client);

        // code...
    }

    public function get_client_interactions(Request $request)
    {

        $id_client = $request->id_client;

        $commande = DB::select("select num_commande,statut,sum(prix*qte) as total 
        from commandes 
        where id_client = $id_client
        group by num_commande,statut
        order by statut,num_commande");

        $livraisons = DB::select("select num_livraison,remise,statut,sum(prix*qte*(1-(remise/100))) as total 
        from livraisons 
        where id_client = $id_client
        group by num_livraison,remise,statut
        order by statut,num_livraison");

        return response()->json(["commandes"=>$commande,"livraisons"=>$livraisons]);

        // code...
    }


    //
}