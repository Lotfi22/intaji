<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;

use App\Ticket;
use App\Check;

class StatistiqueController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin'or'auth:production'or'auth:depot');

    }

    public function remise_a_zero()
    {

        if(Check::CheckAuth(['admin'])==false)
        {
            return redirect()->route('login.admin');     
        }
        
        //DB::delete("delete from tickets");
        //DB::delete("delete from sorties");
        //DB::delete("delete from retours");
        
        return back();
        
    }

    public function index()
    {

        if(Check::CheckAuth(['admin','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }

        
        $last_month = date('Y-m-d',strtotime("-30 days"));

        $tickets_jour_created = DB::select("select date(created_at) as created_at, count(distinct(id)) as nb_ticket 
        from tickets where (date(created_at) >= date('$last_month') and (satut<>'annulé') )group by date(created_at) order by date(created_at) asc limit 30");

        $tickets_jour_created = Ticket::extract_date_and_number($tickets_jour_created);

        $jours_1 = (json_encode($tickets_jour_created->date));
        $numbers_1 = (json_encode($tickets_jour_created->numbers));


        $tickets_jour_sorties = DB::select("select date(updated_at) as created_at, count(distinct(id)) as nb_ticket 
        from tickets where (satut='sortie' and date(updated_at) >= date('$last_month') and (satut<>'annulé') )group by date(updated_at) order by date(updated_at) asc limit 30");

        $tickets_jour_sorties = Ticket::extract_date_and_number($tickets_jour_sorties);

        $jours_sorties = (json_encode($tickets_jour_sorties->date));
        $numbers_sorties = (json_encode($tickets_jour_sorties->numbers));


        /*comparaison today yesterday*/

        $yesterday = date('Y-m-d',strtotime("-1 days"));
        
        $today = date('Y-m-d');
        
        $date_debut = $today;
        $date_fin = $today;
        
        $nb_tickets_today=DB::select("select count(satut) as nb_ticket_today from tickets where (date(created_at) = date('$today') and (satut<>'annulé'))");
        
        $nb_tickets_today = ($nb_tickets_today[0]->nb_ticket_today);

        $nb_tickets_yesterday=DB::select("select count(satut) as nb_ticket_yesterday from tickets where (date(created_at) = date('$yesterday') and (satut<>'annulé'))");
        
        $nb_tickets_yesterday = ($nb_tickets_yesterday[0]->nb_ticket_yesterday);

        ($nb_tickets_yesterday==0) ? $pctg_ceation_ysterday_today = 0 : $pctg_ceation_ysterday_today=number_format((float)((($nb_tickets_today/$nb_tickets_yesterday)-1)*100), 1, '.', '');

       
        /*sorties */

        $nb_sorties_today=DB::select("select count(satut) as nb_sortie_today from tickets where (date(updated_at) = date('$today') and satut='sortie')");
        
        $nb_sorties_today = ($nb_sorties_today[0]->nb_sortie_today);
        
        $nb_sorties_yesterday=DB::select("select count(satut) as nb_sortie_yesterday from tickets where (date(updated_at) = date('$yesterday') and satut='sortie')");
        
        $nb_sorties_yesterday = ($nb_sorties_yesterday[0]->nb_sortie_yesterday);
        
        ($nb_sorties_yesterday==0) ? $pctg_sortie_ysterday_today = 0 : $pctg_sortie_ysterday_today=number_format((float)((($nb_sorties_today/$nb_sorties_yesterday)-1)*100), 1, '.', '');

        /* Livreur qte */
        
        $livreur_qte = DB::select("select s.id_livreur,l.email,p.nom as nomproduit,p.id as id_produit ,count(distinct(s.id_ticket)) as nb_tickets from  sorties s,livreurs l,tickets t,produits p where ((s.id_livreur=l.id) and (p.id=t.id_produit) and (s.id_ticket=t.id)) and(date(t.updated_at)=date(now())) group by s.id_livreur,l.email,p.nom,p.id order by s.id_livreur,l.email asc, nb_tickets desc");
        
        $produits = DB::select("select p.nom as nomproduit,count(distinct(s.id_ticket)) as nb_tickets from  sorties s,tickets t,produits p where ((p.id=t.id_produit) and (s.id_ticket=t.id)) and(date(t.updated_at)=date(now())) group by p.nom order by nb_tickets desc");
    
        $qte_vers_depot = DB::select("select p.id as id_produit,p.nom as nomproduit,p.id as id_produit ,count(distinct(t.id)) as nb_tickets from tickets t,produits p where (t.satut='vers_depot' or t.satut='au_depot') and (p.id=t.id_produit) and(date(t.updated_at)=date(now())) group by p.nom,p.id order by p.nom asc");

        $qte_au_depot = DB::select("select p.id as id_produit, p.nom as nomproduit,p.id as id_produit ,count(distinct(t.id)) as nb_tickets from tickets t,produits p where (t.satut='au_depot') and (p.id=t.id_produit) and(date(t.updated_at)=date(now())) group by p.nom,p.id order by p.nom asc");

        return view('Statistiques.stat',compact('qte_au_depot','qte_vers_depot','date_fin','date_debut','jours_sorties','numbers_sorties','jours_1','numbers_1','pctg_ceation_ysterday_today','nb_tickets_today','pctg_sortie_ysterday_today','nb_sorties_today','livreur_qte','today','produits'));

        // code...
    }


    public function filter(Request $request)
    {

        if(Check::CheckAuth(['admin','depot'])==false)
        {
            return redirect()->route('login.admin');     
        }
        $last_month = date('Y-m-d',strtotime("-30 days"));

        $tickets_jour_created = DB::select("select date(created_at) as created_at, count(distinct(id)) as nb_ticket 
        from tickets where (date(created_at) >= date('$last_month') and (satut<>'annulé') )group by date(created_at) order by date(created_at) asc limit 30");

        $tickets_jour_created = Ticket::extract_date_and_number($tickets_jour_created);

        $jours_1 = (json_encode($tickets_jour_created->date));
        $numbers_1 = (json_encode($tickets_jour_created->numbers));


        $tickets_jour_sorties = DB::select("select date(updated_at) as created_at, count(distinct(id)) as nb_ticket 
        from tickets where (satut='sortie' and date(updated_at) >= date('$last_month') and (satut<>'annulé') )group by date(updated_at) order by date(updated_at) asc limit 30");

        $tickets_jour_sorties = Ticket::extract_date_and_number($tickets_jour_sorties);

        $jours_sorties = (json_encode($tickets_jour_sorties->date));
        $numbers_sorties = (json_encode($tickets_jour_sorties->numbers));


        /*comparaison today yesterday*/

        $yesterday = date('Y-m-d',strtotime("-1 days"));
        
        $today = date('Y-m-d');
        
        $date_debut = $request->date_debut;
        $date_fin = $request->date_fin;
        
        $nb_tickets_today=DB::select("select count(satut) as nb_ticket_today from tickets where (date(created_at) = date('$today') and (satut<>'annulé'))");
        
        $nb_tickets_today = ($nb_tickets_today[0]->nb_ticket_today);

        $nb_tickets_yesterday=DB::select("select count(satut) as nb_ticket_yesterday from tickets where (date(created_at) = date('$yesterday') and (satut<>'annulé'))");
        
        $nb_tickets_yesterday = ($nb_tickets_yesterday[0]->nb_ticket_yesterday);

        ($nb_tickets_yesterday==0) ? $pctg_ceation_ysterday_today = 0 : $pctg_ceation_ysterday_today=number_format((float)((($nb_tickets_today/$nb_tickets_yesterday)-1)*100), 1, '.', '');

       
        /*sorties */

        $nb_sorties_today=DB::select("select count(satut) as nb_sortie_today from tickets where (date(updated_at) = date('$today') and satut='sortie')");
        
        $nb_sorties_today = ($nb_sorties_today[0]->nb_sortie_today);
        
        $nb_sorties_yesterday=DB::select("select count(satut) as nb_sortie_yesterday from tickets where (date(updated_at) = date('$yesterday') and satut='sortie')");
        
        $nb_sorties_yesterday = ($nb_sorties_yesterday[0]->nb_sortie_yesterday);
        
        ($nb_sorties_yesterday==0) ? $pctg_sortie_ysterday_today = 0 : $pctg_sortie_ysterday_today=number_format((float)((($nb_sorties_today/$nb_sorties_yesterday)-1)*100), 1, '.', '');

        /* Livreur qte */
        
        $livreur_qte = DB::select("select s.id_livreur,l.email,p.nom as nomproduit,p.id as id_produit ,count(distinct(s.id_ticket)) as nb_tickets from  sorties s,livreurs l,tickets t,produits p where ((s.id_livreur=l.id) and (p.id=t.id_produit) and (s.id_ticket=t.id)) and(date(t.updated_at) between date('$date_debut') and date('$date_fin') ) group by s.id_livreur,l.email,p.nom,p.id order by s.id_livreur,l.email asc, nb_tickets desc");
        
        $produits = DB::select("select p.nom as nomproduit,count(distinct(s.id_ticket)) as nb_tickets from  sorties s,tickets t,produits p where ((p.id=t.id_produit) and (s.id_ticket=t.id)) and(date(t.updated_at) between date('$date_debut') and date('$date_fin') ) group by p.nom order by nb_tickets desc");

        $qte_vers_depot = DB::select("select p.id as id_produit,p.nom as nomproduit,p.id as id_produit ,count(distinct(t.id)) as nb_tickets from tickets t,produits p where (t.satut='vers_depot') and (p.id=t.id_produit) and(date(t.updated_at) between date('$date_debut') and date('$date_fin') ) group by p.nom,p.id order by p.nom asc");

        $qte_au_depot = DB::select("select p.id as id_produit, p.nom as nomproduit,p.id as id_produit ,count(distinct(t.id)) as nb_tickets from tickets t,produits p where (t.satut='au_depot') and (p.id=t.id_produit) and(date(t.updated_at) between date('$date_debut') and date('$date_fin') ) group by p.nom,p.id order by p.nom asc");
        
        return view('Statistiques.stat',compact('qte_au_depot','qte_vers_depot','date_fin','date_debut','jours_sorties','numbers_sorties','jours_1','numbers_1','pctg_ceation_ysterday_today','nb_tickets_today','pctg_sortie_ysterday_today','nb_sorties_today','livreur_qte','today','produits'));

        // code...
    }


    public function recevoir(Request $request)
    {
        
        if(auth()->guard('admin')->check()){$acteur= (Auth::guard('admin')->user()->email);} 
        if(auth()->guard('depot')->check()){$acteur =(Auth::guard('depot')->user()->email);}
        if(auth()->guard('production')->check()){$acteur= (Auth::guard('production')->user()->email);}
        
        
        $datas=($request->all());
        
        unset($datas['_token']);
        
        $ids_produits = array_keys($datas);
        $qtes = array_values($datas);
        
        $i=0;
        foreach($ids_produits as $ids_produit)
        {
            
            $id_prod = (int)(substr($ids_produit,10));
            $qte =(int)$qtes[$i];
            
            $tickets = DB::select("select * from tickets t where (t.id_produit=$id_prod and t.satut = 'vers_depot') order by updated_at desc limit $qte");
            
            foreach($tickets as $ticket)
            {
                
                $id_ticket = $ticket->id;
                $ticket = Ticket::find($id_ticket);
                $ticket->satut = 'au_depot';
                $ticket->maj = $acteur;
                $ticket->updated_at=date("Y-m-d H:i:s");
                $ticket->save();
                
                
            }
            
            $i++;
        }
        
        return redirect('/statistiques');
    }


    public function rapport_speciaux()
    {

        $commandes_rejete = DB::select("select count(*) as nb 
        from commandes c where (c.statut = 'rejeté')");

        $commandes_rejete_mois = DB::select("select count(*) as nb 
        from commandes c where (c.statut = 'rejeté') and (extract(month from c.updated_at) = month(now()) )");

        
        $commandes_annule = DB::select("select count(*) as nb 
        from commandes c where (c.statut = 'annulé')");

        $commandes_annule_mois = DB::select("select count(*) as nb 
        from commandes c where (c.statut = 'annulé') and (extract(month from c.updated_at) = month(now()) )");



        $commandes_en_attente = DB::select("select count(*) as nb 
        from commandes c where (c.statut = 'en attente')");

        $commandes_en_attente_mois = DB::select("select count(*) as nb 
        from commandes c where (c.statut = 'en attente') and (extract(month from c.updated_at) = month(now()) )");



        $commandes_valide = DB::select("select count(*) as nb 
        from commandes c where (c.statut = 'validé')");

        $commandes_valide_mois = DB::select("select count(*) as nb 
        from commandes c where (c.statut = 'validé') and (extract(month from c.updated_at) = month(now()) )");



        return view('Statistiques.rapport_speciaux',compact('commandes_rejete','commandes_annule','commandes_en_attente','commandes_valide','commandes_rejete_mois','commandes_annule_mois','commandes_en_attente_mois','commandes_valide_mois'));
        // code...
    }    


    //
}
