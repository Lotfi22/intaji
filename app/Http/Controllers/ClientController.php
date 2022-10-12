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

    public function state($id_client)
    {
        $client = Client::find($id_client);
        DB::table('clients')
            ->where('id',$client->id)
            ->update(['etat'=>!$client->etat]);            
    return Response::json($client);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wilayas = Wilaya::all();
        $communes=Commune::all();
        
        return view('clients.create',compact('communes','wilayas','categories'));
    }

    
    public function store(Request $request)
    {
        $client = new Client();  
        $client->nom = $request['nom'];
        $client->prenom = $request['prenom'];
        $client->wilaya = $request['wilaya_id'];
        $client->commune = $request['commune_id'];
        $client->telephone = $request['telephone'];
        $client->facebook = $request['facebook'];


       

        $client->save();
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $client
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $client
     * @return \Illuminate\Http\Response
     */
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


}