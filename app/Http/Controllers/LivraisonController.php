<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Milon\Barcode\DNS1D;
use App\Wilaya;
use App\Template;
use App\Sortie;
use App\Retour;
use App\Ticket;
use App\Check;
use App\Livraison;
use App\Livreur;
use DB;
use Auth;
use PDF;
use Dompdf\Dompdf;
use Carbon\Carbon;

class LivraisonController extends Controller
{

    public function index()
    {

        if(Check::CheckAuth(['admin','production','depot','commercial'])==false){

            return redirect()->route('login.admin');     

        }

        $date_debut = date("Y-m-d",strtotime("-1 month"));
        $date_fin = date('Y-m-d');        

        if(Check::CheckAuth(['depot']))
        {

            $depot = (Auth::guard('depot')->user()->depot);

            $id_depot = DB::select("select * from mes_depots d where d.nom = '$depot'");

            $id_depot = $id_depot[0]->id;
            
            $livraisons=DB::select("select distinct
            num_livraison,livreur,updated_at,remise
            from livraisons l
            where (l.id_depot = '$id_depot') and (date(updated_at) between date('$date_debut') and date('$date_fin'))
            order by num_livraison desc");

            //
        }
        else
        {

            $livraisons=DB::select("select distinct 
            num_livraison,livreur,updated_at,remise
            from livraisons 
            where date(updated_at) between date('$date_debut') and date('$date_fin')
            order by num_livraison desc");

            //
        }

        $versements = DB::select("select num_livraison,versement 
        from versements
        order by num_livraison");

        $livreurs = Livreur::get_livreur_disponibles();
        
        $depots = DB::select("select * from mes_depots order by nom");

        return view('livraisons.index',compact('livraisons','versements','date_debut','date_fin','depots','livreurs'));

        // code...
    }


    public function filter(Request $request)
    {

        if(Check::CheckAuth(['admin','production','depot','commercial'])==false){

            return redirect()->route('login.admin');     

        }

        $date_debut = $request->date_debut;
        $date_fin = $request->date_fin;

        if(Check::CheckAuth(['depot']))
        {

            $depot = (Auth::guard('depot')->user()->depot);

            $id_depot = DB::select("select * from mes_depots d where d.nom = '$depot'");

            $id_depot = $id_depot[0]->id;
            
            $livraisons=DB::select("select distinct
            num_livraison,livreur,updated_at,remise
            from livraisons l
            where (l.id_depot = '$id_depot') and (date(updated_at) between date('$date_debut') and date('$date_fin'))
            order by num_livraison desc");

            //
        }
        else
        {

            $livraisons=DB::select("select distinct 
            num_livraison,livreur,updated_at,remise
            from livraisons 
            where date(updated_at) between date('$date_debut') and date('$date_fin')
            order by num_livraison desc");

            //
        }

        $livreurs = Livreur::get_livreur_disponibles();

        $versements = DB::select("select num_livraison,versement 
        from versements
        order by num_livraison");

        $depots = DB::select("select * from mes_depots order by nom");

        return view('livraisons.index',compact('livraisons','versements','date_debut','date_fin','livreurs','depots'));

        // code...
    }


    public function ajout_livraison($id_livreur,Request $request)
    {
        
        if(Check::CheckAuth(['admin','production','depot','commercial'])==false)
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

        $livreur = livraison::get_livreur_ajax($num_livraison);

        $ret = (object)["livreur"=>$livreur,"livraison"=>$livraison ,"versements"=>$versements];

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

        $livreur = $request->livreur;

        $depot = $request->depot;

        $num_livraison = ($request->num_livraison);

        $remise = ($request->remise);
        
        DB::update("update livraisons set 
        statut = 'validé',remise=$remise,id_depot='$depot',livreur='$livreur'
        where num_livraison = $num_livraison");

        $livraison = (DB::select("select * from livraisons where num_livraison = $num_livraison"));

        /*$client = Livraison::get_client($num_livraison);
        
        $adresse = Livraison::get_adresse_client($num_livraison);

        $id_livreur = ($livraison[0]->livreur);

        $livreur = Livreur::find($id_livreur);

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

        $num_bl = $num_livraison;
        $elements = $informations;*/

        /*$pdf = PDF::loadView("bon_livraison",compact('livreur','elements','client','adresse','remise','num_bl'));

        $pdf->getDomPDF()->setHttpContext(
            stream_context_create([
                'ssl' => [
                    'allow_self_signed'=> TRUE,
                    'verify_peer' => FALSE,
                    'verify_peer_name' => FALSE,
                ]
            ])
        );        
        
        $pdf->setPaper('A4', 'potrait');

        return $pdf->stream("bon.pdf",array("Attachment"=>1));*/
    }   


    public function encaissements1(request $request)
    {

        if(auth()->guard('admin')->check())
        {

            $acteur= (Auth::guard('admin')->user()->email);

        }
        else
        {

            if (auth()->guard('depot')->check()) 
            {

                $acteur= (Auth::guard('depot')->user()->email);                

                // code...
            }
            else
            {

                $acteur='No One';            
                
                //
            }
        }        
        
        $versement = (float)($request->versement);
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

                Livraison::mise_a_jour_tickets_to_vendue($num_livraison);

                // code...
            }

            // code...
        }        



        $livraison = DB::select("select  * from livraisons where num_livraison = $num_livraison");

        $versements = DB::select("select * from versements where num_livraison = $num_livraison order by id asc");

        $ret = (object)["livraison"=>$livraison ,"versements"=>$versements, "total_payee"=>$total_payee];


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

        $total_livraison = Livraison::get_total($num_livraison);

        $total_paye = DB::select("select sum(versement)+$val as total_paye 
        from versements where num_livraison = $num_livraison");

        $total_payee = $total_paye[0]->total_paye ?? $val;

        return response()->json($total_payee<=$total_livraison);

        //
    }    

    public function get_BL($num_livraison)
    {

        $elements = (DB::select("select *,nom_produit as produit from livraisons where num_livraison = $num_livraison"));

        $id_livreur = $elements[0]->livreur;
        $livreur = Livreur::find($id_livreur);
        $client = Livraison::get_client($num_livraison);        
        $adresse = Livraison::get_adresse_client($num_livraison);
        
        $remise = $elements[0]->remise;
        $num_bl = Livraison::get_num_bl($num_livraison);

        $pdf = PDF::loadView("bon_livraison",compact('livreur','elements','client','adresse','remise','num_bl'));

        $pdf->getDomPDF()->setHttpContext(
            stream_context_create([
                'ssl' => [
                    'allow_self_signed'=> TRUE,
                    'verify_peer' => FALSE,
                    'verify_peer_name' => FALSE,
                ]
            ])
        );        

        
        $pdf->setPaper('A4', 'potrait');

        return $pdf->stream("bon.pdf",array("Attachment"=>1));

        // code...
    }

    public function get_client(Request $request)
    {

        $num_livraison = $request->num_livraison;

        $client = DB::select("select * from clients 
        where id = (select id_client from livraisons where num_livraison = $num_livraison limit 1) ");

        $client = $client[0];

        return response()->json($client);

        // code...
    }


    public function get_livreur(Request $request)
    {

        $num_livraison = $request->num_livraison;

        $livreur = DB::select("select * from livreurs 
        where id = (select livreur from livraisons where num_livraison = $num_livraison limit 1) ");

        $livreur = $livreur[0];

        return response()->json($livreur);

        // code...
    }

    public function get_depot(Request $request)
    {

        $num_livraison = $request->num_livraison;

        $depot = Livraison::get_depot($num_livraison);

        return $depot;

        // code...
    }

    public function get_work_livreur(Request $request)
    {

        $id_livreur = ($request->id_livreur);

        $livreur = DB::select("select * from livreurs where id=$id_livreur");

        $livreur = $livreur[0];

        $livraison = DB::select("select l.statut,count(*) as nb_livraison from livraisons l
        where livreur = $id_livreur
        group by l.statut
        order by l.statut");

        $what_is_he_doing=DB::select("select * from livraisons l
        where l.livreur = $id_livreur and (l.statut = 'BL') ");

        $what_is_he_doing = $what_is_he_doing[0] ?? [];

        $ret = array('livreur' => $livreur , 'livraisons' => $livraison,"what_is_he_doing" => $what_is_he_doing);

        return response()->json($ret);

        // code...
    }


    //
}
