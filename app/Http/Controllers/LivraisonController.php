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

        $livraisons=DB::select("select distinct num_livraison,livreur,updated_at from livraisons order by num_livraison desc");

        rsort($livraisons);

        return view('livraisons.index',compact('livraisons'));

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

        return response()->json($livraison);

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

        $options->set('isRemoteEnabled', true);
        

        $dompdf->setOptions($options);
        
        $elements = $informations;


        $num_bl = Livraison::get_num_bl($num_livraison);
        
        $html = Template::bl_lion_royal($livreur,$elements,$client,$adresse,$remise,$num_bl);

        $dompdf->loadHtml($html);

        $dompdf->render();

        $current = date('Y-m-d');

        $file = "bonlivraison_".$current;

        $dompdf->stream("$file", array('Attachment'=>1));

    }    

    //
}
