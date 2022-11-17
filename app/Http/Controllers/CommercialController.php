<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use App\Commune;
use App\Commercial;
use DB;



class CommercialController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin'or'auth:commercial');

    }
    
    
    public function index()
    {
        $commercials =commercial::all();
        
        return view('commercials.index',compact('commercials'));
    }

    
    public function create()
    {
        return view('commercials.create');
    }
    
    public function store(Request $request)
    {
        $commercial = new commercial();
        $commercial->nom = $request->get('nom');
        $commercial->prenom = $request->get('prenom');
        $commercial->telephone = $request->get('tel');
        $commercial->email = $request->get('email');
        $commercial->password = Hash::make($request->get('password'));
        $commercial->password_text = $request->get('password');
        $commercial->save();
        return back()->with('success', 'un nouveau commercial a été inséré avec succés ');
    }  
    public function edit($id_user)
    {
        $commercial = commercial::find($id_user);
        return view('commercials.edit',compact('commercial'));
    }

    public function update(Request $request,$id_commercial)
    {
        $commercial = commercial::find($id_commercial);

        if($request['password']==null){
            return redirect()->back()->with('error', 'mot de passe n\'a été entré ');
        }
        if($request['password']!=$commercial->password_text){
            return redirect()->back()->with('error', 'ancien mot de passe n\'est pas correcte ');
        }
        if($request['new_password']==null){
            return redirect()->back()->with('error', 'Nouveau mot de passe ne peut aps etre vide ');
        }

        $commercial->password = Hash::make($request->get('new_password'));
        $commercial->password_text = $request->get('new_password');
        try {
            $commercial->save();
            return redirect()->back()->with('success', 'Mot de passe modifié avec succés ');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }    

    
    public function destroy($id_user)
    {
        $communes = Commune::all();
        $wilayas = Wilaya::all();
        $commercial = commercial::find($id_user);
        $commercial->delete();    
        return redirect()->route('commercial.index')->with('success', 'le  commercial a été supprimé ');
    }

    public function get_work_commercial(Request $request)
    {

        $id_commercial = ($request->id_commercial);

        $commercial = "commercial_".$id_commercial;

        $commandes = DB::select("select c.statut,count(*) as nb_commande 
        from commandes c 
        where c.user = '$commercial'
        group by c.statut");

        $commercial = DB::select("select * from commercials");

        $commercial = $commercial[0];

        $ret = (object)array("commercial"=>$commercial,"commandes"=>$commandes);

        return response()->json($ret);

        // code...
    }


}
