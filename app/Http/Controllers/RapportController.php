<?php







namespace App\Http\Controllers;







use Illuminate\Http\Request;

use Milon\Barcode\DNS1D;

use App\Wilaya;

use App\Template;

use App\Commande;

use App\Check;

use Auth;

use App\Ticket;

use App\Sortie;

use App\Retour;

use DB;

use App\Produit;

use Carbon\Carbon;



class RapportController  extends Controller

{

    public function __construct()

    {

        $this->middleware(['auth:admin'or'auth:depot'or'auth:production']);



    }

    

    public function reidiriger1()

    {

        

        $is_admin = (Check::CheckAuth(['admin','production','depot']));



        return response()->json($is_admin);

    }



    public function reidiriger2($id_produit,$statut,$date_debut,$date_fin)

    {

                

        if(Check::CheckAuth(['admin'])==false)

        {

            return redirect('/rapport');     

        }



        $produit = DB::select("select * from produits p where id = '$id_produit' ");

        

        $produit = $produit[0];

        

        $tickets1 = (DB::select("select satut,count(*) as qte from tickets t where id_produit = '$id_produit' and t.satut<>'au_depot' and ( DATE(t.updated_at)>=DATE('$date_debut') and DATE(t.updated_at)<=DATE('$date_fin') ) group by satut "));

        $tickets2 = (DB::select("select satut,count(*) as qte from tickets t where id_produit = '$id_produit' and t.satut='au_depot' group by satut "));



        $tickets = array_merge($tickets1, $tickets2);

        

        $livreurs = DB::select("select * from livreurs");

        

        return view('modifier_rapport',compact('livreurs','tickets','id_produit','statut','date_debut','date_fin','produit'));

    }



    public function reidiriger3($id_produit,$statut,$date_debut,$date_fin,Request $request)

    {

        

        if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 

        if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}

        if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}

        

        $statut = (string)$request->statut_actuelle;

        

        $tickets = (DB::select("select * from tickets t where id_produit = '$id_produit' and satut = '$statut'  order by t.updated_at desc limit $request->new_qte"));

        

        foreach($tickets as $ticket)

        {

         

            DB::update("update tickets t set t.satut='$request->new_statut',t.updated_at=now(),t.maj='$acteur' where id = '$ticket->id' ");

            DB::delete("delete from sorties where id_ticket = $ticket->id ");

            DB::delete("delete from retours where id_ticket = $ticket->id ");

            

        }

        

        $request->new_statut = (string)$request->new_statut;

        

        if($request->new_statut=='sortie')

        {

            

            foreach($tickets as $ticket)

            {

                

                DB::delete("delete from sorties where id_ticket = $ticket->id ");

                DB::delete("delete from retours where id_ticket = $ticket->id ");

                

                $sortie  = new Sortie();

                $sortie->id_ticket = $ticket->id;

                $sortie->id_livreur = $request->livreur;

                $sortie->id_client = 1;

                $sortie->prix_vente = 100;        

                $sortie->save();    

                

            }

            

        }

        

        if($request->new_statut=='retour')

        {

            

            $tickets1 = DB::select("select id_ticket as id from retours t where (t.id_livreur = $request->livreur) order by t.updated_at desc limit $request->new_qte");

            

            $tickets2 = DB::select("select t.id from tickets t where (t.id not in (select id_ticket from retours where id_livreur = $request->livreur ) ) order by t.updated_at desc limit $request->new_qte");

            

            if(count($tickets1)<$request->new_qte){$tickets = array_merge($tickets1,$tickets2);}

            

            foreach($tickets as $ticket)

            {

                

                DB::delete("delete from sorties where id_ticket = $ticket->id ");

                DB::delete("delete from retours where id_ticket = $ticket->id ");

                

                $retour  = new Retour();

                $retour->id_ticket = $ticket->id;

                $retour->id_livreur = $request->livreur;

                $retour->id_client = 1;

                $retour->prix_vente = 100;        

                $retour->save();    

                

            }

            

        }





        if($statut=='0'){$statut = "Vient d'etre crée";}

        if($request->new_statut=='0'){$request->new_statut = "Vient d'etre crée";}

        

        return back()->with('success', "$request->new_qte tickets de Statut : $statut modifié au statut : $request->new_statut");

        

    }



    

    public function rapport()

    {

        

        if(Check::CheckAuth(['admin','production','depot'])==false)

        {

            return redirect()->route('login.admin');     

        }

        

        

        $produits = Produit::orderBy('nom')->get();

        

        return view('rapport',compact('produits'));

    }



    public function getScannedTickets(Request $request)

    {      

        

        $date_debut = date($request['date_debut']);

        $date_fin = date($request['date_fin']);  



        $nbrTicketsGenerated = DB::select("select p.id as id_produit,count(t.num_ticket_produit) as nbrtickets from tickets t, produits p where (t.satut <> 'annulé') and (p.id = t.id_produit  and ( DATE(t.created_at)>=DATE('$date_debut') and DATE(t.created_at)<=DATE('$date_fin'))) group by (p.id) order by id_produit asc ");

        $nbrTicketsSatut0 = DB::select("select p.id as id_produit,count(t.num_ticket_produit) as nbrtickets from tickets t, produits p where (p.id = t.id_produit and ( DATE(t.created_at)>=DATE('$date_debut') and DATE(t.updated_at)<=DATE('$date_fin') ) and (satut = '0' and satut <> 'annulé')) group by (p.id) order by id_produit asc ");

        $nbrTicketsVersDepot = DB::select("select p.id as id_produit,count(t.num_ticket_produit) as nbrtickets from tickets t, produits p where (p.id = t.id_produit and ( DATE(t.updated_at)>=DATE('$date_debut') and DATE(t.updated_at)<=DATE('$date_fin') ) and (satut = 'vers_depot' and satut <> 'annulé' )) group by (p.id) order by id_produit asc ");

        $nbrTicketsAuDepot = DB::select("select p.id as id_produit,count(t.num_ticket_produit) as nbrtickets from tickets t, produits p where (p.id = t.id_produit and ( DATE(t.updated_at)>=DATE('$date_debut') and DATE(t.updated_at)<=DATE('$date_fin') ) and (satut = 'vers_depot' and satut <> 'annulé') ) group by (p.id) order by id_produit asc ");

        $nbrTicketsSortie = DB::select("select p.id as id_produit,count(t.num_ticket_produit) as nbrtickets from tickets t, produits p where (p.id = t.id_produit and ( DATE(t.updated_at)>=DATE('$date_debut') and DATE(t.updated_at)<=DATE('$date_fin') ) and (satut = 'sortie' and satut <> 'annulé') ) group by (p.id) order by id_produit asc ");

        $nbrTicketsRetour = DB::select("select p.id as id_produit,count(t.num_ticket_produit) as nbrtickets from tickets t, produits p where (p.id = t.id_produit and ( DATE(t.updated_at)>=DATE('$date_debut') and DATE(t.updated_at)<=DATE('$date_fin') ) and (satut = 'retour' and satut <> 'annulé') ) group by (p.id) order by id_produit asc ");



        $nbrTicketsGenerated = Produit::getNumber($nbrTicketsGenerated);

        $nbrTicketsSatut0  = Produit::getNumber($nbrTicketsSatut0);

        $nbrTicketsVersDepot = Produit::getNumber($nbrTicketsVersDepot);

        $nbrTicketsAuDepot = Produit::getNumber($nbrTicketsAuDepot);

        $nbrTicketsSortie = Produit::getNumber($nbrTicketsSortie);

        $nbrTicketsRetour = Produit::getNumber($nbrTicketsRetour);

        

        

        $nbrTicketsGenerated_outdate = DB::select("select p.id as id_produit,count(t.num_ticket_produit) as nbrtickets from tickets t, produits p where (p.id = t.id_produit and (t.satut <> 'annulé')) group by (p.id) order by id_produit asc ");

        $nbrTicketsVersDepot_outdate = DB::select("select p.id as id_produit,count(t.num_ticket_produit) as nbrtickets from tickets t, produits p where (p.id = t.id_produit and (t.satut <> 'annulé' and t.satut = 'vers_depot')) group by (p.id) order by id_produit asc ");

        $nbrTicketsSatut0_outdate = DB::select("select p.id as id_produit,count(t.num_ticket_produit) as nbrtickets from tickets t, produits p where (p.id = t.id_produit /*and ( DATE(t.updated_at)>=DATE('$date_debut') and DATE(t.updated_at)<=DATE('$date_fin') )*/) and (satut = '0' and satut <> 'annulé') group by (p.id) order by id_produit asc ");

        $nbrTicketsAuDepot_outdate = DB::select("select p.id as id_produit,count(t.num_ticket_produit) as nbrtickets from tickets t, produits p where (p.id = t.id_produit /*and ( DATE(t.updated_at)>=DATE('$date_debut') and DATE(t.updated_at)<=DATE('$date_fin') )*/ and (satut = 'vers_depot' and satut <> 'annulé') ) group by (p.id) order by id_produit asc ");

        $nbrTicketsSortie_outdate = DB::select("select p.id as id_produit,count(t.num_ticket_produit) as nbrtickets from tickets t, produits p where (p.id = t.id_produit /*and ( DATE(t.updated_at)>=DATE('$date_debut') and DATE(t.updated_at)<=DATE('$date_fin') )*/ and (satut = 'sortie' and satut <> 'annulé') ) group by (p.id) order by id_produit asc ");

        $nbrTicketsRetour_outdate = DB::select("select p.id as id_produit,count(t.num_ticket_produit) as nbrtickets from tickets t, produits p where (p.id = t.id_produit /*and ( DATE(t.updated_at)>=DATE('$date_debut') and DATE(t.updated_at)<=DATE('$date_fin') )*/ and (satut = 'retour' and satut <> 'annulé') ) group by (p.id) order by id_produit asc ");

        

        

        $nbrTicketsGenerated_outdate = Produit::getNumber($nbrTicketsGenerated_outdate);

        $nbrTicketsVersDepot_outdate = Produit::getNumber($nbrTicketsVersDepot_outdate);

        $nbrTicketsSatut0_outdate = Produit::getNumber($nbrTicketsSatut0_outdate);

        $nbrTicketsAuDepot_outdate = Produit::getNumber($nbrTicketsAuDepot_outdate);

        $nbrTicketsSortie_outdate = Produit::getNumber($nbrTicketsSortie_outdate);

        $nbrTicketsRetour_outdate = Produit::getNumber($nbrTicketsRetour_outdate);





        

        for($i=0;$i<count($nbrTicketsVersDepot_outdate);$i++)

        {

            

            $nbrTicketsAuDepot_outdate[$i]->nbrtickets = $nbrTicketsGenerated_outdate[$i]->nbrtickets-$nbrTicketsSortie_outdate[$i]->nbrtickets-$nbrTicketsSatut0_outdate[$i]->nbrtickets-$nbrTicketsVersDepot_outdate[$i]->nbrtickets;

            

            //

        }

        

        for($i=0;$i<count($nbrTicketsSatut0);$i++)

        {

            

            $nbrTicketsVersDepot[$i]->nbrtickets = $nbrTicketsGenerated[$i]->nbrtickets-$nbrTicketsSatut0[$i]->nbrtickets;

            

            //

        }

        

        return response()->json([

            'nbrTicketsGenerated' => $nbrTicketsGenerated,

            'nbrTicketsVersDepot'=>$nbrTicketsVersDepot,

            'nbrTicketsAuDepot'=>$nbrTicketsAuDepot_outdate,

            'nbrTicketsSortie'=>$nbrTicketsSortie            

        ]);

    } 





}



