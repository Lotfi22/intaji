<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use App\Commune;
use App\Commercial;
use DB;
use App\Check;


class CommercialController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin'or'auth:commercial');

    }
    

    public function index()
    {

        if(Check::CheckAuth(['admin'])==false){

            return redirect()->route('login.admin');     

        }

        $mes_depots = DB::select("select * from mes_depots order by id desc");

        $commercials = DB::select("select * from commercials where visible = 1");
        
        return view('commercials.index',compact('commercials','mes_depots'));
    }


    public function delete($id_commercial)
    {

        if(Check::CheckAuth(['admin'])==false)
        {

            return redirect()->route('login.admin');     

        }

        DB::update("update commercials set visible = 0,password='deleted',
        updated_at=now()
        where id = '$id_commercial'");

        return back()->with('success', 'Commercial supprimé avec succés');

        // code...
    }
    
    public function create()
    {

        if(Check::CheckAuth(['admin'])==false)
        {

            return redirect()->route('login.admin');     

        }


        return view('commercials.create');
    }
    
    public function store(Request $request)
    {

        if(Check::CheckAuth(['admin'])==false)
        {

            return redirect()->route('login.admin');     

        }

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
        
        if($request['password']==null)
        {
            return redirect()->back()->with('error', 'mot de passe n\'a été entré ');
        }

        $commercial = commercial::find($id_commercial);

        $commercial->prenom = $request->get('prenom');
        $commercial->nom = $request->get('nom');
        $commercial->email = $request->get('email');
        $commercial->password = Hash::make($request->get('password'));
        $commercial->password_text = $request->get('password');

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
