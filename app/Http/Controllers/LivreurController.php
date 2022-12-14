<?php



namespace App\Http\Controllers;



use App\Commune;

use App\Http\Requests\StoreLivreur;

use App\Livreur;

use App\Template;

use Dompdf\Dompdf;

use Illuminate\Http\Request;

use Auth;

use Hash;

use DB;

use App\Check;

use Illuminate\Console\Command;



class LivreurController extends Controller

{

    public function __construct()

    {

        $this->middleware('auth:admin'or'auth:production'or'auth:depot');



    }





    public function indexAjax()

    {

        if($request->ajax()){

            $livreurs = Livreur::all();    

            $response = array(

                'livreurs' => $livreurs,

                'msg' => 'changement de la liste des livreurs',

            );

            return Response::json($response);  // <<<<<<<<< see this line    

        }

    }





    public function journal($livreur)

    {

        $wheres = "";

        $index = 0;

        $_livreur = "";

        $debut_entre = "";

        $fin_entre ="";

        $creance="";

        $livreurs = Livreur::all();

        $wheres =$wheres."where livreur_id=$livreur ";                

        $sql = "select * from commandes ";

        $sql = $sql.$wheres;

        $sql = $sql.'and (state="Livree" or state="confirmer" or state="non abouti") and creance_livreur="non solder"';

        $commandes=DB::select(DB::raw($sql));

        $ValeurRapporte = 0;

        $RapporteAuLsRapide=0;

        $LivreurMontant = 0;

        $livraison=0;

        foreach ($commandes as $key => $commande) {

            $c = Commande::find($commande->id);

            if($c->state == 'Livree' AND $c->creance_livreur== 'non solder')

            {

                $LivreurMontant  = $LivreurMontant + Commande::getWilayaLivreurTarif($commande->wilaya);

                $ValeurRapporte = $ValeurRapporte+$commande->total;    

            }

            if($c->state== 'non abouti' AND $c->creance_livreur== 'non solder')

            {

                $LivreurMontant  = $LivreurMontant + Commande::getWilayaLivreurNonAboutiTarif($commande->wilaya);

            }

        }

        $RapporteAuLsRapide = $livraison+$ValeurRapporte;

        return view('livreurs.journal',compact('livreurs','commandes','_livreur','LivreurMontant','debut_entre','fin_entre','creance','livraison','ValeurRapporte','RapporteAuLsRapide'));     



        

    }







    public function index()

    {

        $livreurs = Livreur::all();

        return view('livreurs.index',compact('livreurs'));        

    }





    public function store(Request $request)

    {

        // $validated = $request->validated();

        $livreur = new Livreur();

        $livreur->name= $request->get('name');

        $livreur->prenom= $request->get('prenom');

        $livreur->email= $request->get('email');

        $livreur->telephone= $request->get('telephone');

        $livreur->adress= $request->get('adress');

        $livreur->birth= $request->get('birth');

        $livreur->password=Hash::make($request->get('password'));

        $livreur->password_text= $request->get('password');

        try {

            $livreur->save();

        } catch (\Throwable $th) {

            return redirect()->route('livreur.index')->with('error', 'Erreur Pendant la cr??ation, remplir tout les champs ');

        }

        

        return redirect()->route('livreur.index')->with('success', 'livreur ins??r?? avec succ??s ');

    }







    public function destroy($id_livreur)

    {

            $c = Livreur::find($id_livreur);

            $c->delete();

            return redirect()->route('livreur.index')->with('success', 'le livreur a ??t?? supprim?? ');     

    }



    public function filter($id_livreur)

    {

        

        if(Check::CheckAuth(['admin','production','depot'])==false)

        {

            return redirect()->route('login.admin');     

        }



        

        $livreur=Livreur::find($id_livreur);

        $date_debut = date('Y-m-d');

        $date_fin = date('Y-m-d');

        $tickets = DB::select("select distinct t.created_at as created_at,t.updated_at as updated_at,t.id,t.maj,t.id_produit,t.codebar,t.satut from tickets t, sorties s where t.id = s.id_ticket and DATE(t.updated_at) between '$date_debut' and '$date_fin' and s.id_livreur='$id_livreur' and t.satut<>'retour' and t.satut='sortie' ");

        

        $produits_qte = DB::select("select l.id,l.name,l.prenom,p.nom,p.id as id_produit,count(distinct(t.id)) as nb_ticket from livreurs l,tickets t,sorties s,produits p where (l.id=s.id_livreur) and(l.id = '$id_livreur') and (t.id=s.id_ticket) and (t.id_produit=p.id) and (satut='sortie') and (DATE(t.updated_at) between '$date_debut' and '$date_fin' ) and  t.satut<>'retour' group by l.id,l.name,l.prenom,p.nom,p.id ");

        

        return view('livreurs.filter',compact(

            'tickets',

            'livreur',

            'id_livreur',

            'produits_qte',

            'date_debut',

            'date_fin'

        ));

    }



    public function update(Request $request,$livreur)

    {

        $livreur = Livreur::find($livreur);

        $livreur->name= $request->get('nom');

        $livreur->prenom= $request->get('prenom');

        $livreur->telephone = $request->get('telephone');

        $livreur->email = $request->get('email');

        $livreur->wilaya_id = $request->get('wilaya_id');

        $livreur->commune_id = $request->get('commune_id');

        $livreur->adress = $request->get('adress');

        try {

            $livreur->save();

        } catch (\Throwable $th) {

            return redirect()->route('livreur.index')

            ->with('error', 'Modification echou?? !');

        }

        return redirect()->route('livreur.index')

            ->with('success', 'modification eff??ctu?? !');



    }





    public function bl($livreur)

    {

        $elements = DB::select("select p.nom ,p.prix_gros ,count(distinct(t.id)) as qte from produits p , tickets t,sorties s where s.id_ticket= t.id and t.id_produit=p.id and date(t.updated_at)=CURDATE() and s.id_livreur=$livreur group by p.nom,p.prix_gros ");

        $livreur = Livreur::find($livreur);

        $dompdf = new Dompdf();

        $options = $dompdf->getOptions(); 

        $options->set(array('isRemoteEnabled' => true));
        $dompdf->setOptions($options);

        $html = Template::bl($livreur,$elements);

        $dompdf->loadHtml($html);

        $dompdf->render();

        $current = date('Y-m-d');

        $file = "bonlivraison_".$current;

        $dompdf->stream("$file", array('Attachment'=>1));

    }




}

