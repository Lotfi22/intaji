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
use App\Depot;
use DB;
use Auth;
use Dompdf\Dompdf;
use Carbon\Carbon;

class TicketController  extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin'or'auth:depot'or'auth:production');

    }

    public function index()
    {
        
        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        $tickets = DB::select("select t.id,t.id_produit,t.created_at,t.updated_at,t.satut,t.num_ticket_produit,t.codebar,t.impression,t.maj ,p.nom  as nom from tickets t,produits p where (p.id=t.id_produit) and (date(t.updated_at) = date(now())) order by t.created_at desc");

        if(Check::CheckAuth(['depot']))
        {


            if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}

            $tickets = DB::select("select t.id,t.id_produit,t.created_at,t.updated_at,t.satut,t.num_ticket_produit,t.codebar,t.impression,t.maj ,p.nom  as nom 
            from tickets t,produits p 
            where (p.id=t.id_produit) and (date(t.updated_at) = date(now())) and 
            (maj='$acteur')
            order by t.created_at desc");
            
            
            // code...
        }

                        
        $nbrtickets = count(Ticket::all());
        
        $date_debut = date('Y-m-d');
        // date($request['date_debut'],'Y-m-d');
        $date_fin = date('Y-m-d');
        
        return view('tickets.index',compact('tickets',
        'date_debut',
        'date_fin' ,
        'nbrtickets'
        ));
    }

    public function filterExtra(Request $request)
    {        
        
        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }
        
        
        $date_debut = Carbon::parse($request['date_debut'])->format('Y-m-d');
        $date_fin = Carbon::parse($request['date_fin'])->format('Y-m-d');

        // $tickets = DB::select("select * from tickets t where ( DATE(t.created_at)>=DATE('$date_debut') and DATE(t.created_at)<=DATE('$date_fin') )");

        $tickets = DB::select("select t.id,t.id_produit,t.created_at,t.updated_at,t.satut,t.num_ticket_produit,t.codebar,t.impression,t.maj ,p.nom  as nom from tickets t,produits p where (p.id=t.id_produit) and ( DATE(t.updated_at)>=DATE('$date_debut') and DATE(t.updated_at)<=DATE('$date_fin') ) order by t.created_at desc");

        if(Check::CheckAuth(['depot']))
        {


            if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}

            $tickets = DB::select("select t.id,t.id_produit,t.created_at,t.updated_at,t.satut,t.num_ticket_produit,t.codebar,t.impression,t.maj ,p.nom  as nom 
            from tickets t,produits p 
            where (p.id=t.id_produit) and (date(t.updated_at) = date(now())) and 
            (maj='$acteur')
            order by t.created_at desc");            
            
            // code...
        }


        return view('tickets.index',compact(
            'tickets',
            'date_debut',
            'date_fin'
        ));
    }

    /**
     * retour normal
     */
    public function retour($livreur)
    {

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }
        
        $le_livreur=Livreur::find($livreur);
        
        $_livreur = $le_livreur;
        
        $tickets = DB::select("select *,t.id as id_ticket, t.updated_at as pupdated_at,t.created_at as pcreated_at,p.nom 
        from tickets t,produits p 
        where (t.id_produit=p.id) and t.id in (select id_ticket from sorties s where id_livreur=$livreur) and satut='sortie'");
        
        return view('tickets.retour',compact('tickets','livreur','_livreur','le_livreur'));
    }

    public function retourner(Request $request)
    {
           
        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        $request['livreur'] = ($request->livreur["id"]);
        
        if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 
        if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}
        if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}
        
        $ticket = Ticket::find($request['ticket']);
        $ticket->satut = 'retour';
        $ticket->maj = $acteur;
        $ticket->save();
        /**
         * insérer retour
         */
        $id_ticket = $ticket->id;

        DB::delete("delete from sorties where id_ticket = '$id_ticket' ");
        DB::delete("delete from retours where id_ticket = '$id_ticket' "); 
         
        $retour  = new Retour();
        $retour->id_ticket = $request['ticket'];
        $retour->id_livreur = $request['livreur'];
        $retour->id_client = 1;
        $retour->prix_vente = 100;        
        $retour->save();    
        
        $id_ticket = $ticket->id;
        
        return response()->json([
            'ticket'=>$request['ticket'],
            'livreur'=>$request['livreur'],
        ]);
    }



    /**
     * 
     *  Retour Prodution
     * 
     * 
     */


    public function retourRecyclage()
    {
        
        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        
        $tickets = Ticket::all();
        return view('tickets.retour-recyclage',compact('tickets'));
    }

    public function retournerRecyclage(Request $request)
    {
        
        if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 
        if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}
        if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        
        $ticket = Ticket::find($request['ticket']);
        $ticket->satut = 'recyclee';
        $ticket->maj = $acteur;
        $ticket->save();
        DB::delete("delete from sorties where id_ticket = '$id_ticket' ");
        return response()->json([
            'ticket'=>$request['ticket']
        ]);
    }     



    public function retourDestruction()
    {

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        $tickets = Ticket::all();
        return view('tickets.retour-destruction',compact('tickets'));
    }

    public function retournerDestruction(Request $request)
    {
        
        if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 
        if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}
        if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        
        $ticket = Ticket::find($request['ticket']);
        $ticket->satut = 'detruit';
        $ticket->maj = $acteur;
        $ticket->save();

        $id_ticket = $ticket->id;
        
        DB::delete("delete from sorties where id_ticket = '$id_ticket' ");

        
        return response()->json([
            'ticket'=>$request['ticket']
        ]);
    }     




    public function detacher($livreur)
    {

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }


        $tickets = DB::select("select *,t.id as id_ticket, t.updated_at as pupdated_at,t.created_at as pcreated_at,p.nom from tickets t,produits p where (t.id_produit=p.id) and t.id in (select id_ticket from sorties s where id_livreur=$livreur) and satut='sortie'");
        return view('tickets.detacher',compact('tickets','livreur'));
    }

    public function enlever(Request $request)
    {

        if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 
        if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}
        if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}
    
        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        
        $ticket = Ticket::find($request['ticket']);
        $ticket->satut = 'au_depot';
        $ticket->maj = $acteur;
        $ticket->save();
        
        $id_ticket = $ticket->id;

        DB::delete("delete from sorties where id_ticket = '$id_ticket'");

        return response()->json([
            'ticket'=>$request['ticket'],
            'livreur'=>$request['livreur'],

        ]);

    }

    public function affecter_livraison($num_livraison,$livreur)
    {
        
        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        
        $_livreur = $livreur;
        
        $le_livreur = DB::select("select * from livreurs where id ='$_livreur' ");
        
        $le_livreur = $le_livreur[0];
        
        $id_livreur = $le_livreur->id;
        
        $produit_qte = DB::select("select p.id,p.nom,count(distinct(t.id)) as qte 
        from produits p, sorties s,tickets t 
        where (p.id = t.id_produit and t.id=s.id_ticket and s.id_livreur = '$id_livreur' and t.satut='sortie') 
        group by p.id,p.nom order by p.nom");
                
        $tickets = DB::select("select * from tickets where (satut <> 'sortie' and satut <> 'annulé' and satut <> 'vendue' ) order by updated_at desc");

        $ids = Ticket::extract_ids($tickets);
        
        $ids = json_encode($ids);
     
        $livraisons = (DB::select("select * from livraisons where num_livraison = $num_livraison"));

        return view('tickets.affecter',compact('tickets','_livreur','le_livreur','produit_qte','ids','num_livraison','livraisons'));
    }



    public function affecter($livreur)
    {

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        
        $_livreur = $livreur;
        $today = (date('Y-m-d',strtotime("-0 days")));
        $yesterday = (date('Y-m-d',strtotime("-1 days")));
        $yesterday2 = (date('Y-m-d',strtotime("-2 days")));
        $yesterday3 = (date('Y-m-d',strtotime("-3 days")));
        $yesterday4 = (date('Y-m-d',strtotime("-4 days")));
        $yesterday5 = (date('Y-m-d',strtotime("-5 days")));
        $yesterday6 = (date('Y-m-d',strtotime("-6 days")));
        $yesterday7 = (date('Y-m-d',strtotime("-7 days")));
        $yesterday8 = (date('Y-m-d',strtotime("-7 days")));
        $yesterday9 = (date('Y-m-d',strtotime("-7 days")));
        $yesterday10 = (date('Y-m-d',strtotime("-7 days")));
        $yesterday11 = (date('Y-m-d',strtotime("-7 days")));
        $yesterday12 = (date('Y-m-d',strtotime("-7 days")));
        $yesterday13 = (date('Y-m-d',strtotime("-7 days")));
        $yesterday14 = (date('Y-m-d',strtotime("-7 days")));
        $yesterday15 = (date('Y-m-d',strtotime("-7 days")));
        
        $le_livreur = DB::select("select * from livreurs where id ='$_livreur' ");
        
        $le_livreur = $le_livreur[0];
        
        $id_livreur = $le_livreur->id;
        
        $produit_qte = DB::select("select p.id,p.nom,count(distinct(t.id)) as qte 
        from produits p, sorties s,tickets t 
        where (p.id = t.id_produit and t.id=s.id_ticket and s.id_livreur = '$id_livreur' and t.satut='sortie' /*and date(s.created_at) = CURDATE()*/) 
        group by p.id,p.nom order by p.nom");
                
        $tickets = DB::select("select * from tickets where (satut <> 'sortie' /*and satut <> '0'*/ and satut <> 'annulé' ) and ( Date(updated_at) >= '$today' or Date(updated_at) = '$yesterday' or Date(updated_at) = '$yesterday2' or Date(updated_at) = '$yesterday3' or Date(updated_at) = '$yesterday4' or Date(updated_at) = '$yesterday5' or Date(updated_at) = '$yesterday6' or Date(updated_at) = '$yesterday7' or Date(updated_at) = '$yesterday8' or Date(updated_at) = '$yesterday9' or Date(updated_at) = '$yesterday10' or Date(updated_at) = '$yesterday11' or Date(updated_at) = '$yesterday12' or Date(updated_at) = '$yesterday13' or Date(updated_at) = '$yesterday14' or Date(updated_at) = '$yesterday15')  order by updated_at desc");
        

        $ids = Ticket::extract_ids($tickets);
        
        $ids = json_encode($ids);

        $livraisons = [];
        
        return view('tickets.affecter',compact('tickets','_livreur','le_livreur','produit_qte','ids','livraisons'));
    }
    

    public function assigner(Request $request)
    {
        
        if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 
        if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}
        if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}
        
        $num_livraison = $request['num_livraison'];
        $id_livreur = $request['livreur'];
        $id_ticket = $request['ticket'];

        $nom_produit = Ticket::get_nom_produit($id_ticket);


        $livraisonss = DB::select("select nom_produit,qte 
        from livraisons 
        where num_livraison = $num_livraison
        order by id asc");
        
        $produit_qtes = DB::select("select p.id,p.nom,count(distinct(t.id)) as qte 
        from produits p, sorties s,tickets t 
        where (p.id = t.id_produit and t.id=s.id_ticket and s.id_livreur='$id_livreur' and t.satut='sortie' and s.num_livraison = $num_livraison)
        group by p.id,p.nom 
        order by p.nom");

        if(Livraison::affectation_autorisee($livraisonss,$produit_qtes,$nom_produit))
        {

            $id_ticket = $request['ticket'];
            $ticket = Ticket::find($request['ticket']);
            $ticket->satut = 'sortie';
            $ticket->maj = $acteur;
            $ticket->updated_at=date("Y-m-d H:i:s");
            $ticket->save();

            DB::delete("delete from sorties where id_ticket = '$id_ticket' ");
            $nbticket = DB::select("select statut_livraison as nbticket from sorties where id_ticket=$id_ticket and date(updated_at)=CURDATE()");
            
            if(count($nbticket)==0)
            {
                $sortie  = new Sortie();
                $sortie->id_ticket = $request['ticket'];
                $sortie->id_livreur = $request['livreur'];
                $sortie->id_client = 1;
                $sortie->num_livraison = $request['num_livraison'];
                $sortie->prix_vente = 100;        
                $sortie->save();    
            }
            
            $id_livreur = $request['livreur'];
            
            $produit_qte = DB::select("select p.id,p.nom,count(distinct(t.id)) as qte 
            from produits p, sorties s,tickets t 
            where (p.id = t.id_produit and t.id=s.id_ticket and s.id_livreur = '$id_livreur' and t.satut='sortie') 
            group by p.id,p.nom order by p.nom");

            $livraisonss = DB::select("select nom_produit,qte 
            from livraisons 
            where num_livraison = $num_livraison
            order by id asc");
            
            $produit_qtes = DB::select("select p.id,p.nom,count(distinct(t.id)) as qte 
            from produits p, sorties s,tickets t 
            where (p.id = t.id_produit and t.id=s.id_ticket and s.id_livreur='$id_livreur' and t.satut='sortie' and s.num_livraison = $num_livraison)
            group by p.id,p.nom 
            order by p.nom");

            Livraison::jump_to_bl_autorisee($livraisonss,$produit_qtes,$num_livraison);

            return response()->json([
                'ticket'=>$request['ticket'],
                'livreur'=>$request['livreur'],
                'produit_qte'=>$produit_qte
                            
            ]);    

            //
        }
        else
        {

            $produit_qte = DB::select("select p.id,p.nom,count(distinct(t.id)) as qte 
            from produits p, sorties s,tickets t 
            where (p.id = t.id_produit and t.id=s.id_ticket and s.id_livreur = '$id_livreur' and t.satut='sortie') 
            group by p.id,p.nom order by p.nom");

            $livraisonss = DB::select("select nom_produit,qte 
            from livraisons 
            where num_livraison = $num_livraison
            order by id asc");
            
            $produit_qtes = DB::select("select p.id,p.nom,count(distinct(t.id)) as qte 
            from produits p, sorties s,tickets t 
            where (p.id = t.id_produit and t.id=s.id_ticket and s.id_livreur='$id_livreur' and t.satut='sortie' and s.num_livraison = $num_livraison)
            group by p.id,p.nom 
            order by p.nom");

            Livraison::jump_to_bl_autorisee($livraisonss,$produit_qtes,$num_livraison);

            return response()->json([
                'ticket'=>$request['ticket'],
                'livreur'=>$request['livreur'],
                'produit_qte'=>$produit_qte,
                'msg' => 'Affectation Impossible'
                            
            ]);    



            /**/
        }

        //        
    }


    public function retour_manuelle($id_livreur)
    {
        
        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }
        
        $produits = DB::select("select * from produits order by nom asc");
        
        $le_livreur = DB::select("select * from livreurs l where l.id = $id_livreur ");
        
        $le_livreur = $le_livreur[0];
        
        return view('tickets.retour_manuel',compact('produits','id_livreur','le_livreur'));
    }

    public function retournerMass($id_livreur,Request $request)
    {
        
        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }
        
        
        $datas=($request->all());
        
        unset($datas['_token']);
        
        foreach ($datas as $array_key => $array_item) 
        {
            if ($datas[$array_key] == "0" || $datas[$array_key] == null) 
            {
                unset($datas[$array_key]);
            }
        }

        $ids_produits = array_keys($datas);

        $qtes = array_values($datas);
        
        for($i=0;$i<count($ids_produits);$i++)
        {
            $id_prod = $ids_produits[$i];
            
            $quantitee = $qtes[$i];
            
            $tickets = DB::select("select t.id from sorties s,tickets t,produits p where (s.id_ticket=t.id) and (t.id_produit=p.id) and (t.id_produit=$id_prod) and (t.satut = 'sortie') and (s.id_livreur = $id_livreur) and (date(t.updated_at) = date(now())) order by t.updated_at desc limit $quantitee");
            
            //Le retour

            if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 
            if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}
            if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}

            foreach($tickets as $ticket)
            {
                
                $id_ticket = $ticket->id;
                $ticket = Ticket::find($id_ticket);
                $ticket->satut = 'retour';
                $ticket->maj = $acteur;
                $ticket->updated_at=date("Y-m-d H:i:s");
                $ticket->save();
                
                DB::delete("delete from sorties where id_ticket = '$id_ticket' ");
                DB::delete("delete from retours where id_ticket = '$id_ticket' ");
                
                /**
                 * insérer retour
                 */
                $retour  = new Retour();
                $retour->id_ticket = $id_ticket;
                $retour->id_livreur = $id_livreur;
                $retour->id_client = 1;
                $retour->prix_vente = 100;        
                $retour->save();    
                
            }
            
        }
        
        return redirect('/livreur/filter/'.$id_livreur);
        
    }
    

    public function affectation_manuelle($id_livreur)
    {
        
        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }
        
        
        $produits = DB::select("select * from produits p order by p.nom asc");
        
        $le_livreur = DB::select("select * from livreurs l where l.id = $id_livreur ");
        
        $le_livreur = $le_livreur[0];
        
        return view('tickets.affecter_manuel',compact('produits','id_livreur','le_livreur'));
    }
    
    public function assignerMass($id_livreur,Request $request)
    {

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        
        $produits = DB::select("select * from produits p order by p.nom asc");
        
        $datas=($request->all());
        
        unset($datas['_token']);

        foreach ($datas as $array_key => $array_item) 
        {
            if ($datas[$array_key] == "0") 
            {
                unset($datas[$array_key]);
            }
        }
        
        $ids_produits = array_keys($datas);
        
        $qtes = array_values($datas);
        
        for($i=0;$i<count($ids_produits);$i++)
        {
            $id_prod = $ids_produits[$i];
            
            $quantitee = $qtes[$i];
            
            $tickets = DB::select("select * from tickets t where t.id_produit=$id_prod and (t.satut = 'au_depot' or t.satut = 'retour') order by updated_at desc limit $quantitee");
            
            //La sortie

            if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 
            if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}
            if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}

            foreach($tickets as $ticket)
            {
                
                $id_ticket = $ticket->id;
                $ticket = Ticket::find($id_ticket);
                $ticket->satut = 'sortie';
                $ticket->maj = $acteur;
                $ticket->updated_at=date("Y-m-d H:i:s");
                $ticket->save();
                
                DB::delete("delete from sorties where id_ticket = '$id_ticket' ");
                
                $sortie  = new Sortie();
                $sortie->id_ticket = $id_ticket;
                $sortie->id_livreur = $id_livreur;
                $sortie->id_client = 1;
                $sortie->prix_vente = 100;        
                $sortie->save();    
                
            }
            
        }
        
        return redirect('/livreur/filter/'.$id_livreur);
    }


    public function filter(Request $request,$id_livreur)
    {
        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        $date_debut = Carbon::parse($request['date_debut'])->format('Y-m-d');
        // date($request['date_debut'],'Y-m-d');
        $date_fin = Carbon::parse($request['date_fin'])->format('Y-m-d');
        // date($request['date_fin'],'Y-m-d');  
        $tickets = DB::select("select * from tickets t where ( DATE(t.updated_at)>=DATE('$date_debut') and DATE(t.updated_at)<=DATE('$date_fin') ) and (t.satut<>'retour' and t.satut='sortie') and  t.id in (select id_ticket from sorties s where id_livreur=$id_livreur)");
        $livreur=Livreur::find($id_livreur);
        
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

    


    public function vers_depot()
    {

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 
        if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}
        if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}


        $livreurs = DB::select("select * from livreurs");

        $tickets = Ticket::whereIn('satut', ['0','annulé'])
            /*->whereDate('created_at', Carbon::today())->OrwhereDate('created_at', Carbon::yesterday())*/
            ->orderBy('created_at','desc')
            ->get();
        
        $produit_qte = DB::select("select p.id,p.nom,l.email as livreur,count(*) as qte 
        from produits p, tickets t,livreurs l
        where (p.id = t.id_produit and date(t.updated_at) = date(now()) and
        satut='vers_depot' and t.id_livreur = l.id and t.maj = '$acteur') 
        group by p.id,p.nom,l.email 
        order by p.id asc");


        $depot = (Auth::guard('depot')->user()->depot) ?? "";

        $produits = DB::select("select * from produits order by id asc");

        return view('tickets.vers_depot',compact('tickets','produit_qte','livreurs','produits','depot'));

    }

    public function annuler()
    {

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }
        
        $tickets = DB::select("select * from tickets t where (t.satut='vers_depot' or t.satut='0')");
        
        return view('tickets.annuler',compact('tickets'));

    }

    public function annulation(Request $request)
    {

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        
        if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 
        if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}
        if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}
        
        $id_ticket = $request->ticket;
        
        $ticket = Ticket::find($id_ticket);
        $ticket->satut = 'annulé';
        $ticket->maj = $acteur;
        $ticket->updated_at=date("Y-m-d H:i:s");
        $ticket->save();

        return response()->json([
            'ticket'=>$request['ticket']     
        ]);    
        
        
        
    }
    

    public function vers_depot_action(Request $request)
    {

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }


        if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 
        if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}
        if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}
        
        $ticket = Ticket::find($request['ticket']);

        $id_livreur=($request->id_livreur);
        
        if($ticket!=null)
        {
            $ticket->satut= "vers_depot";
            $ticket->maj = $acteur;
            if($id_livreur!="aucun"){$ticket->id_livreur = $id_livreur;}
            $ticket->save();
            
            $produit_qte = DB::select("select p.id,p.nom,l.email as livreur,count(*) as qte 
            from produits p, tickets t,livreurs l
            where (p.id = t.id_produit and date(t.updated_at) = date(now()) and
            satut='vers_depot' and t.id_livreur = l.id and t.maj = '$acteur') 
            group by p.id,p.nom,l.email 
            order by p.id asc");
            
            $reste = DB::select("select * from tickets t where (date(t.updated_at) = date( now() ) and t.satut='0') ");
            
            $reste = count($reste);
            

            $depot = (Auth::guard('depot')->user()->depot) ?? "";

            $produits = DB::select("select * from produits order by id asc");

            $qte1 = Depot::depot_single_produit_qte($depot,$produits[0]->id) ?? '0';
            
            $qte2 = Depot::depot_single_produit_qte($depot,$produits[1]->id) ?? '0';

            return response()->json([
                'ticket'=>$request['ticket'],
                'produit_qte'=>$produit_qte,
                'reste' => $reste,
                'qte1' =>$qte1,
                'qte2' =>$qte2
            ]);
        }
        else
        {
            
            $produit_qte = DB::select("select p.id,p.nom,l.email as livreur,count(*) as qte 
            from produits p, tickets t,livreurs l
            where (p.id = t.id_produit and date(t.updated_at) = date(now()) and satut='vers_depot' and t.id_livreur = l.id) 
            group by p.id,p.nom,l.email 
            order by p.nom");
            
            $reste = DB::select("select * from tickets t where (date(t.updated_at) = date( now() ) and t.satut='0') ");
            
            $reste = count($reste);

            return response()->json([
                'ticket'=>null,
                'produit_qte'=>$produit_qte,
                'reste' => $reste
            ]);
            
        }
    }


    public function au_depot()
    {

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 
        if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}
        if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}

        $tickets = Ticket::where('satut', '=', 'vers_depot')
            ->orWhere('satut', '=', '0')
            ->orderBy('created_at','desc')
            ->get();


        $produit_qte = DB::select("select p.id,p.nom,count(*) as qte 
        from produits p, tickets t
        where (p.id = t.id_produit) and (satut='au_depot') and (maj = '$acteur') and 
        (date(t.updated_at) = date(now())) 
        group by p.id,p.nom
        order by p.id asc");

        $depot = (Auth::guard('depot')->user()->depot) ?? "";

        $produits = DB::select("select * from produits order by id asc");

        return view('tickets.au_depot',compact('tickets','produit_qte','depot','produits'));

    }

    public function au_depot_action(Request $request)
    {

        $id_ticket=($request->ticket);

        if(Check::CheckAuth(['admin','production','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        
        if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user());} 
        if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user());}
        if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user());}

        ($acteur->depot==null) ? $depot = "Annonyme_".$acteur->email : $depot = "$acteur->depot";

        (DB::insert("insert into historiques (id_ticket,depot) 
                    values ($id_ticket,'$depot')"));
        
        $ticket = Ticket::find($request['ticket']);
        $ticket->satut= "au_depot";
        $ticket->maj= $acteur->email;
        $ticket->save();
        
        $produit_qte = DB::select("select p.id,p.nom,count(*) as qte
        from produits p, tickets t
        where (p.id = t.id_produit) and (satut='au_depot') and (maj = '$acteur->email') 
        and (date(t.updated_at) = date(now())) 
        group by p.id,p.nom
        order by p.id asc");

        $depot = (Auth::guard('depot')->user()->depot) ?? "";

        $produits = DB::select("select * from produits order by id asc");

        $qte1 = Depot::depot_single_produit_qte($depot,$produits[0]->id ?? "") ?? '0';
        
        $qte2 = Depot::depot_single_produit_qte($depot,$produits[1]->id ?? "") ?? '0';

        return response()->json([
            'ticket'=>$request['ticket'],
            'produit_qte'=>$produit_qte,
            'qte1'=>$qte1,
            'qte2'=>$qte2
        ]);
    }

    public function fit_produits_bl(Request $request)
    {

        $id_livreur = $request->id_livreur;

        $produit_qte = DB::select("select p.id,p.nom,count(distinct(t.id)) as qte 
        from produits p, sorties s,tickets t 
        where (p.id = t.id_produit and t.id=s.id_ticket and s.id_livreur = '$id_livreur' and t.satut='sortie') 
        group by p.id,p.nom order by p.nom");
        
        return response()->json($produit_qte);

        # code...
    }


    public function bl($ticket)
    {
        $ticket = Ticket::find($ticket);
        $dompdf = new Dompdf();
        $options = $dompdf->getOptions(); 
        $options->set(array('isRemoteEnabled' => true));
        $dompdf->setOptions($options);
        $html = Template::bl($ticket);
        $dompdf->loadHtml($html);
        $dompdf->render();
        $current = date('Y-m-d');
        $file = "bonlivraison_".$current;
        $dompdf->stream("$file", array('Attachment'=>0));
    }

    public function new_bl($id_livreur,Request $request)
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

        $livreur = Livreur::find($id_livreur);

        $dompdf = new Dompdf();

        $options = $dompdf->getOptions(); 

        $dompdf->setOptions($options);

        $elements = $informations;

        $html = Template::bl1($livreur,$elements,$client,$adresse);

        $dompdf->loadHtml($html);

        $dompdf->render();

        $current = date('Y-m-d');

        $file = "bonlivraison_".$current;

        $dompdf->stream("$file", array('Attachment'=>1));

        # code...
    }

}

