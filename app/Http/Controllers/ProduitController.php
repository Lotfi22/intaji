<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Wilaya;
use App\Stock;
use App\Achat;
use Carbon\Carbon;
use App\Produit;
use App\Check;

use App\Categorie;
use App\Http\Requests\StoreProduit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class ProduitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

    }
    public function index()
    {
        if(Check::CheckAuth(['admin'])==false){
            return redirect()->route('login.admin');     
        }

        $produits = Produit::all();
        $categories = Categorie::all();
        return view('produits.index',compact('produits','categories'));
    }

    public function create()
    {
        $communes = Commune::all();
        $wilayas =Wilaya::all();
        $fournisseurs =Fournisseur::all();
        return view('produits.create',compact('fournisseurs','communes','wilayas'));
    }

    public function store(Request $request)
    {        
        $produit = new Produit();   
        $produit->nom= $request->get('nom');
        $produit->reference = $request['reference'];
        $produit->description = $request['description'];
        $produit->prix_gros = $request['prix_gros'];
        $produit->prix_semi_gros = $request['prix_semi_gros'];
        $produit->prix_detail = $request['prix_detail'];
        $produit->prix_minimum = $request['prix_minimum'];
        $produit->prix_autre = $request['prix_autre'];
        $produit->id_categorie = $request['id_categorie'] ?? 1;
        $produit->image = '/img/produits/random.png';
        if($request->hasFile('image')) {
           $path = $request->file('image')->store('/images/produits');
           $produit->image = $path;
        }
        try {
        $produit->save();
        } catch (\Exception $e) {
                return redirect()->route('produit.index')->with('error', 'Error Pendant la création , quelque champs ne peut pas etre vide');
        }
        return redirect()->route('produit.index')->with('success', 'Produit inséré avec succés ');        
    }


    public function show($id_produit)
    {
        $produit = Produit::find($id_produit);

        return view('produits.view',compact('produit'));
    }


    public function edit($id_produit)
    {
        $communes = Commune::all();
        $wilayas =Wilaya::all();
        $fournisseurs =Fournisseur::all();
        $produit = Produit::find($id_produit);
        return view('produits.edit',compact('fournisseurs','communes','wilayas','produit'));
    }


    public function update(Request $request, $produit)
    {   
        $produit = Produit::find($produit);
        $produit->nom= $request->get('nom');
        $produit->reference = $request['reference'];
        $produit->description = $request['description'] ?? '';
        $produit->prix_gros = $request['prix_gros'];
        $produit->prix_semi_gros = $request['prix_semi_gros'];
        $produit->prix_detail = $request['prix_detail'];
        $produit->prix_minimum = $request['prix_minimum'];
        $produit->prix_autre = $request['prix_autre'];
        $produit->id_categorie = $request['id_categorie'] ?? 1;

        if($request->hasFile('image')) {
            if($produit->image != "images/produits/random.png"){
                dd(storage_path('app/'.$produit->image));
            }
            $path = $request->file('image')->store('/images/produits');
            $produit->image = $path; 
         }
         try {
         $produit->save();
         } catch (\Exception $e) {
                 return redirect()->route('produit.index')->with('error', 'Error Pendant la création , quelque champs ne peut pas etre vide');
         }
 

        return redirect()->route('produit.index')->with('success', 'Produit modifé avec succés ');        
    }

    public function destroy($id_produit)
    {
        $produit = Produit::find($id_produit);
        $produit->delete();
        return redirect()->route('produit.index')->with('success', 'le Produit a été supprimé ');        
    }

    public function stock($id_produit)
    {
        $produit = Produit::find($id_produit);
        $stocks = Stock::where('produit_id',$produit->id)->orderBy('id','desc')->get();
        $produits = Produit::all();
        $fournisseurs =Fournisseur::all();
        $communes = Commune::all();
        $wilayas =Wilaya::all();
        return view('stocks.index',compact('produits','stocks','produits','fournisseurs','communes','wilayas'));
    }


    public function printStock($id_produit)
    {
        dd('on est entrain de construire cette page ...');
    }


}
