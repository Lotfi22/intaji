<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Milon\Barcode\DNS1D;
use App\Wilaya;
use App\Template;
use App\Livreur;
use App\Sortie;
use App\Retour;
use App\Ticket;
use App\Check;
use App\Livraison;
use DB;
use Auth;
use PDF;
use Dompdf\Dompdf;
use Carbon\Carbon;

class LivraisonController extends Controller
{

    public function index()
    {

        $livraisons=DB::select("select distinct num_livraison,livreur,updated_at,remise from livraisons order by num_livraison desc");

        $versements = DB::select("select num_livraison,versement 
        from versements
        order by num_livraison");

        return view('livraisons.index',compact('livraisons','versements'));

        // code...
    }


    public function ajout_livraison($id_livreur,Request $request)
    {
        
        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }
        
        $client = ($request->nom_client);
        
        $adresse = ($request->adresse_client);

        $data = $request->all();
        array_shift($data);

        $keys = (array_keys($data));
        
        $keys = (array_slice($keys,2));

        array_pop($keys);

        $informations = [];
        
        $j=0;

        for ($i=0; $i < count($keys) ; $i++)
        { 
            
            $nom_produit = ($data[$keys[$i]]);
            $qte = ($data[$keys[$i+1]]);
            $prix = ($data[$keys[$i+2]]);

            $objet = (object)["produit"=>$nom_produit , "qte" => $qte , "prix" => $prix];
            
            $informations[$j] = $objet;
    
            $j++;

            $i=$i+2;
            //
        }

        $next_livraison = (Livraison::get_next_num_livraison());
        
        foreach ($informations as $info) 
        {
            $produit = $info->produit;
            $qte = $info->qte;
            $prix = $info->prix;

            DB::insert("insert into livraisons
            (num_livraison,livreur,id_client,nom_produit,qte,prix,id_commande)
            values ($next_livraison,$id_livreur,1,'$produit','$qte','$prix',0)");

            //
        }

        session()->flash('notification.message' , 'Demmade Numéro '.$next_livraison.' ajoutée avec succés');

        session()->flash('notification.type' , 'success'); 

        return back();


        //
    } 

    public function show_livraison(Request $request)
    {

        $num_livraison = $request->num_livraison;

        $livraison = DB::select("select * from livraisons where num_livraison = $num_livraison");

        $versements = DB::select("select * from versements where num_livraison = $num_livraison order by id asc");

        $ret = (object)["livraison"=>$livraison ,"versements"=>$versements];

        return response()->json($ret);

        // code...
    }

    public function approuver(Request $request)
    {
        
        if(auth()->guard('admin')->check())
        {

            $acteur= (Auth::guard('admin')->user()->email);

        }
        else
        {

            $acteur='Unknown';

        }
                
        $num_livraison = $request->num_livraison;
        
        DB::update("update livraisons set statut = 'validé' ,validator = '$acteur' ,updated_at=now() where num_livraison = '$num_livraison'");

        return response()->json($acteur);

        // code...
        
    }


    public function rejeter(Request $request)
    {

        if(auth()->guard('admin')->check())
        {

            $acteur= (Auth::guard('admin')->user()->email);

        }
        else
        {

            $acteur='Unknown';

        }

        $num_livraison = $request->num_livraison;
        
        DB::update("update livraisons set statut = 'rejeté' ,validator = '$acteur' ,updated_at=now() where num_livraison = '$num_livraison'");

        return response()->json($acteur);

        // code...
    }


    public function new_bl(Request $request)
    {

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        $num_livraison = ($request->num_livraison);

        $remise = ($request->remise);

        DB::update("update livraisons set statut = 'BL',remise=$remise where num_livraison = $num_livraison");

        $livraison = (DB::select("select * from livraisons where num_livraison = $num_livraison"));

        $client = ($livraison[0]->id_client);

        $adresse = "adresse_client";

        $id_livreur = ($livraison[0]->livreur);

        $j=0;
        
        foreach($livraison as $liv)
        { 
            
            $nom_produit = $liv->nom_produit;
            $qte = $liv->qte;
            $prix = $liv->prix;

            $objet = (object)["produit"=>$nom_produit , "qte" => $qte , "prix" => $prix];
            
            $informations[$j] = $objet;
    
            $j++;
            //
        }

        $livreur = Livreur::find($id_livreur);

        $dompdf = new dompdf();

        $options = $dompdf->getOptions(); 

        

        $dompdf->setOptions($options);
        
        $elements = $informations;

        $num_bl = Livraison::get_num_bl($num_livraison);

        $html = Template::bl_lion_royal($livreur,$elements,$client,$adresse,$remise,$num_bl);

        $contxt = stream_context_create([
            'ssl' => [
            'verify_peer' => FALSE,
            'verify_peer_name' => FALSE,
            'allow_self_signed'=> TRUE
            ]
        ]);
        $dompdf = $dompdf->set_options(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $dompdf->setHttpContext($contxt);               
        $dompdf->loadHtml($html);

        $dompdf->render();

        $current = date('Y-m-d');

        $file = "bonlivraison_".$current;

        $dompdf->stream("$file", array('Attachment'=>0));

    }   


    public function encaissements1(request $request)
    {

        if(auth()->guard('admin')->check())
        {

            $acteur= (Auth::guard('admin')->user()->email);

        }
        else
        {
            $acteur='No One';            
        }        
        
        $versement = ($request->versement);
        $num_livraison = ($request->num_livraison);

        $livraison = DB::select("select  * from livraisons where num_livraison = $num_livraison");

        $livraison = $livraison[0];

        $remise = $livraison->remise;

        if($livraison->statut != "rejeté") 
        {
            
            DB::update("update livraisons set versement = $versement,statut = 'encaissement',updated_at=now() where num_livraison = $num_livraison");

            DB::insert("insert into versements (num_livraison,versement,validateur) 
            values ($num_livraison,$versement,'$acteur')");

            $total_paye = DB::select("select sum(versement) as total_paye 
            from versements where num_livraison = $num_livraison");

            $total_payee = $total_paye[0]->total_paye ?? $versement;
            
            if ($total_payee==Livraison::get_total($num_livraison))
            {
                
                DB::update("update livraisons set statut = 'terminé',updated_at=now() where num_livraison = $num_livraison");

                // code...
            }

            // code...
        }        



        $livraison = DB::select("select  * from livraisons where num_livraison = $num_livraison");

        $versements = DB::select("select * from versements where num_livraison = $num_livraison order by id asc");

        $ret = (object)["livraison"=>$livraison ,"versements"=>$versements];


        return response()->json($ret);

        // code...
    }


    public function test_depassement(Request $request)
    {
        
        $num_livraison = ($request->num_livraison);
        
        $val = (float)($request->val);

        $livraison = DB::select("select * from livraisons where num_livraison=$num_livraison");

        $livraison = $livraison[0];

        $remise = $livraison->remise;

        $total_livraison = Livraison::get_total($num_livraison)*(1-($remise/100));

        $total_paye = DB::select("select sum(versement)+$val as total_paye 
        from versements where num_livraison = $num_livraison");

        $total_payee = $total_paye[0]->total_paye ?? 0;

        return response()->json($total_payee<=$total_livraison);

        //
    }    

    public function get_BL($num_livraison)
    {

        $elements = (DB::select("select *,nom_produit as produit from livraisons where num_livraison = $num_livraison"));

        $id_livreur = $elements[0]->livreur;
        $livreur = Livreur::find($id_livreur);
        $client = $elements[0]->id_client;
        $adresse = "adresse_client";
        $remise = $elements[0]->remise;
        $num_bl = Livraison::get_num_bl($num_livraison);

        $dompdf = new dompdf();

        $options = $dompdf->getOptions(); 
        $options->set(array('isRemoteEnabled' => true));
        $dompdf->setOptions($options);    

        $html = Template::bl_lion_royal($livreur,$elements,$client,$adresse,$remise,$num_bl);

        $contxt = stream_context_create([
            'ssl' => [
            'verify_peer' => FALSE,
            'verify_peer_name' => FALSE,
            'allow_self_signed'=> TRUE
            ]
        ]);
        $dompdf = $dompdf->set_options(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $dompdf->setHttpContext($contxt);               
        $dompdf->loadHtml($html);

        $dompdf->render();

        $current = date('Y-m-d');

        $file = "bonlivraison_".$current;

        $dompdf->stream("$file", array('Attachment'=>0));


        // code...
    }

    //
}
